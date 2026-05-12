<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SyncCommand extends Command
{
    protected $signature = 'sync
        {--m|message= : Commit/tag message}
        {--b|bump=patch : Version bump: major, minor, patch, ma, mi, p}';

    protected $description = 'Commit changes, bump app version, tag it, and push to GitHub';

    public function handle(): int
    {
        $message = $this->option('message');
        $bump = $this->normalizeBump($this->option('bump'));

        if (!$message) {
            $this->error('A message is required.');
            $this->line('Example: php artisan sync -m "Updated auth" -b minor');

            return self::FAILURE;
        }

        if (!$bump) {
            $this->error('Invalid bump type. Use major, minor, patch, ma, mi, or p.');

            return self::FAILURE;
        }

        $status = trim(shell_exec('git status --porcelain') ?? '');

        if ($status === '') {
            $this->warn('No changes detected.');

            return self::SUCCESS;
        }

        $currentVersion = $this->getCurrentVersion();
        $newVersion = $this->bumpVersion($currentVersion, $bump);

        $this->info("Current version: v{$currentVersion}");
        $this->info("New version: v{$newVersion}");

        if (!$this->confirm('Continue?')) {
            $this->warn('Sync cancelled.');

            return self::SUCCESS;
        }

        try {
            $this->runShellCommand('git add .');
            $this->runShellCommand('git commit -m ' . escapeshellarg($message));
            $this->runShellCommand('git tag -a v' . $newVersion . ' -m ' . escapeshellarg($message));
            $this->runShellCommand('git push');
            $this->runShellCommand('git push origin v' . $newVersion);

            $this->setCurrentVersion($newVersion);

            $this->info("Synced successfully as v{$newVersion}");

            return self::SUCCESS;
        } catch (\Throwable $e) {
            $this->error($e->getMessage());

            return self::FAILURE;
        }
    }

    private function getCurrentVersion(): string
    {
        $version = DB::table('configs')
            ->where('key', 'version')
            ->value('value');

        if (!$version) {
            DB::table('configs')->insert([
                'key' => 'version',
                'value' => '0.0.0',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return '0.0.0';
        }

        return $version;
    }

    private function setCurrentVersion(string $version): void
    {
        DB::table('configs')->updateOrInsert(
            ['key' => 'version'],
            [
                'value' => $version,
                'updated_at' => now(),
            ]
        );
    }

    private function normalizeBump(?string $bump): ?string
    {
        return match ($bump) {
            'major', 'ma' => 'major',
            'minor', 'mi' => 'minor',
            'patch', 'p' => 'patch',
            default => null,
        };
    }

    private function bumpVersion(string $currentVersion, string $bump): string
    {
        $parts = explode('.', $currentVersion);

        $major = (int) ($parts[0] ?? 0);
        $minor = (int) ($parts[1] ?? 0);
        $patch = (int) ($parts[2] ?? 0);

        return match ($bump) {
            'major' => ($major + 1) . '.0.0',
            'minor' => $major . '.' . ($minor + 1) . '.0',
            'patch' => $major . '.' . $minor . '.' . ($patch + 1),
        };
    }

    private function runShellCommand(string $command): void
    {
        $this->line("> {$command}");

        exec($command . ' 2>&1', $output, $code);

        foreach ($output as $line) {
            $this->line($line);
        }

        if ($code !== 0) {
            throw new \RuntimeException("Command failed: {$command}");
        }
    }
}
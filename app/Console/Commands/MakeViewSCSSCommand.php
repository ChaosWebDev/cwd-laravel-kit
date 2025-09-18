<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class MakeViewSCSSCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:vs {name} {--f|force : Overwrite files if they already exist}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new blank Blade view and SCSS file. Does not create Livewire Components.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $name = $this->argument('name');

        $resourcesPath = base_path('resources');

        // Break into directory and filename parts
        $fileName = Str::snake(basename($name)); // e.g. "Dashboard" -> "dashboard"
        $subPath = str_contains($name, '/')
            ? dirname($name)
            : '';

        // Build file paths
        $bladePath = $resourcesPath . '/views/' . ($subPath ? $subPath . '/' : '') . $fileName . '.blade.php';
        $scssPath = $resourcesPath . '/styles/views/' . ($subPath ? $subPath . '/' : '') . $fileName . '.scss';
        $collector = $resourcesPath . '/styles/views/views.scss';

        // Ensure directories exist
        if (!is_dir(dirname($bladePath))) {
            mkdir(dirname($bladePath), 0755, true);
        }
        if (!is_dir(dirname($scssPath))) {
            mkdir(dirname($scssPath), 0755, true);
        }

        // Blade file
        if (!file_exists($bladePath) || $this->option('force')) {
            file_put_contents($bladePath, ''); // blank file
            $this->info("Created: " . str_replace(base_path() . '/', '', $bladePath));
        } else {
            $this->warn("Already exists: " . str_replace(base_path() . '/', '', $bladePath));
        }

        // SCSS file
        if (!file_exists($scssPath) || $this->option('force')) {
            file_put_contents($scssPath, '');
            $this->info("Created: " . str_replace(base_path() . '/', '', $scssPath));
        } else {
            $this->warn("Already exists: " . str_replace(base_path() . '/', '', $scssPath));
        }

        // Auto-append import to collector (views.scss)
        $importPath = str_replace($resourcesPath . '/styles/', '', $scssPath); // relative path from styles/
        $importLine = "@import '{$importPath}';";

        if (file_exists($collector)) {
            $collectorContent = file_get_contents($collector);
            if (!str_contains($collectorContent, $importLine)) {
                file_put_contents($collector, $importLine . PHP_EOL, FILE_APPEND);
                $this->info("Updated: " . str_replace(base_path() . '/', '', $collector));
            } else {
                $this->warn("Already imported in: " . str_replace(base_path() . '/', '', $collector));
            }
        } else {
            // If views.scss doesn’t exist, create it fresh
            file_put_contents($collector, $importLine . PHP_EOL);
            $this->info("Created collector: " . str_replace(base_path() . '/', '', $collector));
        }
    }
}

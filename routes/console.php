<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Artisan::command('make:mms {name}', function ($name) {
    Artisan::call('make:model', [
        'name' => $name,
        '-m' => true, // migration
        '-s' => true, // seeder
    ]);

    $this->info(Artisan::output());
})->purpose('Create a Model, Migration, and Seeder');
<?php

use Illuminate\Support\Facades\Route;

require_once __DIR__ . "/_dev.php";

Route::livewire('/', 'pages::dashboard')->name('dashboard');
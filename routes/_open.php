<?php

use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

/**
 * This routing file is meant for routes that do not authentication
 * or guest middleware.
 */

Route::get('/',Dashboard::class)->name('dashboard');

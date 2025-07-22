<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

/**
 * Developer routes
 */


if (app()->environment('local')) {
    Route::get('/clear', function () {
        Artisan::call('optimize:clear');
        Auth::logout();
        return redirect()->route('dashboard');
    });
}

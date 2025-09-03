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
        if (Auth::check())
            Auth::logout();
        return redirect()->route('dashboard');
    });
}

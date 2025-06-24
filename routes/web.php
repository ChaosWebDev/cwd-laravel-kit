<?php

use App\Livewire\Dashboard;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

// ! GUEST ROUTES ! //
Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});

// ! OPEN ROUTES ! //
Route::get('/', Dashboard::class)->name('dashboard');

// ! AUTHENTICATED ROUTES ! //
Route::middleware('auth')->group(function () {
    //
});







// ! DEBUGGING DEVELOPMENT ROUTES ! //
if (app()->environment('local')) {
    Route::get('/clear', function () {
        Artisan::call('optimize:clear');
        Auth::logout();
        return redirect()->route('dashboard');
    });
}

<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::get('/', fn () => auth()->check()
    ? redirect()->route('dashboard')
    : redirect()->route('login'))
    ->name('home');

$authenticatedMiddleware = Features::enabled(Features::emailVerification())
    ? ['auth', 'verified']
    : ['auth'];

Route::middleware($authenticatedMiddleware)->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::view('/patterns', 'patterns')->name('patterns');
});

require __DIR__.'/settings.php';

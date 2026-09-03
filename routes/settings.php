<?php

use App\Livewire\Settings\Profile;
use App\Livewire\Settings\Security;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->prefix('settings')->group(function () {
    Route::get('/profile', Profile::class)->name('profile.edit');
    Route::get('/security', Security::class)->name('security.edit');
});

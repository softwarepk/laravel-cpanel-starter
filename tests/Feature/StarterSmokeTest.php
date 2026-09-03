<?php

use App\Models\User;
use Illuminate\Support\Facades\Artisan;

test('redirects guests to login', function () {
    $this->get('/')->assertRedirect(route('login'));
});

test('renders the login page', function () {
    $this->get('/login')
        ->assertOk()
        ->assertSee('Log in to your account');
});

test('shows the dashboard to a verified user', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get('/dashboard')
        ->assertOk()
        ->assertSee('Starter Dashboard');
});

test('shows the pattern gallery to a verified user', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get('/patterns')
        ->assertOk()
        ->assertSee('UI Pattern Gallery');
});

test('shows account settings to an authenticated user', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get('/settings/profile')
        ->assertOk()
        ->assertSee('Profile');
});

test('registers the starter initializer command', function () {
    expect(Artisan::all())->toHaveKey('starter:install');
});

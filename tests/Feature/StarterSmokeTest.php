<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('redirects guests to login', function () {
    $this->get('/')->assertRedirect(route('login'));
});

it('renders the login page', function () {
    $this->get('/login')
        ->assertOk()
        ->assertSee('Log in to your account');
});

it('shows the dashboard to a verified user', function () {
    $this->withoutExceptionHandling();

    $user = User::factory()->create();

    $this->actingAs($user)
        ->get('/dashboard')
        ->assertOk()
        ->assertSee('Starter Dashboard');
});

it('shows the pattern gallery to a verified user', function () {
    $this->withoutExceptionHandling();

    $user = User::factory()->create();

    $this->actingAs($user)
        ->get('/patterns')
        ->assertOk()
        ->assertSee('UI Pattern Gallery');
});

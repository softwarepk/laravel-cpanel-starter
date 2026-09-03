<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('redirects guests to login', function () {
    $this->get('/')->assertRedirect(route('login'));
});

it('shows the dashboard to a verified user', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get('/dashboard')
        ->assertOk()
        ->assertSee('Starter Dashboard');
});

it('shows the pattern gallery to a verified user', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get('/patterns')
        ->assertOk()
        ->assertSee('UI Pattern Gallery');
});

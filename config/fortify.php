<?php

use Laravel\Fortify\Features;

$features = [
    env('FORTIFY_REGISTRATION', true) ? Features::registration() : null,
    Features::resetPasswords(),
    env('FORTIFY_EMAIL_VERIFICATION', true) ? Features::emailVerification() : null,
];

return [
    'guard' => 'web',
    'middleware' => ['web'],
    'auth_middleware' => 'auth',
    'passwords' => 'users',
    'username' => 'email',
    'email' => 'email',
    'lowercase_usernames' => true,
    'home' => '/dashboard',
    'prefix' => '',
    'domain' => null,
    'views' => true,
    'features' => array_values(array_filter($features)),
];

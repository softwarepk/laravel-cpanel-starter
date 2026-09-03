<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment('Build the smallest useful thing, review it in the browser, then improve it.');
})->purpose('Display a starter-project reminder');

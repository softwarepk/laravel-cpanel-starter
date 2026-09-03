<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        if (app()->environment('local') && User::query()->doesntExist()) {
            User::factory()->create([
                'name' => 'Starter User',
                'email' => 'starter@example.com',
            ]);
        }
    }
}

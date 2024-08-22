<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => Hash::make('12345678'),
            ]
        );
       
        User::firstOrCreate(
            ['name' => 'Administrator'],
            [
                'email' => 'admin@example.com',
                'password' => Hash::make('Admin1234'),
            ]
        );
    }
}

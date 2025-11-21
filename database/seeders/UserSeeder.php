<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@topcool.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
            'role' => 'admin',
        ]);

        // Create test user
        User::create([
            'name' => 'beverline omondi',
            'email' => 'beverline@example.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
            'role' => 'customer',
        ]);

        
    }
}

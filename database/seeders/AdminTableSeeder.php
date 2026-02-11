<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin')->insert([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Admin123*'), // Use bcrypt() or Hash::make() to hash passwords
            'remember_token' => null, // You can generate a remember token if needed
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

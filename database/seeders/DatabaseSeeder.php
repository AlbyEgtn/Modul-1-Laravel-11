<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat user
        User::create([
            'name' => 'user1',
            'email' => 'user@gmail.com',
            'password' => bcrypt('00000000'),
            'point' => 10000,
        ]);

        // Membuat admin
        Admin::create([
            'name' => 'admin',
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('00000000'),
        ]);
    }
}
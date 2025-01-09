<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //User::factory()->create([
        //    'name' => 'Test User',
        //    'email' => 'test@example.com',
        //]);
        // Seed data untuk admin
        Admin::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'), // Gunakan bcrypt untuk hashing password
            'phone_number' => '081234567890',
        ]);


        \App\Models\Mobil::factory(5)->create();
        \App\Models\Customer::factory(5)->create();
        \App\Models\Daftar::factory(5)->create();
    }
}

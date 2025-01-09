<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(), // Menghasilkan nama acak
            'email' => $this->faker->unique()->safeEmail(), // Menghasilkan email unik
            'password' => Hash::make('password123'), // Menggunakan hashing untuk password default
            'phone_number' => $this->faker->phoneNumber(), // Menghasilkan nomor telepon acak
        ];
    }
}

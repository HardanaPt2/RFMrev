<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mobil>
 */
class MobilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->unique(true); // Reset unique scope
        return [
            'name' => $this->faker->unique()->randomElement(['Toyota Innova', 'Toyota Avanza', 'Toyota Terios']),
            'color' => $this->faker->randomElement(['Hitam', 'Putih', 'Abu-abu']),
            'seating_capacity' => $this->faker->numberBetween(6, 8),
            'daily_rental_price' => $this->faker->randomElement(['Rp. 300.000', 'Rp. 290.000', 'Rp. 250.000']),
        ];
    }
}

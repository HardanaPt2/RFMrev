<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Daftar>
 */
class DaftarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $idCustomer = \App\Models\Customer::pluck('id')->toArray();
        $idMobil = \App\Models\Mobil::pluck('id')->toArray();
        return [
            'customer_id' => $this->faker->randomElement($idCustomer),
            'tanggal_sewa' => $this->faker->date(),
            'mobil_id' => $this->faker->randomElement($idMobil),
            'keterangan' => $this->faker->sentence(),

        ];
    }
}

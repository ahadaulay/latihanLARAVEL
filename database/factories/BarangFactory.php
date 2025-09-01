<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang' => $this->faker->words(2, true), // contoh: "Laptop ASUS"
            'harga'       => $this->faker->numberBetween(100000, 20000000), // harga antara 100rb - 20jt
            'stok'        => $this->faker->numberBetween(1, 100), // stok random 1-100
            'tanggal'     => $this->faker->date(), // tanggal random
        ];
    }
}

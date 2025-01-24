<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\wisata>
 */
class wisataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "id_mobil" => 1,
            "nama" => 'Paket A',
            "harga"    => '300000',
            "wilayah" => 'Yogyakarta',
            "include" => ' Mobil + Driver, makanan makanan makanan makanan makanan makanan makanan Tiket Wisata, Makan Siang, BBM durasi 12 jam ',
            "foto" => '1.webp'
        ];
    }
}

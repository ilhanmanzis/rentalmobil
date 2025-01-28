<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\mobil>
 */
class mobilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nama" => "Toyota Avanza",
            "harga_lepas" => '300000',
            "harga_driver" => '500000',
            "jam_mulai"    => '07:00',
            "jam_selesai" => '21:00',
            "pintu"    => '2',
            "penumpang"    => '5',
            "wilayah" => 'Yogyakarta',
            "include" => 'Mobil, BBM durasi 12 jam',
            "foto"    => '1.webp'
        ];
    }
}

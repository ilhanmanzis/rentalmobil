<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class motorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nama' => 'Vario 2021',
            "harga"    => '100000',
            "jam_mulai"    => '07:00',
            "jam_selesai" => '21:00',
            "helm" => '2',
            "wilayah" => 'Yogyakarta',
            "include" => ' Motor, BBM 4 Liter, Lepas Kunci',
            "foto"    => '1.jpg'
        ];
    }
}

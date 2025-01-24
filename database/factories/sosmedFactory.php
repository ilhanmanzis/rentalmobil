<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\sosmed>
 */
class sosmedFactory extends Factory
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
            'wa' => '+6287871290696',
            'url_wa' => 'https://google.com',
            'fb' => 'ilhan manzis',
            'url_fb' => 'https://google.com',
            'ig' => 'janggarfals',
            'url_ig' => 'https://google.com',
            'tt' => 'janggarfals',
            'url_tt' => 'https://google.com',
            'x' => 'janggarfals',
            'url_x' => 'https://google.com',
        ];
    }
}

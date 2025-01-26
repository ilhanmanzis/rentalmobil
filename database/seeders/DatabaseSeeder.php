<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Mobil;
use App\Models\Motor;
use App\Models\Profile;
use App\Models\Sosmed;
use App\Models\User;
use App\Models\Wisata;
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

        User::factory()->create();
        Banner::factory()->count(3)->create();
        Mobil::factory()->count(1)->create();
        Motor::factory()->count(1)->create();
        Wisata::factory()->count(1)->create();
        Sosmed::factory()->create();
        Profile::factory()->create();
    }
}

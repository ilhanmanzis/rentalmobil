<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\profile>
 */
class profileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => 'Pralim Trans',
            'slogan' => 'Solusi Rental Mobil Motor Cepat & Aman',
            'banner1' => 'Butuh Kendaraan Di Yogyakarta?',
            'banner2' => 'Rental Mobil & Motor Terlengkap Di Yogyakarta!',
            'banner3' => 'Selamat datang di Pralim Trans, solusi terbaik untuk kebutuhan transportasi dan perjalanan wisata Anda. Kami menyediakan layanan rental mobil & motor, paket wisata lengkap dengan driver profesional, dan fasilitas terbaik untuk pengalaman perjalanan yang tak terlupakan.',
            'sekilas_tittle' => 'Kami berkomitmen untuk memberikan pelayanan terbaik',
            'sekilas' => 'adalah perusahaan transportasi yang berbasis di Yogyakarta, menawarkan layanan rental mobil dan motor yang lengkap serta paket wisata menarik untuk menjelajahi keindahan kota dan sekitarnya. Kami menyediakan armada kendaraan yang terawat dengan baik dan driver profesional yang siap menemani perjalanan Anda dengan aman dan nyaman.',
            'tentang' => 'Selamat datang di Pralim Trans, mitra terpercaya Anda dalam perjalanan di Yogyakarta dan sekitarnya. Kami adalah perusahaan transportasi yang berkomitmen memberikan layanan terbaik untuk kebutuhan rental mobil, motor, serta paket wisata yang dirancang khusus bagi Anda.',
            'tentang_mengapa' => 'Pralim Trans menawarkan armada mobil dan motor yang lengkap, mulai dari city car hingga kendaraan keluarga, serta motor untuk perjalanan singkat maupun panjang. Kami juga menyediakan paket wisata menarik ke destinasi populer seperti Candi Borobudur, Pantai Parangtritis, dan wisata kuliner Yogyakarta. Dengan driver profesional yang berpengalaman dan berkomitmen memberikan pelayanan terbaik, perjalanan Anda dijamin nyaman dan aman. Selain itu, kami menawarkan harga yang kompetitif tanpa mengurangi kualitas layanan, serta proses pemesanan yang cepat dengan dukungan pelanggan yang selalu siap membantu kapan saja.',
            'logo' => 'logo.png',
            'alamat' => 'Jl. Pramuka No.5B, Pandeyan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55161'
        ];
    }
}

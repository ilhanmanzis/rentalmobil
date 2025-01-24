<?php

use App\Models\Mobil;
use App\Models\Motor;
use App\Models\Sosmed;
use App\Models\Wisata;
use App\Models\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'nama' => 'ilhan manzis',
        'title' => 'Home',
        'profile' => Profile::find('1'),
        'sosmed' => Sosmed::find('1'),
        'wisatas' => Wisata::all(),
        'motors' => Motor::all(),
        'mobils' => Mobil::all(),
    ]);
});
Route::get('/dashboard', function () {
    return view('dashboard', [
        'nama' => 'halaman dashboard',
        'title' => 'Dashboard'

    ]);
});
Route::get('/kendaraan', function () {
    return view('kendaraan', [
        'nama' => 'halaman kendaraan',
        'title' => 'Kendaraan',
        'motors' => Motor::all(),
        'mobils' => Mobil::all(),
    ]);
});
Route::get('/wisata', function () {
    return view('wisata', [
        'nama' => 'halaman wisata',
        'title' => 'Paket Wisata',
        'wisatas' => Wisata::all()
    ]);
});
Route::get('/tentang', function () {
    return view('tentang', [
        'nama' => 'halaman tentang',
        'title' => 'Tentang Kami',
        'profile' => Profile::find('1')
    ]);
});
Route::get('/kontak', function () {
    return view('kontak', [
        'nama' => 'halaman kontak',
        'title' => 'Kontak',
        'profile' => Profile::find('1'),
        'sosmed' => Sosmed::find('1')
    ]);
});

Route::get('/admin', function () {
    return view('admin/dashboard');
});

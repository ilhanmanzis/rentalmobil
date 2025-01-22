<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'nama' => 'ilhan manzis',
        'title' => 'Home'
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
        'title' => 'Kendaraan'

    ]);
});
Route::get('/wisata', function () {
    return view('wisata', [
        'nama' => 'halaman wisata',
        'title' => 'Paket Wisata'

    ]);
});
Route::get('/tentang', function () {
    return view('tentang', [
        'nama' => 'halaman tentang',
        'title' => 'Tentang Kami'

    ]);
});
Route::get('/kontak', function () {
    return view('kontak', [
        'nama' => 'halaman kontak',
        'title' => 'Kontak'

    ]);
});

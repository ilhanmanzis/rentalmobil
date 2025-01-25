<?php

use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\MobilController;
use App\Http\Controllers\admin\MotorController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\SosmedController;
use App\Http\Controllers\admin\WisataController;
use App\Http\Controllers\public\Home;
use App\Http\Controllers\public\Kendaraan;
use App\Http\Controllers\public\Kontak;
use App\Http\Controllers\public\Tentang;
use App\Http\Controllers\public\WisataHome;
use Illuminate\Support\Facades\Route;

Route::get('/', [Home::class, 'index']);
Route::get('/kendaraan', [Kendaraan::class, 'index']);
Route::get('/wisata', [WisataHome::class, 'index']);
Route::get('/tentang', [Tentang::class, 'index']);
Route::get('/kontak', [Kontak::class, 'index']);

Route::get('/admin', [DashboardController::class, 'index']);

//wisata
Route::get('/admin/wisata', [WisataController::class, 'index']);
Route::get('/admin/wisata/create', [WisataController::class, 'create']);
Route::post('/admin/wisata/save', [WisataController::class, 'store'])->name('wisata.save');
Route::get('/admin/wisata/edit/{id}', [WisataController::class, 'show']);
Route::put('/admin/wisata/edit/{id}', [WisataController::class, 'update'])->name('wisata.edit');
Route::delete('/admin/wisata/delete/{id}', [WisataController::class, 'destroy'])->name('wisata.delete');

//mobil
Route::get('/admin/mobil', [MobilController::class, 'index']);
Route::get('/admin/mobil/create', [MobilController::class, 'create']);
Route::post('/admin/mobil/save', [MobilController::class, 'store'])->name('mobil.save');
Route::get('/admin/mobil/edit/{id}', [MobilController::class, 'show']);
Route::put('/admin/mobil/edit/{id}', [MobilController::class, 'update'])->name('mobil.edit');
Route::delete('/admin/mobil/delete/{id}', [MobilController::class, 'destroy'])->name('mobil.delete');

//motor
Route::get('/admin/motor', [MotorController::class, 'index']);
Route::get('/admin/motor/create', [MotorController::class, 'create']);
Route::post('/admin/motor/save', [MotorController::class, 'store'])->name('motor.save');
Route::get('/admin/motor/edit/{id}', [MotorController::class, 'show']);
Route::put('/admin/motor/edit/{id}', [MotorController::class, 'update'])->name('motor.edit');
Route::delete('/admin/motor/delete/{id}', [MotorController::class, 'destroy'])->name('motor.delete');

//banner
Route::get('/admin/banner', [BannerController::class, 'index']);
Route::get('/admin/banner/create', [BannerController::class, 'create']);
Route::post('/admin/banner/save', [BannerController::class, 'store'])->name('banner.save');
Route::get('/admin/banner/edit/{id}', [BannerController::class, 'show']);
Route::put('/admin/banner/edit/{id}', [BannerController::class, 'update'])->name('banner.edit');
Route::delete('/admin/banner/delete/{id}', [BannerController::class, 'destroy'])->name('banner.delete');

Route::get('/admin/sosmed', [SosmedController::class, 'index']);
Route::put('/admin/sosmed/edit/{id}', [SosmedController::class, 'update'])->name('sosmed.edit');

Route::get('/admin/setting', [SettingController::class, 'index']);
Route::put('/admin/setting/edit/{id}', [SettingController::class, 'update'])->name('setting.edit');

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
use App\Models\Banner;
use App\Models\Mobil;
use App\Models\Motor;
use App\Models\Sosmed;
use App\Models\Wisata;
use App\Models\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', [Home::class, 'index']);
Route::get('/kendaraan', [Kendaraan::class, 'index']);
Route::get('/wisata', [WisataHome::class, 'index']);
Route::get('/tentang', [Tentang::class, 'index']);
Route::get('/kontak', [Kontak::class, 'index']);

Route::get('/admin', [DashboardController::class, 'index']);
Route::get('/admin/wisata', [WisataController::class, 'index']);
Route::get('/admin/mobil', [MobilController::class, 'index']);
Route::get('/admin/motor', [MotorController::class, 'index']);
Route::get('/admin/banner', [BannerController::class, 'index']);
Route::get('/admin/sosmed', [SosmedController::class, 'index']);
Route::get('/admin/setting', [SettingController::class, 'index']);

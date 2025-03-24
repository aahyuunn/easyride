<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RiwayatPesananController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DetailProdukController;
use App\Http\Controllers\PengaturanController;

Route::get('/login', [LoginController::class, 'index']);
Route::get('/homepage', [HomepageController::class, 'index']);
Route::get('/daftar', [DaftarController::class, 'index']);
Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/riwayat-pesanan', [RiwayatPesananController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/detail-produk', [DetailProdukController::class, 'index']);
Route::get('/pengaturan', [PengaturanController::class, 'index']);


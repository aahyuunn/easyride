<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DetailProdukController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginController;

Route::get('/daftar', [DaftarController::class, 'index']);
Route::get('/detail-produk', [DetailProdukController::class, 'index']);
Route::get('/homepage', [HomepageController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DetailProdukController;

Route::get('/daftar', [DaftarController::class, 'index']);
Route::get('/detail-produk', [DetailProdukController::class, 'index']);

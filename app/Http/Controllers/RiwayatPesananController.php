<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatPesananController extends Controller
{
    public function index()
    {
        return view('riwayat-pesanan');
    }
}

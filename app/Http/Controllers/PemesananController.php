<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;

class PemesananController extends Controller
{
    public function pemesanans()
    {

        $pemesanan = Pemesanan::get();

        return view('pesanan', compact('pemesanan'));
    }
}

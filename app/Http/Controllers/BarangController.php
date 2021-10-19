<?php

namespace App\Http\Controllers;

use App\Models\Barang;

class BarangController extends Controller
{
    public function barang()
    {

        $barang = Barang::get();

        return view('barang', compact('barang'));
    }
}

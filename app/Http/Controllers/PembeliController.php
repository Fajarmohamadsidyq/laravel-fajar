<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;

class PembeliController extends Controller
{
    public function beli()
    {

        $belian = Pembeli::get();

        return view('pembeli', compact('belian'));
    }
}

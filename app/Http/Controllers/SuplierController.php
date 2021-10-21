<?php

namespace App\Http\Controllers;

use App\Models\Suplier;

class SuplierController extends Controller
{
    public function supplier()
    {

        $supp = Suplier::get();

        return view('suplier', compact('supp'));
    }
}

<?php

namespace App\Http\Controllers;

class MyController extends Controller
{
    public function tampilkan()
    {

        $nama = "Fajar Mohamad SIdyq";
        $umur = "17 Tahun";

        return view('sample', compact('nama', 'umur'));
    }
}

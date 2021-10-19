<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['id_barang' => '001', 'nama' => 'Oura', 'varian' => 'Coklat', 'harga_beli' => 3000, 'harga_jual' => 25000],
            ['id_barang' => '002', 'nama' => 'Wann', 'varian' => 'Bluebarry', 'harga_beli' => 2500, 'harga_jual' => 4000],
            ['id_barang' => '003', 'nama' => 'Xinn', 'varian' => 'Keju', 'harga_beli' => 5000, 'harga_jual' => 15000],
            ['id_barang' => '004', 'nama' => 'Leomurphy', 'varian' => 'Stowberry', 'harga_beli' => 4500, 'harga_jual' => 7000],
            ['id_barang' => '005', 'nama' => 'R E K T', 'varian' => 'Pandan', 'harga_beli' => 6500, 'harga_jual' => 12000],
        ];
        // masukan data ke database
        DB::table('barang')->insert($barang);

    }
}

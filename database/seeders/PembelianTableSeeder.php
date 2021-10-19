<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembelianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $beli = [
            ['nama_pembelian' => 'Oura', 'nama_barang' => 'Milo', 'nama_supplier' => 'Lemon', 'qty' => 'Sangat Baik', 'tgl' => '2021-01-01'],
            ['nama_pembelian' => 'Wann', 'nama_barang' => 'Hilo', 'nama_supplier' => 'Sanz', 'qty' => 'Sangat Baik', 'tgl' => '2021-02-02'],
            ['nama_pembelian' => 'Xinn', 'nama_barang' => 'Zee', 'nama_supplier' => 'Udil', 'qty' => 'Sangat Baik', 'tgl' => '2021-03-03'],
            ['nama_pembelian' => 'Leomurphy', 'nama_barang' => 'Susu Bendera', 'nama_supplier' => 'R7', 'qty' => 'Sangat Baik', 'tgl' => '2021-04-04'],
            ['nama_pembelian' => 'R E K T', 'nama_barang' => 'Dancow', 'nama_supplier' => 'Clay', 'qty' => 'Sangat Baik', 'tgl' => '2021-05-05'],
        ];
        // masukan data ke database
        DB::table('pembelian')->insert($beli);

    }
}

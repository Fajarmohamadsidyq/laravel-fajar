<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PesananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['nama_pesanan' => 'Minuman', 'nama_pelanggan' => 'Oura', 'nama_barang' => 'MILO', 'qty' => 'Sangat Baik', 'tgl_pesan' => '2021-01-01'],
            ['nama_pesanan' => 'Minuman', 'nama_pelanggan' => 'Wann', 'nama_barang' => 'Hilo', 'qty' => 'Sangat Baik', 'tgl_pesan' => '2021-02-02'],
            ['nama_pesanan' => 'Minuman', 'nama_pelanggan' => 'Xinn', 'nama_barang' => 'Zee', 'qty' => 'Sangat Baik', 'tgl_pesan' => '2021-03-03'],
            ['nama_pesanan' => 'Minuman', 'nama_pelanggan' => 'Leomurphy', 'nama_barang' => 'Susu Bendera', 'qty' => 'Sangat Baik', 'tgl_pesan' => '2021-04-04'],
            ['nama_pesanan' => 'Minuman', 'nama_pelanggan' => 'R E K T', 'nama_barang' => 'Dancow', 'qty' => 'Sangat Baik', 'tgl_pesan' => '2025-05-05'],
        ];
        // masukan data ke database
        DB::table('pesanan')->insert($barang);

    }
}

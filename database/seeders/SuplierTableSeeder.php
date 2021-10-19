<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SuplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $beli = [
            ['nama_supplier' => 'Lemon', 'nama' => 'Lemon', 'alamat' => 'Jln.M Tohha', 'kode_pos' => 2121, 'kota' => 'Bandung'],
            ['nama_supplier' => 'Sanz', 'nama' => 'Sanz', 'alamat' => 'Jln.Arcamanik', 'kode_pos' => 3131, 'kota' => 'Jakarta'],
            ['nama_supplier' => 'Udil', 'nama' => 'Udil', 'alamat' => 'Jln.Cibiru', 'kode_pos' => 4141, 'kota' => 'Solo'],
            ['nama_supplier' => 'R7', 'nama' => 'R7', 'alamat' => 'Jln.Kopo', 'kode_pos' => 5151, 'kota' => 'Banten'],
            ['nama_supplier' => 'Clay', 'nama' => 'Clay', 'alamat' => 'Jln.Nata Endah', 'kode_pos' => 6161, 'kota' => 'Tanggerang'],
        ];
        // masukan data ke database
        DB::table('suplier')->insert($beli);

    }
}

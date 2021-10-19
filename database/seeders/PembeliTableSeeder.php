<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembeliTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $beli = [
            ['nama_pembeli' => 'Oura', 'nama' => 'Oura', 'jk' => 'Laki-laki', 'alamat' => 'Jln.Curug Candung', 'kode_pos' => 2121, 'kota' => 'Bandung', 'tgl_lahir' => '2004-03-07'],
            ['nama_pembeli' => 'Wann', 'nama' => 'Wann', 'jk' => 'Laki-laki', 'alamat' => 'Jln.Cibiru', 'kode_pos' => 3131, 'kota' => 'Jakarta', 'tgl_lahir' => '2001-05-07'],
            ['nama_pembeli' => 'Xinn', 'nama' => 'Xinn', 'jk' => 'Laki-laki', 'alamat' => 'Jln.Ciburuy', 'kode_pos' => 4141, 'kota' => 'Solo', 'tgl_lahir' => '1999-03-06'],
            ['nama_pembeli' => 'Leomurphy', 'nama' => 'Leomurphy', 'jk' => 'Laki-laki', 'alamat' => 'Jln.Kopo', 'kode_pos' => 5151, 'kota' => 'Tanggerang', 'tgl_lahir' => '1996-04-01'],
            ['nama_pembeli' => 'R E K T', 'nama' => 'R E K T', 'jk' => 'Laki-laki', 'alamat' => 'Jln.Nata Endah', 'kode_pos' => 6161, 'kota' => 'Banten', 'tgl_lahir' => '1999-03-02'],
        ];
        // masukan data ke database
        DB::table('pembeli')->insert($beli);

    }
}

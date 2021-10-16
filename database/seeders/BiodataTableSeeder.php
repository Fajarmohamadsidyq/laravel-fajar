<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BiodataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bio = [
            ['nama' => 'Marquez', 'ttl' => '2001-01-01', 'jk' => 'Laki-laki', 'alamat' => 'Bandung', 'agama' => 'Islam', 'usia' => 17, 'hobi' => 'Belajar'],
            ['nama' => 'Alex', 'ttl' => '2002-012-02', 'jk' => 'Laki-laki', 'alamat' => 'Spanyol', 'agama' => 'Islam', 'usia' => 18, 'hobi' => 'Ngeghosting'],
            ['nama' => 'Abu Tholib', 'ttl' => '2003-03-03', 'jk' => 'Laki-laki', 'alamat' => 'Bandung', 'agama' => 'Islam', 'usia' => 19, 'hobi' => 'Ngaji'],
            ['nama' => 'Kim Jong Unchhhhh', 'ttl' => '2004-04-04', 'jk' => 'Laki-laki', 'alamat' => 'Korea', 'agama' => 'Islam', 'usia' => 20, 'hobi' => 'Beladiri'],
            ['nama' => 'Miskah', 'ttl' => '2005-05-05', 'jk' => 'Laki-laki', 'alamat' => 'Rusia', 'agama' => 'Islam', 'usia' => 21, 'hobi' => 'Membuat Rudal'],
        ];
        // masukan data ke database
        DB::table('biodata')->insert($bio);

    }
}

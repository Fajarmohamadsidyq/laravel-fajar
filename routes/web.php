<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('hobi', function () {
    $hobiku = [
        ['nis' => 1001,
            'nama' => 'Adzura',
            'kelas' => '12 RPL 1',
            'hobi' => [
                'hobi1' => 'Pergi ke CC',
                'hobi2' => 'Tiktokan',
                'hobi3' => 'Makan',
            ],

        ],

        ['nis' => 1002,
            'nama' => 'Ikbal',
            'kelas' => '12 RPL 1',
            'hobi' => [
                'hobi1' => 'Maen Bola',
                'hobi2' => 'Ngaji',
                'hobi3' => 'Mancing',
            ],

        ],

    ];
    return view('hobi', compact('hobiku'));

});

Route::get('mapel', function () {
    $matkul = [
        ['id' => 1,
            'nama' => 'Fajar Mohamad Sidyq',
            'username' => 'fajar',
            'email' => 'Fajar@gmail.com',
            'alamat' => 'Bandung',
            'mapel' => [
                'mapel1' => 'Bahasa Indonesia',
                'mapel2' => 'Bahasa Inggris',
                'Mapel3' => 'Bahasa Thailand',
            ],

        ],
    ];
    return view('mapel', compact('matkul'));

});

Route::get('mahasiswa', function () {
    $siswa = [
        ['nis' => 11011, 'nama' => 'Mark', 'jk' => 'Laki-laki', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 1', 'waliKelas' => 'pak ute'],
        ['nis' => 22022, 'nama' => 'Jaehyun', 'jk' => 'Laki-laki', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 1', 'waliKelas' => 'pak ute'],
        ['nis' => 33033, 'nama' => 'Lisa', 'jk' => 'perempuan', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 2', 'waliKelas' => 'pak zeus'],
        ['nis' => 44044, 'nama' => 'Jennie', 'jk' => 'Perempuan', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 2', 'waliKelas' => 'pak zeus'],
        ['nis' => 55055, 'nama' => 'Jisoo', 'jk' => 'perempuan', 'jurusan' => 'Hukum', 'kelas' => 'XI Hukum 1', 'waliKelas' => 'pak hotman'],
        ['nis' => 66066, 'nama' => 'Yiren', 'jk' => 'Perempuan', 'jurusan' => 'Hukum', 'kelas' => 'XI Hukum 1', 'waliKelas' => 'pak hotman'],
        ['nis' => 77077, 'nama' => 'Yuri Boyka', 'jk' => 'Laki-laki', 'jurusan' => 'Otomotif', 'kelas' => 'XII Ototmotif 1', 'waliKelas' => 'pak jokowi'],
        ['nis' => 88088, 'nama' => 'Alcantra', 'jk' => 'Laki-laki', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 1', 'waliKelas' => 'pak ute'],
        ['nis' => 99099, 'nama' => 'Suarez', 'jk' => 'Laki-laki', 'jurusan' => 'Otomotif', 'kelas' => 'XII Otomotif 1', 'waliKelas' => 'pak jokowi'],
        ['nis' => 10101, 'nama' => 'Branz', 'jk' => 'Laki-laki', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 1', 'waliKelas' => 'pak ute'],

    ];
    return view('siswa', compact('siswa'));
});

Route::get('blog', function () {
    $data = [
        ['id' => 1, 'title' => 'Olahraga', 'content' => 'Sepak Bola'],
        ['id' => 2, 'title' => 'Ekonomi', 'content' => 'Hutang RI ke luar negri'],

    ];

    return view('blog', compact('data'));
});

Route::get('posting/{nama?}/{kelas?}/{usia?}', function ($nama, $kelas, $usia) {
    return view('post', ['a' => $nama, 'b' => $kelas, 'c' => $usia]);
});

Route::get('/hal1', function () {
    $nama = "fajar ms";
    $kelas = "XII RPL 1";
    $alamat = "Jln.M Tohha";
    $ttl = "7 Maret 2004";
    return view('halo', compact('nama', 'kelas', 'alamat', 'ttl'));
});

Route::get('/biodata', function () {
    echo "Nama : Fajar Mohamad Sidyq <br>";
    echo "Tanggal Lahir : 7 Maret 2004 <br>";
    echo "Kelas : XII RPL 1 <br>";
    echo "Alamat : Jln.Moh Tohha <br>";
    echo "Jenis Kelamin : Laki-laki <br>";
    echo "Hobi : Bermain Game";
});

Route::get('/input/{nama}/{tgl}/{jk}/{hobi}', function ($nama, $tgl, $jk, $hobi) {
    echo "Nama Saya: " . $nama;
    echo "<br>";
    echo "Tanggal Lahir : " . $tgl;
    echo "<br>";
    echo "Jenis Kelamin : " . $jk;
    echo "<br>";
    echo "Hobi : " . $hobi;
});

Route::get('/optional/{nama?}/{usia?}', function ($nama = "Fajar MS", $usia = 17) {
    echo "Nama Saya: " . $nama . "<br>";
    echo "Tanggal Lahir : " . $usia;
});

Route::get('/ujian/{nama}/{kelas}/{mtk?}/{indo?}/{inggris?}/{produktif?}', function ($nama, $kelas, $mtk = 0, $indo = 0, $inggris = 0, $produktif = 0) {
    echo "Nama : " . $nama . "<br>";
    echo "Kelas : " . $kelas . "<br>";
    echo "Nilai Matemarika : " . $mtk . "<br>";
    echo "Nilai Indonesia : " . $indo . "<br>";
    echo "Nilai Inggris : " . $inggris . "<br>";
    echo "Nilai Produktif : " . $produktif . "<br>";
    $nilai = ($mtk + $indo + $inggris + $produktif) / 4;
    echo "Nilai Rata-rata adalah : " . $nilai;

});

Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null, $minuman = null, $cemilan = null) {

    if ($makanan && $minuman && $cemilan != null) {
        return "Anda memesan Makanan = $makanan <br>
                Anda memesan Minuman = $minuman <br>
                Anda memesan Cemilan = $cemilan";
    } else if ($makanan && $minuman != null) {
        return "Anda memesan Makanan = $makanan <br>
                Anda memesan Minuman = $minuman";
    } else if ($makanan || $minuman != null) {
        return $makanan != null ? "Anda memesan makanan : $makanan" : "Anda memesan minuman : $minuman";
    } else {
        return "Anda tidak memesan silahkan pulang";
    }

});

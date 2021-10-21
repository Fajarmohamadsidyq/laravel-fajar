<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pembeli</title>
</head>

<body>
    @foreach ($belian as $item)
        Nama Pembeli : {{ $item->nama_pembeli }} <br>
        Nama : {{ $item->nama }} <br>
        Jenis Kelamin : {{ $item->jk }} <br>
        Alamat : {{ $item->alamat }} <br>
        Kode Pos : {{ $item->kode_pos }} <br>
        Kota : {{ $item->kota }} <br>
        Tanggal lahir : {{ $item->tgl_lahir }} <br>
        <hr>

    @endforeach
</body>

</html>

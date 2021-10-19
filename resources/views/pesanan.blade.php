<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Data Pemesanan</h2>
    @foreach ($pemesanan as $item)
        Nama Pemesanan : {{ $item->nama_pesanan }} <br>
        Nama Pelanggan : {{ $item->nama_pelanggan }} <br>
        Nama Barang : {{ $item->nama_barang }} <br>
        QTY : {{ $item->qty }} <br>
        Tanggal Pesan : {{ $item->tgl_pesan }}
        <hr>

    @endforeach

</body>

</html>

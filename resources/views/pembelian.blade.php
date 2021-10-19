<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Data Pembelan</h2>
    @foreach ($pembelian as $item)
        Nama Pembeli : {{ $item->nama_pembelian }} <br>
        Nama Barang : {{ $item->nama_barang }} <br>
        Nama Supplier : {{ $item->nama_supplier }} <br>
        QTY : {{ $item->qty }} <br>
        Tanggal : {{ $item->tgl }}
        <hr>


    @endforeach
</body>

</html>

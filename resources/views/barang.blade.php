<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Data Barang</h1>
    @foreach ($barang as $item)
        Id_Barang : {{ $item->id_barang }} <br>
        Nama : {{ $item->nama }} <br>
        Varian : {{ $item->varian }} <br>
        Harga Beli : {{ $item->harga_beli }} <br>
        Harga Jual : {{ $item->harga_jual }} <br>
        <hr>
    @endforeach
</body>

</html>

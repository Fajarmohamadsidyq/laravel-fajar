<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fajar Mohamad Sidyq</title>
</head>

<body>
    <center>
        <h1>Biodata</h1>
    </center>
    @foreach ($query as $item)
        <p>{{ $item->nama }}</p>
        <p>{{ $item->ttl }}</p>
        <p>{{ $item->jk }}</p>
        <p>{{ $item->alamat }}</p>
        <p>{{ $item->agama }}</p>
        <p>{{ $item->usia }}</p>
        <p>{{ $item->hobi }}</p>
        <hr>
    @endforeach
</body>

</html>

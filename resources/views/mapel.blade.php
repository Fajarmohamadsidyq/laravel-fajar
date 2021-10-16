<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <ul>
        @foreach ($matkul as $matkul1)
            id : {{ $matkul1['id'] }} <br>
            nama : {{ $matkul1['nama'] }} <br>
            username : {{ $matkul1['username'] }} <br>
            email : {{ $matkul1['email'] }} <br>
            alamat : {{ $matkul1['alamat'] }} <br>

            mata pelajaran
            <ul>
                @foreach ($matkul1['mapel'] as $mapel1)
                    <li>{{ $mapel1 }}</li>
                @endforeach
            </ul>
        @endforeach
    </ul>
    <hr>
</body>

</html>

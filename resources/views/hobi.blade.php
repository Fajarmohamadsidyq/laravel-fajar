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
        @foreach ($hobiku as $hobiku1)
            nis : {{ $hobiku1['nis'] }} <br>
            nama : {{ $hobiku1['nama'] }} <br>
            kelas : {{ $hobiku1['kelas'] }} <br>

            Hobi :
            <ul>
                @foreach ($hobiku1['hobi'] as $hobii)
                    <li>{{ $hobii }}</li>
                @endforeach
                <hr>
            </ul>
        @endforeach
    </ul>
</body>

</html>

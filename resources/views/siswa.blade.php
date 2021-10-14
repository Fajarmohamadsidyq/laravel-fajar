<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Tampilkan Data Siswa</h2>

    <ul>
        @foreach ($siswa as $siswa2)

            nis : {{ $siswa2['nis'] }} <br>
            Nama :{{ $siswa2['nama'] }} <br>
            Jenis Kelamin :{{ $siswa2['jk'] }} <br>
            Jurusan : {{ $siswa2['jurusan'] }} <br>
            Kelas : {{ $siswa2['kelas'] }} <br>
            Wali Kelas : {{ $siswa2['waliKelas'] }}
            <hr>

        @endforeach
    </ul>

</body>

</html>

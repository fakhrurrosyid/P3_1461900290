<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beasiswa</title>
</head>

<body>
    <center>
        <h3>BEASISWA</h3>
    </center>
    <p>Kumpulan beasiswa</p>

    <table border="1">
        <tr>
            <th>No.</th>
            <th>Nama Siswa</th>
            <th>Alamat</th>
            <th>Nama Guru</th>
            <th>Mata Pelajaran</th>

        </tr>
        @php
        $i = 1;
        @endphp

        @foreach($siswa as $d)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $d->nama_siswa }}</td>
            <td>{{ $d->alamat }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->mengajar }}</td>


            <td>
                <a href="/beasiswa/edit/{{ $d->id_siswa }}">Edit</a>
                |
                <a href="/beasiswa/del/{{ $d->id_siswa }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="/beasiswa/add">+ Tambah</a>
</body>

</html>
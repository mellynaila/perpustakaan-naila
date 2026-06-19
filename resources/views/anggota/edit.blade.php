<!DOCTYPE html>
<html>

<head>
    <title>Edit Anggota</title>
</head>

<body>

    <h2>Edit Anggota</h2>

    <form action="/anggota/update/{{ $anggota->id }}" method="POST">
        @csrf

        <p>
            Nama
            <input type="text" name="nama" value="{{ $anggota->nama }}">
        </p>

        <p>
            Alamat
            <input type="text" name="alamat" value="{{ $anggota->alamat }}">
        </p>

        <p>
            Telepon
            <input type="text" name="telepon" value="{{ $anggota->telepon }}">
        </p>

        <button type="submit">Update</button>
    </form>

</body>

</html>

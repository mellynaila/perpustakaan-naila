<!DOCTYPE html>
<html>

<head>
    <title>Tambah Anggota</title>
</head>

<body>

    <h2>Tambah Anggota</h2>

    <form action="/anggota/store" method="POST">
        @csrf

        <p>
            Nama
            <input type="text" name="nama">
        </p>

        <p>
            Alamat
            <input type="text" name="alamat">
        </p>

        <p>
            Telepon
            <input type="text" name="telepon">
        </p>

        <button type="submit">Simpan</button>
    </form>

</body>

</html>
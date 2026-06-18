<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title>Cetak Laporan Perpustakaan</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: center;
        }
    </style>

</head>

<body>

    <h2>
        LAPORAN PEMINJAMAN DAN PENGEMBALIAN BUKU
    </h2>

    <hr>

    <table>

        <tr>

            <th>No</th>
            <th>Nama Anggota</th>
            <th>Judul Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>

        </tr>

        @foreach ($laporan as $no => $l)
            <tr>

                <td>{{ $no + 1 }}</td>
                <td>{{ $l->nama }}</td>
                <td>{{ $l->judul }}</td>
                <td>{{ $l->tanggal_pinjam }}</td>
                <td>{{ $l->tanggal_kembali }}</td>
                <td>{{ $l->status }}</td>

            </tr>
        @endforeach

    </table>

    <br><br>

    <table style="border:none; width:100%;">

        <tr style="border:none;">

            <td style="border:none;"></td>

            <td style="border:none; text-align:center; width:250px;">

                Kauman, {{ date('d-m-Y') }}

                <br><br><br><br>

                _____________________

                <br>

                Pustakawan

            </td>

        </tr>

    </table>

    <script>
        window.print();
    </script>

</body>

</html>

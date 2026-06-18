@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Detail Peminjaman</h3>

        <table class="table table-bordered">

            <tr>
                <th width="30%">Nama Anggota</th>
                <td>{{ $peminjaman->nama }}</td>
            </tr>

            <tr>
                <th>Judul Buku</th>
                <td>{{ $peminjaman->judul }}</td>
            </tr>

            <tr>
                <th>Pengarang</th>
                <td>{{ $peminjaman->pengarang }}</td>
            </tr>

            <tr>
                <th>Tanggal Pinjam</th>
                <td>{{ $peminjaman->tanggal_pinjam }}</td>
            </tr>

            <tr>
                <th>Tanggal Kembali</th>
                <td>{{ $peminjaman->tanggal_kembali }}</td>
            </tr>

            <tr>
                <th>Status</th>
                <td>{{ $peminjaman->status }}</td>
            </tr>

        </table>

        <a href="/peminjaman" class="btn btn-secondary">
            Kembali
        </a>

    </div>
@endsection

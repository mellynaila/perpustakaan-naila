@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Laporan Peminjaman dan Pengembalian Buku</h3>

        <br>

        <a href="/laporan/cetak" class="btn btn-success mb-3" target="_blank">

            Cetak Laporan

        </a>

        <table class="table table-bordered">

            <thead>

                <tr>

                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>

                </tr>

            </thead>

            <tbody>

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

            </tbody>

        </table>

    </div>
@endsection

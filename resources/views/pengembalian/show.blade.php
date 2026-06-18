@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Detail Pengembalian Buku</h3>

        <div class="card">

            <div class="card-body">

                <table class="table">

                    <tr>
                        <th width="30%">Nama Anggota</th>
                        <td>{{ $pengembalian->nama }}</td>
                    </tr>

                    <tr>
                        <th>Judul Buku</th>
                        <td>{{ $pengembalian->judul }}</td>
                    </tr>

                    <tr>
                        <th>Pengarang</th>
                        <td>{{ $pengembalian->pengarang }}</td>
                    </tr>

                    <tr>
                        <th>Tanggal Pinjam</th>
                        <td>{{ $pengembalian->tanggal_pinjam }}</td>
                    </tr>

                    <tr>
                        <th>Tanggal Kembali</th>
                        <td>{{ $pengembalian->tanggal_kembali }}</td>
                    </tr>

                    <tr>
                        <th>Status</th>
                        <td>{{ $pengembalian->status }}</td>
                    </tr>

                </table>

                <a href="/pengembalian" class="btn btn-secondary">
                    Kembali
                </a>

            </div>

        </div>

    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Detail Buku</h3>

        <table class="table table-bordered">

            <tr>
                <th width="30%">Judul Buku</th>
                <td>{{ $buku->judul }}</td>
            </tr>

            <tr>
                <th>Penulis</th>
                <td>{{ $buku->penulis }}</td>
            </tr>

            <tr>
                <th>Penerbit</th>
                <td>{{ $buku->penerbit }}</td>
            </tr>

            <tr>
                <th>Tahun Terbit</th>
                <td>{{ $buku->tahun_terbit }}</td>
            </tr>

            <tr>
                <th>Stok</th>
                <td>{{ $buku->stok }}</td>
            </tr>

        </table>

        <a href="/buku" class="btn btn-secondary">
            Kembali
        </a>

    </div>
@endsection

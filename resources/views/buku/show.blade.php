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
                <th>Pengarang</th>
                <td>{{ $buku->pengarang }}</td>
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

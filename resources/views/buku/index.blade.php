@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Data Buku</h3>

        <a href="/buku/create" class="btn btn-primary mb-3">
            Tambah Buku
        </a>

        <table class="table table-bordered">

            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>

            @foreach ($buku as $no => $b)
                <tr>

                    <td>{{ $no + 1 }}</td>
                    <td>{{ $b->judul }}</td>
                    <td>{{ $b->penulis }}</td>
                    <td>{{ $b->penerbit }}</td>
                    <td>{{ $b->tahun_terbit }}</td>
                    <td>{{ $b->stok }}</td>

                    <td>

                        <a href="/buku/show/{{ $b->id }}" class="btn btn-info btn-sm">
                            Detail Buku
                        </a>

                        <a href="/buku/edit/{{ $b->id }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="/buku/delete/{{ $b->id }}" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin hapus?')">
                            Hapus
                        </a>

                    </td>

                </tr>
            @endforeach

        </table>

    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Data Peminjaman</h3>

        <a href="/peminjaman/create" class="btn btn-primary mb-3">
            Tambah Peminjaman
        </a>

        <table class="table table-bordered">

            <tr>
                <th>No</th>
                <th>Nama Anggota</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>

            @foreach ($peminjaman as $no => $p)
                <tr>

                    <td>{{ $no + 1 }}</td>
                    <td>{{ $p->nama_anggota }}</td>
                    <td>{{ $p->judul }}</td>
                    <td>{{ $p->tanggal_pinjam }}</td>
                    <td>{{ $p->tanggal_kembali }}</td>
                    <td>{{ $p->status }}</td>

                    <td>

                        <a href="/peminjaman/show/{{ $p->id }}" class="btn btn-info btn-sm">
                            Detail Peminjaman
                        </a>

                        <a href="/peminjaman/edit/{{ $p->id }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="/peminjaman/delete/{{ $p->id }}" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin hapus data?')">
                            Hapus
                        </a>

                    </td>

                </tr>
            @endforeach

        </table>

    </div>
@endsection

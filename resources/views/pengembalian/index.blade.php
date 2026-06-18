@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Data Pengembalian Buku</h3>

        <table class="table table-bordered">

            <thead>

                <tr>
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>

            </thead>

            <tbody>

                @foreach ($pengembalian as $no => $p)
                    <tr>

                        <td>{{ $no + 1 }}</td>

                        <td>{{ $p->nama }}</td>

                        <td>{{ $p->judul }}</td>

                        <td>{{ $p->tanggal_pinjam }}</td>

                        <td>{{ $p->tanggal_kembali }}</td>

                        <td>{{ $p->status }}</td>

                        <td>

                            <a href="/pengembalian/show/{{ $p->id }}" class="btn btn-info btn-sm">
                                Detail
                            </a>

                            @if ($p->status == 'Dipinjam')
                                <a href="/pengembalian/proses/{{ $p->id }}" class="btn btn-success btn-sm"
                                    onclick="return confirm('Yakin buku dikembalikan?')">

                                    Kembalikan

                                </a>
                            @else
                                <span class="badge bg-primary">
                                    Sudah Dikembalikan
                                </span>
                            @endif

                        </td>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>
@endsection

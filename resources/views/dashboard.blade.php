@extends('layouts.app')

@section('content')
    <div class="container">

        <h2 class="mb-4">
            Dashboard Admin!
        </h2>

        <div class="row">

            <div class="col-md-3">

                <div class="card text-center shadow">

                    <div class="card-body">

                        <h5>Total Buku</h5>

                        <h2>
                            {{ $jumlahBuku }}
                        </h2>

                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card text-center shadow">

                    <div class="card-body">

                        <h5>Total Anggota</h5>

                        <h2>
                            {{ $jumlahAnggota }}
                        </h2>

                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card text-center shadow">

                    <div class="card-body">

                        <h5>Peminjaman</h5>

                        <h2>
                            {{ $jumlahPeminjaman }}
                        </h2>

                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card text-center shadow">

                    <div class="card-body">

                        <h5>Pengembalian</h5>

                        <h2>
                            {{ $jumlahPengembalian }}
                        </h2>

                    </div>

                </div>

            </div>

        </div>

        <br>

        <div class="card">

            <div class="card-body">

                <h4>Selamat Datang di Sistem Perpustakaan Elite</h4>

                <hr>

                <p>
                    Silakan gunakan menu di sidebar untuk mengelola
                    data buku, anggota, peminjaman, pengembalian,
                    dan laporan perpustakaan.
                </p>

            </div>

        </div>

    </div>
@endsection

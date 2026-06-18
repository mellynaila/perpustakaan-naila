@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Tambah Peminjaman</h3>

        <form action="/peminjaman/store" method="POST">

            @csrf

            <label>Anggota</label>

            <select name="id_anggota" class="form-control">

                @foreach ($anggota as $a)
                    <option value="{{ $a->id }}">

                        {{ $a->nama }}

                    </option>
                @endforeach

            </select>

            <br>

            <label>Buku</label>

            <select name="id_buku" class="form-control">

                @foreach ($buku as $b)
                    <option value="{{ $b->id }}">

                        {{ $b->judul }} (Stok : {{ $b->stok }})

                    </option>
                @endforeach

            </select>

            <br>

            <label>Tanggal Pinjam</label>

            <input type="date" name="tanggal_pinjam" class="form-control">

            <br>

            <label>Tanggal Kembali</label>

            <input type="date" name="tanggal_kembali" class="form-control">

            <br>

            <button class="btn btn-success">

                Simpan

            </button>

        </form>

    </div>
@endsection

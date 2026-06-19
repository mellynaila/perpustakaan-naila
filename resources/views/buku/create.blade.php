@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Tambah Buku</h3>

        <form action="/buku/store" method="POST">

            @csrf

            <label>Judul Buku</label>

            <input type="text" name="judul" class="form-control">

            <br>

            <label>Penulis</label>

            <input type="text" name="penulis" class="form-control">

            <br>

            <label>Penerbit</label>

            <input type="text" name="penerbit" class="form-control">

            <br>

            <label>Tahun Terbit</label>

            <input type="text" name="tahun_terbit" class="form-control">

            <br>

            <label>Stok</label>

            <input type="number" name="stok" class="form-control">

            <br>

            <button class="btn btn-success">
                Simpan
            </button>

        </form>

    </div>
@endsection

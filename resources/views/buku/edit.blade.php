@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Buku</h3>

        <form action="/buku/update/{{ $buku->id }}" method="POST">

            @csrf

            <label>Judul Buku</label>

            <input type="text" name="judul" class="form-control" value="{{ $buku->judul }}">

            <br>

            <label>Penulis</label>

            <input type="text" name="penulis" class="form-control" value="{{ $buku->penulis }}">

            <br>

            <label>Penerbit</label>

            <input type="text" name="penerbit" class="form-control" value="{{ $buku->penerbit }}">

            <br>

            <label>Tahun Terbit</label>

            <input type="text" name="tahun_terbit" class="form-control" value="{{ $buku->tahun_terbit }}">

            <br>

            <label>Stok</label>

            <input type="number" name="stok" class="form-control" value="{{ $buku->stok }}">

            <br>

            <button class="btn btn-primary">
                Update
            </button>

        </form>

    </div>
@endsection

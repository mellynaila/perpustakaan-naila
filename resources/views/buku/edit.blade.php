@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Buku</h3>

        <form action="/buku/update/{{ $buku->id }}" method="POST">

            @csrf

            <label>Judul Buku</label>

            <input type="text" name="judul" class="form-control" value="{{ $buku->judul }}">

            <br>

            <label>Pengarang</label>

            <input type="text" name="pengarang" class="form-control" value="{{ $buku->pengarang }}">

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

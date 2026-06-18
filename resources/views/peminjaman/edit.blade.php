@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Peminjaman</h3>

        <form action="/peminjaman/update/{{ $pinjam->id }}" method="POST">

            @csrf

            <label>Anggota</label>

            <select name="id_anggota" class="form-control">

                @foreach ($anggota as $a)
                    <option value="{{ $a->id }}" @if ($pinjam->id_anggota == $a->id) selected @endif>

                        {{ $a->nama }}

                    </option>
                @endforeach

            </select>

            <br>

            <label>Buku</label>

            <select name="id_buku" class="form-control">

                @foreach ($buku as $b)
                    <option value="{{ $b->id }}" @if ($pinjam->id_buku == $b->id) selected @endif>

                        {{ $b->judul }}

                    </option>
                @endforeach

            </select>

            <br>

            <label>Tanggal Pinjam</label>

            <input type="date" name="tanggal_pinjam" class="form-control" value="{{ $pinjam->tanggal_pinjam }}">

            <br>

            <label>Tanggal Kembali</label>

            <input type="date" name="tanggal_kembali" class="form-control" value="{{ $pinjam->tanggal_kembali }}">

            <br>

            <button class="btn btn-primary">

                Update

            </button>

        </form>

    </div>
@endsection

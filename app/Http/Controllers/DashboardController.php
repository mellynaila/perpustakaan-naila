<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahBuku = DB::table('buku')->count();

        $jumlahAnggota = DB::table('anggota')->count();

        $jumlahPeminjaman = DB::table('peminjaman')->count();

        $jumlahPengembalian = DB::table('pengembalian')->count();

        return view('dashboard', compact(
            'jumlahBuku',
            'jumlahAnggota',
            'jumlahPeminjaman',
            'jumlahPengembalian'
        ));
    }
}

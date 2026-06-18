<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Laporan
{

    public static function getLaporan()
    {
        return DB::table('peminjaman')
            ->join('anggota', 'anggota.id', '=', 'peminjaman.id_anggota')
            ->join('buku', 'buku.id', '=', 'peminjaman.id_buku')
            ->select(
                'anggota.nama',
                'buku.judul',
                'peminjaman.tanggal_pinjam',
                'peminjaman.tanggal_kembali',
                'peminjaman.status'
            )
            ->get();
    }
}

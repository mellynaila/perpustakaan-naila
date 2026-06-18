<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Pengembalian
{

    public static function getAll()
    {
        return DB::table('peminjaman')
            ->join('anggota', 'anggota.id', '=', 'peminjaman.id_anggota')
            ->join('buku', 'buku.id', '=', 'peminjaman.id_buku')
            ->select(
                'peminjaman.*',
                'anggota.nama',
                'buku.judul'
            )
            ->get();
    }


    public static function findById($id)
    {
        return DB::table('peminjaman')
            ->join('anggota', 'anggota.id', '=', 'peminjaman.id_anggota')
            ->join('buku', 'buku.id', '=', 'peminjaman.id_buku')
            ->select(
                'peminjaman.*',
                'anggota.nama',
                'buku.judul',
                'buku.pengarang'
            )
            ->where('peminjaman.id', $id)
            ->first();
    }

    public static function getPinjam($id)
    {
        return DB::table('peminjaman')
            ->where('id', $id)
            ->first();
    }


    public static function updateStatus($id)
    {
        return DB::table('peminjaman')
            ->where('id', $id)
            ->update([
                'status' => 'Dikembalikan'
            ]);
    }

    public static function tambahStok($id_buku)
    {
        return DB::table('buku')
            ->where('id', $id_buku)
            ->increment('stok', 1);
    }
}

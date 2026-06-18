<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Peminjaman
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


    public static function getAnggota()
    {
        return DB::table('anggota')->get();
    }


    public static function getBuku()
    {
        return DB::table('buku')
            ->where('stok', '>', 0)
            ->get();
    }


    public static function getAllBuku()
    {
        return DB::table('buku')->get();
    }

    public static function insertData($data)
    {
        return DB::table('peminjaman')->insert($data);
    }

    public static function kurangStok($id_buku)
    {
        return DB::table('buku')
            ->where('id', $id_buku)
            ->decrement('stok', 1);
    }

    public static function findById($id)
    {
        return DB::table('peminjaman')
            ->join('anggota', 'anggota.id', '=', 'peminjaman.id_anggota')
            ->join('buku', 'buku.id', '=', 'peminjaman.id_buku')
            ->select(
                'peminjaman.*',
                'anggota.nama',
                'buku.judul'
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


    public static function updateData($id, $data)
    {
        return DB::table('peminjaman')
            ->where('id', $id)
            ->update($data);
    }
}

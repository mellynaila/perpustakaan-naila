<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB; // <--- Taruh di sini

class User extends Authenticatable
{
    use Notifiable;

    // 1. Ambil semua user yang berstatus Admin
    public static function getAdmins()
    {
        return DB::table('users')->where('role', 'admin')->get();
    }

    // 2. Ambil semua user yang berstatus Anggota
    public static function getAnggota()
    {
        return DB::table('users')->where('role', 'anggota')->get();
    }

    // 3. Simpan data user baru (bisa untuk admin/anggota)
    public static function insertUser($data)
    {
        // Pastikan password di-hash sebelum disimpan
        if (isset($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }

        return DB::table('users')->insert($data);
    }

    // 4. Hapus user berdasarkan ID
    public static function deleteUser($id)
    {
        return DB::table('users')->where('id', $id)->delete();
    }
}

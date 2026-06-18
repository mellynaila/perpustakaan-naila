<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Buku
{

    public static function getAll()
    {
        return DB::table('buku')->get();
    }


    public static function findById($id)
    {
        return DB::table('buku')
            ->where('id', $id)
            ->first();
    }


    public static function insertData($data)
    {
        return DB::table('buku')->insert($data);
    }

    public static function updateData($id, $data)
    {
        return DB::table('buku')
            ->where('id', $id)
            ->update($data);
    }

    public static function deleteData($id)
    {
        return DB::table('buku')
            ->where('id', $id)
            ->delete();
    }
}

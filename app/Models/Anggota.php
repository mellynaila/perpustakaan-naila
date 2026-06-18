<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Anggota
{
    public static function getAll()
    {
        return DB::table('anggota')->get();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "users";

    private static $key = "perpus";

    public static function xorEncrypt($text)
    {
        $hasil = "";
        $key = self::$key;

        for ($i = 0; $i < strlen($text); $i++) {
            $hasil .= chr(ord($text[$i]) ^ ord($key[$i % strlen($key)]));
        }

        return $hasil;
    }

    public static function loginUser($email, $password)
    {
        return DB::table('users')
            ->where('email', $email)
            ->where('password', $password)
            ->first();
    }
}

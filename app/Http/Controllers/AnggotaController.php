<?php

namespace App\Http\Controllers;

use App\Models\User;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = User::getAll();

        return view('anggota.index', compact('anggota'));
    }
}

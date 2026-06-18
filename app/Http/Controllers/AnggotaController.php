<?php

namespace App\Http\Controllers;

use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = Anggota::getAll();

        return view('anggota.index', compact('anggota'));
    }
}

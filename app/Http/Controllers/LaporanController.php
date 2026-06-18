<?php

namespace App\Http\Controllers;

use App\Models\Laporan;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = Laporan::getLaporan();

        return view('laporan.index', compact('laporan'));
    }

    public function cetak()
    {
        $laporan = Laporan::getLaporan();

        return view('laporan.cetak', compact('laporan'));
    }
}

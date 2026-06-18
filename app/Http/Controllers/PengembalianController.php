<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;

class PengembalianController extends Controller
{
    public function index()
    {
        $pengembalian = Pengembalian::getAll();

        return view('pengembalian.index', compact('pengembalian'));
    }

    public function show($id)
    {
        $pengembalian = Pengembalian::findById($id);

        return view('pengembalian.show', compact('pengembalian'));
    }

    public function proses($id)
    {
        $pinjam = Pengembalian::getPinjam($id);

        Pengembalian::updateStatus($id);

        Pengembalian::tambahStok($pinjam->id_buku);

        return redirect('/pengembalian');
    }
}

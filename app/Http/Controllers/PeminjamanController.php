<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::getAll();

        return view('peminjaman.index', compact('peminjaman'));
    }

    public function create()
    {
        $anggota = Peminjaman::getAnggota();
        $buku = Peminjaman::getBuku();

        return view('peminjaman.create', compact('anggota', 'buku'));
    }

    public function store(Request $request)
    {
        Peminjaman::insertData([
            'id_anggota' => $request->id_anggota,
            'id_buku' => $request->id_buku,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => 'Dipinjam'
        ]);

        Peminjaman::kurangStok($request->id_buku);

        return redirect('/peminjaman');
    }

    public function show($id)
    {
        $peminjaman = Peminjaman::findById($id);

        return view('peminjaman.show', compact('peminjaman'));
    }

    public function edit($id)
    {
        $pinjam = Peminjaman::getPinjam($id);
        $anggota = Peminjaman::getAnggota();
        $buku = Peminjaman::getAllBuku();

        return view('peminjaman.edit', compact('pinjam', 'anggota', 'buku'));
    }

    public function update(Request $request, $id)
    {
        Peminjaman::updateData($id, [
            'id_anggota' => $request->id_anggota,
            'id_buku' => $request->id_buku,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali
        ]);

        return redirect('/peminjaman');
    }
}

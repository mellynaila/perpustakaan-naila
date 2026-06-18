<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::getAll();

        return view('buku.index', compact('buku'));
    }

    public function show($id)
    {
        $buku = Buku::findById($id);

        return view('buku.show', compact('buku'));
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        Buku::insertData([
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'stok' => $request->stok
        ]);

        return redirect('/buku');
    }

    public function edit($id)
    {
        $buku = Buku::findById($id);

        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        Buku::updateData($id, [
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'stok' => $request->stok
        ]);

        return redirect('/buku');
    }

    public function destroy($id)
    {
        Buku::deleteData($id);

        return redirect('/buku');
    }
}

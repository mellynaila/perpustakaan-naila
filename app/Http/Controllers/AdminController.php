<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexAnggota()
    {

        $anggota = User::getAnggota();

        return view('admin.anggota.index', compact('anggota'));
    }

    // Menampilkan halaman daftar admin
    public function indexAdmin()
    {

        $admin = User::getAdmins();

        return view('admin.data_admin.index', compact('admin'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role'     => 'required|in:admin,anggota',
        ]);


        User::insertUser($validated);

        return redirect()->back()->with('success', 'User baru berhasil ditambahkan!');
    }
}

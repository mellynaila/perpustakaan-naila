<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function proses(Request $request)
    {
        $user = User::loginUser(
            $request->email,
            $request->password
        );

        if ($user) {

            Session::put('login', true);
            Session::put('nama', $user->name);

            return redirect('/dashboard');
        }

        return back()->with('error', 'Login gagal');
    }

    public function logout()
    {
        Session::flush();

        return redirect('/');
    }
}

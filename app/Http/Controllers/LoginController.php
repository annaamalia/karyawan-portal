<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'nik' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('nik', 'password');
        if (Auth::attempt($credentials)) {
            return view('dashboard.users.index')->with('success', 'Selamat datang');
        }

        return redirect()->route('login')->with('error', 'NIK atau password salah');

        // if(Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/dashboard');
        // }

        // return back()->with('loginError', 'Login Failed!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Berhasil logout');

        // Auth::logout();

        // request()->session()->invalidate();

        // request()->session()->regenerateToken();

        // return redirect('/');

    }
}

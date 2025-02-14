<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // HALAMAN REGSTRASI AKUN
    public function RegisterForm()
    {
        return view('auth.register');
    }

    // PROSES REGISTRASI AKUN
    public function store(Request $request)
    {
        // PROSES VALIDASI AKUN
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'role' => 'required',
            'password' => 'required|min:8',
            'confirm-password' => 'required|same:password',
        ],[
            // KETERANGAN ERROR
            'name.required' => 'Nama wajib diisi !',
            'email.required' => 'E-mail wajib diisi !',
            'email.unique' => 'E-mail ini sudah terdaftar, coba E-mail yang lain.',
            'role.required' => 'Hak akses wajib dipilih !',
            'password.required' => 'Password wajib diisi !',
            'confirm-password.required' => 'Konfirmasi Password wajib diisi !',
            'password.min' => 'Password minimal 8 karakter.',
        ]);

        // PROSES PENDAFTARAN AKUN KE DATABASE
        $data = $request->except('confirm-passowrd','password');
        $data['password'] = Hash::make($request->password);
        User::create($data);
        return redirect('/auth/login');
    }

    // HALAMAN LOGIN AKUN
    public function LoginForm()
    {
        return view('auth.login');
    }

    // PROSES AUTENTIKASI AKUN
    public function authenticate(Request $request)
    {
        // PROSES VALIDASI AKUN
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ],[
            // KETERANGAN ERROR
            'email.required' => 'E-mail wajib diisi !',
            'password.required' => 'Password wajib diisi !',
        ]);

        // PEMILIHAN HAK AKSES DAN HALAMAN YANG AKAN DI TUJU
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            if (Auth::user()->role == 'admin'){
                return redirect()->intended('/home');
            } elseif (Auth::user()->role == 'user'){
                return redirect()->intended('/home');
            }
        }

        // KETERANGAN ERROR
        return back()->withErrors([
            'email' => 'Email atau Password salah',
        ])->withInput();
    }

    // PROSES LOGOUT AKUN
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/auth/login');
    }
}

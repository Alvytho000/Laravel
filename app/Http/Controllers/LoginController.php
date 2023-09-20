<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function register() {
        return view('auth.register');
    }

    public function login_proses(Request $request) {
        // Validasi input dari pengguna
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba mengotentikasi pengguna
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Pengguna berhasil login
            return redirect()->route('index'); // Ganti ini dengan rute yang sesuai
        } else {
            // Pengguna gagal login
            return back()->with('failed', 'Email or Password is incorrect');
        }
    }

    public function register_proses(Request $request) {
        // Validasi input dari pengguna
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Buat pengguna baru
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // Enkripsi password

        // Simpan pengguna ke dalam database
        $user->save();

        // Login pengguna setelah registrasi (opsional)
        Auth::login($user);

        // Redirect pengguna ke halaman setelah registrasi (misalnya, dashboard)
        return redirect()->route('index'); // Ganti ini dengan rute yang sesuai
    }


    public function logout() {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Kamu berhasil logout');
    }
}

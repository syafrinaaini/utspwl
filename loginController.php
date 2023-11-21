<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    // Proses login akan di-handle oleh method processLogin
    public function processLogin(Request $request)
    {
        // Proses autentikasi, pengecekan login, dan alur logika login lainnya
        // Di sini Anda dapat memeriksa username dan password yang diterima dari $request
        // Contoh: $request->input('username') dan $request->input('password')

        // Sesuai dengan kebutuhan aplikasi, Anda bisa melakukan validasi, otentikasi, dan logika login lainnya

        // Contoh sederhana untuk kembali ke halaman login jika proses validasi tidak terjadi
        return redirect()->route('login')->with('error', 'Username or password is incorrect.');
    }
}

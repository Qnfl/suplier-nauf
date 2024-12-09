<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  /**
   * Show the login form.
   */
  public function index()
  {
    return view('login.index'); // Mengarahkan ke file login.blade.php
  }

  /**
   * Handle the login request.
   */
  public function login(Request $request)
  {
    // Validasi input
    $request->validate([
      'email' => 'required|email',
      'password' => 'required',
    ]);

    // Coba untuk login menggunakan kredensial
    if (Auth::attempt($request->only('email', 'password'), $request->remember)) {
      // Jika berhasil login, redirect ke halaman dashboard atau lainnya
      return redirect()->intended('/dashboard')->with('success', 'Logged in successfully.');
    }

    // Jika gagal login, redirect kembali dengan pesan error
    return back()->withErrors([
      'email' => 'Invalid email or password.',
    ])->withInput();
  }

  /**
   * Log the user out.
   */
  public function logout()
  {
    Auth::logout();
    return redirect('/login')->with('success', 'Logged out successfully.');
  }
}

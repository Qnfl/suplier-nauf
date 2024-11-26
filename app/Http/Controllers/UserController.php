<?php

// app/Http/Controllers/UserController.php
namespace App\Http\Controllers;

use App\Models\User; // Pastikan Anda menggunakan model yang benar
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Menampilkan semua data pengguna
    public function index()
    {
        $users = User::all(); // Ambil semua data pengguna
        return view('user.index', compact('users')); // Pastikan nama file Blade sesuai
    }

    // Menampilkan form untuk membuat pengguna baru
    public function create()
    {
        return view('user.create'); // Tampilkan form untuk menambah pengguna
    }

    // Menyimpan data pengguna ke database
    public function store(Request $request)
    {
        // Validasi dan simpan data pengguna baru
        $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:user',
            'password' => 'required|string|min:8',
            'level' => 'required|string',
        ]);

        User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => bcrypt($request->password), // Hash password
            'level' => $request->level,
        ]);

        return redirect()->route('user.index')->with('success', 'User created successfully.');
    }

    // Menampilkan form untuk mengedit pengguna
    public function edit($id)
    {
        $user = User::findOrFail($id); // Ambil data pengguna berdasarkan ID
        return view('user.edit', compact('user')); // Pastikan nama file Blade sesuai
    }

    // Mengupdate data pengguna
    public function update(Request $request, $id)
    {
        // Validasi dan update data pengguna
        $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:user,username,' . $id,
            'level' => 'required|string',
        ]);

        $user = User::findOrFail($id);
        $user->update($request->only(['nama', 'username', 'level']));

        return redirect()->route('user.index')->with('success', 'User updated successfully.');
    }

    // Menghapus data pengguna
    public function destroy($id)
    {
        $user = User::findOrFail($id); // Ambil data pengguna berdasarkan ID
        $user->delete(); // Hapus pengguna

        return redirect()->route('user.index')->with('success', 'User deleted successfully.');
    }
}
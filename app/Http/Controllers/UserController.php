<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        try {
            // Debug input yang diterima
            Log::info('Received user input:', $request->all());

            // Validasi input tanpa confirmed
            $validated = $request->validate([
                'nama' => 'required|string|max:255',
                'username' => 'required|string|max:255|unique:user,username',
                'password' => 'required|string|min:8', // Hapus confirmed
                'level' => 'required|string',
            ]);

            Log::info('Validation passed, creating user');

            // Simpan pengguna baru
            $user = User::create([
                'nama' => $validated['nama'],
                'username' => $validated['username'],
                'password' => bcrypt($validated['password']),
                'level' => $validated['level'],
            ]);

            Log::info('User created successfully:', ['user_id' => $user->id_user]);

            return redirect()->route('user.index')
                ->with('success', 'Pengguna berhasil ditambahkan');
        } catch (\Exception $e) {
            Log::error('Error creating user: ' . $e->getMessage());
            return back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat menambahkan pengguna');
        }
    }

    // Menampilkan form untuk mengedit pengguna
    public function edit($id_user)
    {
        $user = User::findOrFail($id_user); // Ambil data pengguna berdasarkan ID
        return view('user.edit', compact('user')); // Pastikan nama file Blade sesuai
    }

    // Mengupdate data pengguna
    public function update(Request $request, $id_user)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:user,username,' . $id_user . ',id_user',
            'level' => 'required|string',
        ]);

        // Update data pengguna
        $user = User::findOrFail($id_user);
        $user->update($request->only(['nama', 'username', 'level']));

        return redirect()->route('user.index')->with('success', 'User updated successfully.');
    }

    // Menghapus data pengguna
    public function destroy($id_user)
    {
        $user = User::findOrFail($id_user); // Ambil data pengguna berdasarkan ID
        $user->delete(); // Hapus pengguna

        return redirect()->route('user.index')->with('success', 'User deleted successfully.');
    }
}

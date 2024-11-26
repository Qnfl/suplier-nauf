<?php

// app/Http/Controllers/StokController.php
namespace App\Http\Controllers;

use App\Models\Stok; // Pastikan Anda menggunakan model yang benar
use Illuminate\Http\Request;

class StokController extends Controller
{
    // Menampilkan semua data stok
    public function index()
    {
        $stoks = Stok::all(); // Ambil semua data stok
        return view('stok.index', compact('stoks')); // Pastikan nama file Blade sesuai
    }

    // Menampilkan form untuk membuat stok baru
    public function create()
    {
        return view('stok.create'); // Tampilkan form untuk menambah stok
    }

    // Menyimpan data stok ke database
    public function store(Request $request)
    {
        // Validasi dan simpan data stok baru
        $request->validate([
            'id_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:255',
            'jml_masuk' => 'required|integer',
            'jml_keluar' => 'required|integer',
            'total_barang' => 'required|integer',
        ]);

        Stok::create($request->all()); // Simpan data stok baru

        return redirect()->route('stok.index')->with('success', 'Stok created successfully.');
    }

    // Menampilkan form untuk mengedit stok
    public function edit($id)
    {
        $stok = Stok::findOrFail($id); // Ambil data stok berdasarkan ID
        return view('stok.edit', compact('stok')); // Pastikan nama file Blade sesuai
    }

    // Mengupdate data stok
    public function update(Request $request, $id)
    {
        // Validasi dan update data stok
        $request->validate([
            'id_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:255',
            'jml_masuk' => 'required|integer',
            'jml_keluar' => 'required|integer',
            'total_barang' => 'required|integer',
        ]);

        $stok = Stok::findOrFail($id);
        $stok->update($request->all());

        return redirect()->route('stok.index')->with('success', 'Stok updated successfully.');
    }

    // Menghapus data stok
    public function destroy($id)
    {
        $stok = Stok::findOrFail($id); // Ambil data stok berdasarkan ID
        $stok->delete(); // Hapus stok

        return redirect()->route('stok.index')->with('success', 'Stok deleted successfully.');
    }
}
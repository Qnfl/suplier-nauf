<?php

// app/Http/Controllers/PinjamBarangController.php
namespace App\Http\Controllers;

use App\Models\Pinjam_Barang; // Pastikan Anda menggunakan model yang benar
use Illuminate\Http\Request;

class PinjamBarangController extends Controller
{
    // Menampilkan semua data pinjam barang
    public function index()
    {
        $pinjamBarangs = Pinjam_Barang::all(); // Ambil semua data pinjam barang
        return view('pinjam_barang.index', compact('pinjamBarangs')); // Pastikan nama file Blade sesuai
    }

    // Menampilkan form untuk membuat pinjam barang baru
    public function create()
    {
        return view('pinjam_barang.create'); // Tampilkan form untuk menambah pinjam barang
    }

    // Menyimpan data pinjam barang ke database
    public function store(Request $request)
    {
        // Validasi dan simpan data pinjam barang baru
        $request->validate([
            'peminjam' => 'required|string|max:255',
            'tgl_pinjam' => 'required|date',
            'id_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:255',
            'jml_barang' => 'required|integer',
            'tgl_kembali' => 'nullable|date',
            'kondisi' => 'nullable|string',
        ]);

        Pinjam_Barang::create($request->all()); // Simpan data pinjam barang baru

        return redirect()->route('pinjam_barang.index')->with('success', 'Pinjam barang created successfully.');
    }

    // Menampilkan form untuk mengedit pinjam barang
    public function edit($id)
    {
        $pinjamBarang = Pinjam_Barang::findOrFail($id); // Ambil data pinjam barang berdasarkan ID
        return view('pinjam_barang.edit', compact('pinjamBarang')); // Pastikan nama file Blade sesuai
    }

    // Mengupdate data pinjam barang
    public function update(Request $request, $id)
    {
        // Validasi dan update data pinjam barang
        $request->validate([
            'peminjam' => 'required|string|max:255',
            'tgl_pinjam' => 'required|date',
            'id_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:255',
            'jml_barang' => 'required|integer',
            'tgl_kembali' => 'nullable|date',
            'kondisi' => 'nullable|string',
        ]);

        $pinjamBarang = Pinjam_Barang::findOrFail($id);
        $pinjamBarang->update($request->all());

        return redirect()->route('pinjam_barang.index')->with('success', 'Pinjam barang updated successfully.');
    }

    // Menghapus data pinjam barang
    public function destroy($id)
    {
        $pinjamBarang = Pinjam_Barang::findOrFail($id); // Ambil data pinjam barang berdasarkan ID
        $pinjamBarang->delete(); // Hapus pinjam barang

        return redirect()->route('pinjam_barang.index')->with('success', 'Pinjam barang deleted successfully.');
    }
}
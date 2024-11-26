<?php

// app/Http/Controllers/BarangController.php
namespace App\Http\Controllers;

use App\Models\Barang; // Pastikan Anda menggunakan model yang benar
use Illuminate\Http\Request;

class BarangController extends Controller
{
    // Menampilkan semua data barang
    public function index()
    {
        $barangs = Barang::all(); // Ambil semua data barang
        return view('barang.index', compact('barangs')); // Pastikan nama file Blade sesuai
    }

    // Menampilkan form untuk membuat barang baru
    public function create()
    {
        return view('barang.create'); // Tampilkan form untuk menambah barang
    }

    // Menyimpan data barang ke database
    public function store(Request $request)
    {
        // Validasi dan simpan data barang baru
        $request->validate([
            'id_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:255',
            'spesifikasi' => 'nullable|string',
            'lokasi' => 'nullable|string',
            'kondisi' => 'nullable|string',
            'jumlah_barang' => 'required|integer',
            'sumber_dana' => 'nullable|string',
        ]);

        Barang::create($request->all()); // Simpan data barang baru

        return redirect()->route('barang.index')->with('success', 'Barang created successfully.');
    }

    // Menampilkan form untuk mengedit barang
    public function edit($id)
    {
        $barang = Barang::findOrFail($id); // Ambil data barang berdasarkan ID
        return view('barang.edit', compact('barang')); // Pastikan nama file Blade sesuai
    }

    // Mengupdate data barang
    public function update(Request $request, $id)
    {
        // Validasi dan update data barang
        $request->validate([
            'id_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:255',
            'spesifikasi' => 'nullable|string',
            'lokasi' => 'nullable|string',
            'kondisi' => 'nullable|string',
            'jumlah_barang' => 'required|integer',
            'sumber_dana' => 'nullable|string',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->update($request->all());

        return redirect()->route('barang.index')->with('success', 'Barang updated successfully.');
    }

    // Menghapus data barang
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id); // Ambil data barang berdasarkan ID
        $barang->delete(); // Hapus barang

        return redirect()->route('barang.index')->with('success', 'Barang deleted successfully.');
    }
}
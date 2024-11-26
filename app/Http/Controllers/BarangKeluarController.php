<?php

// app/Http/Controllers/BarangKeluarController.php
namespace App\Http\Controllers;

use App\Models\Barang_Keluar; // Pastikan Anda menggunakan model yang benar
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    // Menampilkan semua data barang keluar
    public function index()
    {
        $barangKeluar = Barang_Keluar::all(); // Ambil semua data barang keluar
        return view('barang_keluar.index', compact('barangKeluar')); // Pastikan nama file Blade sesuai
    }

    // Menampilkan form untuk membuat barang keluar baru
    public function create()
    {
        return view('barang_keluar.create'); // Tampilkan form untuk menambah barang keluar
    }

    // Menyimpan data barang keluar ke database
    public function store(Request $request)
    {
        // Validasi dan simpan data barang keluar baru
        $request->validate([
            'id_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:255',
            'tgl_keluar' => 'required|date',
            'jml_keluar' => 'required|integer',
            'lokasi' => 'nullable|string',
            'penerima' => 'nullable|string',
        ]);

        Barang_Keluar::create($request->all()); // Simpan data barang keluar baru

        return redirect()->route('barang_keluar.index')->with('success', 'Barang keluar created successfully.');
    }

    // Menampilkan form untuk mengedit barang keluar
    public function edit($id)
    {
        $barangKeluar = Barang_Keluar::findOrFail($id); // Ambil data barang keluar berdasarkan ID
        return view('barang_keluar.edit', compact('barangKeluar')); // Pastikan nama file Blade sesuai
    }

    // Mengupdate data barang keluar
    public function update(Request $request, $id)
    {
        // Validasi dan update data barang keluar
        $request->validate([
            'id_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:255',
            'tgl_keluar' => 'required|date',
            'jml_keluar' => 'required|integer',
            'lokasi' => 'nullable|string',
            'penerima' => 'nullable|string',
        ]);

        $barangKeluar = Barang_Keluar::findOrFail($id);
        $barangKeluar->update($request->all());

        return redirect()->route('barang_keluar.index')->with('success', 'Barang keluar updated successfully.');
    }

    // Menghapus data barang keluar
    public function destroy($id)
    {
        $barangKeluar = Barang_Keluar::findOrFail($id); // Ambil data barang keluar berdasarkan ID
        $barangKeluar->delete(); // Hapus barang keluar

        return redirect()->route('barang_keluar.index')->with('success', 'Barang keluar deleted successfully.');
    }
}
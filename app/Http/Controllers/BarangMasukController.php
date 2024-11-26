<?php

// app/Http/Controllers/BarangMasukController.php
namespace App\Http\Controllers;

use App\Models\Barang_Masuk; // Pastikan Anda menggunakan model yang benar
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    // Menampilkan semua data barang masuk
    public function index()
    {
        $barangMasuk = Barang_Masuk::all(); // Ambil semua data barang masuk
        return view('barang_masuk.index', compact('barangMasuk')); // Pastikan nama file Blade sesuai
    }

    // Menampilkan form untuk membuat barang masuk baru
    public function create()
    {
        return view('barang_masuk.create'); // Tampilkan form untuk menambah barang masuk
    }

    // Menyimpan data barang masuk ke database
    public function store(Request $request)
    {
        // Validasi dan simpan data barang masuk baru
        $request->validate([
            'id_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:255',
            'tgl_masuk' => 'required|date',
            'jml_masuk' => 'required|integer',
            'id_suplier' => 'required|integer',
        ]);

        Barang_Masuk::create($request->all()); // Simpan data barang masuk baru

        return redirect()->route('barang_masuk.index')->with('success', 'Barang masuk created successfully.');
    }

    // Menampilkan form untuk mengedit barang masuk
    public function edit($id)
    {
        $barangMasuk = Barang_Masuk::findOrFail($id); // Ambil data barang masuk berdasarkan ID
        return view('barang_masuk.edit', compact('barangMasuk')); // Pastikan nama file Blade sesuai
    }

    // Mengupdate data barang masuk
    public function update(Request $request, $id)
    {
        // Validasi dan update data barang masuk
        $request->validate([
            'id_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:255',
            'tgl_masuk' => 'required|date',
            'jml_masuk' => 'required|integer',
            'id_suplier' => 'required|integer',
        ]);

        $barangMasuk = Barang_Masuk::findOrFail($id);
        $barangMasuk->update($request->all());

        return redirect()->route('barang_masuk.index')->with('success', 'Barang masuk updated successfully.');
    }

    // Menghapus data barang masuk
    public function destroy($id)
    {
        $barangMasuk = Barang_Masuk::findOrFail($id); // Ambil data barang masuk berdasarkan ID
        $barangMasuk->delete(); // Hapus barang masuk

        return redirect()->route('barang_masuk.index')->with('success', 'Barang masuk deleted successfully.');
    }
}
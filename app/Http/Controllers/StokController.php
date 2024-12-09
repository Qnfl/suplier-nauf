<?php

namespace App\Http\Controllers;

use App\Models\Stok; // Model Stok
use Illuminate\Http\Request;

class StokController extends Controller
{
    // Menampilkan semua data stok
    public function index()
    {
        $stoks = Stok::all(); // Ambil semua data stok
        return view('stok.index', compact('stoks')); // Pastikan file Blade stok.index ada
    }

    // Menampilkan form untuk membuat stok baru
    public function create()
    {
        return view('stok.create'); // Pastikan file Blade stok.create ada
    }

    // Menyimpan data stok ke database
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'jml_masuk' => 'required|integer|min:0',
            'jml_keluar' => 'required|integer|min:0',
            'total_barang' => 'required|integer|min:0',
        ]);

        // Simpan data ke database
        Stok::create([
            'nama_barang' => $request->nama_barang,
            'jml_masuk' => $request->jml_masuk,
            'jml_keluar' => $request->jml_keluar,
            'total_barang' => $request->total_barang,
        ]);

        return redirect()->route('stok.index')->with('success', 'Stok berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit stok
    public function edit($id)
    {
        $stok = Stok::findOrFail($id); // Cari data stok berdasarkan ID
        return view('stok.edit', compact('stok')); // Pastikan file Blade stok.edit ada
    }

    // Mengupdate data stok
    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'jml_masuk' => 'required|integer|min:0',
            'jml_keluar' => 'required|integer|min:0',
            'total_barang' => 'required|integer|min:0',
        ]);

        // Cari data stok berdasarkan ID dan update
        $stok = Stok::findOrFail($id);
        $stok->update([
            'nama_barang' => $request->nama_barang,
            'jml_masuk' => $request->jml_masuk,
            'jml_keluar' => $request->jml_keluar,
            'total_barang' => $request->total_barang,
        ]);

        return redirect()->route('stok.index')->with('success', 'Stok berhasil diperbarui.');
    }

    // Menghapus data stok
    public function destroy($id)
    {
        $stok = Stok::findOrFail($id); // Cari data stok berdasarkan ID
        $stok->delete(); // Hapus stok

        return redirect()->route('stok.index')->with('success', 'Stok berhasil dihapus.');
    }
}

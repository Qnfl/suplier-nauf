<?php

namespace App\Http\Controllers;

use App\Models\Barang_Masuk; // Nama model disesuaikan
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    // Menampilkan semua data barang masuk
    public function index()
    {
        $barangMasuk = Barang_Masuk::all(); // Ambil semua data barang masuk
        return view('barang_masuk.index', compact('barangMasuk')); // Tampilkan ke view
    }

    // Menampilkan form untuk membuat barang masuk baru
    public function create()
    {
        return view('barang_masuk.create'); // Tampilkan form
    }

    // Menyimpan data barang masuk ke database
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'tgl_masuk' => 'required|date',
            'jml_masuk' => 'required|integer|min:1', // Tidak boleh negatif
        ]);

        // Simpan data barang masuk baru
        Barang_Masuk::create([
            'nama_barang' => $validatedData['nama_barang'],
            'tgl_masuk' => $validatedData['tgl_masuk'],
            'jml_masuk' => $validatedData['jml_masuk'],
        ]);

        return redirect()->route('barang_masuk.index')->with('success', 'Barang masuk berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit barang masuk
    public function edit($id_barang)
    {
        $barangMasuk = Barang_Masuk::findOrFail($id_barang); // Ambil data berdasarkan ID
        return view('barang_masuk.edit', compact('barangMasuk'));
    }

    // Mengupdate data barang masuk
    public function update(Request $request, $id_barang)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'tgl_masuk' => 'required|date',
            'jml_masuk' => 'required|integer|min:1',
        ]);

        // Update data barang masuk
        $barangMasuk = Barang_Masuk::findOrFail($id_barang);
        $barangMasuk->update([
            'nama_barang' => $validatedData['nama_barang'],
            'tgl_masuk' => $validatedData['tgl_masuk'],
            'jml_masuk' => $validatedData['jml_masuk'],
        ]);

        return redirect()->route('barang_masuk.index')->with('success', 'Barang masuk berhasil diperbarui.');
    }

    // Menghapus data barang masuk
    public function destroy($id_barang)
    {
        $barangMasuk = Barang_Masuk::findOrFail($id_barang); // Cari data berdasarkan ID
        $barangMasuk->delete(); // Hapus data

        return redirect()->route('barang_masuk.index')->with('success', 'Barang masuk berhasil dihapus.');
    }
}

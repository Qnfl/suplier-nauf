<?php

namespace App\Http\Controllers;

use App\Models\Barang_Keluar; // Pastikan model sesuai dengan nama tabel Anda
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
        // Validasi data yang diterima
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'tgl_keluar' => 'required|date',
            'jml_keluar' => 'required|integer',
        ]);

        // Simpan data barang keluar baru
        Barang_Keluar::create($request->only(['nama_barang', 'tgl_keluar', 'jml_keluar']));

        return redirect()->route('barang_keluar.index')->with('success', 'Barang keluar created successfully.');
    }

    // Menampilkan form untuk mengedit barang keluar
    public function edit($id)
    {
        $barangKeluar = Barang_Keluar::where('id_barang', $id)->firstOrFail();
        return view('barang_keluar.edit', compact('barangKeluar'));
    }

    // Mengupdate data barang keluar
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'tgl_keluar' => 'required|date',
            'jml_keluar' => 'required|integer',
        ]);

        $barangKeluar = Barang_Keluar::where('id_barang', $id)->firstOrFail();
        $barangKeluar->update($request->only(['nama_barang', 'tgl_keluar', 'jml_keluar']));

        return redirect()->route('barang_keluar.index')->with('success', 'Barang keluar updated successfully.');
    }

    // Menghapus data barang keluar
    public function destroy($id)
    {
        $barangKeluar = Barang_Keluar::where('id_barang', $id)->firstOrFail();
        $barangKeluar->delete();

        return redirect()->route('barang_keluar.index')->with('success', 'Barang keluar deleted successfully.');
    }
}

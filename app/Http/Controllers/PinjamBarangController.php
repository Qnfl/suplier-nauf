<?php

namespace App\Http\Controllers;

use App\Models\Pinjam_Barang; // Pastikan model sesuai dengan nama tabel
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
        // Validasi data yang diterima
        $request->validate([
            'peminjam' => 'required|string|max:255',
            'tgl_pinjam' => 'required|date',
            'jml_barang' => 'required|integer',
        ]);

        // Simpan data pinjam barang baru
        Pinjam_Barang::create($request->only(['peminjam', 'tgl_pinjam', 'jml_barang']));

        return redirect()->route('pinjam_barang.index')->with('success', 'Pinjam barang created successfully.');
    }

    // Menampilkan form untuk mengedit pinjam barang
    public function edit($id)
    {
        $pinjam = Pinjam_Barang::where('id_pinjam', $id)->firstOrFail(); // Ubah nama variabel
        return view('pinjam_barang.edit', compact('pinjam')); // Sesuaikan dengan nama di view
    }

    // Mengupdate data pinjam barang
    public function update(Request $request, $id)
    {
        $request->validate([
            'peminjam' => 'required|string|max:255',
            'tgl_pinjam' => 'required|date',
            'jml_barang' => 'required|integer',
        ]);

        $pinjam = Pinjam_Barang::where('id_pinjam', $id)->firstOrFail(); // Ubah nama variabel
        $pinjam->update($request->only(['peminjam', 'tgl_pinjam', 'jml_barang']));

        return redirect()->route('pinjam_barang.index')->with('success', 'Pinjam barang updated successfully.');
    }

    // Menghapus data pinjam barang
    public function destroy($id)
    {
        $pinjam = Pinjam_Barang::where('id_pinjam', $id)->firstOrFail(); // Ubah nama variabel
        $pinjam->delete();

        return redirect()->route('pinjam_barang.index')->with('success', 'Pinjam barang deleted successfully.');
    }
}

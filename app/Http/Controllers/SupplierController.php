<?php

// app/Http/Controllers/SupplierController.php
namespace App\Http\Controllers;

use App\Models\Supplier; // Pastikan Anda menggunakan model yang benar
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $supliers = Supplier::all(); // Ambil semua data supplier
        return view('suplier.index', compact('supliers')); // Pastikan nama file Blade sesuai
    }

    public function create()
    {
        return view('suplier.create'); // Tampilkan form untuk menambah supplier
    }

    public function store(Request $request)
    {
        // Validasi dan simpan data supplier baru
        $request->validate([
            'nama_suplier' => 'required|string|max:255',
            'alamat_suplier' => 'required|string',
            'telp_suplier' => 'required|string',
        ]);

        Supplier::create($request->all()); // Simpan data supplier baru

        return redirect()->route('suplier.index')->with('success', 'Supplier created successfully.');
    }

    public function edit($id)
    {
        $suplier = Supplier::findOrFail($id); // Ambil data supplier berdasarkan ID
        return view('suplier.edit', compact('suplier')); // Pastikan nama file Blade sesuai
    }

    public function update(Request $request, $id)
    {
        // Validasi dan update data supplier
        $request->validate([
            'nama_suplier' => 'required|string|max:255',
            'alamat_suplier' => 'required|string',
            'telp_suplier' => 'required|string',
        ]);

        $suplier = Supplier::findOrFail($id);
        $suplier->update($request->all());

        return redirect()->route('suplier.index')->with('success', 'Supplier updated successfully.');
    }
}
@extends('layouts.app')

@section('content')
<div class="max-w-[720px] mx-auto py-8">
  <h1 class="text-2xl font-bold mb-4">Tambah Pinjam Barang</h1>
  <form action="{{ route('pinjam_barang.store') }}" method="POST">
    @csrf

    <div class="mb-4">
      <label for="peminjam" class="block text-sm font-medium text-gray-900">Peminjam</label>
      <input type="text" name="peminjam" id="peminjam" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600" required>
    </div>

    <div class="mb-4">
      <label for="tgl_pinjam" class="block text-sm font-medium text-gray-900">Tanggal Pinjam</label>
      <input type="date" name="tgl_pinjam" id="tgl_pinjam" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600" required>
    </div>

    <div class="mb-4">
      <label for="jml_barang" class="block text-sm font-medium text-gray-900">Jumlah Barang</label>
      <input type="number" name="jml_barang" id="jml_barang" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600" required>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan</button>
    </div>
  </form>
</div>
@endsection
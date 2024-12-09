@extends('layouts.app')

@section('content')
<div class="max-w-[720px] mx-auto py-8">
  <h1 class="text-2xl font-bold mb-4">Edit Barang Masuk</h1>
  <form action="{{ route('barang_masuk.update', $barangMasuk->id_barang) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-4">
      <label for="nama_barang" class="block text-sm font-medium text-gray-900">Nama Barang</label>
      <input type="text" name="nama_barang" id="nama_barang" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600" value="{{ $barangMasuk->nama_barang }}" required>
    </div>

    <div class="mb-4">
      <label for="tgl_masuk" class="block text-sm font-medium text-gray-900">Tanggal Masuk</label>
      <input type="date" name="tgl_masuk" id="tgl_masuk" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600" value="{{ $barangMasuk->tgl_masuk }}" required>
    </div>

    <div class="mb-4">
      <label for="jml_masuk" class="block text-sm font-medium text-gray-900">Jumlah Masuk</label>
      <input type="number" name="jml_masuk" id="jml_masuk" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600" value="{{ $barangMasuk->jml_masuk }}" required>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
    </div>
  </form>
</div>
@endsection
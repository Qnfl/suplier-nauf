@extends('layouts.app')

@section('content')
<div class="max-w-[720px] mx-auto py-8">
  <h1 class="text-2xl font-bold mb-4">Daftar Barang Masuk</h1>
  <a href="{{ route('barang_masuk.create') }}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Tambah Barang Masuk</a>

  <div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-200">
      <thead>
        <tr class="bg-gray-100">
          <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-600">ID</th>
          <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-600">Nama Barang</th>
          <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-600">Tanggal Masuk</th>
          <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-600">Jumlah Masuk</th>
          <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-600">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($barangMasuk as $barang)
        <tr class="hover:bg-gray-50">
          <td class="py-2 px-4 border-b border-gray-200">{{ $barang->id_barang }}</td>
          <td class="py-2 px-4 border-b border-gray-200">{{ $barang->nama_barang }}</td>
          <td class="py-2 px-4 border-b border-gray-200">{{ $barang->tgl_masuk }}</td>
          <td class="py-2 px-4 border-b border-gray-200">{{ $barang->jml_masuk }}</td>
          <td class="py-2 px-4 border-b border-gray-200">
            <a href="{{ route('barang_masuk.edit', $barang->id_barang) }}" class="bg-blue-500 hover:bg-yellow-400 text-white font-bold py-1 px-3 rounded">Edit</a>
            <form action="{{ route('barang_masuk.destroy', $barang->id_barang) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="bg-red-500 hover:bg-red-400 text-white font-bold py-1 px-3 rounded">Hapus</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
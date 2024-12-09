@extends('layouts.app')

@section('content')
<div class="max-w-[720px] mx-auto py-8">
  <h1 class="text-2xl font-bold mb-4">Daftar Stok</h1>
  <a href="{{ route('stok.create') }}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Tambah Stok</a>

  <div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-200">
      <thead>
        <tr class="bg-gray-100">
          <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-600">ID</th>
          <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-600">Nama Barang</th>
          <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-600">Jumlah Masuk</th>
          <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-600">Jumlah Keluar</th>
          <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-600">Total Barang</th>
          <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-600">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($stoks as $stok)
        <tr class="hover:bg-gray-50">
          <td class="py-2 px-4 border-b border-gray-200">{{ $stok->id_barang }}</td>
          <td class="py-2 px-4 border-b border-gray-200">{{ $stok->nama_barang }}</td>
          <td class="py-2 px-4 border-b border-gray-200">{{ $stok->jml_masuk }}</td>
          <td class="py-2 px-4 border-b border-gray-200">{{ $stok->jml_keluar }}</td>
          <td class="py-2 px-4 border-b border-gray-200">{{ $stok->total_barang }}</td>
          <td class="py-2 px-4 border-b border-gray-200">
            <!-- Edit Action -->
            <a href="{{ route('stok.edit', ['id' => $stok->id_barang]) }}" class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-1 px-3 rounded">Edit</a>

            <!-- Delete Form -->
            <form action="{{ route('stok.destroy', ['id' => $stok->id_barang]) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="bg-red-500 hover:bg-red-400 text-white font-bold py-1 px-3 rounded" onclick="return confirm('Yakin ingin menghapus stok ini?')">Hapus</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
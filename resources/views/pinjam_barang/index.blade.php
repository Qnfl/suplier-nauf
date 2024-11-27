@extends('layouts.app')

@section('content')
<div class="max-w-[720px] mx-auto py-8">
  <h1 class="text-2xl font-bold mb-4">Daftar Pinjam Barang</h1>
  <a href="{{ route('pinjam_barang.create') }}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Tambah Pinjam Barang</a>

  <div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-200">
      <thead>
        <tr class="bg-gray-100">
          <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-600">ID</th>
          <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-600">Peminjam</th>
          <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-600">Tanggal Pinjam</th>
          <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-600">Jumlah Barang</th>
          <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-600">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pinjamBarangs as $pinjam)
        <tr class="hover:bg-gray-50">
          <td class="py-2 px-4 border-b border-gray-200">{{ $pinjam->id_pinjam }}</td>
          <td class="py-2 px-4 border-b border-gray-200">{{ $pinjam->peminjam }}</td>
          <td class="py-2 px-4 border-b border-gray-200">{{ $pinjam->tgl_pinjam }}</td>
          <td class="py-2 px-4 border-b border-gray-200">{{ $pinjam->jml_barang }}</td>
          <td class="py-2 px-4 border-b border-gray-200">
            <a href="{{ route('pinjam_barang.edit', $pinjam->id_pinjam) }}" class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-1 px-3 rounded">Edit</a>
            <form action="{{ route('pinjam_barang.destroy', $pinjam->id_pinjam) }}" method="POST" style="display:inline;">
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
@extends('layouts.app')

@section('content')
<div class="max-w-[720px] mx-auto py-8">
  <h1 class="text-2xl font-bold mb-4">Daftar Pengguna</h1>
  <a href="{{ route('user.create') }}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Tambah Pengguna</a>

  <div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-200">
      <thead>
        <tr class="bg-gray-100">
          <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-600">ID</th>
          <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-600">Nama</th>
          <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-600">Username</th>
          <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-600">Level</th>
          <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-600">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr class="hover:bg-gray-50">
          <td class="py-2 px-4 border-b border-gray-200">{{ $user->id_user }}</td>
          <td class="py-2 px-4 border-b border-gray-200">{{ $user->nama }}</td>
          <td class="py-2 px-4 border-b border-gray-200">{{ $user->username }}</td>
          <td class="py-2 px-4 border-b border-gray-200">{{ $user->level }}</td>
          <td class="py-2 px-4 border-b border-gray-200">
            <a href="{{ route('user.edit', $user->id_user) }}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-1 px-3 rounded">Edit</a>
            <form action="{{ route('user.destroy', $user->id_user) }}" method="POST" style="display:inline;">
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
@extends('layouts.app')

@section('content')
<div class="max-w-[720px] mx-auto py-8">
  <h1 class="text-2xl font-bold mb-4">Tambah Pengguna</h1>

  @if ($errors->any())
  <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form action="{{ route('user.store') }}" method="POST">
    @csrf

    <div class="mb-4">
      <label for="nama" class="block text-sm font-medium text-gray-900">Nama</label>
      <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600" required>
    </div>

    <div class="mb-4">
      <label for="username" class="block text-sm font-medium text-gray-900">Username</label>
      <input type="text" name="username" id="username" value="{{ old('username') }}" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600" required>
    </div>

    <div class="mb-4">
      <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
      <input type="password" name="password" id="password" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600" required>
    </div>

    <div class="mb-4">
      <label for="level" class="block text-sm font-medium text-gray-900">Level</label>
      <select name="level" id="level" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600" required>
        <option value="">Pilih Level</option>
        <option value="admin" {{ old('level') == 'admin' ? 'selected' : '' }}>Admin</option>
        <option value="user" {{ old('level') == 'user' ? 'selected' : '' }}>User</option>
      </select>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="{{ route('user.index') }}" class="text-sm font-semibold text-gray-900">Cancel</a>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan</button>
    </div>
  </form>
</div>
@endsection
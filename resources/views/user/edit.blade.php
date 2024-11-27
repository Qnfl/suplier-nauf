@extends('layouts.app')

@section('content')
<div class="max-w-[720px] mx-auto py-8">
  <h1 class="text-2xl font-bold mb-4">Edit Pengguna</h1>
  <form action="{{ route('user.update', $user->id_user) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-4">
      <label for="nama" class="block text-sm font-medium text-gray-900">Nama</label>
      <input type="text" name="nama" id="nama" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600" value="{{ $user->nama }}" required>
    </div>

    <div class="mb-4">
      <label for="username" class="block text-sm font-medium text-gray-900">Username</label>
      <input type="text" name="username" id="username" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600" value="{{ $user->username }}" required>
    </div>

    <div class="mb-4">
      <label for="level" class="block text-sm font-medium text-gray-900">Level</label>
      <input type="text" name="level" id="level" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600" value="{{ $user->level }}" required>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
    </div>
  </form>
</div>
@endsection
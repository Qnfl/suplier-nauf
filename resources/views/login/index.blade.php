@extends('layouts.app')

@section('content')
<!-- component -->
<div class="max-w-[720px] mx-auto py-32 sm:py-8 lg:py-16">

  <div class="w-full flex justify-center items-center mb-3 mt-1 pl-3">
    <div>
      <h3 class="text-lg font-semibold text-slate-800">Login</h3>
      <p class="text-slate-500">Please enter your credentials to continue.</p>
    </div>
  </div>

  <div class="relative flex flex-col w-full h-full bg-white shadow-md rounded-lg bg-clip-border p-6">
    <form action="{{ route('login') }}" method="POST">
      @csrf
      <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-slate-700">Name</label>
        <input type="text" id="name" name="name" required
          class="bg-white w-full h-10 pl-3 py-2 placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded transition duration-200 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
          placeholder="Enter your name" />
      </div>

      <div class="mb-4">
        <label for="username" class="block text-sm font-medium text-slate-700">Username</label>
        <input type="text" id="username" name="username" required
          class="bg-white w-full h-10 pl-3 py-2 placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded transition duration-200 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
          placeholder="Enter your username" />
      </div>

      <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-slate-700">Password</label>
        <input type="password" id="password" name="password" required
          class="bg-white w-full h-10 pl-3 py-2 placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded transition duration-200 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
          placeholder="Enter your password" />
      </div>

      <button type="submit"
        class="w-full bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded transition duration-200 ease">
        Login
      </button>
    </form>
  </div>

</div>
@endsection
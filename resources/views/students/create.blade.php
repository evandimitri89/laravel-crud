@extends('layouts.app')

@section('title', 'Tambah Siswa')

@section('content')
  <h1 class="text-2xl font-bold mb-4">Tambah Siswa</h1>

  <form class="space-y-4" method="POST" action="{{ route('students.store') }}">
    @csrf
    <div class="space-y-2">
      <label for="name" class="font-medium block">Nama</label>
      <input type="text" name="name" id="name" placeholder="Masukkan Nama Siswa" class="w-full p-2 border rounded"
        value="{{ old('name') }}">
      @error('name')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
      @enderror
    </div>

    <div class="space-y-2">
      <label for="email" class="font-medium block">Email</label>
      <input type="email" name="email" id="email" placeholder="Masukkan Email Siswa"
        class="w-full p-2 border rounded" value="{{ old('email') }}">
      @error('email')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
      @enderror
    </div>

    <div class="space-y-2">
      <label for="nis" class="font-medium block">Nomor Induk Siswa</label>
      <input type="text" name="nis" id="nis" placeholder="Masukkan Nomor Induk Siswa"
        class="w-full p-2 border rounded" value="{{ old('nis') }}">
      @error('nis')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
      @enderror
    </div>

    <div class="space-y-2">
      <label for="birthday" class="font-medium block">Tanggal Lahir</label>
      <input type="date" name="birthday" id="birthday" class="w-full p-2 border rounded"
        value="{{ old('birthday') }}">
      @error('birthday')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
      @enderror
    </div>

    <div class="space-y-2">
      <label for="address" class="font-medium block">Alamat</label>
      <textarea name="address" id="address" id="address" class="w-full border rounded p-2"
        placeholder="Masukkan Alamat Siswa"></textarea>
      @error('address')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
      @enderror
    </div>

    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Simpan</button>
  </form>
@endsection

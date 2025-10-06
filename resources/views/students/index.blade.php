@extends('layouts.app')

@section('title', 'Daftar Siswa')
@session('success')
  <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
    {{ session('success') }}
  </div>
@endsession

@section('content')
  <div class="flex justify-between mb-4">
    <h1 class="text-2xl font-bold">Daftar Siswa</h1>
    <a href="{{ route('students.create') }}" class="px-4 py-2 text-center bg-blue-500 text-white rounded">Tambah</a>
  </div>
  <form method="GET" action="{{ route('students.index') }}" class="mb-4 flex gap-2">
    <input type="text" name="search" value="{{ $search }}" class="px-3 py-2 border rounded w-full"
      placeholder="Cari siswa...">
    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Cari</button>
  </form>

  <table class="w-full bg-white shadow rounded">
    <thead class="bg-gray-200">
      <tr>
        <th class="px-4 py-2 text-center">No</th>
        <th class="px-4 py-2 text-center">Nama</th>
        <th class="px-4 py-2 text-center">Email</th>
        <th class="px-4 py-2 text-center">Telepon</th>
        <th class="px-4 py-2 text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($students as $index => $student)
        <tr class="border-b">
          <td class="px-4 py-2 text-center">{{ $students->firstItem() + $index }}</td>
          <td class="px-4 py-2 text-center">{{ $student->name }}</td>
          <td class="px-4 py-2 text-center">{{ $student->email }}</td>
          <td class="px-4 py-2 text-center">{{ $student->nis }}</td>
          <td class="px-4 py-2 text-center flex space-x-2">
            <div class="flex justify-center gap-2 w-full">
              <a class="px-2 py-1 bg-yellow-500 text-white rounded"
                href="{{ route('students.edit', ['student' => $student->id]) }}">Edit</a>
              <form action="{{ route('students.destroy', ['student' => $student->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-2 py-1 bg-red-500 text-white rounded"
                  onclick="return confirm('Are you sure you want to delete this student?')">Hapus</button>
              </form>
            </div>
          </td>
        </tr>
      @endforeach

    </tbody>
  </table>
  <div class="mt-4">
    {{ $students->links() }}
  </div>

@endsection

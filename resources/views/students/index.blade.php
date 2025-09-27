@extends('layouts.app')

@section('title', 'Daftar Siswa')

@section('content')
    <div class="flex justify-between mb-4">
        <h1 class="text-2xl font-bold">Daftar Siswa</h1>
        <a href="{{ route('students.create') }}" class="px-4 py-2 text-center bg-blue-500 text-white rounded">Tambah</a>
    </div>

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
            <tr class="border-b">
                <td class="px-4 py-2 text-center">1</td>
                <td class="px-4 py-2 text-center">Andi</td>
                <td class="px-4 py-2 text-center">andi@ski.sch.id</td>
                <td class="px-4 py-2 text-center">08127329823232</td>
                <td class="px-4 py-2 text-center flex space-x-2">
                    <div class="flex justify-center gap-2 w-full">
                        <a class="px-2 py-1 bg-yellow-500 text-white rounded">Edit</a>
                        <button class="px-2 py-1 bg-red-500 text-white rounded">Hapus</button>
                    </div>
                </td>
            </tr>
            <tr class="border-b">
                <td class="px-4 py-2 text-center">2</td>
                <td class="px-4 py-2 text-center">Budi</td>
                <td class="px-4 py-2 text-center">budi@ski.sch.id</td>
                <td class="px-4 py-2 text-center">08129060485933</td>
                <td class="px-4 py-2 text-center flex space-x-2">
                    <div class="flex justify-center gap-2 w-full">
                        <a class="px-2 py-1 bg-yellow-500 text-white rounded">Edit</a>
                        <button class="px-2 py-1 bg-red-500 text-white rounded">Hapus</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
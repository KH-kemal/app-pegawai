@extends('master')

@section('content')

<div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-3xl mx-auto">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Detail Pegawai</h1>

    <div class="grid grid-cols-2 gap-6">
        <div>
            <p class="text-sm text-gray-500">Nama Lengkap</p>
            <p class="font-semibold text-gray-800">{{ $employee->nama_lengkap }}</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Email</p>
            <p class="font-semibold text-gray-800">{{ $employee->email }}</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Nomor Telepon</p>
            <p class="font-semibold text-gray-800">{{ $employee->nomor_telepon }}</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Tanggal Lahir</p>
            <p class="font-semibold text-gray-800">{{ $employee->tanggal_lahir }}</p>
        </div>

        <div class="col-span-2">
            <p class="text-sm text-gray-500">Alamat</p>
            <p class="font-semibold text-gray-800">{{ $employee->alamat }}</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Tanggal Masuk</p>
            <p class="font-semibold text-gray-800">{{ $employee->tanggal_masuk }}</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Departemen</p>
            <p class="font-semibold text-gray-800">{{ $employee->department->nama_departemen ?? '-' }}</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Jabatan</p>
            <p class="font-semibold text-gray-800">{{ $employee->position->nama_jabatan ?? '-' }}</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Status</p>
            <span class="px-3 py-1 rounded text-white text-sm
                {{ $employee->status == 'aktif' ? 'bg-green-500' : 'bg-red-500' }}">
                {{ ucfirst($employee->status) }}
            </span>
        </div>
    </div>

    <div class="mt-8 flex gap-3">
        <a href="{{ route('employees.index') }}"
            class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">
            Kembali
        </a>
        <a href="{{ route('employees.edit', $employee->id) }}"
            class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">
            Edit
        </a>
        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST"
              onsubmit="return confirm('Yakin ingin menghapus data ini?');">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">
                Hapus
            </button>
        </form>
    </div>
</div>
@endsection

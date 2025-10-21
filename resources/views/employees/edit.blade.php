@extends('master')

@section('content')

<div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-lg mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Edit Data Pegawai</h1>
        <a href="{{ route('employees.index') }}"
           class="bg-gray-500 text-white px-4 py-2 rounded-lg shadow hover:bg-gray-600">
           ← Kembali
        </a>
    </div>

    @if ($errors->any())
    <div class="mb-4 p-3 bg-red-100 text-red-800 rounded-lg">
        <strong>Terjadi kesalahan!</strong>
        <ul class="list-disc ml-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('employees.update', $employee->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap', $employee->nama_lengkap) }}"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm 
                       focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" value="{{ old('email', $employee->email) }}"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm 
                       focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
            <input type="text" name="nomor_telepon" value="{{ old('nomor_telepon', $employee->nomor_telepon) }}"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm 
                       focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $employee->tanggal_lahir) }}"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm 
                       focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Alamat</label>
            <textarea name="alamat" rows="3"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm 
                       focus:ring-blue-500 focus:border-blue-500 p-2.5 border">{{ old('alamat', $employee->alamat) }}</textarea>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk" value="{{ old('tanggal_masuk', $employee->tanggal_masuk) }}"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm 
                       focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Departemen</label>
            <select name="departemen_id"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm 
                       focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
                <option value="">-- Pilih Departemen --</option>
                @foreach($departments as $department)
                    <option value="{{ $department->id }}" 
                        {{ old('departemen_id', $employee->departemen_id) == $department->id ? 'selected' : '' }}>
                        {{ $department->nama_departemen }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Jabatan</label>
            <select name="jabatan_id"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm 
                       focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
                <option value="">-- Pilih Jabatan --</option>
                @foreach($positions as $position)
                    <option value="{{ $position->id }}" 
                        {{ old('jabatan_id', $employee->jabatan_id) == $position->id ? 'selected' : '' }}>
                        {{ $position->nama_jabatan }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Status</label>
            <select name="status"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm 
                       focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
                <option value="aktif" {{ old('status', $employee->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="nonaktif" {{ old('status', $employee->status) == 'nonaktif' ? 'selected' : '' }}>Non Aktif</option>
            </select>
        </div>

        <div class="pt-4 flex gap-2">
            <button type="submit"
                class="flex-1 bg-blue-600 text-white font-semibold py-2.5 rounded-lg shadow 
                       hover:bg-blue-700 transition duration-200">
                Simpan Perubahan
            </button>
            <a href="{{ route('employees.index') }}"
                class="flex-1 text-center bg-gray-300 text-gray-800 font-semibold py-2.5 
                       rounded-lg shadow hover:bg-gray-400 transition duration-200">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection

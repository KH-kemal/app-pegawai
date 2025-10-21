@extends('master')

@section('content')
<div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-lg mx-auto">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Form Tambah Pegawai</h1>

    <form action="{{ route('employees.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm 
                       focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" value="{{ old('email') }}"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm 
                       focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
            <input type="text" name="nomor_telepon" value="{{ old('nomor_telepon') }}"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm 
                       focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm 
                       focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Alamat</label>
            <textarea name="alamat" rows="3"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm 
                       focus:ring-blue-500 focus:border-blue-500 p-2.5 border">{{ old('alamat') }}</textarea>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm 
                       focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Departemen</label>
            <select name="departemen_id"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm  focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
                <option disabled selected>Pilih Departemen</option>
                @foreach($departments as $department)
                <option value="{{ $department->id }}">{{ $department->nama_departemen }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Jabatan</label>
            <select name="jabatan_id"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm 
                       focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
                <option disabled selected>Pilih Jabatan</option>
                @foreach($positions as $position)
                <option value="{{ $position->id }}">{{ $position->nama_jabatan }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Status</label>
            <select name="status"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm 
                       focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
                <option value="aktif">Aktif</option>
                <option value="nonaktif">Non Aktif</option>
            </select>
        </div>

        <div class="pt-4 flex gap-2">
            <button type="submit"
                class="flex-1 bg-blue-600 text-white font-semibold py-2.5 rounded-lg shadow 
                       hover:bg-blue-700 transition duration-200">
                Simpan
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
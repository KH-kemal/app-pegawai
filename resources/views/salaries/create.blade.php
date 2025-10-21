@extends('master')

@section('content')
<div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-lg mx-auto">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Form Tambah Data Gaji</h1>

    <form action="{{ route('salaries.store') }}" method="POST" class="space-y-4">
        @csrf

        <!-- Nama Pegawai -->
        <div>
            <label class="block text-sm font-medium text-gray-700">Nama Pegawai</label>
            <select name="karyawan_id"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
                <option disabled selected>Pilih Pegawai</option>
                @foreach($employees as $employee)
                <option value="{{ $employee->id }}">{{ $employee->nama_lengkap }}</option>
                @endforeach
            </select>
        </div>

        <!-- Gaji Pokok -->
        <div>
            <label class="block text-sm font-medium text-gray-700">Gaji Pokok</label>
            <input type="number" name="gaji_pokok" class="mt-1 block w-full border rounded-lg p-2.5">
        </div>

        <!-- Tunjangan -->
        <div>
            <label class="block text-sm font-medium text-gray-700">Tunjangan</label>
            <input type="number" name="tunjangan" class="mt-1 block w-full border rounded-lg p-2.5">
        </div>

        <!-- Potongan -->
        <div>
            <label class="block text-sm font-medium text-gray-700">Potongan</label>
            <input type="number" name="potongan" class="mt-1 block w-full border rounded-lg p-2.5">
        </div>
    
        <div class="pt-4 flex gap-2">
            <button type="submit"
                class="flex-1 bg-blue-600 text-white font-semibold py-2.5 rounded-lg shadow hover:bg-blue-700 transition">
                Simpan
            </button>
            <a href="{{ route('salaries.index') }}"
                class="flex-1 text-center bg-gray-300 text-gray-800 font-semibold py-2.5 
          rounded-lg shadow hover:bg-gray-400 transition duration-200">
                Batal
            </a>

        </div>
    </form>
</div>
@endsection
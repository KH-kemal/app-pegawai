@extends('master')

@section('content')
<div class="bg-white p-6 rounded-2xl shadow-lg max-w-3xl mx-auto">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Form Tambah Data Absensi</h1>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
            <ul class="list-disc ml-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('attendances.store') }}" method="POST" class="space-y-5">
        @csrf

        <!-- Nama Pegawai -->
        <div>
            <label for="karyawan_id" class="block text-gray-700 font-medium mb-1">Nama Pegawai</label>
            <select name="karyawan_id" id="karyawan_id" required
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
                <option value="">-- Pilih Pegawai --</option>
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->nama_lengkap }}</option>
                @endforeach
            </select>
        </div>

        <!-- Tanggal -->
        <div>
            <label for="tanggal" class="block text-gray-700 font-medium mb-1">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" required
                   class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Waktu Masuk -->
        <div>
            <label for="waktu_masuk" class="block text-gray-700 font-medium mb-1">Waktu Masuk</label>
            <input type="time" name="waktu_masuk" id="waktu_masuk"
                   class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Waktu Keluar -->
        <div>
            <label for="waktu_keluar" class="block text-gray-700 font-medium mb-1">Waktu Keluar</label>
            <input type="time" name="waktu_keluar" id="waktu_keluar"
                   class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Status -->
        <div>
            <label for="status" class="block text-gray-700 font-medium mb-1">Status Kehadiran</label>
            <select name="status" id="status" required
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
                <option value="hadir">Hadir</option>
                <option value="izin">Izin</option>
                <option value="sakit">Sakit</option>
                <option value="alpa">Alpa</option>
            </select>
        </div>

        <!-- Tombol -->
        <div class="flex justify-end space-x-3 mt-6">
            <a href="{{ route('attendances.index') }}"
               class="bg-gray-500 text-white px-4 py-2 rounded-lg shadow hover:bg-gray-600">
               Batal
            </a>
            <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700">
                Simpan Data
            </button>
        </div>
    </form>
</div>
@endsection

@extends('master')

@section('content')
<div class="bg-white p-6 rounded-2xl shadow-lg max-w-3xl mx-auto">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Form Edit Data Gaji</h1>

    @if ($errors->any())
    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
        <ul class="list-disc ml-5">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('salaries.update', $salary->id) }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')

        <!-- Nama Pegawai -->
        <div>
            <label for="karyawan_id" class="block text-gray-700 font-medium mb-1">Nama Pegawai</label>
            <select name="karyawan_id" id="karyawan_id" required
                class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
                @foreach ($employees as $employee)
                <option value="{{ $employee->id }}" {{ $salary->karya   wan_id == $employee->id ? 'selected' : '' }}>
                    {{ $employee->nama_lengkap }}
                </option>
                @endforeach
            </select>
        </div>

        <!-- Gaji Pokok -->
        <div>
            <label for="gaji_pokok" class="block text-gray-700 font-medium mb-1">Gaji Pokok</label>
            <input type="number" step="0.01" name="gaji_pokok" id="gaji_pokok" required
                value="{{ old('gaji_pokok', $salary->gaji_pokok) }}"
                class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Tunjangan -->
        <div>
            <label for="tunjangan" class="block text-gray-700 font-medium mb-1">Tunjangan</label>
            <input type="number" step="0.01" name="tunjangan" id="tunjangan"
                value="{{ old('tunjangan', $salary->tunjangan) }}"
                class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Potongan -->
        <div>
            <label for="potongan" class="block text-gray-700 font-medium mb-1">Potongan</label>
            <input type="number" step="0.01" name="potongan" id="potongan"
                value="{{ old('potongan', $salary->potongan) }}"
                class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Tombol -->
        <div class="flex justify-end space-x-3 mt-6">
            <a href="{{ route('salaries.index') }}"
                class="bg-gray-500 text-white px-4 py-2 rounded-lg shadow hover:bg-gray-600">
                Batal
            </a>
            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700">
                Perbarui Data
            </button>
        </div>
    </form>
</div>
@endsection
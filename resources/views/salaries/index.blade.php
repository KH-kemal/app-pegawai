@extends('master')

@section('content')
<div class="bg-white p-6 rounded-2xl shadow-lg">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-gray-800">Daftar Gaji Pegawai</h1>
        <a href="{{ route('salaries.create') }}"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700">
            + Tambah Data Gaji
        </a>
    </div>

    @if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-800 rounded-lg">
        {{ session('success') }}
    </div>
    @endif

    <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
        <thead class="bg-gray-200 text-gray-700">
            <tr>
                <th class="py-2 px-4 text-left">Nama Pegawai</th>
                <th class="py-2 px-4 text-left">Bulan</th>
                <th class="py-2 px-4 text-right">Gaji Pokok</th>
                <th class="py-2 px-4 text-right">Tunjangan</th>
                <th class="py-2 px-4 text-right">Potongan</th>
                <th class="py-2 px-4 text-right">Total Gaji</th>
                <th class="py-2 px-4 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($salaries as $salary)
            <tr class="border-t hover:bg-gray-50">
                <td class="py-2 px-4">{{ $salary->employee->nama_lengkap }}</td>
                <td class="py-2 px-4">{{ $salary->bulan }}</td>
                <td class="py-2 px-4 text-right">Rp {{ number_format($salary->gaji_pokok, 2, ',', '.') }}</td>
                <td class="py-2 px-4 text-right">Rp {{ number_format($salary->tunjangan, 2, ',', '.') }}</td>
                <td class="py-2 px-4 text-right">Rp {{ number_format($salary->potongan, 2, ',', '.') }}</td>
                <td class="py-2 px-4 text-right font-semibold text-green-700">
                    Rp {{ number_format($salary->total_gaji, 2, ',', '.') }}
                </td>
                <td class="py-2 px-4 text-center flex gap-2 justify-center">

                    <!-- Tombol Edit -->
                    <a href="{{ route('salaries.edit', $salary->id) }}"
                        class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">
                        Edit
                    </a>

                    <!-- Tombol Hapus -->
                    <form action="{{ route('salaries.destroy', $salary->id) }}" method="POST"
                        onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="py-4 text-center text-gray-500">Belum ada data gaji</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">
        {{ $salaries->links() }}
    </div>
</div>
@endsection

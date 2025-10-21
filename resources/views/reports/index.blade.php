@extends('master')

@section('content')
<div class="bg-white p-6 rounded-2xl shadow-lg">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-gray-800">Laporan Rekap Pegawai</h1>
    </div>
    
<div class="mb-4 text-right">
    <a href="{{ route('report.pdf') }}" target="_blank"
        class="bg-red-600 text-white px-4 py-2 rounded-lg shadow hover:bg-red-700">
        🧾 Export ke PDF
    </a>
</div>
    <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
        <thead class="bg-gray-200 text-gray-700">
            <tr>
                <th class="py-2 px-4 text-left">Nama Pegawai</th>
                <th class="py-2 px-4 text-left">Departemen</th>
                <th class="py-2 px-4 text-left">Jabatan</th>
                <th class="py-2 px-4 text-center">Hadir</th>
                <th class="py-2 px-4 text-center">Izin</th>
                <th class="py-2 px-4 text-center">Sakit</th>
                <th class="py-2 px-4 text-center">Alfa</th>
                <th class="py-2 px-4 text-right">Gaji Terakhir</th>
            </tr>
        </thead>
        <tbody>
            @forelse($dataRekap as $rekap)
            <tr class="border-t hover:bg-gray-50">
                <td class="py-2 px-4">{{ $rekap['nama'] }}</td>
                <td class="py-2 px-4">{{ $rekap['departemen'] }}</td>
                <td class="py-2 px-4">{{ $rekap['jabatan'] }}</td>
                <td class="py-2 px-4 text-center">{{ $rekap['hadir'] }}</td>
                <td class="py-2 px-4 text-center">{{ $rekap['izin'] }}</td>
                <td class="py-2 px-4 text-center">{{ $rekap['sakit'] }}</td>
                <td class="py-2 px-4 text-center">{{ $rekap['alfa'] }}</td>
                <td class="py-2 px-4 text-right font-semibold text-green-700">
                    Rp {{ number_format($rekap['gaji_terakhir'], 0, ',', '.') }}
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" class="py-4 text-center text-gray-500">Belum ada data rekap</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

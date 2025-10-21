@extends('master')

@section('content')
<div class="bg-white p-6 rounded-2xl shadow-lg max-w-3xl mx-auto">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Detail Absensi Pegawai</h1>

    <div class="grid grid-cols-2 gap-4 text-gray-700">
        <div><span class="font-semibold">Nama Pegawai:</span> {{ $attendance->employee->nama_lengkap }}</div>
        <div><span class="font-semibold">Tanggal:</span> {{ \Carbon\Carbon::parse($attendance->tanggal)->translatedFormat('d F Y') }}</div>

        <div><span class="font-semibold">Waktu Masuk:</span>
            {{ $attendance->waktu_masuk ? $attendance->waktu_masuk : '-' }}
        </div>

        <div><span class="font-semibold">Waktu Keluar:</span>
            {{ $attendance->waktu_keluar ? $attendance->waktu_keluar : '-' }}
        </div>

        <div><span class="font-semibold">Status Kehadiran:</span>
            <span class="px-2 py-1 text-sm rounded text-white
                @switch($attendance->status)
                    @case('hadir') bg-green-500 @break
                    @case('izin') bg-yellow-500 @break
                    @case('sakit') bg-blue-500 @break
                    @case('alpa') bg-red-500 @break
                @endswitch">
                {{ ucfirst($attendance->status) }}
            </span>
        </div>

        <div><span class="font-semibold">Dibuat Pada:</span> {{ $attendance->created_at->format('d M Y, H:i') }}</div>
    </div>

    <div class="flex justify-end mt-6 space-x-3">
        <a href="{{ route('attendances.edit', $attendance->id) }}"
           class="bg-yellow-500 text-white px-4 py-2 rounded-lg shadow hover:bg-yellow-600">
           Edit
        </a>
        <a href="{{ route('attendances.index') }}"
           class="bg-gray-500 text-white px-4 py-2 rounded-lg shadow hover:bg-gray-600">
           Kembali
        </a>
    </div>
</div>
@endsection

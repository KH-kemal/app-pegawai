@extends('master')

@section('content')
<div class="bg-white p-6 rounded-2xl shadow-lg text-center">
    <h1 class="text-3xl font-bold text-gray-800 mb-4">Selamat Datang di Dashboard</h1>
    <p class="text-gray-600">
        Gunakan menu di sidebar untuk mengelola data pegawai, absensi, jabatan, dan laporan.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-6">
        <div class="p-4 bg-blue-100 rounded-lg shadow hover:shadow-lg transition">
            <h2 class="text-lg font-semibold text-blue-700">Pegawai</h2>
            <p class="text-2xl font-bold text-blue-800 mt-2">{{ \App\Models\Employee::count() }}</p>
        </div>

        <div class="p-4 bg-green-100 rounded-lg shadow hover:shadow-lg transition">
            <h2 class="text-lg font-semibold text-green-700">Departemen</h2>
            <p class="text-2xl font-bold text-green-800 mt-2">{{ \App\Models\Department::count() }}</p>
        </div>

        <div class="p-4 bg-yellow-100 rounded-lg shadow hover:shadow-lg transition">
            <h2 class="text-lg font-semibold text-yellow-700">Jabatan</h2>
            <p class="text-2xl font-bold text-yellow-800 mt-2">{{ \App\Models\Position::count() }}</p>
        </div>

        <div class="p-4 bg-red-100 rounded-lg shadow hover:shadow-lg transition">
            <h2 class="text-lg font-semibold text-red-700">Absensi</h2>
            <p class="text-2xl font-bold text-red-800 mt-2">{{ \App\Models\Attendance::count() }}</p>
        </div>
    </div>
</div>
@endsection

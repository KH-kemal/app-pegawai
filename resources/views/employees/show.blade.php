<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pegawai</title>
    <script src="https://cdn.tailwindcss.com/3.4.0"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-2xl">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Detail Pegawai</h1>

        <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
            <tbody>
                <tr class="border-t">
                    <th class="text-left p-3 bg-gray-100 w-1/3">Nama Lengkap</th>
                    <td class="p-3">{{ $employee->nama_lengkap }}</td>
                </tr>
                <tr class="border-t">
                    <th class="text-left p-3 bg-gray-100">Email</th>
                    <td class="p-3">{{ $employee->email }}</td>
                </tr>
                <tr class="border-t">
                    <th class="text-left p-3 bg-gray-100">Nomor Telepon</th>
                    <td class="p-3">{{ $employee->nomor_telepon }}</td>
                </tr>
                <tr class="border-t">
                    <th class="text-left p-3 bg-gray-100">Tanggal Lahir</th>
                    <td class="p-3">{{ $employee->tanggal_lahir }}</td>
                </tr>
                <tr class="border-t">
                    <th class="text-left p-3 bg-gray-100">Alamat</th>
                    <td class="p-3">{{ $employee->alamat }}</td>
                </tr>
                <tr class="border-t">
                    <th class="text-left p-3 bg-gray-100">Tanggal Masuk</th>
                    <td class="p-3">{{ $employee->tanggal_masuk }}</td>
                </tr>
                <tr class="border-t">
                    <th class="text-left p-3 bg-gray-100">Status</th>
                    <td class="p-3">
                        <span class="px-3 py-1 text-sm font-semibold rounded-full
                            {{ $employee->status == 'aktif' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                            {{ ucfirst($employee->status) }}
                        </span>
                    </td>
                </tr>
                <tr class="border-t">
                    <th class="text-left p-3 bg-gray-100">Departemen</th>
                    <td class="p-3">{{ $employee->department->nama_departemen ?? '-' }}</td>
                </tr>
                <tr class="border-t">
                    <th class="text-left p-3 bg-gray-100">Jabatan</th>
                    <td class="p-3">{{ $employee->position->nama_jabatan ?? '-' }}</td>
                </tr>
            </tbody>
        </table>

        <div class="mt-6 flex gap-3">
            <a href="{{ route('employees.index') }}"
                class="flex-1 text-center bg-gray-300 text-gray-800 font-semibold py-2.5 rounded-lg shadow hover:bg-gray-400 transition">
                Kembali
            </a>
            <a href="{{ route('employees.edit', $employee->id) }}"
                class="flex-1 text-center bg-yellow-500 text-white font-semibold py-2.5 rounded-lg shadow hover:bg-yellow-600 transition">
                Edit
            </a>
            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST"
                onsubmit="return confirm('Yakin ingin menghapus data ini?');" class="flex-1">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="w-full bg-red-600 text-white font-semibold py-2.5 rounded-lg shadow hover:bg-red-700 transition">
                    Hapus
                </button>
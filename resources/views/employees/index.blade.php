<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai</title>
    <script src="https://cdn.tailwindcss.com/3.4.0"></script>
</head>

<body class="bg-gray-100 min-h-screen p-6">

    <div class="bg-white p-6 rounded-2xl shadow-lg">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-gray-800">Daftar Pegawai</h1>
            <a href="{{ route('employees.create') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700">
                + Tambah Pegawai
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
                    <th class="py-2 px-4 text-left">Nama</th>
                    <th class="py-2 px-4 text-left">Email</th>
                    <th class="py-2 px-4 text-left">Telepon</th>
                    <th class="py-2 px-4 text-left">Status</th>
                    <th class="py-2 px-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($employees as $employee)
                <tr class="border-t">
                    <td class="py-2 px-4">{{ $employee->nama_lengkap }}</td>
                    <td class="py-2 px-4">{{ $employee->email }}</td>
                    <td class="py-2 px-4">{{ $employee->nomor_telepon }}</td>
                    <td class="py-2 px-4">
                        <span class="px-2 py-1 rounded text-white text-sm
                            {{ $employee->status == 'aktif' ? 'bg-green-500' : 'bg-red-500' }}">
                            {{ ucfirst($employee->status) }}
                        </span>
                    </td>
                    <td class="py-2 px-4 text-center flex gap-2 justify-center">
                        <a href="{{ route('employees.show', $employee->id) }}"
                            class="bg-gray-500 text-white px-3 py-1 rounded hover:bg-gray-600">Detail</a>
                        <a href="{{ route('employees.edit', $employee->id) }}"
                            class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST"
                            onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="py-4 text-center text-gray-500">Belum ada data pegawai</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-4">
            {{ $employees->links() }}
        </div>
    </div>

</body>

</html>
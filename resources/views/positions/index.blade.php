@extends('master')

@section('content')
<div class="bg-white p-6 rounded-2xl shadow-lg">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-gray-800">Daftar Jabatan</h1>
        <a href="{{ route('positions.create') }}"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700">
            + Tambah Jabatan
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
                <th class="py-2 px-4 text-left w-16">No</th>
                <th class="py-2 px-4 text-left">Nama Jabatan</th>
                <th class="py-2 px-4 text-left">Gaji Pokok</th>
                <th class="py-2 px-4 text-center w-40">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($positions as $index => $position)
            <tr class="border-t hover:bg-gray-50">
                <td class="py-2 px-4">{{ $positions->firstItem() + $index }}</td>
                <td class="py-2 px-4">{{ $position->nama_jabatan }}</td>
                <td class="py-2 px-4">Rp {{ number_format($position->gaji_pokok, 2, ',', '.') }}</td>
                <td class="py-2 px-4 text-center flex justify-center gap-2">
                    <a href="{{ route('positions.edit', $position->id) }}"
                        class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</a>
                    <form action="{{ route('positions.destroy', $position->id) }}" method="POST"
                        onsubmit="return confirm('Yakin ingin menghapus jabatan ini?');">
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
                <td colspan="4" class="py-4 text-center text-gray-500">Belum ada data jabatan</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">
        {{ $positions->links() }}
    </div>
</div>
@endsection
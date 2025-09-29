<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pegawai</title>
    <script src="https://cdn.tailwindcss.com/3.4.0"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Pegawai</h1>

        <form action="{{ route('employees.update', $employee->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="nama_lengkap" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap', $employee->nama_lengkap) }}"
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email', $employee->email) }}"
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
            </div>

            <div>
                <label for="nomor_telepon" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                <input type="tel" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon', $employee->nomor_telepon) }}"
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
            </div>

            <div>
                <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir', $employee->tanggal_lahir) }}"
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
            </div>

            <div>
                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                <textarea id="alamat" name="alamat" rows="3"
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2.5 border">{{ old('alamat', $employee->alamat) }}</textarea>
            </div>

            <div>
                <label for="tanggal_masuk" class="block text-sm font-medium text-gray-700">Tanggal Masuk</label>
                <input type="date" id="tanggal_masuk" name="tanggal_masuk" value="{{ old('tanggal_masuk', $employee->tanggal_masuk) }}"
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
            </div>

            <div>
                <label for="departemen_id" class="block text-sm font-medium text-gray-700">Departemen</label>
                <select id="departemen_id" name="departemen_id"
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
                    <option disabled>Pilih Departemen</option>
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}" 
                            {{ old('departemen_id', $employee->departemen_id) == $department->id ? 'selected' : '' }}>
                            {{ $department->nama_departemen }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="jabatan_id" class="block text-sm font-medium text-gray-700">Jabatan</label>
                <select id="jabatan_id" name="jabatan_id"
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
                    <option disabled>Pilih Jabatan</option>
                    @foreach($positions as $position)
                        <option value="{{ $position->id }}" 
                            {{ old('jabatan_id', $employee->jabatan_id) == $position->id ? 'selected' : '' }}>
                            {{ $position->nama_jabatan }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <select id="status" name="status"
                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2.5 border">
                    <option value="aktif" {{ old('status', $employee->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="nonaktif" {{ old('status', $employee->status) == 'nonaktif' ? 'selected' : '' }}>Non Aktif</option>
                </select>
            </div>

            <div class="pt-4 flex gap-2">
                <button type="submit"
                    class="flex-1 bg-blue-600 text-white font-semibold py-2.5 rounded-lg shadow hover:bg-blue-700 transition duration-200">
                    Update
                </button>
                <a href="{{ route('employees.index') }}"
                    class="flex-1 text-center bg-gray-300 text-gray-800 font-semibold py-2.5 rounded-lg shadow hover:bg-gray-400 transition duration-200">
                    Batal
                </a>
            </div>
        </form>
    </div>

</body>
</html>

@extends('master')

@section('content')
<!-- Hero Section dengan Gradient -->
<div class="bg-gradient-to-r from-blue-600 via-blue-700 to-blue-800 rounded-2xl shadow-2xl p-8 mb-8 text-white relative overflow-hidden">
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 bg-white opacity-10 rounded-full"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-64 h-64 bg-white opacity-10 rounded-full"></div>
    
    <div class="relative z-10">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-4xl font-bold mb-3 flex items-center">
                    <i class="fas fa-hand-sparkles mr-3"></i>
                    Selamat Datang di Dashboard
                </h1>
                <p class="text-blue-100 text-lg max-w-2xl">
                    Kelola data pegawai, absensi, jabatan, dan laporan dengan mudah melalui sistem manajemen Wardiere Admin yang modern dan efisien.
                </p>
            </div>
            <div class="hidden lg:block">
                <div class="w-32 h-32 bg-white bg-opacity-20 rounded-2xl flex items-center justify-center backdrop-blur-sm">
                    <i class="fas fa-chart-line text-6xl text-white opacity-80"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Statistics Cards dengan Animasi -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Card Pegawai -->
    <div class="group bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-6 text-white relative overflow-hidden transform hover:scale-105">
        <div class="absolute top-0 right-0 -mr-10 -mt-10 w-32 h-32 bg-white opacity-10 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
        
        <div class="relative z-10">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                    <i class="fas fa-users text-2xl"></i>
                </div>
                <i class="fas fa-arrow-up text-sm opacity-75"></i>
            </div>
            <h2 class="text-lg font-semibold opacity-90 mb-1">Total Pegawai</h2>
            <p class="text-4xl font-bold mb-2">{{ \App\Models\Employee::count() }}</p>
            <p class="text-sm opacity-75">Pegawai terdaftar</p>
        </div>
    </div>

    <!-- Card Departemen -->
    <div class="group bg-gradient-to-br from-green-500 to-green-600 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-6 text-white relative overflow-hidden transform hover:scale-105">
        <div class="absolute top-0 right-0 -mr-10 -mt-10 w-32 h-32 bg-white opacity-10 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
        
        <div class="relative z-10">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                    <i class="fas fa-building text-2xl"></i>
                </div>
                <i class="fas fa-check text-sm opacity-75"></i>
            </div>
            <h2 class="text-lg font-semibold opacity-90 mb-1">Departemen</h2>
            <p class="text-4xl font-bold mb-2">{{ \App\Models\Department::count() }}</p>
            <p class="text-sm opacity-75">Departemen aktif</p>
        </div>
    </div>

    <!-- Card Jabatan -->
    <div class="group bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-6 text-white relative overflow-hidden transform hover:scale-105">
        <div class="absolute top-0 right-0 -mr-10 -mt-10 w-32 h-32 bg-white opacity-10 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
        
        <div class="relative z-10">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                    <i class="fas fa-chart-line text-2xl"></i>
                </div>
                <i class="fas fa-star text-sm opacity-75"></i>
            </div>
            <h2 class="text-lg font-semibold opacity-90 mb-1">Jabatan</h2>
            <p class="text-4xl font-bold mb-2">{{ \App\Models\Position::count() }}</p>
            <p class="text-sm opacity-75">Posisi tersedia</p>
        </div>
    </div>

    <!-- Card Absensi -->
    <div class="group bg-gradient-to-br from-red-500 to-red-600 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-6 text-white relative overflow-hidden transform hover:scale-105">
        <div class="absolute top-0 right-0 -mr-10 -mt-10 w-32 h-32 bg-white opacity-10 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
        
        <div class="relative z-10">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                    <i class="fas fa-clock text-2xl"></i>
                </div>
                <i class="fas fa-calendar-check text-sm opacity-75"></i>
            </div>
            <h2 class="text-lg font-semibold opacity-90 mb-1">Absensi</h2>
            <p class="text-4xl font-bold mb-2">{{ \App\Models\Attendance::count() }}</p>
            <p class="text-sm opacity-75">Total kehadiran</p>
        </div>
    </div>
</div>

<!-- Quick Access Section -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
    <!-- Recent Activity -->
    <div class="bg-white rounded-2xl shadow-lg p-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-bold text-gray-800 flex items-center">
                <i class="fas fa-history text-blue-600 mr-3"></i>
                Aktivitas Terbaru
            </h3>
            <a href="#" class="text-blue-600 hover:text-blue-700 text-sm font-medium">Lihat Semua</a>
        </div>
        
        <div class="space-y-4">
            <div class="flex items-center p-3 bg-blue-50 rounded-xl hover:bg-blue-100 transition-colors cursor-pointer">
                <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center text-white mr-4">
                    <i class="fas fa-user-plus"></i>
                </div>
                <div class="flex-1">
                    <p class="text-sm font-semibold text-gray-800">Pegawai Baru Ditambahkan</p>
                    <p class="text-xs text-gray-500">5 menit yang lalu</p>
                </div>
            </div>
            
            <div class="flex items-center p-3 bg-green-50 rounded-xl hover:bg-green-100 transition-colors cursor-pointer">
                <div class="w-10 h-10 bg-green-600 rounded-lg flex items-center justify-center text-white mr-4">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="flex-1">
                    <p class="text-sm font-semibold text-gray-800">Absensi Terverifikasi</p>
                    <p class="text-xs text-gray-500">15 menit yang lalu</p>
                </div>
            </div>
            
            <div class="flex items-center p-3 bg-purple-50 rounded-xl hover:bg-purple-100 transition-colors cursor-pointer">
                <div class="w-10 h-10 bg-purple-600 rounded-lg flex items-center justify-center text-white mr-4">
                    <i class="fas fa-file-invoice-dollar"></i>
                </div>
                <div class="flex-1">
                    <p class="text-sm font-semibold text-gray-800">Gaji Telah Diproses</p>
                    <p class="text-xs text-gray-500">1 jam yang lalu</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-white rounded-2xl shadow-lg p-6">
        <div class="flex items-center mb-6">
            <h3 class="text-xl font-bold text-gray-800 flex items-center">
                <i class="fas fa-bolt text-yellow-500 mr-3"></i>
                Aksi Cepat
            </h3>
        </div>
        
        <div class="grid grid-cols-2 gap-4">
            <a href="{{ route('employees.create') }}" 
               class="group p-4 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center text-white mb-3 group-hover:rotate-12 transition-transform">
                    <i class="fas fa-user-plus text-xl"></i>
                </div>
                <p class="text-sm font-semibold text-gray-800">Tambah Pegawai</p>
            </a>
            
            <a href="{{ route('attendances.create') }}" 
               class="group p-4 bg-gradient-to-br from-green-50 to-green-100 rounded-xl hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center text-white mb-3 group-hover:rotate-12 transition-transform">
                    <i class="fas fa-clipboard-check text-xl"></i>
                </div>
                <p class="text-sm font-semibold text-gray-800">Input Absensi</p>
            </a>
            
            <a href="{{ route('salaries.create') }}" 
               class="group p-4 bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center text-white mb-3 group-hover:rotate-12 transition-transform">
                    <i class="fas fa-money-bill-wave text-xl"></i>
                </div>
                <p class="text-sm font-semibold text-gray-800">Proses Gaji</p>
            </a>
            
            <a href="{{ route('report.index') }}" 
               class="group p-4 bg-gradient-to-br from-red-50 to-red-100 rounded-xl hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                <div class="w-12 h-12 bg-red-600 rounded-lg flex items-center justify-center text-white mb-3 group-hover:rotate-12 transition-transform">
                    <i class="fas fa-chart-bar text-xl"></i>
                </div>
                <p class="text-sm font-semibold text-gray-800">Lihat Laporan</p>
            </a>
        </div>
    </div>
</div>

<!-- Info Section -->
<div class="bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl shadow-lg p-6 text-white">
    <div class="flex items-center justify-between">
        <div>
            <h3 class="text-2xl font-bold mb-2">Butuh Bantuan?</h3>
            <p class="text-indigo-100 mb-4">Hubungi tim support kami untuk bantuan lebih lanjut</p>
            <button class="bg-white text-indigo-600 px-6 py-2.5 rounded-lg font-semibold hover:shadow-lg transition-all duration-300 hover:scale-105">
                <i class="fas fa-headset mr-2"></i>
                Hubungi Support
            </button>
        </div>
        <div class="hidden lg:block">
            <i class="fas fa-life-ring text-8xl opacity-20"></i>
        </div>
    </div>
</div>
@endsection
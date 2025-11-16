<aside id="sidebar"
    class="fixed inset-y-0 left-0 w-64 bg-blue-900 dark:bg-gray-900 text-gray-100 flex flex-col shadow-lg
           transform -translate-x-full lg:translate-x-0 transition-all duration-300 ease-in-out z-50 overflow-hidden">

    <!-- Header Sidebar -->
    <div class="flex items-center justify-between h-16 border-b border-white px-4">
    <a href="{{ url('/') }}" class="flex items-center space-x-2 hover:opacity-80 transition">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-10 h-10 rounded-full">
        <h1 class="text-lg font-bold tracking-wide transition-all duration-300 sidebar-text">
            Wardiere Admin
        </h1>
    </a>
    </div>
        <button id="closeSidebar" class="lg:hidden text-gray-300 hover:text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>   
    </div>

    <!-- Navigasi -->
    <nav class="flex-1 overflow-y-auto mt-4">
        <ul class="space-y-5 px-3">
            @php
                $menus = [
                    ['route' => 'employees', 'icon' => '<path d="M6 2a2 2 0 0 0-2 2v4a1 1 0 1 0 2 0V4h12v7h-2a1 1 0 0 0-1 1v2h-1a1 1 0 1 0 0 2h5a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2H6Zm3 9a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM4 20a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1H5a1 1 0 0 1-1-1Z"/>', 'label' => 'Pegawai'],
                    ['route' => 'departments', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M6 4h12M6 4v16m0-16H5m13 0v16m0-16h1m-1 16H6m12 0h1M6 20H5M9 7h1v1H9V7Zm5 0h1v1h-1V7Zm-5 4h1v1H9v-1Zm5 0h1v1h-1v-1Zm-3 4h2a1 1 0 0 1 1 1v4h-4v-4a1 1 0 0 1 1-1Z"/>', 'label' => 'Departemen'],
                    ['route' => 'positions', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M4 4v15a1 1 0 0 0 1 1h15M8 16l2.5-5.5 3 3L17.273 7 20 9.667"/>', 'label' => 'Jabatan'],
                    ['route' => 'attendances', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3M3.223 14C4.132 18.008 7.717 21 12 21c4.971 0 9-4.029 9-9s-4.029-9-9-9c-3.729 0-6.929 2.268-8.294 5.5M7 9H3V5"/>', 'label' => 'Absensi'],
                    ['route' => 'salaries', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M13.6 16.733c.234.269.548.456.895.534a1.4 1.4 0 0 0 1.75-.762c.172-.615-.446-1.287-1.242-1.481-.796-.194-1.41-.861-1.241-1.481a1.4 1.4 0 0 1 1.75-.762c.343.077.654.26.888.524m-1.358 4.017v.617m0-5.939v.725M4 15v4m3-6v6M6 8.5 10.5 5 14 7.5 18 4m0 0h-3.5M18 4v3m2 8a5 5 0 1 1-10 0 5 5 0 0 1 10 0Z"/>', 'label' => 'Gaji'],
                    ['route' => 'report', 'icon' => '<path fill-rule="evenodd" d="M7 2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H7Zm3 8a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm-1 7a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3 1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>', 'label' => 'Laporan'],
                ];
            @endphp

            @foreach ($menus as $menu)
                <li>
                    <a href="{{ url('/' . $menu['route']) }}"
                        class="group flex items-center space-x-3 px-3 py-2 rounded-md transition hover:bg-blue-700 {{ request()->is($menu['route'] . '*') ? 'bg-blue-700 text-white font-semibold' : '' }}">
                        <svg class="w-6 h-6 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">{!! $menu['icon'] !!}</svg>
                        <span class="sidebar-text">{{ $menu['label'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>

    
</aside>

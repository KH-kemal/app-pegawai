<aside id="sidebar"
        class="w-64 bg-blue-900 text-gray-100 flex flex-col fixed h-full shadow-lg transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out z-50">
        <div class="flex items-center justify-between h-16 border-b border-white px-4">
            <div class="flex items-center space-x-2">
                <img src="{{ asset('img/logo.png') }}" alt="Logo Wardiere" class="w-12 h-12 rounded-full">
                <h1 class="text-xl font-bold tracking-wide">Wardiere Admin</h1>
            </div>
            <!-- Tombol close di mobile -->
            <button id="closeSidebar" class="lg:hidden text-gray-300 hover:text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <nav class="flex-1 overflow-y-auto mt-4">
            <ul class="space-y-2 px-4">

                <!-- Employee -->
                <li>
                    <a href="{{ url('/employees') }}"
                        class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-blue-700 transition
                        {{ request()->is('employees*') ? 'bg-blue-700 text-white font-semibold' : '' }}">
                        <svg class="w-[26px] h-[26px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6 2c-1.10457 0-2 .89543-2 2v4c0 .55228.44772 1 1 1s1-.44772 1-1V4h12v7h-2c-.5523 0-1 .4477-1 1v2h-1c-.5523 0-1 .4477-1 1s.4477 1 1 1h5c.5523 0 1-.4477 1-1V3.85714C20 2.98529 19.3667 2 18.268 2H6Z" />
                            <path d="M6 11.5C6 9.567 7.567 8 9.5 8S13 9.567 13 11.5 11.433 15 9.5 15 6 13.433 6 11.5ZM4 20c0-2.2091 1.79086-4 4-4h3c2.2091 0 4 1.7909 4 4 0 1.1046-.8954 2-2 2H6c-1.10457 0-2-.8954-2-2Z" />
                        </svg>
                        <span>Pegawai</span>
                    </a>
                </li>

                <!-- Department -->
                <li>
                    <a href="{{ url('/departments') }}"
                        class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-blue-700 transition
                        {{ request()->is('departments*') ? 'bg-blue-700 text-white font-semibold' : '' }}">
                        <svg class="w-[26px] h-[26px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 4h12M6 4v16M6 4H5m13 0v16m0-16h1m-1 16H6m12 0h1M6 20H5M9 7h1v1H9V7Zm5 0h1v1h-1V7Zm-5 4h1v1H9v-1Zm5 0h1v1h-1v-1Zm-3 4h2a1 1 0 0 1 1 1v4h-4v-4a1 1 0 0 1 1-1Z" />
                        </svg>
                        <span>Departemen</span>
                    </a>
                </li>

                <!-- Position -->
                <li>
                    <a href="{{ url('/positions') }}"
                        class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-blue-700 transition
                        {{ request()->is('positions*') ? 'bg-blue-700 text-white font-semibold' : '' }}">
                        <svg class="w-[26px] h-[26px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v15a1 1 0 0 0 1 1h15M8 16l2.5-5.5 3 3L17.273 7 20 9.667" />
                        </svg>
                        <span>Jabatan</span>
                    </a>
                </li>

                <!-- Attendance -->
                <li>
                    <a href="{{ url('/attendances') }}"
                        class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-blue-700 transition
                        {{ request()->is('attendances*') ? 'bg-blue-700 text-white font-semibold' : '' }}">
                        <svg class="w-[26px] h-[26px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5" />
                        </svg>
                        <span>Absensi</span>
                    </a>
                </li>

                <!-- Salary -->
                <li>
                    <a href="{{ url('/salaries') }}"
                        class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-blue-700 transition
                        {{ request()->is('salaries*') ? 'bg-blue-700 text-white font-semibold' : '' }}">
                        <svg class="w-[26px] h-[26px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.6 16.733c.234.269.548.456.895.534a1.4 1.4 0 0 0 1.75-.762c.172-.615-.446-1.287-1.242-1.481-.796-.194-1.41-.861-1.241-1.481a1.4 1.4 0 0 1 1.75-.762c.343.077.654.26.888.524m-1.358 4.017v.617m0-5.939v.725M4 15v4m3-6v6M6 8.5 10.5 5 14 7.5 18 4m0 0h-3.5M18 4v3m2 8a5 5 0 1 1-10 0 5 5 0 0 1 10 0Z" />
                        </svg>
                        <span>Gaji</span>
                    </a>
                </li>

                <!-- Report -->
                <li>
                    <a href="{{ url('/report') }}"
                        class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-blue-700 transition
                        {{ request()->is('report*') ? 'bg-blue-700 text-white font-semibold' : '' }}">
                        <svg class="w-[26px] h-[26px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M7 2a2 2 0 0 0-2 2v1a1 1 0 0 0 0 2v1a1 1 0 0 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H7Zm3 8a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm-1 7a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3 1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                        </svg>
                        <span>Laporan</span>
                    </a>
                </li>

            </ul>
        </nav>

        <div class="p-4 border-t border-blue-800 text-center text-xs text-gray-400">
            © {{ date('Y') }} App Pegawai
        </div>
    </aside>
<nav class="bg-white shadow border-b border-gray-200">
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            
            <!-- Bagian kiri -->
            <div class="flex items-center space-x-4">

                <!-- Tombol toggle sidebar -->
                <button id="sidebar-toggle" type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <!-- Search (hanya tampil di md ke atas) -->
                <div class="relative w-96 max-w-lg hidden md:block">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input id="search" name="search"
                        class="block w-full pl-10 pr-10 py-2 border border-gray-300 rounded-md leading-5 bg-gray-50 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Search or type command..." type="search">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                        <span class="text-xs text-gray-400 border border-gray-300 rounded px-1.5 py-0.5">⌘K</span>
                    </div>
                </div>

                <!-- Icon kaca pembesar (hanya tampil di layar kecil) -->
                <button type="button"
                    class="md:hidden p-2 rounded-full text-gray-500 hover:text-gray-700 hover:bg-gray-100 focus:ring-2 focus:ring-indigo-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>

            <!-- Bagian kanan -->
            <div class="flex items-center space-x-3">
                <!-- Mode Gelap -->
                <button type="button"
                    class="p-2 rounded-full text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>

                <!-- Notifikasi -->
                <button type="button"
                    class="relative p-2 rounded-full text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="absolute top-1.5 right-1.5 h-2 w-2 rounded-full bg-orange-500"></span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>

                <!-- Profil Admin -->
                <button type="button"
                    class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 p-1.5"
                    aria-expanded="false" aria-haspopup="true">
                    <img class="h-8 w-8 rounded-full"
                        src="https://ui-avatars.com/api/?name=AD&background=4f46e5&color=fff&size=128"
                        alt="Admin">
                    <span class="ml-2 text-sm font-medium text-gray-700 hidden sm:block">Admin</span>
                    <svg class="ml-1 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<script>
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebar-toggle');

    // Toggle sidebar untuk layar besar (collapse)
    sidebarToggle.addEventListener('click', () => {
        if (window.innerWidth >= 1024) {
            sidebar.classList.toggle('w-64');
            sidebar.classList.toggle('w-20');
        } else {
            sidebar.classList.toggle('-translate-x-full');
        }
    });
</script>

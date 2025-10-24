<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }}</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com/3.4.0"></script>

    <!-- Flowbite -->
    <link href="https://unpkg.com/flowbite@1.6.6/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/flowbite@1.6.6/dist/flowbite.js"></script>

    <style>
    #sidebar {
        transition: all 0.3s ease;
    }
    #main-content {
        transition: all 0.3s ease;
    }
</style>


</head>

<body class="bg-gray-100 min-h-screen flex flex-col lg:flex-row overflow-x-hidden">

    <!-- Sidebar -->
    @include('partials.sidebar')

    <!-- Overlay untuk mobile -->
    <div id="overlay" class="fixed inset-0 bg-black opacity-50 hidden z-40 lg:hidden"></div>

    <!-- Main content -->
    <div id="main-content" class="flex-1 flex flex-col min-h-screen w-full ml-64 transition-all duration-300">
        <!-- Header -->
        @include('partials.navbar')

        <!-- Konten -->
        <main class="flex-1 p-4 sm:p-6 bg-gray-50 overflow-x-auto">
            @yield('content')
        </main>

        <!-- Footer -->
       @include('partials.footer')
    </div>

    


</body>
</html>

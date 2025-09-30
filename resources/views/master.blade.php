<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'App Pegawai')</title>
    <script src="https://cdn.tailwindcss.com/3.4.0"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-blue-500 text-white p-4">
        <h1 class="text-xl font-bold">@yield('page-title', 'App Pegawai')</h1>
        <nav class="mt-2">
            <ul class="flex space-x-4">
                <li><a href="{{ url('/employees') }}" class="hover:underline">Employee</a></li>
                <li><a href="{{ url('/departments') }}" class="hover:underline">Department</a></li>
                <li><a href="{{ url('/positions') }}" class="hover:underline">Position</a></li>
                <li><a href="{{ url('/report') }}" class="hover:underline">Report</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main content -->
    <main class="flex-1 container mx-auto p-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4">
        <p>&copy; {{ date('Y') }} App Pegawai</p>
    </footer>

</body>
</html>

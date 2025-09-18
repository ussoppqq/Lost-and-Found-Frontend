<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Lost & Found</title>
    @vite('resources/css/app.css') {{-- Kalau pakai Tailwind --}}
    @livewireStyles
</head>
<body class="bg-gray-100 text-gray-800">
    {{-- Navbar sederhana --}}
    <nav class="bg-white shadow-md px-6 py-4 mb-6">
        <div class="flex justify-between">
            <div class="font-bold text-xl">Lost & Found</div>
            <div>
                <a href="/dashboard" class="px-3 py-2 text-gray-700 hover:text-blue-600">Dashboard</a>
            </div>
        </div>
    </nav>

    {{-- Konten halaman --}}
    <main>
        @yield('content')
    </main>

    @livewireScripts
</body>
</html>

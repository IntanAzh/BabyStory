<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Baby Story</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans antialiased">
    <!-- Navbar atau header global bisa kamu taruh di sini kalau nanti ada -->

    <div class="min-h-screen flex flex-col">
        @yield('content')
    </div>

    <!-- Script tambahan (kalau nanti perlu JS, tambahkan di sini) -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocational Training</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100">

    <div class="flex min-h-screen">

        {{-- Sidebar --}}
        @include('Students.layout.sidebar')

        {{-- Main Content --}}
        <div class="flex-1 p-6">
            @yield('content')
        </div>

    </div>

</body>
</html>
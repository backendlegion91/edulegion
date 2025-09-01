<!DOCTYPE html>
<html lang="en" x-data="{ sidebarOpen: false }" x-cloak>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Use Tailwind via CDN --}}
   
</head>
<body class="bg-blue-50 text-gray-800">

<div class="flex h-screen overflow-hidden">
    {{-- Sidebar --}}
    @include('admin.components.sidebar')

    {{-- Main Content Area --}}
    <div class="flex-1 flex flex-col overflow-hidden">
        {{-- Header --}}
        @include('admin.components.header')

        {{-- Main Content --}}
        <main class="flex-1 overflow-y-auto p-6">
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('admin.components.footer')
    </div>
</div>
<script src="https://cdn.tailwindcss.com"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>

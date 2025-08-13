<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex">
        
        {{-- Sidebar --}}
        <aside class="w-64 bg-white dark:bg-gray-800 shadow-md">
            <div class="p-4 text-lg font-bold text-gray-800 dark:text-white">
                {{ config('app.name', 'Laravel') }}
            </div>
            <nav class="mt-4">
                <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-700">
                    Dashboard
                </a>
                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-700">
                    Profile
                </a>
                <a href="#" class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-700">
                    Settings
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-700">
                        Logout
                    </button>
                </form>
            </nav>
        </aside>

        {{-- Main Content --}}
        <div class="flex-1 flex flex-col">
            @include('layouts.navigation')

            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <main class="p-4">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>

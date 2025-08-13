<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard Admin
        </h2>
    </x-slot>

    <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Selamat Datang, Admin!</h1>
        <p class="mb-6">Ini adalah halaman dashboard khusus admin.</p>

        <!-- Tombol Tambah User -->
        <a href="{{ route('admin.users.create') }}" 
           class="inline-block px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
           ➕ Tambah User
        </a>

        <br><br>

        <!-- Tombol Logout -->
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
           class="inline-block px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
           🚪 Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</x-app-layout>

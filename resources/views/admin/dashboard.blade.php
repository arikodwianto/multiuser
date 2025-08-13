<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
</head>
<body>
    <h1>Selamat Datang, Admin!</h1>
    <p>Ini adalah halaman dashboard khusus admin.</p>

    <!-- Tombol Tambah User -->
    <a href="{{ route('admin.users.create') }}" 
       style="display:inline-block; padding:10px 15px; background:#4CAF50; color:white; text-decoration:none; border-radius:5px;">
       ➕ Tambah User
    </a>

    <br><br>

    <!-- Tombol Logout -->
    <a href="{{ route('logout') }}"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
       style="display:inline-block; padding:10px 15px; background:#f44336; color:white; text-decoration:none; border-radius:5px;">
       🚪 Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</body>
</html>

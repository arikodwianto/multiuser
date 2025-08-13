<!DOCTYPE html>
<html>
<head>
    <title>Buat User Baru</title>
</head>
<body>
    <h1>Buat User Baru</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Buat User</button>
    </form>

    <br>
    <a href="{{ url('/admin') }}">Kembali ke Dashboard Admin</a>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir | Register</title>
    <link rel="stylesheet" href="{{ asset('assets\css\auth\auth.css')}}">
</head>
<body>
    <div class="auth-container">
        <h1>REGISTRASI AKUN</h1>
        <p>Silahkan membuat akun terlebih dahulu.</p>
        <hr>
        <div class="error">
            @error('name')
            <div class="invalid-feedback">
                <ul>
                    <li><strong>{{$message}}</strong></li>
                </ul>
            </div>
            @enderror
            @error('email')
            <div class="invalid-feedback">
                <ul>
                    <li><strong>{{$message}}</strong></li>
                </ul>
            </div>
            @enderror
            @error('role')
            <div class="invalid-feedback">
                <ul>
                    <li><strong>{{$message}}</strong></li>
                </ul>
            </div>
            @enderror
            @error('password')
            <div class="invalid-feedback">
                <ul>
                    <li><strong>{{$message}}</strong></li>
                </ul>
            </div>
            @enderror
            @error('confirm-password')
            <div class="invalid-feedback">
                <ul>
                    <li><strong>{{$message}}</strong></li>
                </ul>
            </div>
            @enderror
        </div>
        <form action="{{ route('auth.store') }}" method="POST">
            @csrf
            <label for="name">Nama :</label>
            <input type="text" name="name" placeholder="Masukkan Nama..." value="{{ old('name') }}">

            <label for="email">E-mail :</label>
            <input type="email" name="email" placeholder="Masukkan E-mail..." value="{{ old('email') }}">

            <label for="role">Role / Hak Akses</label>
            <select name="role">
                <option value="select" disabled selected>~ KLIK ~</option>
                <option value="Admin">Admin / Akses Penuh</option>
                <option value="User">User / Terbatas</option>
            </select>

            <label for="password">Password :</label>
            <input type="password" name="password" placeholder="Masukkan Password...">

            <label for="confirm-password">Konfirmasi Password :</label>
            <input type="password" name="confirm-password" placeholder="Masukkan Konfirmasi Password...">

            <input type="submit" value="REGISTRASI" class="register">
        </form>
        <p align="center">Sudah punya akun ? <a href="{{ route('login') }}">LOGIN SEKARANG</a></p>
    </div>
</body>
</html>
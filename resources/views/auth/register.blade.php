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
        <form action="{{ route('auth.store') }}" method="POST">
            @csrf
            <label for="name">Nama :</label>
            <input type="text" name="name" placeholder="Masukkan Nama..." class="@error('name') is-invalid @enderror" value="{{ old('name') }}" required>
            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror

            <label for="email">E-mail :</label>
            <input type="email" name="email" placeholder="Masukkan E-mail..." class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required>
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror

            <label for="password">Password :</label>
            <input type="password" name="password" placeholder="Masukkan Password..." class="@error('password') is-invalid @enderror" required>
            @error('password')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror

            <label for="confirm-password">Konfirmasi Password :</label>
            <input type="password" name="confirm-password" placeholder="Masukkan Konfirmasi Password..." class="@error('confirm-password') is-invalid @enderror" required>
            @error('confirm-password')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            <input type="submit" value="REGISTRASI" class="register">
        </form>
        <p align="center">Sudah punya akun ? <a href="{{ route('login') }}">LOGIN SEKARANG</a></p>
    </div>
</body>
</html>
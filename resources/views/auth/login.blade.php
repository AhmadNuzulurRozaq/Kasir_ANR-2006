<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir | Login</title>
    <link rel="stylesheet" href="{{ asset('assets\css\auth\auth.css')}}">
</head>
<body>
    <div class="auth-container">
        <h1>LOGIN AKUN</h1>
        <p>Silahkan login terlebih dahulu.</p>
        <hr>
        <div class="error">
            @error('email')
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
        </div>
        <form action="{{ route('auth.authenticate') }}" method="POST">
            @csrf
            <label for="email">E-mail :</label>
            <input type="email" name="email" placeholder="Masukkan E-mail..." value="{{ old('email') }}">

            <label for="password">Password :</label>
            <input type="password" name="password" placeholder="Masukkan Password...">

            <input type="checkbox" name="" id="">Ingat Saya

            <input type="submit" value="LOGIN" class="login">
        </form>
        <p align="center">Belum punya akun ? <a href="{{ route('register') }}">REGISTER SEKARANG</a></p>
    </div>
</body>
</html>

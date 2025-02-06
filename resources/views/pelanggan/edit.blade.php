<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir | Pelanggan | Edit</title>
    <link rel="stylesheet" href="{{ asset('assets/css/crud/data.css') }}">
</head>
<body>
    <div class="data-container">
        <h1>Pelanggan</h1>
        <p>Edit Data Pelanggan</p>
        <hr>
        <form action="/pelanggan/{{$pelanggan->PelangganID}}" method="POST">
            @csrf
            @method('put')
            <label for="PelangganID">Pelanggan ID :</label>
            <input type="number" name="PelangganID" placeholder="Masukkan Pelanggan ID..." value="{{$pelanggan->PelangganID}}" disabled>
            <label for="NamaPelanggan">Nama Pelanggan :</label>
            <input type="text" name="NamaPelanggan" placeholder="Masukkan Nama Pelanggan..." value="{{$pelanggan->NamaPelanggan}}" required>
            <label for="Alamat">Alamat :</label>
            <textarea name="Alamat" placeholder="Masukkan Alamat..." required>{{$pelanggan->Alamat}}</textarea>
            <label for="NomorTelepon">Nomor Telepon :</label>
            <input type="text" name="NomorTelepon" placeholder="Masukkan Nomor Telepon..." value="{{$pelanggan->NomorTelepon}}" required>
            <input type="submit" value="UPDATE DATA" class="update">
        </form>
        <center>
            <p>By: Ahmad Nuzulur Rozaq | 2025</p>
        </center>
    </div>
</body>
</html>
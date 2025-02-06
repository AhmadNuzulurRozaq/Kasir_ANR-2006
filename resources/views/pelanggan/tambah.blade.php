<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir | Pelanggan | Tambah</title>
    <link rel="stylesheet" href="{{ asset('assets/css/crud/data.css') }}">
</head>
<body>
    <div class="data-container">
        <h1>Pelanggan</h1>
        <p>Tambah Data Pelanggan</p>
        <hr>
        <form action="/pelanggan/kirim" method="POST">
            @csrf
            <label for="PelangganID">Pelanggan ID :</label>
            <input type="number" name="PelangganID" placeholder="Masukkan Pelanggan ID..." required>
            <label for="NamaPelanggan">Nama Pelanggan :</label>
            <input type="text" name="NamaPelanggan" placeholder="Masukkan Nama Pelanggan..." required>
            <label for="Alamat">Alamat :</label>
            <textarea name="Alamat" placeholder="Masukkan Alamat..." required></textarea>
            <label for="NomorTelepon">Nomor Telepon :</label>
            <input type="text" name="NomorTelepon" placeholder="Masukkan Nomor Telepon..." required>
            <input type="submit" value="KIRIM DATA" class="send">
        </form>
        <center>
            <p>By: Ahmad Nuzulur Rozaq | 2025</p>
        </center>
    </div>
</body>
</html>
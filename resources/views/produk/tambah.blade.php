<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir | Produk | Tambah</title>
    <link rel="stylesheet" href="{{ asset('assets/css/crud/data.css') }}">
</head>
<body>
    <div class="data-container">
        <h1>Produk</h1>
        <p>Tambah Data Produk</p>
        <hr>
        <form action="/produk/kirim" method="POST">
            @csrf
            <label for="ProdukID">Pelanggan ID :</label>
            <input type="number" name="ProdukID" placeholder="Masukkan Produk ID..." required>
            <label for="NamaProduk">Nama Produk :</label>
            <input type="text" name="NamaProduk" placeholder="Masukkan Nama Produk..." required>
            <label for="Harga">Harga :</label>
            <input type="number" name="Harga" placeholder="Harga..." required>
            <label for="Stok">Stok :</label>
            <input type="number" name="Stok" placeholder="Masukkan Stok..." required>
            <input type="submit" value="KIRIM DATA" class="send">
        </form>
        <center>
            <p>By: Ahmad Nuzulur Rozaq | 2025</p>
        </center>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir | Produk | Edit</title>
    <link rel="stylesheet" href="{{ asset('assets/css/crud/data.css') }}">
</head>
<body>
    <div class="data-container">
        <h1>Produk</h1>
        <p>Edit Data Produk</p>
        <hr>
        <form action="/produk/{{$produk->ProdukID}}" method="POST">
            @csrf
            @method('put')
            <label for="ProdukID">Produk ID :</label>
            <input type="number" name="ProdukID" placeholder="Masukkan Produk ID..." value="{{$produk->ProdukID}}" disabled>
            <label for="NamaProduk">Nama Produk :</label>
            <input type="text" name="NamaProduk" placeholder="Masukkan Nama Produk..." value="{{$produk->NamaProduk}}" required>
            <label for="Harga">Harga :</label>
            <input type="number" name="Harga" placeholder="Masukkan Harga..." value="{{$produk->Harga}}" required>
            <label for="Stok">Stok :</label>
            <input type="number" name="Stok" placeholder="Masukkan Stok..." value="{{$produk->Stok}}" required>
            <input type="submit" value="UPDATE DATA" class="update">
        </form>
        <center>
            <p>By: Ahmad Nuzulur Rozaq | 2025</p>
        </center>
    </div>
</body>
</html>
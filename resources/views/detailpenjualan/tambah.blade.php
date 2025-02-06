<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir | Detail Penjualan | Tambah</title>
    <link rel="stylesheet" href="{{ asset('assets/css/crud/data.css') }}">
</head>
<body>
    <div class="data-container">
        <h1>Detail Penjualan</h1>
        <p>Tambah Data Detail Penjualan</p>
        <hr>
        <form action="/detailpenjualan/kirim" method="POST">
            @csrf
            <label for="DetailID">Detail ID :</label>
            <input type="number" name="DetailID" placeholder="Masukkan Detail ID..." required>
            <label for="PenjualanID">Penjualan ID :</label>
            <input type="number" name="PenjualanID" placeholder="Masukkan Penjualan ID..." required>
            <label for="ProdukID">Produk ID :</label>
            <input type="number" name="ProdukID" placeholder="Masukkan Produk ID" required>
            <label for="JumlahProduk">Jumlah Produk :</label>
            <input type="number" name="JumlahProduk" placeholder="Masukkan Jumlah Produk..." required>
            <label for="Subtotal">Subtotal :</label>
            <input type="number" name="Subtotal" placeholder="Masukkan Subtotal..." required>
            <input type="submit" value="KIRIM DATA" class="send">
        </form>
        <center>
            <p>By: Ahmad Nuzulur Rozaq | 2025</p>
        </center>
    </div>
</body>
</html>
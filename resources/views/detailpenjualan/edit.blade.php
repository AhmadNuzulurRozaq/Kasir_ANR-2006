<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir | Detail Penjualan | Edit</title>
    <link rel="stylesheet" href="{{ asset('assets/css/crud/data.css') }}">
</head>
<body>
    <div class="data-container">
        <h1>Detail Penjualan</h1>
        <p>Edit Data Detail Penjualan</p>
        <hr>
        <form action="/detailpenjualan/{{$detailpenjualan->DetailID}}" method="POST">
            @csrf
            @method('put')
            <label for="DetailID">Detail ID :</label>
            <input type="number" name="DetailID" placeholder="Masukkan Detail ID..." value="{{$detailpenjualan->DetailID}}" disabled>
            <label for="PenjualanID">Penjualan ID :</label>
            <input type="number" name="PenjualanID" placeholder="Masukkan Penjualan ID..." value="{{$detailpenjualan->PenjualanID}}" required>
            <label for="ProdukID">Produk ID :</label>
            <input type="number" name="ProdukID" placeholder="Masukkan Produk ID" value="{{$detailpenjualan->ProdukID}}" required>
            <label for="JumlahProduk">Jumlah Produk :</label>
            <input type="number" name="JumlahProduk" placeholder="Masukkan Jumlah Produk..." value="{{$detailpenjualan->JumlahProduk}}" required>
            <label for="Subtotal">Subtotal :</label>
            <input type="number" name="Subtotal" placeholder="Masukkan Subtotal..." value="{{$detailpenjualan->Subtotal}}" required>
            <input type="submit" value="UPDATE DATA" class="update">
        </form>
        <center>
            <p>By: Ahmad Nuzulur Rozaq | 2025</p>
        </center>
    </div>
</body>
</html>
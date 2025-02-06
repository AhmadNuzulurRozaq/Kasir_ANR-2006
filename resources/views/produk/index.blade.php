<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir | Produk</title>
    <link rel="stylesheet" href="{{ asset('assets/css/crud/index.css') }}">
</head>
<body>
    <div class="judul">
        <h1>Kasir | Tabel Utama</h1>
        <p>List Data Produk</p>
    </div>
    <hr>
    <div class="create-button">
        <a href="/produk/tambah">
            <input type="submit" value="TAMBAH DATA" class="create">
        </a>
    </div>
    <div class="searchbox">
        <form>
            <input type="text" name="keyword" required>
            <button class="search">CARI</button>
        </form>
    </div>
    <div class="account">
        <p>
            Selamat Datang, <strong>{{Auth::user()->name}}</strong>
        </p>
        <form action="{{route('auth.logout')}}" method="POST">
            @csrf
            <button class="logout">LOGOUT</button>
        </form>
    </div>
    <table align="center" border="1">
        <tr align="center">
            <th>PRODUK ID</th>
            <th>NAMA PRODUK</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="2">AKSI</th>
        </tr>

        @foreach ($produk as $anr)
            <tr align="center">
                <td>{{$anr->ProdukID}}</td>
                <td>{{$anr->NamaProduk}}</td>
                <td>Rp. {{$anr->Harga}}</td>
                <td>{{$anr->Stok}}</td>
                <td>
                    <form action="/produk/{{$anr->ProdukID}}/edit">
                        @csrf
                        <input type="submit" value="EDIT" class="edit">
                    </form>
                </td>
                <td>
                    <form action="/produk/{{$anr->ProdukID}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="HAPUS" class="delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <center>
        <p>By: Ahmad Nuzulur Rozaq | 2025</p>
    </center>
</body>
</html>
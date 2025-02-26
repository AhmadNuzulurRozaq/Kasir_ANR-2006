<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir | Detail Penjualan</title>
    <link rel="stylesheet" href="{{ asset('assets/css/crud/index.css') }}">
</head>
<body>
    <div class="judul">
        <h1>Kasir | Tabel Utama</h1>
        <p>List Data Detail Penjualan | <a href="/home"><input type="submit" value="<--- KEMBALI" class="back"></a></p>
    </div>
    <hr>
    @if (auth()->user()->role == 'admin')
        <div class="create-button">
            <a href="/detailpenjualan/tambah">
                <input type="submit" value="TAMBAH DATA" class="create">
            </a>
        </div>
    @endif
    <div class="searchbox">
        <form>
            <input type="text" name="keyword" required>
            <button class="search">CARI</button>
        </form>
    </div>
    <div class="account">
        <p>
            Selamat Datang, <strong>{{Auth::user()->name}}, {{Auth::user()->role}}</strong>
        </p>
        <form action="{{route('auth.logout')}}" method="POST">
            @csrf
            <button class="logout">LOGOUT</button>
        </form>
    </div>
    <table align="center" border="1">
        <tr align="center">
            <th>DETAIL ID</th>
            <th>PENJUALAN ID</th>
            <th>PRODUK ID</th>
            <th>JUMLAH PRODUK</th>
            <th>SUBTOTAL</th>
            @if (auth()->user()->role == 'admin')
                <th colspan="2">AKSI</th>   
            @endif
            
        </tr>

        @foreach ($detailpenjualan as $anr)
            <tr align="center">
                <td>{{$anr->DetailID}}</td>
                <td>{{$anr->PenjualanID}}</td>
                <td>{{$anr->ProdukID}}</td>
                <td>{{$anr->JumlahProduk}}</td>
                <td>Rp. {{$anr->Subtotal}}</td>
                @if (auth()->user()->role == 'admin')
                    <td>
                        <form action="/detailpenjualan/{{$anr->DetailID}}/edit">
                            @csrf
                            <input type="submit" value="EDIT" class="edit">
                        </form>
                    </td>
                    <td>
                        <form action="/detailpenjualan/{{$anr->DetailID}}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="HAPUS" class="delete">
                        </form>
                    </td>
                @endif
            </tr>
        @endforeach
    </table>
    <center>
        <p>By: Ahmad Nuzulur Rozaq | 2025</p>
    </center>
</body>
</html>
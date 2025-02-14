<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir | Penjualan</title>
    <link rel="stylesheet" href="{{ asset('assets/css/crud/index.css') }}">
</head>
<body>
    <div class="judul">
        <h1>Kasir | Tabel Utama</h1>
        <p>List Data Penjualan | <a href="/home"><input type="submit" value="<--- KEMBALI" class="back"></a></p>
    </div>
    <hr>
    @if (auth()->user()->role == 'admin')
        <div class="create-button">
            <a href="/penjualan/tambah">
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
            <th>PENJUALAN ID</th>
            <th>TANGGAL PENJUALAN</th>
            <th>TOTAL HARGA</th>
            <th>PELANGGAN ID</th>
            @if (auth()->user()->role == 'admin')
                <th colspan="2">AKSI</th>
            @endif
        </tr>

        @foreach ($penjualan as $anr)
            <tr align="center">
                <td>{{$anr->PenjualanID}}</td>
                <td>{{$anr->TanggalPenjualan}}</td>
                <td>{{$anr->TotalHarga}}</td>
                <td>{{$anr->PelangganID}}</td>
                @if (auth()->user()->role == 'admin')
                    <td>
                        <form action="/penjualan/{{$anr->PenjualanID}}/edit">
                            @csrf
                            <input type="submit" value="EDIT" class="edit">
                        </form>
                    </td>
                    <td>
                        <form action="/penjualan/{{$anr->PenjualanID}}" method="POST">
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
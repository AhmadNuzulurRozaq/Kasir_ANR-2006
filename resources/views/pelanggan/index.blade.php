<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir | Pelanggan</title>
    <link rel="stylesheet" href="{{ asset('assets/css/crud/index.css') }}">
</head>
<body>
    <div class="judul">
        <h1>Kasir | Tabel Utama</h1>
        <p>List Data Pelanggan | <a href="/home"><input type="submit" value="<--- KEMBALI" class="back"></a></p>
    </div>
    <hr>
    @if (auth()->user()->role == 'admin')
        <div class="create-button">
            <a href="/pelanggan/tambah">
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
            <th>PELANGGAN ID</th>
            <th>NAMA PELANGGAN</th>
            <th>ALAMAT</th>
            <th>NOMOR TELEPON</th>
            @if (auth()->user()->role == 'admin')
                <th colspan="2">AKSI</th>
            @endif
        </tr>

        @foreach ($pelanggan as $anr)
            <tr align="center">
                <td>{{$anr->PelangganID}}</td>
                <td>{{$anr->NamaPelanggan}}</td>
                <td>{{$anr->Alamat}}</td>
                <td>{{$anr->NomorTelepon}}</td>
                @if (auth()->user()->role == 'admin')
                    <td>
                        <form action="/pelanggan/{{$anr->PelangganID}}/edit">
                            @csrf
                            <input type="submit" value="EDIT" class="edit">
                        </form>
                    </td>
                    <td>
                        <form action="/pelanggan/{{$anr->PelangganID}}" method="POST">
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
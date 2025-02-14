<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir | Home</title>
    <link rel="stylesheet" href="{{asset('assets/css/home/home.css')}}">
</head>
<body>
    <div class="header">
        <div class="judul">
            <h1>HALAMAN UTAMA KASIR</h1>
            <p>Silahkan pilih salah satu tabel dibawah ini.</p>
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
    </div>
    <hr>
    <table align="center" border="0">
        <tr>
            <td><a href="/pelanggan"><button>PELANGGAN</button></a></td>
            <td><a href="/produk"><button>PRODUK</button></a></td>
            <td><a href="/penjualan"><button>PENJUALAN</button></a></td>
            <td><a href="/detailpenjualan"><button>DETAIL PENJUALAN</button></a></td>
        </tr>
    </table>
</body>
</html>
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $keyword  = $request->keyword;
        $produk = Produk::where('ProdukID', 'LIKE', '%'.$keyword.'%')
                            ->orWhere('NamaProduk','LIKE','%'.$keyword.'%')
                            ->paginate();
        return view('produk.index',compact(['produk']));
    }

    public function tambah()
    {
        return view('produk.tambah');
    }

    public function kirim(Request $request)
    {
        Produk::create($request->except(['_token','submit']));
        return redirect('/produk');
    }

    public function delete($ProdukID)
    {
        $produk = Produk::where('ProdukID', $ProdukID);
        $produk->delete();
        return redirect('/produk');
    }

    public function edit($ProdukID)
    {
        $produk = Produk::where('ProdukID', $ProdukID)->first();
        return view('produk.edit',compact(['produk']));
    }

    public function update(Request $request,$ProdukID)
    {
        $produk = Produk::where('ProdukID', $ProdukID);
        $produk->update($request->except(['_token','submit','_method']));
        return redirect('/produk');
    }
}

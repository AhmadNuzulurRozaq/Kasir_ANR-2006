<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index(Request $request)
    {
        $keyword  = $request->keyword;
        $pelanggan = Pelanggan::where('PelangganID', 'LIKE', '%'.$keyword.'%')
                            ->orWhere('NamaPelanggan','LIKE','%'.$keyword.'%')
                            ->orWhere('Alamat','LIKE','%'.$keyword.'%')
                            ->orWhere('NomorTelepon','LIKE','%'.$keyword.'%')
                            ->paginate();
        return view('pelanggan.index',compact(['pelanggan']));
    }

    public function tambah()
    {
        return view('pelanggan.tambah');
    }

    public function kirim(Request $request)
    {
        Pelanggan::create($request->except(['_token','submit']));
        return redirect('/pelanggan');
    }

    public function delete($PelangganID)
    {
        $pelanggan = Pelanggan::where('PelangganID', $PelangganID);
        $pelanggan->delete();
        return redirect('/pelanggan');
    }

    public function edit($PelangganID)
    {
        $pelanggan = Pelanggan::where('PelangganID', $PelangganID)->first();
        return view('pelanggan.edit',compact(['pelanggan']));
    }

    public function update(Request $request,$PelangganID)
    {
        $pelanggan = Pelanggan::where('PelangganID', $PelangganID);
        $pelanggan->update($request->except(['_token','submit','_method']));
        return redirect('/pelanggan');
    }
}

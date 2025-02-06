<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detailpenjualan;

class DetailpenjualanController extends Controller
{
    public function index(Request $request)
    {
        $keyword  = $request->keyword;
        $detailpenjualan = Detailpenjualan::where('DetailID', 'LIKE', '%'.$keyword.'%')
                            ->orWhere('PenjualanID','LIKE','%'.$keyword.'%')
                            ->orWhere('ProdukID','LIKE','%'.$keyword.'%')
                            ->paginate();
        return view('detailpenjualan.index',compact(['detailpenjualan']));
    }

    public function tambah()
    {
        return view('detailpenjualan.tambah');
    }

    public function kirim(Request $request)
    {
        Detailpenjualan::create($request->except(['_token','submit']));
        return redirect('/detailpenjualan');
    }

    public function delete($DetailID)
    {
        $detailpenjualan = Detailpenjualan::where('DetailID', $DetailID);
        $detailpenjualan->delete();
        return redirect('/detailpenjualan');
    }

    public function edit($DetailID)
    {
        $detailpenjualan = Detailpenjualan::where('DetailID', $DetailID)->first();
        return view('detailpenjualan.edit',compact(['detailpenjualan']));
    }

    public function update(Request $request,$DetailID)
    {
        $detailpenjualan = Detailpenjualan::where('DetailID', $DetailID);
        $detailpenjualan->update($request->except(['_token','submit','_method']));
        return redirect('/detailpenjualan');
    }
}

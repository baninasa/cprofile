<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use DB;

class PshowdataController extends Controller
{
    public function index()
    {
        return view('admin.product.showdata.index', [
            'produks' => Produk::all()
        ]);
    }

    public function edit($id)
    {
       $Produk = Produk::findOrFail($id);
       
       return view('admin.product.showdata.edit', [
           'Produk' => $Produk
       ]);
    }

    public function update(Request $request, $id)
    {
        $Produk = Produk::find($id)->update($request->all());

        $Produk->save($request->all());

        return back()->with('success, data berhasil di update');
 
        return redirect('/admin/product/showdata');
    }

    public function destroy($id)
    {
     DB::delete('delete from produks where id = ?', [$id]);   
     return redirect('admin/product/showdata')->with('Success','Data deleted!');
    }
}

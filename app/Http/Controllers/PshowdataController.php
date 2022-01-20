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

    public function edit(Produk $Produk)
    {
        return view('admin.product.showdata.edit', [
            'Produk' => $Produk,
            'produks' => Produk::all()
        ]);
    }

    public function update(Request $request, Produk $Produk)
    {
        $validatedData = $request->validate([
            'category' => 'required|max:255',
            'title' => 'required|max:255',
            'image' => 'image|file|max:10024',
            'description' => 'required|max:255',
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->update('Upload-Gambar');
        }

        Produk::where('id', $Produk->id)
        ->update($validatedData);

        $request->session()->flash('success', 'Update Data successfull!!');
 
        return redirect('/admin/product/showdata');
    }

    public function destroy($id)
    {
     DB::delete('delete from produks where id = ?', [$id]);   
     return redirect('admin/product/showdata')->with('Success','Data deleted!');
    }
    
}

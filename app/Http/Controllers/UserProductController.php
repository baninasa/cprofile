<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class UserProductController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.product.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category' => 'required|max:255',
            'title' => 'required|max:255',
            'image' => 'image|file|max:10024',
            'description' => 'required|max:255',
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('Upload-Gambar');
        }

        Produk::create($validatedData);
 
        $request->session()->flash('success', 'Create Product successfull!!');
 
        return redirect('/admin/product');
    }

}

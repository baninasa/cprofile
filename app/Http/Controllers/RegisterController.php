<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
   public function index()
   {
       return view('admin.registrasi.index',[
           'title' => 'Register'
       ]);
   }
   public function store(Request $request)
   {
       $validatedData = $request->validate([
           'name' => ['required', 'min:3', 'max:255', 'unique:users'],
           'email' => 'required|email:dns|unique:users',
           'password' => 'required|min:5|max:255'
       ]);
       
       $validatedData['password'] = bcrypt($validatedData['password']);

       User::create($validatedData);

       $request->session()->flash('success', 'Registration successfull!! Please login');

       return redirect('/admin');
   }

}
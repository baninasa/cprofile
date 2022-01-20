<?php

namespace App\Http\Controllers;

use App\Models\Delete;
use Illuminate\Http\Request;
use DB;

class UserDeleteController extends Controller
{
    public function destroy($id)
    {
     DB::delete('delete from users where id = ?', [$id]);   
     return redirect('admin/registrasi/showdata')->with('Success','Data deleted!');
    }
}

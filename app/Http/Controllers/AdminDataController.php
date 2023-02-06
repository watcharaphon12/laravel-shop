<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AdminDataController extends Controller
{
    //
    public function getUsers()
    {
     $data= User::paginate(10);
        return view('admin.data.user.user')->with('data',$data);
    }
}

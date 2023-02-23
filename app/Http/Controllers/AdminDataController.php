<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redis;

class AdminDataController extends Controller
{
    
    public function getUsers(Request $request)
    {
        $limit = $request->limit;
        if ($request->search != null) {
            $data = User::where('username', 'LIKE', '%' . $request->search . '%')
                ->orWhere('first_name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('last_name', 'LIKE', '%' . $request->search . '%')
                ->where('type', 'user')
                ->paginate($limit);
        } else {
            $data = User::where('type', 'user')->paginate($limit ?? 10);
        }
        return view('admin.data.user.user')->with('data', $data);
    }

    public function getAdmin(Request $request)
    {
        $limit = $request->limit;
        if ($request->search != null) {
            $data = User::where('username', 'LIKE', '%' . $request->search . '%')
                ->orWhere('first_name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('last_name', 'LIKE', '%' . $request->search . '%')
                ->where('type', 'admin')
                ->paginate($limit);
        } else {
            $data = User::where('type', 'admin')->paginate($limit ?? 10);
        }
        return view('admin.data.admin.admin')->with('data', $data);
    }
}

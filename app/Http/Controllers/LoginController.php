<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Tymon\JWTAuth\Facades\JWTAuth;
class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            if ((Auth::user()->type) == "user") {
                return redirect()->intended('/');
            } else {
                return redirect()->intended('admin/dashboard');
            }
        }else{
            return redirect()->intended('login');
        }
    }
    public function loginAPI(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        $credentials = $request->only('username', 'password');

        if (! $token = JWTAuth::attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
       $user= Auth::user();
       $data=[
        'user'=>$user,
        'token'=>$token,
        'login'=>true
       ];
        return response()->json(['data' => $data]);
    }

    public function register()
    {
        return view('login.register');
    }
    public function sentRegister(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4',
        ]);
        //dd(Str::random(60));
        $user = User::create([

            'username' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        Auth::login($user);
        return redirect('/');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

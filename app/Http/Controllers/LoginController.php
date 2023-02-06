<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // $token = Str::random(60);
            // $id = Auth::user()->id;
            // $user = User::find($id);
            // $user->api_token = $token;
            // $user->save();
            if ((Auth::user()->type) == "user") {
                return redirect()->intended('/');
            } else {
                return redirect()->intended('admin/dashboard');
            }
        }
    }
    public function register()
    {
        return view('login.register');
    }
    public function sentRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4',
        ]);
        //dd(Str::random(60));
        $user = User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'api_token' => Str::random(60),
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

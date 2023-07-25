<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function postregister(Request $request)
    {
        // dd($request->all());
        // save user to db
        \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            // 'password' => $request->password,
        ]);

        return redirect('/login');
    }

    public function login()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect('/converter');
        }

        return redirect('/login');
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/login');
    }
}

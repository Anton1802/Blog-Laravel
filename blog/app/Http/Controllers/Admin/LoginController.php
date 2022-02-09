<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {

        return view('auth.login');

    }

    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if(Auth::attempt($credentials))
        {

            $request->session()->regenerate();

            return redirect()->intended('dashboard.index');

        }

        return back()->withErrors([
            'email' => 'Не верный Email',
            'password'=> 'Не верный пароль'
        ]);

    }

}

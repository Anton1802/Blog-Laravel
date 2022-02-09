<?php

namespace App\Http\Controllers;

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

            return redirect()->intended('/dashboard');

        }

        return redirect('/login')->withErrors([
            'email' => 'Не верный Email или Пароль!',
        ]);

    }

}

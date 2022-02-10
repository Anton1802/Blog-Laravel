<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{

    public function index()
    {

      return view('auth.register');

    }

    public function reg()
    {

      $this->validate(request(), [

        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required'

      ]);

      $user = User::create(request(['name', 'email', 'password']));
      auth()->login($user);


      return redirect('/');

    }

}

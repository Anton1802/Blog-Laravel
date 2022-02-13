<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailClass;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{

    public function index()
    {

      return view('contact');

    }

    public function send(Request $request)
    {

        $name = $request->input('name');
        $email = $request->input('email');
        $text = $request->input('text');

        Mail::to('example@domain.ru')->send(new MailClass($name, $email, $text));

        session()->flash('success', 'Спасибо за обращение! Мы обязательно с вами свяжемся!');
        return redirect('dashboard');

    }

}

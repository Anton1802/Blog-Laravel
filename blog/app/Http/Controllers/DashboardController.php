<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {

      return view('dashboard.general', [
          'user_article' => Article::where('user_id', Auth::id())->get()
      ]);

    }


}

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
          'user_article' => Article::where('user_id', Auth::id())->get(),
          'all_article' => Article::all(),
          'count_comments' => Comment::where('username', Auth::user()->name)->count()
      ]);

    }

    public function del($id)
    {

        Article::where('id', $id)->delete();

        return redirect('dashboard');

    }

    public function edit()
    {



    }

    public function ready($id)
    {
        $watch_ready = Article::where('id', $id)->first()['watch_ready'];
        Article::where('id', $id)->update(['watch_ready' => '1']);
        return redirect('dashboard');

    }

// Форма добавления статьи - доступна всем
// Поля: Фото, заголовок, текст
// Кнопка: Отправить на рассмотрение

    public function add()
    {



    }

}

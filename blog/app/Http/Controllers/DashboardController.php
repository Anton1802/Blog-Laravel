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

    public function rec($id)
    {

        $recommended = Article::where('id', $id)->first()['recommended'];
        if($recommended == false)
        Article::where('id', $id)->update(['recommended' => '1' ]);
        else if($recommended == true)
        Article::where('id', $id)->update(['recommended' => '0' ]);

        return redirect('dashboard');

    }

    public function add(Request $request)
    {

        if($request->isMethod('get'))
        {
        return view('dashboard.add', [

            'categories' => Category::get()

        ]);
        }

        if($request->isMethod('post'))
        {

            $validated = $request->validate([
            'title' => 'required|min:5',
            'text' => 'required',
            'image.*' => 'required|file|mimes:jpg,png,jpeg|max:10000'
        ], [] ,[

            'title' => 'Заголовок',
            'text' => 'Текст',
            'image' => 'Фото'

        ]);

        $image = $request->image;
        $category = $request->input('category');
        $title = $request->input('title');
        $text = $request->input('text');

        $image->move(public_path() . '/images/', $image->getClientOriginalName() );

        Article::insert([
            'title' => $title,
            'text' => $text,
            'path_img' => 'images/' . $image->getClientOriginalName(),
            'id_category' => $category,
            'user_id' => Auth::user()->id
        ]);

        session()->flash('success', 'Спасибо! Статья будет опубликована, после проверки!');
        return redirect('dashboard');

        }
    }

}

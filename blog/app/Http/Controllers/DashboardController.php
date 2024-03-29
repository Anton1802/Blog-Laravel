<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Intervention\Image\Facades\Image;


class DashboardController extends Controller
{

    public function index()
    {

      return view('dashboard.general', [
          'user_article' => Article::where('user_id', Auth::id())->get(),
          'all_article' => Article::all(),
          'count_comments' => Comment::where('username', Auth::user()->name)->count(),
          'comments' => Comment::where('username', Auth::user()->name)->get()
      ]);

    }

    public function del($id)
    {

        Article::where('id', $id)->delete();

        return redirect('dashboard');

    }

    public function edit($id, Request $request)
    {

        if($request->isMethod('get'))
        {

            $article = Article::where('id', $id)->first();

            return view('dashboard.edit', [
                'article' => $article
            ]);

        }

                    if($request->isMethod('post'))
                    {

                        $title = $request->input('title');
                        $text = $request->input('text');

                        Article::where('id', $id)->update([

                            'title' => $title,
                            'text' => $text

                        ]);

                        return redirect('dashboard');

                    }

    }

    public function ready($id)
    {
        $watch_ready = Article::where('id', $id)->first()['watch_ready'];
        Article::where('id', $id)->update(['watch_ready' => '1']);
        return 'success';

    }

    public function rec($id)
    {

        $recommended = Article::where('id', $id)->first()['recommended'];
        if($recommended == false)
        {
        Article::where('id', $id)->update(['recommended' => '1' ]);
        return 'rec btn-success';
        }
        else if($recommended == true)
        {

        Article::where('id', $id)->update(['recommended' => '0' ]);
        return 'rec btn-danger';

        }

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
            'image' => 'required|file|mimes:jpg,png,jpeg|max:10000'
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

        $thumbnail = Image::make(public_path() . '/images/' . $image->getClientOriginalName());
        $thumbnail->fit(700, 300);
        $thumbnail->save(public_path() . '/images/' . $image->getClientOriginalName());


        Article::insert([
            'title' => $title,
            'text' => $text,
            'path_img' => 'images/' . $image->getClientOriginalName(),
            'category_id' => $category,
            'user_id' => Auth::user()->id
        ]);

        session()->flash('success', 'Спасибо! Статья будет опубликована, после проверки!');
        return redirect('dashboard');

        }
    }

}

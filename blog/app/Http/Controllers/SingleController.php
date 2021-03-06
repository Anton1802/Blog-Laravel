<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\Auth;

class SingleController extends Controller
{

    public function getSingle($idArticle)
    {

        $article = Article::where('id', $idArticle)->first();
        $category = $this->getCategorySingle($article->category_id);
        $comments = Comment::where('id_article', $idArticle)->get();

        $views = Article::select('views')->where('id', $idArticle)->first();
        Article::where('id', $idArticle)->update(['views' => $views->views + 1]);

        return view('single', [
            'article' => $article,
            'category' => $category,
            'comments' => $comments
        ]);



    }

    public function getCategorySingle($id)
    {

        $category = Category::where('id', $id)->first();
        return $category;

    }

    public function createComment($idArticle, CommentRequest $request)
    {


        DB::table('comments')->insert([
            'text' => $request->input('text'),
            'username' => Auth::user()->name,
            'email' => Auth::user()->email,
            'web_site' => $request->input('url'),
            'id_article' => $idArticle
        ]);


        return back()->withInput();


    }

}

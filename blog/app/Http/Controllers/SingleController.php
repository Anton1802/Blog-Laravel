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
        $category = $this->getCategorySingle($article);
        $comments = Comment::where('id_article', $idArticle)->get();

        $views = Article::select('views')->where('id', $idArticle)->first();
        Article::where('id', $idArticle)->update(['views' => $views->views + 1]);

        return view('single', [
            'article' => $article,
            'category' => $category,
            'comments' => $comments
        ]);


    }

    public function getCategorySingle($article)
    {

        $category = Category::where('id', $article->id_category)->first();
        return $category;

    }

    public function createComment(CommentRequest $request)
    {


        $referer = $request->server('HTTP_REFERER');
        $referer = substr($referer, -1);

        DB::table('comments')->insert([
            'text' => $request->input('text'),
            'username' => Auth::user()->name,
            'email' => Auth::user()->email,
            'web_site' => $request->input('url'),
            'id_article' => $referer
        ]);

        return back()->withInput();

    }

}

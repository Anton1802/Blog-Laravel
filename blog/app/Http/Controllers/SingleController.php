<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CommentRequest;

class SingleController extends Controller
{

    public function getSingle($idArticle)
    {

        $article = Article::where('id', $idArticle)->first();
        $category = $this->getCategorySingle($article);
        $comments = Comment::where('id_article', $idArticle)->get();

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
            'username' => $request->input('author'),
            'email' => $request->input('email'),
            'web_site' => $request->input('url'),
            'id_article' => $referer
        ]);

        return back()->withInput();

    }

}

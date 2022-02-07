<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class SingleController extends Controller
{

    public function getSingle($idArticle)
    {

        $article = Article::where('id', $idArticle)->first();
        $category = $this->getCategorySingle($article);
        return view('single', [
            'article' => $article,
            'category' => $category
        ]);

    }

    public function getCategorySingle($article)
    {

        $category = Category::where('id', $article->id_category)->first();
        return $category;

    }

    public function createComment(Request $request)
    {

        return dd($request);

    }

}

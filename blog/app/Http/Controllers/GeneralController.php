<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;

class GeneralController extends Controller
{
    public function getAll()
    {

      return view('general',[
          'articles'         => Article::where('watch_ready', true)->simplePaginate(2),
          'categories'       => $this->getCategoryAll(),
          'popular_articles' => $this->getPopularArticles(),
          'rec_articles'     => $this->getRecomendedArticles()
      ]);

    }

    public function getArticlesIdCategory($idCategory)
    {

        $id_articles = Article::where('id_category', $idCategory)->where('watch_ready', true)->simplePaginate(2);

        if($id_articles == "")
        {

        return view('errors.empty',[
            'categories' => $this->getCategoryAll(),
            'popular_articles' => $this->getPopularArticles(),
            'rec_articles' => $this->getRecomendedArticles()
        ]);

        }

        else
        {

        return view('general',[
            'articles' => $id_articles,
            'categories' => $this->getCategoryAll(),
            'popular_articles' => $this->getPopularArticles(),
            'rec_articles' => $this->getRecomendedArticles()
        ]);

        }

    }

    public function getCategoryAll()
    {
        $categories = Category::all();
        return $categories;

    }

    public function getPopularArticles()
    {

        $avg = floor(Article::avg('views'));
        $popular_articles = Article::where('views', '>=', $avg)->where('watch_ready', true)->take(4)->get();
        return $popular_articles;

    }

    public function getRecomendedArticles()
    {

      $rec_articles = Article::where('recommended', true)->where('watch_ready', true)->take(4)->get();
      return $rec_articles;

    }




}

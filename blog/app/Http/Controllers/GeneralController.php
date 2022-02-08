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

      $articles = $this->getArticlesAll();
      $categories = $this->getCategoryAll();
      $popular_articles = $this->getPopularArticles();
      $rec_articles = $this->getRecomendedArticles();

      return view('general',[
          'articles' => $articles,
          'categories' => $categories,
          'popular_articles' => $popular_articles,
          'rec_articles' => $rec_articles
      ]);

    }

    public function getArticlesIdCategory($idCategory)
    {

        $articles = Article::where('id_category', $idCategory)->simplePaginate(2);
        $categories = $this->getCategoryAll();
        $popular_articles = $this->getPopularArticles();
        $rec_articles = $this->getRecomendedArticles();

        return view('general',[
            'articles' => $articles,
            'categories' => $categories,
            'popular_articles' => $popular_articles,
            'rec_articles' => $rec_articles
        ]);

    }

    public function getArticlesAll()
    {

        $articles = Article::simplePaginate(2);
        return $articles;

    }

    public function getCategoryAll()
    {
        $categories = Category::all();
        return $categories;

    }

    public function getPopularArticles()
    {

        $avg = floor(Article::avg('views'));
        $popular_articles = Article::where('views', '>=', $avg)->take(4)->get();
        return $popular_articles;

    }

    public function getRecomendedArticles()
    {

      $rec_articles = Article::where('recommended', true)->take(4)->get();
      return $rec_articles;

    }




}

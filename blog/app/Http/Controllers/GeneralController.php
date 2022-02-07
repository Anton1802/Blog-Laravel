<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class GeneralController extends Controller
{
    public function getAll()
    {

      $articles = $this->getArticlesAll();
      $categories = $this->getCategoryAll();

      return view('general',[
          'articles' => $articles,
          'categories' => $categories
      ]);

    }

    public function getArticlesIdCategory($idCategory)
    {

        $articles = Article::where('id_category', $idCategory)->get();
        $categories = $this->getCategoryAll();

        return view('general',[
            'articles' => $articles,
            'categories' => $categories
        ]);

    }

    public function getArticlesAll()
    {

        $articles = Article::all();
        return $articles;

    }

    public function getCategoryAll()
    {
        $categories = Category::all();
        return $categories;

    }




}

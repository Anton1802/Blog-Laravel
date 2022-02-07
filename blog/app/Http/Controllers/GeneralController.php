<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class GeneralController extends Controller
{
    public function getCategory()
    {

      return view('general',
      [
      'categories' => Category::all(),
      ]);


    }

    public function getArticlesIdCategory($idCategory)
    {

        $articles = Article::where('id_category', $idCategory)->get();

        return view('general',[
            'articles' => $articles
        ]);

    }





}

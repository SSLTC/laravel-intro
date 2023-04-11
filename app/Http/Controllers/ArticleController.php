<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function Show()
    {
        // get all articles with the Article model:
        $articles = Article::all();

        // or if you only want one:
        $article = Article::first();

        // returning the article with your view
        return view('articles', [
            "articles" => $articles, 
            "featuredArticle"=> $article
        ]);
    }

    public function ShowArticle(Request $request, $id)
    {
        $article = Article::find($id);

        return view('article', [
            "featuredArticle"=> $article
        ]);
    }
}

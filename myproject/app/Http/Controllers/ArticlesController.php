<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;


class ArticlesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function index()
    {
        $articles = \App\Articles::orderBy('id', 'desc')->take(5)->get();
        return view('articles', array(
            'articles' => $articles

        ));


    }

    public function show($contenu)
    {
        $articles = \App\Articles::where('contenu', $contenu)->first();
        return view('commentaireArticle', array( //Pass the post to the view
            'articles' => $articles
        ));

    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticlesRequest;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;


// Article et contact on été inversé
class ArticlesController extends Controller
{
    //Ceci est le controlleur de CONTACT !
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    // Article et contact on été inversé

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

    // a utiliser ne marche pas
   /* public function store(ArticlesRequest $request){
        $commentaire = new App\Articles;
        $commentaire->nom = request('nom');
        $commentaire->prenom = request('prenom');
        $commentaire->email = request('email');
        $commentaire->contenu = request('contenu');
        $commentaire->save();
        return Redirect::to('articles');
    }*/
}

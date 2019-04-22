<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as Articles;

class ContactController extends Controller
{


	//public function index()
	//{
	//	return view('contact');
//
	//}

	public function index(){

		$post = \App\Post::find(1); //trouver le post avec l’id 1
		echo $post->post_content; //affiche le nom de l’auteur

		$posts = \App\Post::all(); //get all posts

		return view('contact',array(
           'posts' => $posts
       ));

		// Ici se trouvera le code qui récupèrera la liste des articles
		// la variable $articles contient une liste d'articles
	    //return view('contact'); // La vue articles aura accès à la liste sous le nom listeArticles
    }

}

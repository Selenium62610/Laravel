<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{


	//public function index()
	//{
	//	return view('contact');
//
	//}

	public function index(){

		//$post = \App\Post::find(1); //trouver le post avec l’id 1
		//echo $post->post_content; //affiche le nom de l’auteur

		//$posts = \App\Post::all()->take(4); //get all posts

		$posts = \App\Post::orderBy('id', 'desc')->take(3)->get(); //Permet de récuperer les trois derniers articles

		return view('contact',array(
           'posts' => $posts
       ));

		// Ici se trouvera le code qui récupèrera la liste des articles
		// la variable $articles contient une liste d'articles
	    //return view('contact'); // La vue articles aura accès à la liste sous le nom listeArticles
    }

    public function show($post_name) {
   		$post = \App\Post::where('post_name',$post_name)->first(); //get first post with post_nam == $post_name
  
   		return view('articles',array( //Pass the post to the view
       'post' => $post
   		));
	}


}

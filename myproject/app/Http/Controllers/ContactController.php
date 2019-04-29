<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Article et contact on été inversé
class ContactController extends Controller
{   //Ceci est le controleur d'ARTICLE
	public function index(){

		//$post = \App\Post::find(1); //trouver le post avec l’id 1
		//echo $post->post_content; //affiche le nom de l’auteur

		$posts = \App\Post::orderBy('id', 'desc')->take(3)->get(); //Permet de récuperer les trois derniers articles

		return view('contact',array(
           'posts' => $posts
       ));
    }

    public function show($post_name) {
   		$posts = \App\Post::where('post_name',$post_name)->first(); //get first post with post_nam == $post_name
  		return view('toast',array( //Pass the post to the view
       'posts' => $posts
   ));


	}

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
	function index()
	{
		return view('contact');
		$posts = \App\Posts::all(); //get all posts
		echo($posts);

	}

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;


class ArticlesController extends Controller
{
	function index()
	{
		return view('articles');
		
	}

}

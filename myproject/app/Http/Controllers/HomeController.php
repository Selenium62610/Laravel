<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() //Retourne la vue principal
    {

        return view('welcome'); //Welcomme étant passé dans le return, Laravel cherchera un fichier ‘welcome.blade.php’ ou ‘welcome.php’ dans resources/views.
    }

}

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
        //fonction executée entre l'appel de la route et l'execution, ce dernier permet de n'autoriser l'accès à la page home
        //uniquement pour l'utilisateur authentifier
        $this->middleware('auth');
    }

    public function index() //Retourne la vue principal
    {

        return view('welcome'); //Welcomme étant passé dans le return, Laravel cherchera un fichier ‘welcome.blade.php’ ou ‘welcome.php’ dans resources/views.
    }

}

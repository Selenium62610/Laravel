<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('menu', 'HomeController@index');

Route::get('articles', 'ArticlesController@index');

Route::get('contact', 'ContactController@index');

// Nous pouvons également utiliser des variables dans les routes (ici l'id d'un article)
// Celle-ci appellera la fonction article dans le contrôleur ArticlesController
Route::get('/posts/{post_author}', 'ContactController@posts');

Route::get('/ajouter', 'OffresController@ajouteOffres')->middleware('auth'); //Permet de demander l'authentification pour un utilisateur pour accéder à la page

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

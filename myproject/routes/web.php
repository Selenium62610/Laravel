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

//Les redirects permettent de revenir sur les pages articles, contact et le menu même après avoir appuyé sur l'un des postes

Route::get('contact/articles', function()
{
return Redirect::to('articles');
});

Route::get('contact/contact', function()
{
return Redirect::to('contact');
});

Route::get('contact/menu', function()
{
return Redirect::to('menu');
});

// Nous pouvons également utiliser des variables dans les routes (ici l'id d'un article)
// Celle-ci appellera la fonction article dans le contrôleur ArticlesController

Route::get('/ajouter', 'OffresController@ajouteOffres')->middleware('auth'); //Permet de demander l'authentification pour un utilisateur pour accéder à la page

Auth::routes();

Route::get('/', function()
{
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact/{post_name}', 'ContactController@show');

//Permet de récupérer le contenu des formulaires créé sur la page articles
Route::get('/articles', function () {
    return view('articles');
});

Route::post('/articles', function () {

	$commentaire = new App\Articles;
	$commentaire->contenu = request('contenu');
	$commentaire->save();
	return view('articles');
    //return 'Votre email est ' . $_POST['contenu'];
});
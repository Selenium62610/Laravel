<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Déclencher lors de l'appel de la page home
//vérifie l'authentification de l'utilisateur
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>

    <body>
        @extends('layouts/main')
        @section('content')
        <h1>Le contenu du post {{$posts->post_name}} et le nom de l'auteur </h1>

        <ul>
            
            <li> {{ $posts->post_content }}</li> 
            <li> {{ $posts->author->name }}</li> 
            
        </ul>



        @endsection

    </body>
</html>

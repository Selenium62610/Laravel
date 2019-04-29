<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- // Article et contact on été inversé-->
        <!-- Ceci est la page contact-->
    </head>

    <body>
        @extends('layouts/main')
        @section('content')
        <h1>La pages des Contacts</h1>

        <p> </p>

        <form action="/articles" method="post">
                 {{ csrf_field() }}

            <input type="string" name="nom" placeholder="Nom"></br></br>
            <input type="string" name="prenom" placeholder="Prénom"></br></br>
            <input type="string" name="email" placeholder="Email"></br></br>
            <input type="text" style="width: 500px; height: 200px;" name="contenu" placeholder="Votre message">
            <input type="submit" value="Ajouter">
        </form>

        <!-- articles inversés avec contact-->
        @if(!empty($articles))
            @foreach ( $articles as $article )
                <li> <a href="articles/{{$article->contenu}}">{{ $article->contenu }} </a></li>

                @endforeach
        @endif
        @endsection

    </body>
</html>


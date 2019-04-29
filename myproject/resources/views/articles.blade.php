<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>

        @extends('layouts/main')
        @section('content')
        <h1>La pages des articles</h1>

        <p> </p>

        <form action="/articles" method="post">
                 {{ csrf_field() }}
            <input type="string" name="contenu" placeholder="Commentaire">
            <input type="submit" value="Ajouter">
        </form>


        @if(!empty($articles))
            @foreach ( $articles as $article )
                <li> <a href="articles/{{$article->contenu}}">{{ $article->contenu }} </a></li>

                @endforeach
        @endif
        @endsection

    </body>
</html>
</html>

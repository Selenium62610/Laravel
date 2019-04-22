<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @extends('layouts/main')
        @section('content')
        <h1>C'est la page d'accueil, celle que j'utilise à la place de Home</h1>
        
        @endsection

    </body>
</html>

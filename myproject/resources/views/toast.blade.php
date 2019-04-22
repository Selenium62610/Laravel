<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @extends('articles')
        @section('content')
        <h1>ups</h1>

        <ul>
            
            <li> {{ $posts->post_content }}</li> 

            
        </ul>

        @endsection

    </body>
</html>

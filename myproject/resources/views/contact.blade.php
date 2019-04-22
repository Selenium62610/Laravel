<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @extends('layouts/main')
        @section('content')
        <h1>zfzf</h1>
        
        <ul>
@foreach ( $posts as $post )

  <li>{{ $post->post_title }}</li>

@endforeach
</ul>

        @endsection

    </body>
</html>

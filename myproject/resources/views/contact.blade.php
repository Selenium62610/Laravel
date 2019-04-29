<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @extends('layouts/main')
        @section('content')
        <h1>La page des Articles ou l'on retrouve les 3 derniers post de la base de données </h1>
        <!-- // Article et contact on été inversé-->
        <ul>
			@foreach ( $posts as $post )
  				<li> <a href="contact/{{$post->post_name}}">{{ $post->post_name }} </a></li> 

			@endforeach
		</ul>

        @endsection

    </body>
</html>

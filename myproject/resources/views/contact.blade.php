<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @extends('layouts/main')
        @section('content')
        <h1>La page des contacts ou l'on retrouve les 3 derniers post de la base de données (j'ai tout mit ici j'avais pas fait attention au nom donné dans le sujet) </h1>
        
        <ul>
			@foreach ( $posts as $post )
  				<li> <a href="contact/{{$post->post_name}}">{{ $post->post_name }} </a></li> 

			@endforeach
		</ul>

        @endsection

    </body>
</html>

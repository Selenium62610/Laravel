<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @extends('layouts/main')
        @section('content')
        <h1>rgergerg</h1>
        
        <ul>
			@foreach ( $posts as $post )
  				<li> <a href="contact/{{$post->post_name}}">{{ $post->post_name }} </a></li> 

			@endforeach
		</ul>

        @endsection

    </body>
</html>

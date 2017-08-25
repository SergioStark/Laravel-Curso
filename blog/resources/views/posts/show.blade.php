@extends('layouts.master')
@section('content')
	<h1>{{ $post->title }} </h1>
	<hr>
	<p>{{ $post->created_at->toFormattedDateString() }} </p>
	<p>Publicacion: ${{ $post->body }} </p>
	<a href="/">Regresar</a>

	<br>
	<h1>Comentarios</h1>
	<hr>

	<!-- Formulario para comentaios -->

    <ul class="collection">
	@foreach($post->comments as $comment) 	
      <li class="collection-item">
		{{ $comment->created_at->diffForHumans() }} <br>
		{{ $comment->body }} <br>
      </li>

	@endforeach
    </ul>

@endsection


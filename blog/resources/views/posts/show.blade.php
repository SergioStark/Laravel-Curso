@extends('layouts.master')
@section('content')
	<h2> Titulo: {{ $post->title }} </h2>
	<p> Publicacion: ${{ $post->body }} </p>
	<a href="/">Regresar</a>
@endsection


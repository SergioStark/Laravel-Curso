@extends('layouts.master')

@section('content')
	<h1>Últimas publicaciones</h1>
	<hr>
      <div class="row">		
		@foreach($posts as $post)
        <div class="col s12 m6">
          <div class="card grey lighten-1">
            <div class="card-content white-text">
              <span class="card-title grey-text text-darken-4">{{ $post->title }}</span>
              <p class="grey-text text-darken-4">{{ str_limit($post->body,50) }}</p>
            </div>
            <div class="card-action">
              <a href="/posts/{{ $post->id }}">Leer más>></a>              
            </div>
          </div>
        </div>
		@endforeach
      </div>		
@endsection	
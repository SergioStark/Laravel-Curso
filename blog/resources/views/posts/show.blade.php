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

<br>

<div class="row">
	<form class="col s12" method="POST" action="/posts/{{ $post->id }}/comments">
			{{ csrf_field() }} 
		<div class="row">
			<div class="input-field col s12">
				<textarea id="body" class="materialize-textarea" name="body"></textarea>
				<label for="body">¿Deseas comentar algo?</label>
			</div>
		</div>
	  <button class="btn waves-effect waves-light" type="submit">Comentar
	    <i class="material-icons right">send</i>
	  </button>    		
	</form>
</div>

@include('layouts.error')

<ul class="collection">
	@foreach($post->comments as $comment) 	
	<li class="collection-item">
		{{ $comment->created_at->diffForHumans() }} <br>
		{{ $comment->body }} <br>
	</li>

	@endforeach
</ul>

@endsection


@extends('layouts.master')

@section('content')

<h1>Nueva publicación</h1>

  <div class="row">
    <form class="col s12" action="/posts" method="POST">
	{{ csrf_field() }}    	
      <div class="row">
        <div class="input-field col s12">
          <input name="title" placeholder="Ingresa titulo" id="title" type="text" class="validate">
          <label for="title">Título</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea name="body" id="body" class="materialize-textarea"></textarea>
          <label for="body">Contenido</label>
        </div>
      </div>
	  <button class="btn waves-effect waves-light" type="submit">Publicar
	    <i class="material-icons right">send</i>
	  </button>      
    </form>
  </div>



@endsection

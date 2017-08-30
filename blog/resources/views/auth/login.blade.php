@extends('layouts.master')

@section('content')
<h1>Iniciar Sesión</h1>
<hr>
<div class="row">
    <form class="col s4 offset-s4 col s4" method="POST" action="/login">
			{{ csrf_field() }}    	
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="password">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
      	<div class="col s4 offset-s4 col s4">
		  <button class="btn waves-effect waves-light" type="submit" name="action">Iniciar
		    <i class="material-icons right">send</i>
		  </button>           		
      	</div>
      </div>
        <p>¿No estás registrado? <a href="/register">Clic aquí :)</a></p>      
    </form>

  @include('layouts.error')

  </div>

@endsection
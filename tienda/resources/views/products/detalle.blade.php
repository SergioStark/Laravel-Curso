@extends('layouts.master')
@section('content')
	<h1> Producto: {{ $product->descripcion }} </h1>
	<h2> Precio: ${{ $product->precio }} </h2>
	<a href="/">Regresar</a>
@endsection
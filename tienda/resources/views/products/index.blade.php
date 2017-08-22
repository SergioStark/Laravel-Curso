@extends('layouts.master')

@section('content')
	<h1>Products</h1>
	<ul>
		@foreach($products as $product)
				<a href="/detalle/{{ $product->id }}"><li>{{ $product->descripcion }}</li></a>		
		@endforeach
	</ul>
@endsection	
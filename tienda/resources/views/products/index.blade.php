<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PRODUCTS</title>
</head>
<body>
	<h1>Products</h1>
	<ul>
		@foreach($products as $product)
			@if($product->existencia == 1)
				<li>{{ $product->descripcion }} - ${{ $product->precio }} <b>en existencia</b></li>
				@else
				<li>{{ $product->descripcion }} - ${{ $product->precio }} <b>sin existencia</b></li>		
			@endif 
		@endforeach

	</ul>	
</body>
</html>
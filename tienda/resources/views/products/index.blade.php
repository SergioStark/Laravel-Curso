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
		
				<a href="/detalle/{{ $product->id }}"><li>{{ $product->descripcion }}</li></a>		
		
		@endforeach

	</ul>	
</body>
</html>
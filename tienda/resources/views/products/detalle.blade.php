<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detalle</title>
</head>
<body>
	<h1> Producto: {{ $product->descripcion }} </h1>
	<h2> Precio: ${{ $product->precio }} </h2>
	<a href="/">Regresar</a>
</body>
</html>
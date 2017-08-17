<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tareas</title>
</head>
<body>
	<h1>TAREAS</h1>
	<ul>
		@foreach($tareas as $tarea)
			<li>
				<a href="/tareas/{{ $tarea->id }}">{{ $tarea->titulo }}</a>
			</li>
		@endforeach
	</ul>
</body>
</html>
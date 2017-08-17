<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tareas</title>
</head>
<body>
	<!--ul>
		<?php foreach ($tareas as $tarea):?>
		<li><?= $tarea ?></li>
	<?php endforeach; ?>
	</ul-->

	<ul>
		@foreach($tareas as $tarea)
			<li>{{ $tarea }}</li>
		@endforeach
	</ul>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tineda</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
	  body {
	    display: flex;
	    min-height: 100vh;
	    flex-direction: column;
	  }

	  main {
	    flex: 1 0 auto;
	  }		
    </style>
</head>
<body>
	<header>
		<!-- NAVBAR Fijo -->
		@include('layouts.nav')		
	</header>

	<main>
		<!-- CONTENIDO Variable-->
		@yield('content') <!-- pone la parte del codigo que esta variando -->		
	</main>

	<footer>
		<!-- FOOTER  Fijo-->
		@include('layouts.footer')		
	</footer>

</body>
</html>
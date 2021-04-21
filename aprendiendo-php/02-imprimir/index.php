<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Imprimir por pantalla - Master PHP</title>
	</head>
	<body>
		<h1>Master en PHP - David Garcia</h1>

		<?="Bienvenido al curso mas grande de PHP"?>

		<?php
		    // Titular de la seccion
			echo "<h3>Listado de videojuegos: </h3>";
			echo "<ul>"
				. "<li>GTA</li>"
				. "<li>Fifa</li>"
				. "<li>Mario Bros</li>"
				. "</ul>";
			// Parrafo explicativo
			echo '<p> Esta es toda' . ' - ' . 'lista de juegos</p>';

			/*
			Esta es una lista de videojuegos
			modernos */
			

		?>

	</body>
</html>



<?php

	$numero1 = 55;
	$numero2 = 33;

	echo 'suma: '.($numero1 + $numero2).'<br>';
	echo 'Resta: '.($numero1 - $numero2).'<br>';
	echo 'Multiplicacion: '.($numero1 * $numero2).'<br>';
	echo 'Division: '.($numero1 / $numero2).'<br>';
	echo 'Resto: '.($numero1 % $numero2).'<br>';

	//Operadores incremento y decremento
	$year = 2021;
	$year--;
	echo $year.'<br>';

	// Operadores de asignasion
	$edad = 55;
	echo $edad.'<br>';

	// $edad = $edad + 5
	echo ($edad+=5).'<br>';
	var_dump($edad);
?>
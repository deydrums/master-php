<?php 
/*
Programa con 4 variables, una tipo array, otra tipo string, otra int y otra booleana
y que imprima el mensaje con el tipo de variable.
*/
$matriz = array('Hola mundo',8);
$texto = "master en PHP";
$numero = 88;
$verdadero = true;

if(is_array($matriz)){
	echo "<h1>El array es un array</h1>";
}

if(is_string($texto)){
	echo "<h1>$texto</h1>";
}

if(is_integer($numero)){
	echo "<h1>$numero</h1>";
}

if(is_bool($verdadero)){
	echo "<h1>Bool es verdadero</h1>";
}

 ?>
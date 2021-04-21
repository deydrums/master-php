<?php 
/*
Variables locales: las que se definen dentro de una funcion y no pueden ser usadas fuera 
de la funcion, solo estan disponibles dentro. A no ser que hagamos un return.

Variables globales: las que se declaran fuera de una funcion y estan disponibles dentro 
y fuera de las funciones.

*/

$frase = "Ni los genios son tan genios, ni los mediocres son tan mediocres";

echo "$frase";

function holamundo(){
	global $frase;
	echo "<h1>$frase</h1>";
	$year = 2021;
	echo "$year";
}
//no se puede 
//echo "$year";

holamundo();


//Funciones variables

function buenosDias(){
	return "<h1>Hola!, Buenos dias</h1>";
}
function buenasTardes(){
	return "<h1>Hola!, Buenas tardes, como estas?</h1>";
}
function buenasNoches(){
	return "<h1>Hola!, Buenas noches, que frio hace</h1>";
}

$horario = "Tardes";
$miFuncion = "buenas".$horario;

echo $miFuncion();

 ?>

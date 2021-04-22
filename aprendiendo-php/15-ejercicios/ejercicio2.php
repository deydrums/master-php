<?php 
/*
Programa que añada valores a un array mientras que su longitud sea menor a 120

*/


$coleccion = array();

for ($i=0; $i < 120 ; $i++) { 
	array_push($coleccion, $i);
}

foreach ($coleccion as $key => $valor) {
	echo $valor .'<br>';
}
 ?>
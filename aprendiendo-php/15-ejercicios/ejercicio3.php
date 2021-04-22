<?php 

/*
Programa que compruebe si una variable esta vacia y si esta vacia 
rellenarla con texto en minusculas y mostrarlo en mayusculas y negrita

*/
$texto = "";

if (empty($texto)) {
	$texto = 'hola, este es un texto en minusculas';	
	$textoMay = strtoupper($texto);
	echo "<strong>$textoMay</strong>";
}

 ?>
<?php 
/*
//CONDICIONAL IF
IF:
	if(condicion){
		instrucciones
	}else{
		otras instrucciones
	}

// OPERADORES DE COMPARACION
	==  igual
	=== identico
	!=  diferente
	<>  diferente
	!== no identico
	<   menor que
	>   mayor que
	<=  menor o igual que
	>=  mayor o igual que
*/

$color = "rojo";

	if ($color == "rojo") {
		echo "El color es rojo";
	}else{
		echo "El color no es rojo";
	}
	echo "<br>";

$year = 2021;

	if ($year == 2021){
		echo "Estamos en 2021";
	}else{
		echo "No estamos en el 2021";
	}
	echo "<br>";

	if($year > 2020){
		echo "El año ".$year."es mayor que 2020";
	}else{
		echo "El año " . $year . "  es menor que 2020";
	}

 ?>
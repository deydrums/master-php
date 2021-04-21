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
	//Ejemplo 1
$color = "rojo";

	if ($color == "rojo") {
		echo "El color es rojo";
	}else{
		echo "El color no es rojo";
	}
	echo "<br>";
	//Ejemplo 2
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

	//Ejemplo 3
	$edad = 24;
	$ciudad = 'Guatemala';
	$continente = 'America';
	$mayoria_edad = 18;
	$nombre = 'David Garcia';

	if ($edad >	 18){
		echo "<h1> $nombre es mayor de edad </h1>";
		if ($continente == 'America') {
			echo "<h2> Y es de $ciudad</h2>";
		}else{
			echo "<h2>No es de America</h2>";
		}

	}else{
		echo "<h1> $nombre no es mayor de edad </h1>";
	}

 ?>
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

// OPERADORES LOGICOS
	&& 			AND Y
	|| 			OR  O
	!  			NOT NO
	and, or

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
	echo "<hr>";
	//Ejemplo 4
	$dia = 5;
	if ($dia == 1) {
		echo "Es Lunes";
	}elseif ($dia == 2) {
		echo "Es Martes";
	}elseif ($dia == 3) {
		echo "Es Miercoles";
	}elseif ($dia == 4) {
		echo "Es Jueves";
	}elseif ($dia == 5) {
		echo "Es Viernes";
	}

	echo "<hr>";
	//Ejemplo5
	$edad1 = 18;
	$edad2 = 64;
	$edad_oficial = 20;

	if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
		echo "Esta en edad de trabajar";
	}else{
		echo "No puede trabajar";
	}

	echo "<hr>";
	
	$pais = "Mexico";
	if($pais == "Mexico" || $pais == "España"){
		echo "En este pais se habla español";
	}else{
		echo "En este pais no se habla español";

	}
 ?>
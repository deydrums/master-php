<?php 
/*
Calculadora basica obteniendo el dato por get
*/
if (isset($_GET['numero1'])&&($_GET['numero2'])) {
	//Cambiar tipo de dato
	$numero1 = (int)$_GET['numero1'];
	$numero2 = (int)$_GET['numero2'];
	echo "La suma de los numeros: ".$numero1." y ".$numero2." es: ".($numero1+$numero2)."<br>";
	echo "La resta de los numeros: ".$numero1." y ".$numero2." es: ".($numero1-$numero2)."<br>";
	echo "La multiplicacion de los numeros: ".$numero1." y ".$numero2." es: ".($numero1*$numero2)."<br>";
	echo "La division de los numeros: ".$numero1." y ".$numero2." es: ".($numero1/$numero2)."<br>";
}else{
	echo "Introduce correctamente los valores";
}





 ?>
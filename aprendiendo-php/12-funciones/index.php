<?php 
/*
FUNCIONES:
Una funcion es un conjunto de instrucciones agrupadas bajo un nombre concreto
y que pueden reutilizarse solamente invocando a la funcion tantas veces como queramos

function nombreDeMiFuncion($parametro){
	//Bloque de instrucciones
}

nombreDeMiFuncion($mi_parametro);

*/

//Ejemplo 1
function muestraNombres (){
	echo "Mario Garcia <br>";
	echo "David Garcia <br>";
	echo "Victor Garcia <br>";
	echo "Eduardo Garcia <br>";
	echo "<hr>";
}

muestraNombres();
muestraNombres();

//Ejemplo 2

function tabla($numero){
	echo "<h3>Tabla de multiplicar del numero $numero </h3>";

	for ($i=1; $i <= 10 ; $i++) { 
		$operacion = $numero*$i;
		echo "$numero x $i = $operacion <br>";
	}

	}
/*
if (isset($_GET['numero'])){
	tabla($_GET['numero']);
}else{
	echo "No hay numero para sacar la tabla";
}
*/
for ($i=0; $i <= 10 ; $i++) { 
	tabla($i);
}

 ?>

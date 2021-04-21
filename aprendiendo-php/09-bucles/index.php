<?php  
/*
//BUCLE WHILE
Estructura de controlo que itera o repite la ejecucion de una serie de instrucciones
tantas veces como sea necesario, en base a una condicion.

while (condicion){
	bloque de instrucciones
}


*/
$numero = 0;

while ($numero <= 100) {
	echo "$numero";
	if ($numero != 100) {
		echo ", ";
	}
	$numero++;

}



?>
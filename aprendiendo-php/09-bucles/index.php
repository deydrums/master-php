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

	echo "<hr>";

// Ejemplo 
if (isset($_GET['numero'])) {
	//Cambiar tipo de dato
	$numero = (int)$_GET['numero'];
}else{
	$numero = 1;
}

echo "<h1>Tabla de multiplicar del numero $numero</h1>";
$contador = 0;
while ($contador <= 10) {
	echo "$numero x $contador = " . ($numero*$contador)."<br/>";
	$contador++;
}

// DO WHILE
/*
do {
	Instrucciones
} while (Condicion);

*/
echo "<hr>";
$edad = 18;
$contador = 1;
do {
	echo "Tienes acceso al local privado $contador <br>";
	$contador++;
} while ($edad >= 18 && $contador <= 10);

?>
<?php 

/*
Crear un programa con un array de 8 numeros
-recorrerlo y mostrarlo
-ordenarlo y mostrarlo
-mostrar longitud
-mostrar algun elemento del array

*/
$numeros = array(1,4,8,9,6,3,4,7);

function mostrarArray($numeros){
	$resultado = "";
	for ($i=0; $i <= count($numeros)-1 ; $i++) { 
		$resultado .= $numeros[$i]."<br>";
	}
	return $resultado;
}
echo "<h1>Mostrar numeros</h1>";
echo mostrarArray($numeros);
echo '<hr>';

echo "<h1>Ordenar numeros</h1>";
sort($numeros);
echo mostrarArray($numeros);
echo '<hr>';

echo "<h1>Numero de elementos</h1>";
echo count($numeros);
echo '<hr>';

echo "<h1>Buscar elementos</h1>";
echo array_search('6', $numeros);
 ?>
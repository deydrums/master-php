<?php 

/*
ARRAYS
Un array es una coleccion o un conjunto de datos/valores, bajo un unico nombre
y para acceder a esos valores se puede usar un indice numerico o alfanumerico.

*/
$pelicula = "Batman";
$peliculas = array("Batman", "Spiderman","WonderWoman");
var_dump($peliculas[2]);
$cantantes = ['2pac', 'Drake', 'Taylor Swift'];
var_dump($cantantes);

//echo $cantantes[2];

//RECORRER CON FOR
echo "<h1>Listado de peliculas</h1>";
echo "<ul>";
for ($i=0; $i <= count($peliculas)-1 ; $i++) { 
	echo "<li>".$peliculas[$i]."</li>";
}

echo "</ul>";

//RECORRER CON FOREACH
echo "<ul>";
foreach ($cantantes as $cantante) {
	echo "<li> $cantante </li>";
}
echo "</ul>";


 ?>


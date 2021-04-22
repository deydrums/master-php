<?php 

/*
ARRAYS
Un array es una coleccion o un conjunto de datos/valores, bajo un unico nombre
y para acceder a esos valores se puede usar un indice numerico o alfanumerico.

*/
$pelicula = "Batman";
$peliculas = array("Batman", "Spiderman","WonderWoman");
$cantantes = ['2pac', 'Drake', 'Taylor Swift'];
//ARRAY ASOCIATIVO
$personas = array(
	'nombre' => 'David',
	'apellidos' => 'Garcia',
	'web' => 'davgar.com'
);

echo($personas['apellidos']);
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

//ARRAYS MULTIDIMENSIONALES
$contactos = array(
	array(
		'nombre' => 'Pedro',
		'email' => 'pedro@php.com'
	),

	array(
		'nombre' => 'Luis',
		'email' => 'luis@php.com'
	),

	array(
		'nombre' => 'Javier',
		'email' => 'jav1025@php.com'
	),

	array(
		'nombre' => 'Gabriela',
		'email' => 'Gaby123@php.com'
	)

);

foreach ($contactos as $key => $contacto) {
	echo($contacto['nombre']).'<br>';
}

 ?>


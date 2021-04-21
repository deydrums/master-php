<?php 

//Debuggear
$nombre = "David";
var_dump($nombre);
echo "<hr>";
//Fechas
echo date('d-M-y');
echo "<br>";
echo time();
echo "<hr>";

//Matematicas
echo "Raiz cuadrada de 9 es ".sqrt(9);
echo "<br>";
echo "Numero aleatorio entre 10 y 40: ".rand(10,40);
echo "<br>";
echo "Numero PI: ".pi();
echo "<br>";
echo "Redondear 7.8954654454: ".round(7.8954654454,2);
echo "<br>";

//Mas funciones generales
echo gettype($nombre);
echo "<hr>";
//Detectar tipado
if (is_string($nombre)) {
	echo "Esa variable es un string<br>";
}

if (!is_float($nombre)) {
	echo "Esa variable no es un numero con decimales<br>";
}


echo "<hr>";
//Comprobar si existe una variable
if (isset($edad)){
	echo "La variable existe<br>";
}else{
	echo "La variable no existe<br>";
}

echo "<hr>";
//Cortar espacios
$frase = "     mi contenido    ";
echo "$frase";
var_dump($frase);
var_dump(trim($frase));

echo "<hr>";
//Eliminar variables /indices

$year = 2021;
unset($year);

echo "<hr>";
//Comprobar variable vacia
$texto = "Hola";
if(empty($texto)){
	echo "La variable texto esta vacia";
}else{
	echo "La variable tiene contenido";
}
echo "<hr>";
//Contar caracteres de un string
$cadena = "123456";
echo strlen($cadena);
echo "<hr>";
//Encontrar caracter
$frase = "La vida es bella";
echo strpos($frase, "vida");
echo "<hr>";
//Reemplazar palabras de un string
echo str_replace("vida", "chica", $frase);
echo "<hr>";
// Mayusculas y minusculas
echo strtolower($frase);
echo "<br>";
echo strtoupper($frase);
echo "<hr>";

 ?>
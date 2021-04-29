<?php 
require_once '../vendor/autoload.php';

$frutas = array("manzanas", "Naranjas","Sandias");
\FB::log($frutas);
$nombres = array("David", "Juan","Pedro");
\FB::log($nombres);
echo "Hola mundo".$nombres['1'];

\FB::log("Muestrame esto en consola");

?>
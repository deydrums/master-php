<?php 
/*
Crear un array con el contenido de la siguiente tabla:
Accion	Aventura	Deportes
gta     assasins    fifa 19  
cod     cras        pes 19
pug     prince of   moto gp 19
        persia

Cada fila debe ir en un fichero separado
*/
$tabla = array(
	"ACCION" => array("GTA 5","Call of Duty","pugb"),
	"AVENTURA" => array("Assasins","Crash","Prince of persia"),
	"DEPORTES" => array("Fifa 19","Pes 19","Moto GP 19")
);

var_dump($tabla);
$categorias = array_keys($tabla);
 ?>

 <table border="2">
<?php require_once "ejercicio5/encabezado.php"?>
<?php require_once "ejercicio5/primera.php"?>
<?php require_once "ejercicio5/segunda.php"?>
<?php require_once "ejercicio5/tercera.php"?>
 
 </table>

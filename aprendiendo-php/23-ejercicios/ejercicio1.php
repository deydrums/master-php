<?php 
/*
Crear una sesion que aumente su valor en uno o disminuya en uno 
en funcion si el parametro get counter esta a 1 o a 0
*/
session_start();

if (!isset($_SESSION['variable'])) {
	$_SESSION['variable'] = 0;
}


if (isset($_GET['counter'])) {
	$counter = (int) $_GET['counter'];

switch ($counter) {
	case 0:
		$_SESSION['variable']--;
		break;
	case 1:
		$_SESSION['variable']++;
		break;	
	default:

		break;
}

echo "<h1> El valor de la sesion es: ".$_SESSION['variable']."</h1>";
}



 ?>

 <a href="ejercicio1.php?counter=1">Aumentar</a><hr>
 <a href="ejercicio1.php?counter=0">Disminuir</a><hr>
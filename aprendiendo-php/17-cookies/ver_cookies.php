<?php 
/*
Para mostrar el valor de las cookies, tengo que utilizar $_COOKIE, una variable superglobal, es un array asociativo.
*/

if (isset($_COOKIE['micookie'])) {
	echo "<h1>".$_COOKIE['micookie']."</h1>";
}else{
	echo "No existe la cookie";
}

if (isset($_COOKIE['UnYear'])) {
	echo "<h1>".$_COOKIE['UnYear']."</h1>";
}else{
	echo "No existe la cookie";
}

 ?>

 <a href="borrar_cookies.php">Borrar mis cookies</a>
 <a href="crear_cookies.php">Crear cookies</a>
<?php 
//Abrir archivo
$archivo = fopen("fichero_texto.txt",'a+');

//Leer contenido
while (!feof($archivo)) {
	$contenido = fgets($archivo);
	echo "$contenido<br>";
}

//Escribir contenido
fwrite($archivo, '***Soy un texto desde php***');

//Cerrar archivo
fclose($archivo);

 ?>
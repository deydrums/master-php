<?php 
// Conectar a la base de datos

$conexion = mysqli_connect("localhost", "root", "","phpmysql");

// Comprobar si la conexion es correcta
if(mysqli_connect_errno()){
	echo "La Conexion a la base de datos MySQL ha fallado: ".mysqli_connect_error();
}else{
	echo "Conexion realizada correctamente";
}

// Consulta para configura la codificacion de caracteres (setear)
mysqli_query($conexion, "SET NAMES 'utf8'");

// Consulta SELECT desde php
$query = mysqli_query($conexion, "SELECT * FROM notas");

while ($nota = mysqli_fetch_assoc($query)){
	//var_dump($nota);
	echo '<h2>'.$nota['titulo'].'</h2>';
	echo $nota['descripcion'].'<br>';
	
}


 ?>

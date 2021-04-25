<?php 
//Conexion
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$basededatos = 'blog_master';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);
mysqli_query($db, "SET NAMES 'utf8'");

//INICIAR LA SECION
	session_start();
if(mysqli_connect_errno()){
	echo "La Conexion a la base de datos MySQL ha fallado: ".mysqli_connect_error();
}else{
	echo "Conexion realizada correctamente";
}

 ?>
<?php 
$error = 'faltan_valores';
if (!empty($_POST['nombre'])&&!empty($_POST['apellidos'])&&!empty($_POST['edad'])&&!empty($_POST['email'])&&!empty($_POST['pass'])) {
	$error = 'ok';

	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$edad = (int)$_POST['edad'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	//Validar el nombre
	if (!is_string($nombre)|| !preg_match("/[a-zA-Z ]+/", $nombre)) {
			$error = 'nombre';
	}
	//Validar el apellido
	if (!is_string($apellidos)|| !preg_match("/[a-zA-Z ]+/", $apellidos)) {
			$error = 'apellidos';
	}
	//Validar la edad
	if (!is_int($edad)|| !filter_var($edad, FILTER_VALIDATE_INT)) {
			$error = 'edad';
	}
	//Validar email
	if (!is_string($email)|| !filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$error = 'email';
	}
	//Validar la edad
	if (strlen($pass)<5) {
			$error = 'pass';
	}
}else{
	$error = 'faltan_valores';

}

if($error != 'ok'){
header("Location:index.php?error=".$error);
}
 ?>



<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Validacion de formularios PHP</title>
	</head>
	<body>
		<?php if ($error == 'ok'): ?>
			<h1>Datos validados correctamente</h1>
			<p><?=$nombre?></p>
			<p><?=$apellidos?></p>
			<p><?=$edad?></p>
			<p><?=$email?></p>
		<?php endif; ?>
	</body>
</html>
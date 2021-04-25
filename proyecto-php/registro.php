<?php 

if (isset($_POST)) {
	//Recoger los valores del formulario de registro
	$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
	$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
	$email = isset($_POST['email']) ? $_POST['email'] : false;
	$password = isset($_POST['password']) ? $_POST['password'] : false;

	//Array de errores
	$errores = array();

	//Validar los datos antes de guardarlos en la base de datos
	//Validar campo nombre
	if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
		$nombre_validado = true;
	}else{
		$nombre_validado = false;
		$errores['nombre'] = "El nombre no es valido";
	}
	//Validar campo apellidos
	if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
		$apellidos_validado = true;
	}else{
		$apellidos_validado = false;
		$errores['apellidos'] = "Los apellidos no son validos";
	}
	//Validar campo email
	if (!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$email_validado = true;
	}else{
		$email_validado = false;
		$errores['email'] = "El email no es valido";
	}


	if (!empty($password)) {
		$password_validado = true;
	}else{
		$password_validado = false;
		$errores['password'] = "El password no es valido";
	}

	$guardar_usuario = false;
	if (count($errores) == 0) {
		//INSERTAR USUARIO EN LA BASE E DATOS EN LA TABLA CORRESPONDIENTE
		$guardar_usuario = true;
		
	}


}

 ?>
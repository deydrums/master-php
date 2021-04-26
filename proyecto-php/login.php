<?php 
//Iniciar la sesion y la conexion a bd
require_once 'includes/conexion.php';

//Recoger los datos del formulario
if (isset($_POST)) {
	$email = isset($_POST['email'])? mysqli_real_escape_string($db, $_POST['email']) : false;
	$password = isset($_POST['password'])? mysqli_real_escape_string($db, $_POST['password']) : false;
	
	//Consulta para comprobar las credenciales del usuario
	$sql = "SELECT * FROM usuarios WHERE email = '$email' LIMIT 1";
	$login = mysqli_query($db, $sql);


	if ($login && mysqli_num_rows($login) == 1) {
		$usuario = mysqli_fetch_assoc($login);
		$verify = password_verify($password, $usuario['password']);

		if ($verify) {
			//Utilizar una sesion para guardar los datos del usuario logueado
			$_SESSION['usuario'] =$usuario;
			if(isset($_SESSION['error_login'] )){
				unset($_SESSION['error_login']);
			}

		}else{
			//Si algo falla enviar una sesion con el fallo
			$_SESSION['error_login'] = "Nombre de usuario y/o contraseña incorrecta";
		}


	}else{
		$_SESSION['error_login'] = "Usuario no registrado";
	}
	//Comprobar la contraseña



}


//Redirigir al index.php

header('Location: index.php');

 ?>
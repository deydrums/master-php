<?php 
//Conexion a la base de datos
require_once 'includes/conexion.php';
if (isset($_POST)) {

	//Recoger los valores del formulario de actualizacion
	$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
	$apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
	$email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
	//$password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;

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


	/*if (!empty($password)) {
		$password_validado = true;
	}else{
		$password_validado = false;
		$errores['password'] = "El password no es valido";
	}
	*/
	$guardar_usuario = false;
	

	if (count($errores) == 0) {
		$guardar_usuario = true;
		//CIFRAR LA CONTRASEÑA
		//$password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

		//ACTUALIZAR USUARIO EN LA BASE E DATOS EN LA TABLA CORRESPONDIENTE
		$usuario = $_SESSION['usuario']['id'];
		echo "$usuario";
		$sql = "UPDATE usuarios SET nombre = '$nombre', apellidos ='$apellidos', email = '$email' WHERE id = $usuario;";
		$guardar = mysqli_query($db, $sql);


		if ($guardar) {
			$_SESSION['usuario']['nombre'] = $nombre;
			$_SESSION['usuario']['apellidos']= $apellidos;
			$_SESSION['usuario']['email'] = $email;
			$_SESSION['completado'] = "Tus datos se han actualizado con exito";
		}else{
			$_SESSION['errores']['general'] = "Error al actualizar tus datos";
		}



	}else{
		$_SESSION['errores'] = $errores;
		
	}


}


header('Location: mis_datos.php');


 ?>
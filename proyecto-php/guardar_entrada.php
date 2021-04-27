<?php 

if (isset($_POST)) {
	//Conexion a la base de datos
	require_once 'includes/conexion.php';

	$titulo = (isset($_POST['titulo'])) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
	$descripcion = (isset($_POST['descripcion'])) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
	$categoria = (isset($_POST['categoria'])) ? (int)$_POST['categoria'] : false;
	$usuario = $_SESSION['usuario']['id'];
	//Array de errores
	$errores = array();

	//Validar los datos antes de guardarlos en la base de datos
	//Validar campo nombre
	if (empty($titulo)) {
		$erroes['titulo'] = "El titulo no es valido";
	}
	if (empty($descripcion)) {
		$erroes['descripcion'] = "La descripcion no es valido";
	}
	if ((empty($categoria)) && (!is_numeric($categoria))) {
		$erroes['categoria'] = "La categoria no es valida";
	}


	if (count($errores) == 0) {

		//INSERTAR CATEGORIA EN LA BASE E DATOS EN LA TABLA CORRESPONDIENTE
		$sql = "INSERT INTO entradas VALUES(null, '$usuario', '$categoria', '$titulo', '$descripcion', CURDATE() )";
		$guardar = mysqli_query($db, $sql);

	}else{
		$_SESSION["errores_entrada"] = $errores;
	}

}

header('Location: crear_categoria.php');

 ?>
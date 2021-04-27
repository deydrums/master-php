<?php 

function mostrarError($errores, $campo){
	$alerta = '';
	if(isset($errores[$campo]) && !empty($campo)){
		$alerta = "<div class = 'alerta alerta-error'>".$errores[$campo]."</div>";
	}

	return $alerta;
}

function borrarErrores(){
	$borrado = false;

	if (isset($_SESSION['errores'])) {
	$_SESSION['errores'] = null;
	unset($_SESSION['errores']);
	}

	if (isset($_SESSION['errores_entrada'])) {
	$_SESSION['errores_entrada'] = null;
	unset($_SESSION['errores_entrada']);
	}

	if (isset($_SESSION['completado'])) {
		$_SESSION['completado'] = null;
		unset($_SESSION['completado']);
	}

	return $borrado;

}

function conseguirCategorias($conexion){
	$sql = "SELECT * FROM categorias ORDER BY id ASC;";
	$categorias = mysqli_query($conexion, $sql);

	$result = array();

	if ($categorias && mysqli_num_rows($categorias) >= 1)  {
		$result = $categorias;
	}

	return $result;
}


function conseguirEntradas($conexion,$limit=null){
	$sql = "SELECT e.* , c.nombre AS 'categoria' , CONCAT(u.nombre,' ' ,u.apellidos) AS 'usuario' FROM entradas e INNER JOIN categorias c ON e.categoria_id =c.id INNER JOIN usuarios u ON u.id = e.usuario_id ORDER BY e.id DESC ";

	if ($limit) {
		// $sql = $sql. " LIMIT 4"
		$sql .= "LIMIT 4;";
	}else{
		$sql .= ";";
	}

	$entradas = mysqli_query($conexion, $sql);

	$result = array();

	if ($entradas && mysqli_num_rows($entradas) >= 1)  {
		$result = $entradas;
	}

	return $result;
}



 ?>
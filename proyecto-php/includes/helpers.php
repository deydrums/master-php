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

function conseguirCategoria($conexion,$id){
	$sql = "SELECT * FROM categorias WHERE id = '$id';";
	$categorias = mysqli_query($conexion, $sql);

	$result = array();

	if ($categorias && mysqli_num_rows($categorias) >= 1)  {
		$result = mysqli_fetch_assoc($categorias);
	}

	return $result;
}

function conseguirEntrada($conexion,$id){
	$sql = "SELECT * FROM entradas WHERE id = '$id';";
	$entrada = mysqli_query($conexion, $sql);

	$result = array();

	if ($entrada && mysqli_num_rows($entrada) >= 1)  {
		$result = mysqli_fetch_assoc($entrada);
	}

	return $result;
}



function conseguirEntradas($conexion,$limit=null, $categoria=null,$entrada=null){

	/*if ($entrada) {
		SELECT e.* , c.nombre AS 'categoria' , CONCAT(u.nombre,' ' ,u.apellidos) AS 'usuario' FROM entradas e INNER JOIN categorias c ON e.categoria_id =c.id INNER JOIN usuarios u ON u.id = e.usuario_id WHERE e.id = '$entrada';
	}*/

	$sql = "SELECT e.* , c.nombre AS 'categoria' , CONCAT(u.nombre,' ' ,u.apellidos) AS 'usuario' FROM entradas e INNER JOIN categorias c ON e.categoria_id =c.id INNER JOIN usuarios u ON u.id = e.usuario_id  ";

	if ($entrada) {
		$sql .= "  WHERE e.id = '$entrada' ";
	}

	if ($categoria) {
		$sql .= "  WHERE c.id = '$categoria' ";
	}

	if ($limit) {
		// $sql = $sql. " LIMIT 4"
		$sql .= "ORDER BY e.id DESC LIMIT 4";
	}else{
		$sql .= "ORDER BY e.id DESC ;";
	}

	
	$entradas = mysqli_query($conexion, $sql);
	$result = array();

	if ($entradas && mysqli_num_rows($entradas) >= 1)  {
		$result = $entradas;
	}

	return $result;
}



 ?>
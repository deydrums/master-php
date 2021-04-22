<?php 
/*
1. Una funcion
2. Validar email con filter_var
3. Recoger una variable por get y validarla
4. Mostrar el resultado

*/

function email($correo){
	if (filter_var($correo, FILTER_VALIDATE_EMAIL)){
		$res = $correo." Es un correo electronico<br>";
	}else{
		$res = $correo." No es un correo<br>";
	}
	return $res;
}

echo email('david@gmail.com');

if (isset($_GET['correo'])) {
	echo email($_GET['correo']);
}else{
	echo "Pasa por get un correo electronico";
}




 ?>
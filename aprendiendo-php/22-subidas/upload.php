<?php 
$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if ($tipo == 'image/jpg' || $tipo == 'image/jpeg' || $tipo == 'image/gif' || $tipo == 'image/png'){

	if(!is_dir('imagenes')){
		mkdir('imagenes',0777);
	}

	move_uploaded_file($archivo['tmp_name'], 'imagenes/'.$nombre);
	header("Refresh: 5; URL=index.php");
	echo "<h1>imagen subida correctamente</h1>";

}else{
	header("Refresh: 5; URL=index.php");
	echo "<h1>Sube una imagen con un formato correcto. (jpg, jpeg, gif, png)</h1>";
}



 ?>
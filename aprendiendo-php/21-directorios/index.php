<?php 
//Directorios
if(!is_dir('mi_carpeta')){
mkdir('mi_carpeta' , 0777) or die('No se puede crear la carpeta');
}else{
	echo "Ya existe la carpeta";
}
//Borrar directorio
//rmdir('mi_carpeta');

//Recorrer directorio
echo "<hr><h1>Contenido</h1>";
if ($gestor = opendir('./mi_carpeta')) {
	while (false !== ($archivo = readdir($gestor))) {
		if ($archivo != '.' && $archivo != '..') {
			echo $archivo."<br>";
		}

	}
}


 ?>

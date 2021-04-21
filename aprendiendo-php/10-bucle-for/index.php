<?php 
/*
//FOR
for (variable contador; condicion ; actualizando contador) { 
	# Instrucciones
}
*/

$resultado = 0;
for ($i=0; $i <= 100 ; $i++) { 
	$resultado += $i;
	//echo "<p>$resultado<p>";
}
echo "<h1>El resultado es: $resultado</h1>";

//Ejemplo tabla de multiplicar

if (isset($_GET['numero'])) {
	//Cambiar tipo de dato
	$numero = (int)$_GET['numero'];
}else{
	$numero = 1;
}

echo "<h1>Tabla de multiplicar del numero $numero</h1>";
$contador = 0;
for ($contador=0; $contador <= 10 ; $contador++) { 
	echo "$numero x $contador = " . ($numero*$contador)."<br/>";
}


 ?>
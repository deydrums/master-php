<?php 
/*
Programa que muestre los numeros entre dos numeros.
*/
if (isset($_GET['numero1'])&&($_GET['numero2'])) {
	//Cambiar tipo de dato
	$numero1 = (int)$_GET['numero1'];
	$numero2 = (int)$_GET['numero2'];

	if ($numero1<$numero2) {
		for ($i=$numero1; $i <= $numero2 ; $i++) { 
			if ($i%2 != 0) {
				echo $i." es impar <br>";
			}elseif ($i%2 == 0) {
				echo $i." es par <br>";
			}
			
			}
	}else{
		echo "<h2>El numero 1 debe ser menor que el numero 2</h2>";
	}


}else{
	echo "Introduce correctamente los valores";
}


 ?>
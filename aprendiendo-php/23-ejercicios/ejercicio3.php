<?php 
/*
Hacer una interfaz de usuario con dos inputs y 4 botones, uno para sumar, restar, dividir y multiplicar.
*/


 ?>

 <!DOCTYPE html>
 <html lang="es">
	 <head>
	 	<meta charset="utf-8">
	 	<title>Calculadora</title>
	 </head>
	 <body>
	 	<h1>Calculadora</h1>
	 	<form action="" method="POST">
	 		<label for="numero1">Numero 1:</label><br>
	 		<input type="number" name="numero1" required="number"><br>

	 		<label for="numero2">Numero 2:</label><br>
	 		<input type="number" name="numero2" required="number"><br><br>

	 		<input type="submit" name="operacion" value="Sumar">
	 		<input type="submit" name="operacion" value="Restar">
	 		<input type="submit" name="operacion" value="Dividir">
	 		<input type="submit" name="operacion" value="Multiplicar">

	 		<hr>


	 	</form>
	 
	 </body>
 </html>

 <?php 
if (isset($_POST['numero1'])&&isset($_POST['numero2'])&&isset($_POST['operacion'])) {
	
	switch ($_POST['operacion']) {
		case 'Sumar':
			$res = "La suma es: ".($_POST['numero1'] + $_POST['numero2']);
			break;
		case 'Restar':
			$res = "La resta es: ".($_POST['numero1'] - $_POST['numero2']);
			break;
		case 'Dividir':
			$res = "La division es: ".($_POST['numero1'] / $_POST['numero2']);
			break;
		case 'Multiplicar':
			$res = "La multiplicacion es: ".($_POST['numero1'] * $_POST['numero2']);
			break;		
		default:
			break;
	}
	echo "$res";
}


  ?>
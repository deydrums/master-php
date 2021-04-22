<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Validacion de formularios PHP</title>
	</head>
	<body>
		<h1>Validar formularios en PHP</h1>
		<?php 
		if (isset($_GET['error'])) {
			$error = $_GET['error'];
			if ($error == 'faltan_valores') {
				echo '<strong style = "color:red"> Introduce todos los datos en todos los campos del formulario </strong>';
			}


			if ($error == 'nombre') {
				echo '<strong style = "color:red"> Introduce bien el nombre </strong>';
			}
			if ($error == 'apellidos') {
				echo '<strong style = "color:red"> Introduce bien tus apellidos </strong>';
			}
			if ($error == 'edad') {
				echo '<strong style = "color:red"> Edad incorrecta </strong>';
			}
			if ($error == 'email') {
				echo '<strong style = "color:red"> Introduce un email valido </strong>';
			}
			if ($error == 'pass') {
				echo '<strong style = "color:red"> Contraseña incorrecta, debe poseer mas de 5 caracteres </strong>';
			}

		}
		 ?>


		<form method="POST" action="procesar_formulario.php">

			<label for="nombre">Nombre</label><br>
			<input type="text" name="nombre" required="required" pattern="[A-Za-z ]+"><br>

			<label for="apellidos">Apellidos</label><br>
			<input type="text" name="apellidos" required="required" pattern="[A-Za-z ]+"><br>

			<label for="edad">Edad</label><br>
			<input type="number" name="edad" required="required" pattern="[0-9]+"><br>

			<label for="email">E-mail</label><br>
			<input type="email" name="email" required="required"><br>

			<label for="pass">Password</label><br>
			<input type="password" name="pass" required="required" min="5"><br>

			<input type="submit" name="enviar" value="Enviar">

		</form>

	</body>
</html>
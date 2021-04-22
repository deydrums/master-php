<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Formularios PHP y HTML</title>
	</head>
	<body>
		<h1>Formulario</h1>
		<form action="" method="POST" enctype="multipart/form-data">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" autofocus="autofocus"><br><br>

			<label for="apellido">Apellido:</label>
			<input type="text" name="apellido" autofocus="autofocus" maxlength="5" pattern="[A-Z]+" required="required" placeholder="Apellido"><br><br>

			<input type="submit" name="enviar" value="Enviar" autofocus="autofocus" ><br><br>
			

		</form>
	</body>
</html>
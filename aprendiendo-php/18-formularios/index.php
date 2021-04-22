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

			<label for="boton">Boton:</label>
			<input type="button" name="boton" value="Clic Aqui" autofocus="autofocus"><br><br>

			<label for="sexo">Sexo:</label>

			<p>
			Hombre: <input type="checkbox" name="sexo" autofocus="autofocus" value="Hombre" checked="checked"><br><br>

			Mujer: <input type="checkbox" name="sexo" autofocus="autofocus" value="Mujer" checked="checked"><br><br>
			</p>

			<label for="color">Color:</label>
			<input type="color" name="color" value="color" autofocus="autofocus"><br><br>

			<label for="date">Fecha:</label>
			<input type="date" name="date" value="date" autofocus="autofocus"><br><br>

			<label for="correo">e-mail:</label>
			<input type="email" name="correo" autofocus="autofocus"><br><br>

			<label for="archivo">Archivo:</label>
			<input type="file" name="archivo" autofocus="autofocus" multiple="multiple"><br><br>

			<label for="numero">Numero:</label>
			<input type="number" name="numero" autofocus="autofocus"><br><br>

			<label for="pass">Contraseña:</label>
			<input type="password" name="pass" autofocus="autofocus"><br><br>

			<label for="continente">Continente:</label>
			<p>
			America del sur: <input type="radio" name="continente" value="America del sur" autofocus="autofocus"><br><br>
			Europa: <input type="radio" name="continente" value="Europa" autofocus="autofocus"><br><br>
			Asia: <input type="radio" name="continente" value="Asia" autofocus="autofocus"><br><br>
			</p>

			<label for="web">Pagina Web:</label>
			<input type="url" name="web" autofocus="autofocus"><br><br>

			<textarea></textarea><br>
			Peliculas:<select name="peliculas">
				<option value="spiderman">Spider-Man</option>
				<option value="piratas">Piratas del caribe</option>
				<option value="kongvsgozilla">Kong vs Gozilla</option>
			</select>
			<br>

			<input type="submit" name="enviar" value="Enviar" autofocus="autofocus" ><br><br>
			

		</form>
	</body>
</html>
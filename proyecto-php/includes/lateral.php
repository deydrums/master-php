
<!-- BARRA LATERAL -->
<aside id="sidebar"> 

	<div id="buscador" class = "bloque">
		<h3>Buscar</h3>

		<?php if(isset($_SESSION['error_login'])): ?>
			<div class="alerta alerta_error">
				<?=$_SESSION['error_login'] ?>

			</div>
		<?php endif; ?>

		<form action="buscar.php" method="POST">
			<input type="text" name="busqueda" value="Buscar">
			<input type="submit" value="Buscar">

		</form>
	</div>


	<?php if(isset($_SESSION['usuario'])): ?>
		<div id="usuario_logueado" class="bloque">
			<h3><?='HOLA! '.$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']; ?></h3>
			<!--BOTONES -->
			
			<a href="crear_entradas.php" class="boton boton_verde">Crear entrada</a>
			<a href="crear_categoria.php" class="boton boton_verde">Crear categoria</a>
			<a href="mis_datos.php" class="boton boton_gris">Mis datos</a>
			<a href="cerrar.php" class="boton">Cerrar Sesion</a>
		</div>


	<?php endif; ?>

	<!-- Ocultar login y registro al estar loggeado -->
	<?php if(!isset($_SESSION['usuario'])): ?>

	<div id="login" class = "bloque">
		<h3>Identificate</h3>

		<?php if(isset($_SESSION['error_login'])): ?>
			<div class="alerta alerta_error">
				<?=$_SESSION['error_login'] ?>

			</div>
		<?php endif; ?>

		<form action="login.php" method="POST">
			<label for="email">Email</label>
			<input type="email" name="email" >

			<label for="password">Contraseña</label>
			<input type="password" name="password" >
			
			<input type="submit" value="Entrar">

		</form>
	</div>
	<div id="register" class = "bloque">
		<?php if (isset($_SESSION['errores'])):?>
			<!-- <?php // var_dump($_SESSION['errores']); ?> -->
		<?php endif; ?>
		<h3>Registrate</h3>
		<!-- Mostrar errores -->
		<?php if (isset($_SESSION['completado'])): ?> 
				<div class="alerta alerta_exito">
					<?=$_SESSION['completado']?>	
				</div>
		<?php elseif(isset($_SESSION['errores'])): ?>
				<div class="alerta alerta_error">
						<?=$_SESSION['errores']['emailrepetido']?>
				</div>
		<?php endif; ?>


		<form action="registro.php" method="POST">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" >
			<?php echo isset($_SESSION['errores'])?mostrarError($_SESSION['errores'],'nombre') : ' '; ?>

			<label for="apellidos">Apellidos</label>
			<input type="text" name="apellidos" >
			<?php echo isset($_SESSION['errores'])?mostrarError($_SESSION['errores'],'apellidos') : ' '; ?>


			<label for="email">Email</label>
			<input type="email" name="email" >
			<?php echo isset($_SESSION['errores'])?mostrarError($_SESSION['errores'],'email') : ' '; ?>

			<label for="password">Contraseña</label>
			<input type="password" name="password" >
			<?php echo isset($_SESSION['errores'])?mostrarError($_SESSION['errores'],'password') : ' '; ?>
			
			<input type="submit" name="submit" value="Registrar">

		</form>
		<?php borrarErrores(); ?>
	</div>

	<?php endif; ?>
</aside>
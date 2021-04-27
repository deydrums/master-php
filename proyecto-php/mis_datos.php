<?php require_once 'includes/redireccion.php' ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>


<div id="principal">
	<h1>Mis datos</h1>
	<p>Editar tu perfil de usuario.</p>
	<br>

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


		<form action="actualizar_usuario.php" method="POST">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" value="<?=$_SESSION['usuario']['nombre']?>" >
			<?php echo isset($_SESSION['errores'])?mostrarError($_SESSION['errores'],'nombre') : ' '; ?>

			<label for="apellidos">Apellidos</label>
			<input type="text" name="apellidos" value="<?=$_SESSION['usuario']['apellidos']?>">
			<?php echo isset($_SESSION['errores'])?mostrarError($_SESSION['errores'],'apellidos') : ' '; ?>

			<label for="email">Email</label>
			<input type="email" name="email" value="<?=$_SESSION['usuario']['email']?>">
			<?php echo isset($_SESSION['errores'])?mostrarError($_SESSION['errores'],'email') : ' '; ?>
			
			<input type="submit" name="submit" value="Actualizar">

		</form>
		<?php borrarErrores(); ?>

</div> <!-- Fin principal -->


<?php include_once 'includes/pie.php'; ?>

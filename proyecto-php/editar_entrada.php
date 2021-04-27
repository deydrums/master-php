<?php require_once 'includes/redireccion.php' ?>
<?php require_once 'includes/cabecera.php'; ?>

<?php 
	$entradas = conseguirEntrada($db,$_GET['id']); 

	if (!isset($entradas['id'])){
		header("Location: index.php");
	}
?>


<?php require_once 'includes/lateral.php'; ?>



<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Editar entrada</h1>

	<p>Edita tu entrada <?=$entradas['titulo']?></p>
	<br>
	<form action="guardar_entrada.php?editar=<?=$entradas['id']?>" method="POST">
		<label for="titulo">Titulo de la entrada:</label>
		<input type="text" name="titulo" value="<?=$entradas['titulo']?>">
		<?php echo isset($_SESSION['errores_entrada'])?mostrarError($_SESSION['errores_entrada'],'titulo') : ' '; ?>

		<label for="descripcion">Descripcion:</label>
		<textarea name="descripcion"><?=$entradas['descripcion']?></textarea>
		<?php echo isset($_SESSION['errores_entrada'])?mostrarError($_SESSION['errores_entrada'],'descripcion') : ' '; ?>

		<label for="categoria">Categoria</label>
		<select name="categoria">
		<?php echo isset($_SESSION['errores_entrada'])?mostrarError($_SESSION['errores_entrada'],'categoria') : ' '; ?>

			<?php 
			$categorias = conseguirCategorias($db);
			if (!empty($categorias)): 
				while($categoria = mysqli_fetch_assoc($categorias)):
			 ?>
			
			<option value="<?=$categoria['id']?>"
					<?=($categoria['id'] == $entradas['categoria_id']) ? 'selected = "selected"':''?>
				>

				<?=$categoria['nombre']?>
			</option>

			<?php 
				endwhile;
			endif;
			 ?>

		</select>

		<input type="submit" value="Guardar" name="guardar">
	</form>
<?php borrarErrores(); ?>

</div> <!-- Fin principal -->




<?php include_once 'includes/pie.php'; ?>
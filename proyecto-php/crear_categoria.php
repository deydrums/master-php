<?php require_once 'includes/redireccion.php' ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>


<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Crear categorias</h1>
	<p>Añade nuevas categorias al blog para que los usuarios puedan usarlas al crear sus entradas.</p>
	<br>
	<form action="guardar_categoria.php" method="POST">
		<label for="nombre">Nombre de la categoria</label>
		<input type="text" name="nombre">

		<input type="submit" value="Guardar" name="guardar">
	</form>



</div> <!-- Fin principal -->


<?php include_once 'includes/pie.php'; ?>



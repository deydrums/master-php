<?php require_once 'includes/cabecera.php'; ?>

<?php 
	$entradas = conseguirEntradas($db,null,null,$_GET['id']); 

	if (empty($entradas)){
		header("Location: index.php");
	}
?>


<?php require_once 'includes/lateral.php'; ?>

	<!-- CAJA PRINCIPAL -->
	<div id="principal">

		<?php 
			$entrada = mysqli_fetch_assoc($entradas);
		?>

		<h1><?=$entrada['titulo']?></h1>
		<article class="entrada">

					<a href="categoria.php?id=<?=$entrada['categoria_id']?>"><h2><?=$entrada['categoria']?></h2></a>
					<span class="fecha"><?="Publicacion: ".$entrada['fecha'].' | Autor: '.$entrada['usuario']?></span>
					<p><?= $entrada['descripcion']?></p>	

			<?php if((isset($_SESSION['usuario'])) && ($_SESSION['usuario']['id'] == $entrada['usuario_id'])):?>

				<br>
				<a href="editar_entrada.php?id=<?=$entrada['id']?>" class="boton boton_verde">Editar entrada</a>
				<a href="borrar_entrada.php?id=<?=$entrada['id']?>" class="boton boton_azul">Borrar entrada</a>

			<?php endif; ?>

		</article>


	</div> <!-- Fin principal -->


<?php include_once 'includes/pie.php'; ?>

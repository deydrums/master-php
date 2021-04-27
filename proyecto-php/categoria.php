<?php require_once 'includes/cabecera.php'; ?>

<?php 
	$categoria = conseguirCategoria($db,$_GET['id']);
	if (!isset($categoria['id'])){
		header("Location: index.php");
	}
?>


<?php require_once 'includes/lateral.php'; ?>

	<!-- CAJA PRINCIPAL -->
	<div id="principal">


		<h1>Entradas de <?=$categoria['nombre']?></h1>
		<article class="entrada">


			<?php 
				$entradas = conseguirEntradas($db,null,$categoria['id']); 

				if ((!empty($entradas)) && (mysqli_num_rows($entradas) >= 1)) :
					while ($entrada = mysqli_fetch_assoc($entradas)):
						//var_dump($entrada);
			?>

					<a href="entrada.php?id=<?=$entrada['id']?>"><h2><?=$entrada['titulo']?></h2></a>
					<span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha'].' | Autor: '.$entrada['usuario']?></span>
					<p><?= substr($entrada['descripcion'], 0,200)." ..."?></p>	
				<?php 
					endwhile; 
				else:				
			?>
					<div class="alerta">No hay entradas en esta categoria.</div>
			<?php 

				endif;
			 ?>
		</article>


	</div> <!-- Fin principal -->


<?php include_once 'includes/pie.php'; ?>

<?php require_once 'includes/cabecera.php'; ?>

<?php 

	if (!isset($_POST['busqueda'])){
		header("Location: index.php");
	}

?>


<?php require_once 'includes/lateral.php'; ?>

	<!-- CAJA PRINCIPAL -->
	<div id="principal">


		<h1>Busqueda: <?=$_POST['busqueda']?></h1>
		<article class="entrada">


			<?php 
				$entradas = conseguirEntradas($db,null, null, null,$_POST['busqueda']);

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
					<div class="alerta">No se han encontrado resultados.</div>
			<?php 

				endif;
			 ?>
		</article>


	</div> <!-- Fin principal -->


<?php include_once 'includes/pie.php'; ?>

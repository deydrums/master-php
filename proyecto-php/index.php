<?php require_once 'includes/cabecera.php'; ?>

<?php require_once 'includes/lateral.php'; ?>

	<!-- CAJA PRINCIPAL -->
	<div id="principal">
		<h1>Ultimas entradas</h1>
		<article class="entrada">


			<?php 
				$entradas = conseguirEntradas($db,true,null); 
				if (!empty($entradas)):
					while ($entrada = mysqli_fetch_assoc($entradas)):
						//var_dump($entrada);
			?>

					<a href="entrada.php?id=<?=$entrada['id']?>"><h2><?=$entrada['titulo']?></h2></a>
					<span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha'].' | Autor: '.$entrada['usuario']?></span>
					<p><?= substr($entrada['descripcion'], 0,200)." ..."?></p>	
				<?php 
					endwhile; 
				endif;
			?>
			
		</article>

	<div id="ver-todas">
		<a href="entradas.php">Ver todas las entradas</a>
	</div>



	</div> <!-- Fin principal -->


<?php include_once 'includes/pie.php'; ?>



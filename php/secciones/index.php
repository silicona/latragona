
<div id="fb-root"></div>

<?php require_once BASE_FILE . 'php/inc/menu_movil.php' ?>

<?php require_once BASE_FILE . 'php/inc/portada_imagen.php' ?>


<main id="contenedor">

	<?php require_once BASE_FILE . 'php/inc/nav_superior_global.php' ?>

	<h1><?php echo $lexico[$seccion]['h1']; ?></h1>	

	<section class="contenido">

		<article class="imagen_lateral">
			<!-- <img src="media/logo_grande.jpg" alt="logo" title="La Tragona" class="planta"> -->
			<?php require_once BASE_FILE . 'php/plantillas/cartel_navidades.php' ?>

		</article>

		<article class="texto">

			<p>
				<?php
				//echo $seccion . '<br>';
				echo $lexico[$seccion]['p1']; 

				?>
				<a href="tragar" alt="<?php echo $nav_ir . $lexico['nav']['tragar']; ?>" title="<?php echo $nav_ir . $lexico['nav']['tragar']; ?>">
					<?php echo $lexico[$seccion]['p12']; ?>
				</a>
				<?php echo $lexico[$seccion]['p13']; ?>
				<a href="empujar" alt="<?php echo $nav_ir . $lexico['nav']['empujar']; ?>" title="<?php echo $nav_ir . $lexico['nav']['empujar']; ?>">
					<?php echo $lexico[$seccion]['p14']; ?>
				</a>
				<br>
				<br>
				<?php echo $lexico[$seccion]['p2']; ?>

				<a href="dondeestamos" alt="Donde Estamos" title="Donde estamos">
					<?php echo $lexico[$seccion]['p21']; ?>
				</a>
				<br>
				<br>
				<?php echo $lexico[$seccion]['p3']; ?>
				<a href="quienessomos" alt="<?php echo $nav_ir . $lexico['nav']['quienes']; ?>" title="<?php echo $nav_ir . $lexico['nav']['quienes']; ?>">
					<?php echo $lexico[$seccion]['p31']; ?>
				</a>.
				<br>
				<br>
				<?php echo $lexico[$seccion]['p4']; ?>
				<a href="contacta" alt="<?php echo $nav_ir . $lexico['nav']['contacto']; ?>" title="<?php echo $nav_ir . $lexico['nav']['contacto']; ?>">
					La Tragona
				</a>.
			</p>

		</article>

	</section>

	<section class="pasarelas">

		<article>
			
			<h2>
				<?php echo $lexico[$seccion]['pasarela1']; ?><a href="<?php echo BASE_URL . $idioma[0] ?>tragar" alt="<?php echo $nav_ir . $lexico['nav']['tragar']; ?>" title="<?php echo $nav_ir . $lexico['nav']['tragar']; ?>"><?php echo $lexico[$seccion]['pasarela12']; ?></a>
			</h2>

			<?php
				echo Tragona::crear_pasarela_comida($tostas, $raciones, $lexico['nombre']); 
			?>

		</article>

		<article>

			<h2 class="bebida">
				<?php echo $lexico[$seccion]['pasarela2']; ?><a href="<?php echo BASE_URL . $idioma[0] ?>empujar" alt="Ir a Raciones y Tapas" title="Ir a Raciones y Tapas"><?php echo $lexico[$seccion]['pasarela22']; ?></a>
			</h2>

			<?php echo Tragona::crear_pasarela_bebida($cervezas, $vinos, $lexico); ?>

		</article>

	</section>


	<?php require_once BASE_FILE . 'php/inc/compartir.php' ?>

	<?php require_once BASE_FILE . 'php/inc/rrss.php' ?>

	<?php require_once BASE_FILE . 'php/inc/footer.php' ?>

	<?php // require_once 'php/footer.php' ?>

</main>

<script type="text/javascript">

	$(function(){
		jQuery('#tapas').camera({
			thumbnails: false,
			pagination: false
		});
	});

</script>
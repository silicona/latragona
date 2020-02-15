
<?php 
	require_once BASE_FILE . 'php/inc/menu_movil.php';

	require_once BASE_FILE . 'php/inc/portada_imagen.php'; 

?>

<div id="contenedor">

	<?php require_once BASE_FILE . 'php/inc/nav_superior_global.php'; ?>

	<h1><?php echo $lexico[$seccion]['h1']; ?></h1>

	<section class="contenido">
	
		<article class="imagen_lateral">

			<img src="<?php echo BASE_URL ?>media/imagenes/ataque_tragona.jpg" alt="La tragona al ataque" title="La tragona al ataque">		
		</article>

		<article class="texto">

			<p>
				<?php echo $lexico[$seccion]['p1']; ?> <a href="<?php echo BASE_URL . $idioma[0] ?>tragar" alt="<?php echo $nav_ir . $lexico['nav']['tragar']; ?>" title="<?php echo $nav_ir . $lexico['nav']['tragar']; ?>"><?php echo $lexico[$seccion]['p12']; ?></a><?php echo $lexico[$seccion]['p13']; ?> <a href="<?php echo BASE_URL . $idioma[0] ?>empujar" alt="<?php echo $nav_ir . $lexico['nav']['empujar']; ?>" title="<?php echo $nav_ir . $lexico['nav']['empujar']; ?>"><?php echo $lexico[$seccion]['p14']; ?></a>:
			</p>

			<ul class="protagonistas">
				<li>
					<img src="<?php echo BASE_URL ?>imag_ejemplos/moneda2.jpg" alt="Pilar" title="Pilar" class="retrato">

					<?php echo $lexico[$seccion]['ul1']; ?>
				</li>
				<li>
					<img src="<?php echo BASE_URL ?>imag_ejemplos/moneda1.jpg" alt="Luis" title="Luis" class="retrato">

					<?php echo $lexico[$seccion]['ul2']; ?>
				</li>
			</ul>

			<p><?php echo $lexico[$seccion]['p2']; ?></p>

			<div class="anuncio">

				<?php require_once BASE_FILE . 'php/plantillas/cartel_navidades.php' ?>

			</div>

		</article>

	</section>

	<section class="seccion_redes">

		<div class="redes">
		
			<h2><?php echo $lexico[$seccion]['redes']; ?></h2>

			<p><?php echo $lexico[$seccion]['redes_p']; ?>:</p>

			<article class="panel_redes">

				<div id="tw" class="red">

					<a class="twitter-timeline" href="https://twitter.com/tragonabar"></a>

					<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

				</div>

				<div id="fb" class="red">

					<iframe id="frame_facebook" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Flatragonalavapies%2F&tabs=timeline&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

				</div>

			</article>
			
		</div>
		
	</section>

	<?php require_once BASE_FILE . 'php/inc/footer.php' ?>

</div>

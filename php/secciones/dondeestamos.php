
<?php 
	
	require_once BASE_FILE . 'php/inc/menu_movil.php';

	require_once BASE_FILE . 'php/inc/portada_imagen.php';

	$mapa = $lexico['mapa'];
?>

<script type="text/javascript">
	mapa_abierto = '<?php echo $mapa['abierto']; ?>';
	mapa_abrimos = '<?php echo $mapa['abrimos']; ?>';
	mapa_en      = '<?php echo $mapa['en']; ?>';
	mapa_hora    = '<?php echo $mapa['hora']; ?>';
	mapa_horas   = '<?php echo $mapa['horas']; ?>';
	mapa_mañana  = '<?php echo $mapa['mañana']; ?>';
	mapa_logo    = '<?php echo $mapa['logo']; ?>';
	mapa_info    = '<?php echo $mapa['info']; ?>';
</script>


<div id="contenedor">

	<?php require_once BASE_FILE . 'php/inc/nav_superior_global.php' ?>

	<h1><?php echo $lexico[$seccion]['h1']; ?></h1>

	<section class="contenido">

		<article id="mapa"></article>

		<article class="texto">
			
			<p>
				<?php echo $lexico[$seccion]['p1']; ?>

				<img src  = "<?php echo BASE_URL ?>media/horario.jpg" 
					alt   = "<?php echo $lexico[$seccion]['horario']; ?>" 
					title = "<?php echo $lexico[$seccion]['horario']; ?>" 
					class = "horario">

				<?php echo $lexico[$seccion]['p3']; ?>
			</p>
			
			<div class="anuncio">
				
				<?php require_once BASE_FILE . 'php/plantillas/cartel_navidades.php' ?>
			
			</div>

		</article>

	</section>
	
	<?php require_once BASE_FILE . 'php/inc/rrss.php' ?>

	<?php require_once BASE_FILE . 'php/inc/footer.php' ?>

</div>

<!-- <script type="text/javascript" src="<?php //echo BASE_FILE ?>js/global.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAokzjV_CnyuUEoa08ljyZpdhE7y3nlRUM&callback=iniciarMapa"></script>
-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAokzjV_CnyuUEoa08ljyZpdhE7y3nlRUM"></script>

	<!-- Etiquetas personalizadas para el mapa de Google -->
	<script type="text/javascript" src="<?php echo BASE_URL ?>js/libs/markerwithlabel.js"></script>

	<script type="text/javascript">
		iniciarMapa();
	</script>
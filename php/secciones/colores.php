
<?php 
	
	require_once BASE_FILE . 'php/inc/menu_movil.php';

	//require_once BASE_FILE . 'php/inc/portada_imagen.php';

	$mapa = $lexico['mapa'];
?>

<script type="text/javascript">
	/*mapa_abierto = '<?php echo $mapa['abierto']; ?>';
	mapa_abrimos = '<?php echo $mapa['abrimos']; ?>';
	mapa_en      = '<?php echo $mapa['en']; ?>';
	mapa_hora    = '<?php echo $mapa['hora']; ?>';
	mapa_horas   = '<?php echo $mapa['horas']; ?>';
	mapa_mañana  = '<?php echo $mapa['mañana']; ?>';
	mapa_logo    = '<?php echo $mapa['logo']; ?>';
	mapa_info    = '<?php echo $mapa['info']; ?>';*/
</script>

<style type="text/css">

	article {
		margin: 1em 0;
	}
	
	article div {

		width: 50px;
		height: 100px;
	}

</style>

<div id="contenedor" style="top: 0;">

	<?php require_once BASE_FILE . 'php/inc/nav_superior_global.php' ?>

	<h1>A colorear</h1>

	<section class="contenido">


		<article>
			<div style="background: #f00">Rojo</div>

		</article>

		<article>
			<div style="background: purple">Morado</div>

		</article>

	</section>
	
	<?php require_once BASE_FILE . 'php/inc/rrss.php' ?>

	<?php require_once BASE_FILE . 'php/inc/footer.php' ?>

</div>

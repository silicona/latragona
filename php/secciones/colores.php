
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

	article:before, article:after {

		content: '';
		display: block;
		clear: both;
	}
	
	article div {

		width: 100px;
		height: 70px;
		padding: 1ex;
		color: #FFF;
		margin-right: 1ex;
		/*display: inline-block;*/
		float: left;
		box-sizing: border-box;
	}

</style>

<div id="contenedor" style="top: 0;">

	<?php require_once BASE_FILE . 'php/inc/nav_superior_global.php' ?>

	<h1>A colorear</h1>

	<section class="contenido">


		<article>

			<h2>Rojos</h2>

			<div style="background: #f00">F00</div>

			<div style="background: #FB8F50">Rojo<br>#FB8F50</div>

			<div style="background: #FB6750">Rojo oscuro<br>#FB6750</div>

			<div style="background: #F5B38C">Rojo claro<br>#F5B38C</div>

			<div style="background: #F60D0D">Error<br>#F60D0D</div>

			<div style="background: #F0C6C6">Error claro<br>#F0C6C6</div>

			<div style="background: #A91515">Error oscuro<br>#A91515</div>

		</article>

		<article>

			<h2>Morado</h2>
			<div style="background: purple">purple</div>

			<div style="background: #B749DE">Morado<br>#B749DE</div>

			<div style="background: #F1CFFD; color: #000">Morado claro<br>#F1CFFD</div>
			
			<div style="background: #881DAE">Morado oscuro<br>#881DAE</div>

			<div style="background: #6A0C7B">#6A0C7B</div>			

		</article>

		<article>

			<h2>Naranja</h2>

			<div style="background: #F4CC70">Naranja<br>Menu<br>#F4CC70</div>

		</article>

		<article>

			<h2>Verde</h2>

			<div style="background: green">green</div>


			<div style="background: #8EBF45">#8EBF45</div>

			<div style="background: #BFDC7A">#BFDC7A</div>

			<div style="background: #54E31D">Verde<br>#54E31D</div>

			<div style="background: #9CE083">Verde claro<br>#9CE083</div>

			<div style="background: #51C526">Verde oscuro<br>#51C526</div>

		</article>

		<article>

			<h2>Gris</h2>

			<div style="background: #333">333</div>

			<div style="background: #666">666</div>

			<div style="background: #DDD; color: #000">DDD</div>

			<div style="background: #EEE; color: #000">EEE</div>

		</article>

		<article>

			<h2>Azul</h2>

			<div style="background: #008">#008</div>

			<div style="background: #50EDFB">Azul<br>#50EDFB</div>

			<div style="background: #D7FDFF; color: #000">Azul claro<br>#D7FDFF</div>

			<div style="background: #0398A5">Azul oscuro<br>#0398A5</div>

		</article>

		<article>

			<h2>Marron</h2>

			<div style="background: #6a6340">#6a6340</div>
			
		</article>

		<article>

			<h2>Amarillo</h2>

			<div style="background: #ff0; color: #000">FF0</div>

		</article>

	</section>
	
	<?php require_once BASE_FILE . 'php/inc/rrss.php' ?>

	<?php require_once BASE_FILE . 'php/inc/footer.php' ?>

</div>

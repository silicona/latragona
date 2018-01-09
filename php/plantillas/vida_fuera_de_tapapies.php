<!DOCTYPE html>
<html>
<head>
	<title>Vida fuera del Tapapies</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="../css/tripoli_index.css">
	<link rel="stylesheet" type="text/css" href="../css/camera.css">

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="../js/camera.min.js"></script>
	<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="../js/jquery.mobile.customized.min.js"></script>

	<?php
		require_once('lib/spyc/spyc.php');
		$datos = Spyc::YAMLLoad('idiomas/lexico_'.$_GET['idioma'].'.yml');
		$titulo = $datos['aviso']['cartel']['titular'];
		$tapapies = $datos['aviso']['tapapies'];
		$anexo = $datos['aviso']['anexo'];
	?>

	<script type="text/javascript">
		$(function(){
			jQuery('#tapas').camera({
				height: '25%',
				thumbnails: false,
				pagination: false
			});
		});
	</script>

	<style type="text/css">
		body {
			font-family: verdana, helvetica, sans-serif;
			font-size: 14pt;
			width: 100%;
		}

		body, body * {
			-webkit-box-sizing: border-box;	-moz-box-sizing: border-box; box-sizing: border-box;
		}

		h1 {
			text-align: center;
			font-size: 2.7em;
			padding: 1ex 0;
		}

		h1 span { display: inline-block; }

		#logo_tapa {
			/*-webkit-transform: scale(.6);-ms-transform: scale(.6);-moz-transform: scale(.6);transform: scale(.6);*/
			width: 130px;
			padding-right: 1ex;
			vertical-align: middle;
		}

		#texto article {
			font-size: 1.2em;
			line-height: 1.2em;
			margin: 0 auto 2.5ex;
			width: 70%;
			text-align: justify;
		}

		#tapas .camera_caption { text-align: center; }

		@media screen and (max-width: 650px) {
			#logo_tapa {	width: 70px; }

			h1 { 
				font-size: 1.2em; 
				font-weight: bolder;
			}
		}

		@media screen and (min-width: 651px) and (max-width: 1024px) {
			#logo_tapa { width: 100px; }

			h1 { font-size: 1.5em; }
		}
	</style>
</head>
<body>
<h1>
	<img src="../media/logo_red.gif" alt="La Tragona" id="logo_tapa"><span><?= $titulo ?></span>
</h1>
<section id="texto">
	<article>
		<?= $tapapies ?>
		<br>
		<br>
		<span style="font-weight: bolder">
			<?= $anexo ?>:
		</span>
	</article>
</section>
<section class="camera-wrap" id="tapas">
	<div data-src="../media/tapapies/pastel_verduras.jpg">
		<div class="camera_caption">
			Pastel de verduras
		</div>
	</div>
	<div data-src="../media/tapapies/ensalada_pollo.jpg">
		<div class="camera_caption">
			Ensalada de pollo
		</div>
	</div>
	<div data-src="../media/tapapies/patatas_revolconas.jpg">
		<div class="camera_caption">
			Patatas revolconas
		</div>
	</div>
	<div data-src="../media/tapapies/garbanzos_shiitake.jpg">
		<div class="camera_caption">
			Garbanzos con shiitake
		</div>
	</div>
	<div data-src="../media/tapapies/pate_pimientos.jpg">
		<div class="camera_caption">
			Pate de pimientos asados
		</div>
	</div>
<!-- 	<div data-src="../media/tapapies/arroz_zamorana.jpg">
		<div class="camera_caption">
			Arroz a la zamorana
		</div>
	</div>
	<div data-src="../media/tapapies/ensalada_alubias.jpg">
		<div class="camera_caption">
			Ensalada templada de alubias con vinagreta de tomate deshidratado
		</div>
	</div>
	<div data-src="../media/tapapies/patatas_niscalos.jpg">
		<div class="camera_caption">
			Patatas con níscalos
		</div>
	</div>
	<div data-src="../media/tapapies/guacamole.jpg">
		<div class="camera_caption">
			Guacamole
		</div>
	</div>
	<div data-src="../media/tapapies/pimientos_asados.jpg">
		<div class="camera_caption">
			Pimientos asados caseros
		</div>
	</div> -->
</section>
</body>
</html>
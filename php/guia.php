<?php

	require_once 'config.php';
	require_once BASE_FILE . 'php/lib/Cartel.php';

	$arr_url = explode('/', $_SERVER['HTTP_REFERER']);

	array_pop($arr_url);
	$idioma = array_pop($arr_url);

	if( strlen($idioma) > 2 ){ $idioma = 'es'; }

	$lexico = Spyc::YAMLLoad( BASE_FILE . 'php/idiomas/lexico_' .  $idioma . '.yml' );

	$bebida = new Cartel($lexico);

	$solicitud = $_GET['vino'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Bebidas de la Tragona</title>
	<meta charset="utf-8">

	<style>

		* {	margin: 0; padding: 0; }

		body {
			width: 400px;
			height: 500px;
			overflow: hidden;
		}

		section { position: relative;	}

		img {
			position: absolute;
			opacity: 0.3;
			z-index: 0;
		}

		h2 {
			position: relative;
			font-size: 1.7em;
			padding: 1ex 0 .5ex 1ex;
			z-index: 1;
		}

		p {
			position: relative;
			top: 15%;
			z-index: 1;
			padding: 0 1ex 1ex;
			font: 1.2em/1.4 sans-serif;
			text-align: justify;
		}

		p:first-letter {
			margin-left: 1ex;
			font-size: 1.7em;
			color: #FF0000;
		}
	</style>

</head>
<body>

	<?php
		
		if( $solicitud != '' ){
		// if( isset($_GET["vino"]) ){
			$vino = $vinos -> $solicitud;

			$bebida -> preparar_bebida( $vino['nombre'], $vino['imagen'], $vino['descripcion'] );

			$salida = array(
				'<section>',
				'<img src="' . BASE_URL . 'media/imagenes/empujar/' . $bebida -> imagen . '" alt="' . $bebida -> nombre . '">',
				'<h2>' . $bebida -> nombre . '</h2>'
			);

			foreach($bebida -> descripcion as $frase){

				$salida[] = '<p>' . $frase . '</p>';
				// echo "<p>$frase</p>";
			}

			$salida[] = '</section>';

			echo implode('', $salida);
			/*
			echo "<section>";
			echo "<img src='../media/imagenes/empujar/" . $bebida -> imagen . "' alt='" . $bebida -> nombre . "'>";
			echo "<h2>" . $bebida -> nombre . "</h2>";

			foreach($bebida -> descripcion as $frase){

				echo "<p>$frase</p>";
			}

			echo "</section>";
			*/

		} else {

			$aviso = array(
				'<section style="position: absolute; top: 20%; left: 40%"">',
					'<h2 style="position: relative">Acceso accidental</h2>',
					'<img src="' . BASE_URL . 'media/logo_red.jpg" width="300px" style="top: 10%;">',
					'<p>Vaya, parece que has accedido a esta página de forma accidental.</p>',
					'<p>Vuelve a <a href=' . BASE_URL . '>La Tragona</a> para acceder correctamente</p>',
				'</section>'
			);

			echo implode('', $aviso);

			// echo "<div style='position: absolute; top: 20%; left: 40%'>";
			// echo "<h2 style='position: relative'>Acceso accidental</h2>";
			// echo "<img src='../media/logo_red.jpg' width='300px' style='top:10%;'>";
			// echo "<p>Vaya, parece que has accedido a esta página de forma accidental.</p>";
			// echo "<p>Vuelve a <a href='../empujar.html'>La Tragona</a> para acceder correctamente</p>";
			// echo "</div>";
		}

	?>

</body>
</html>

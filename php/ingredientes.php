<?php

	require_once 'config.php';
	require_once BASE_FILE . 'php/lib/Cartel.php';

	//$url = $_SERVER['HTTP_REFERER'];
	$arr_url = explode('/', $_SERVER['HTTP_REFERER']);
	//$idioma = $arr_url[4];

	array_pop($arr_url);
	$idioma = array_pop($arr_url);

	if( strlen($idioma) > 2 ){ $idioma = 'es'; }

	$lexico = Spyc::YAMLLoad( BASE_FILE . 'php/idiomas/lexico_' .  $idioma . '.yml' );

	$cartel = new Cartel($lexico);

	$solicitud = $_GET["comida"];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ingredientes de la Tragona</title>
	<meta charset="utf-8">

	<style>
		* {	margin: 0; padding: 0; }

		body { overflow: hidden; }

		section { position: relative; }

		img {
			position: absolute;
			opacity: 0.4;
			z-index: 0;
			transform: scale(1.2);
		}

		h2 {
			position: relative;
			font-size: 1.3em;
			text-align: center;
			padding: 1ex 0 .5ex 1ex;
		}

		ul {
			list-style: none; 
			font-size: 14pt;
			line-height: 1.5em;
			margin-top: 0;
			position: relative;
			font-weight: bold;
		}


		li {
			position: relative;
			border-bottom: 1px solid blue;
			padding-left: 30px;
		}
		
	</style>

</head>
<body>

	<?php

		if( $solicitud != '' ){

			//echo $solicitud;
			
			if( $tostas -> $solicitud ){

				$comida = $tostas -> $solicitud;

			} else {

				$comida = $raciones -> $solicitud;
			}

			//$com = ($tostas -> $_GET["comida"]) ? $tostas -> $_GET["comida"] : $raciones -> $_GET['comida'];
			// $cartel -> comer($com['descripcion'], "../media/imagenes/tragar/" . $com['imagen'], $com['ingredientes']);

			$url = BASE_URL . 'media/imagenes/tragar/' . $comida['imagen'];
			$cartel -> preparar_comida( $comida['descripcion'], $url, $comida['ingredientes'] );

			$salida = array(
				'<section>',
				'<img src="' . $cartel -> imagen . '" alt="imagen de ' . $cartel -> nombre . '">',
				'<h2>' . $cartel -> nombre . '</h2>',
				'<ul>'
			);

			foreach( $cartel -> ingredientes as $linea ){ 

				$salida[] = '<li>' . $linea . '</li>'; 
			}
			
			$salida[] = '</ul></section>';

			echo implode('', $salida);

		
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
		}

	?>

</body>
</html>

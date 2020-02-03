<?php

	require_once '../config.php';
	require_once BASE_FILE . 'php/lib/Cartel.php';

	$solicitud = $_GET["solicitud"];
	$accion = $_GET['accion'];

	//$url = $_SERVER['HTTP_REFERER'];
	$arr_url = explode('/', $_SERVER['HTTP_REFERER']);
	//$idioma = $arr_url[4];

	array_pop($arr_url);
	$idioma = array_pop($arr_url);

	if( strlen($idioma) > 2 ){ $idioma = 'es'; }

	$lexico = Spyc::YAMLLoad( BASE_FILE . 'php/idiomas/lexico_' .  $idioma . '.yml' );

	$cartel = new Cartel($lexico);

	if( $accion == 'ingredientes' ){


		if( isset($tostas -> $solicitud) ){

			$comida = $tostas -> $solicitud;

		} else if( isset($raciones -> $solicitud) ){

			$comida = $raciones -> $solicitud;
		}

		if( gettype($comida) != 'array' ){

			echo '<h1>Error de datos: ' . gettype($comida) . '</h3>';
			exit();
		}

		echo $cartel -> devuelve_html_ingredientes($comida);
		exit();
	}

	if( $accion == 'vino' ){

		$bebida = '';
		if( isset($vinos -> $solicitud) ){

			$bebida = $vinos -> $solicitud;
		}

		if( gettype($bebida) != 'array' ){

			echo '<h1>Error de datos: ' . gettype($bebida) . '</h3>';
			exit();
		}

		echo $cartel -> devuelve_html_bebidas($bebida);
		exit();
	}

	$aviso = array(

		'<section style="position: absolute; top: 20%; left: 40%"">',

			'<h2 style="position: relative">Acceso accidental</h2>',

			'<img src="' . BASE_URL . 'media/logo_red.jpg" width="300px" style="top: 10%;">',

			'<p>Vaya, parece que has accedido a esta página de forma accidental.</p>',

			'<p>Vuelve a <a href=' . BASE_URL . '>La Tragona</a> para acceder correctamente</p>',

		'</section>'
	);

	echo implode('', $aviso);
	exit()


?>
<?php

require_once '../config.php';
require_once BASE_FILE . 'php/lib/Cartel.php';

if( isset($_GET['accion']) ){

	$accion = limpia_varchar($_GET['accion']);
	$solicitud = isset($_GET['solicitud']) ? limpia_varchar($_GET['solicitud']) : '';

	$arr_url = explode('/', $_SERVER['HTTP_REFERER']);
	$seccion = array_pop($arr_url);
	$idioma  = array_pop($arr_url);

} else if( isset($_POST['accion']) ){

	$accion = comprobar_dato($_POST["accion"]);
	$hash = isset($_POST['hash']) ? limpia_varchar($_POST["hash"]) : '';

	$solicitud = isset($_POST['solicitud']) ? limpia_varchar($_POST['solicitud']) : '';
	$idioma    = isset($_POST['idioma']) ? limpia_varchar($_POST['idioma']) : 'es';

	$tipo_producto = isset($_POST['tipo_producto']) ? limpia_varchar($_POST['tipo_producto']) : '';
	$id_producto   = isset($_POST['id_producto']) ? (int) $_POST['id_producto'] : 0;

	$login    = isset($_POST['login']) ? limpia_varchar( $_POST['login'] ) : '';
	$password = isset($_POST['password']) ? limpia_varchar( $_POST['password'] ) : '';
}

if( $accion == 'test' ){ echo 'test'; exit(); }

if( !preg_match('/(es|en|fr|it)/', $idioma) ){ $idioma = 'es'; }

$lexico = Spyc::YAMLLoad( BASE_FILE . 'php/idiomas/lexico_' .  $idioma . '.yml' );

// if( strlen($idioma) > 2 ){ $idioma = 'es'; }

//$solicitud = $_GET["solicitud"];
//$accion = $_GET['accion'];

//$url = $_SERVER['HTTP_REFERER'];
//$idioma = $arr_url[4];

// $arr_url = explode('/', $_SERVER['HTTP_REFERER']);
// array_pop($arr_url);
// $idioma = array_pop($arr_url);

// if( strlen($idioma) > 2 ){ $idioma = 'es'; }

// $lexico = Spyc::YAMLLoad( BASE_FILE . 'php/idiomas/lexico_' .  $idioma . '.yml' );
	
// if( $accion == 'check_login' ){

// 	$resp = array(
// 		'status' => 'ko',
// 		'error' => 'Lo siento, tu llave no abre esta puerta.'
// 	);

// 	if( $login == 'despensafeliz' && $password == 'familiatragona' ){

// 		$despensa = array(
// 			'cervezas' => $cervezas,
// 			'vinos'	   => $vinos,
// 			'licores'  => $licores,
// 			'tostas'   => $tostas,
// 			'raciones' => $raciones
// 		);

// 		$resp = array(
// 			'status' => 'ok',
// 			'html' => Tragona::mostrar_despensa($despensa)
// 		);
// 	}

// 	echo json_encode($resp);
// 	exit();
// }

if( $accion == 'anadir_a_carta' ){

	if( $hash != ADMIN_HASH ){

		echo json_encode( array(
			'status' => 'ko',
			'error' => 'No está autorizado para realizar esta acción' . $hash
		) );
		exit();
	}

	if( $id_producto == 0 || $tipo_producto == '' ){

		echo json_encode( array(
			'status' => 'ko',
			'error' => 'Error de datos'
		) );
		exit();
	}

	echo json_encode( Tragona::anadir_a_carta($tipo_producto, $id_producto) );
	exit();
}

if( $accion == 'eliminar_de_carta' ){

	if( $hash != ADMIN_HASH || $id_producto == 0 || $tipo_producto == '' ){

		echo json_encode( array(
			'status' => 'ko',
			'error' => 'No está autorizado para realizar esta acción'
		) );
		exit();
	}

	echo json_encode( Tragona::eliminar_de_carta($tipo_producto, $id_producto) );
	exit();
}

$cartel = new Cartel($lexico);

if( $accion == 'ingredientes' ){

	$comida = '';
	if( isset($tostas -> $solicitud) ){

		$comida = $tostas -> $solicitud;

	} else if( isset($raciones -> $solicitud) ){

		$comida = $raciones -> $solicitud;
	}

	if( gettype($comida) != 'array' ){

		echo '<h3>Error de datos</h3>';
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

		echo '<h3>Error de datos</h3>';
		exit();
	}

	echo $cartel -> devuelve_html_bebidas($bebida);
	exit();
}



// Salida por defecto
$aviso = array(

	'<section style="position: absolute; top: 20%; left: 40%"">',

		'<h2 style="position: relative">Acceso accidental</h2>',

		'<img src="' . BASE_URL . 'media/logo_red.jpg" width="300px" style="top: 10%;">',

		'<p>Vaya, parece que has accedido a esta página de forma accidental.</p>',

		'<p>Vuelve a <a href=' . BASE_URL . '>La Tragona</a> para acceder correctamente</p>',

	'</section>'
);

echo implode('', $aviso);
exit();


?>
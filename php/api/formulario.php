<?php

require_once '../config.php';
//require_once '../lib/.php';


if( isset($_POST['accion']) ){

	$accion = comprobar_dato($_POST["accion"]);
	//$solicitud = isset($_POST['solicitud']) ? limpia_varchar($_POST['solicitud']) : '';
	$idioma = isset($_POST['idioma']) ? limpia_varchar($_POST['idioma']) : 'es';

	$asunto  = isset($_POST['tipo']) ? comprobar_dato($_POST["tipo"]) : '';
	$nombre  = isset($_POST["nombre"]) ? comprobar_dato($_POST["nombre"]) : '';	
	$telefono = isset($_POST["telefono"]) ?comprobar_entrada($_POST["telefono"]) : '';
	$email   = isset($_POST["email"]) ?comprobar_entrada($_POST["email"]) : '';
	$mensaje = isset($_POST["mensaje"]) ?comprobar_entrada($_POST["mensaje"]) : '';

	$hash     = isset($_POST['hash']) ? limpia_varchar( $_POST['hash'] ) : '';
	$login    = isset($_POST['usuario']) ? limpia_varchar( $_POST['usuario'] ) : '';
	$password = isset($_POST['password']) ? limpia_varchar( $_POST['password'] ) : '';
}

if( $accion == 'test' ){ echo 'test'; exit(); }

if( !preg_match('/(es|en|fr|it)/', $idioma) ){ $idioma = 'es'; }

$lexico = Spyc::YAMLLoad( BASE_FILE . 'php/idiomas/lexico_' .  $idioma . '.yml' );


if( $accion == 'contacto' ){



	echo 'test';
	exit(); 

}

	
if( $accion == 'check_login' ){

	$resp = array(
		'status' => 'ko',
		'error' => 'Lo siento, tu llave no abre esta puerta.' . $login
	);

	if( $login == 'despensafeliz' && $password == 'familiatragona' ){

		$despensa = array(
			'cervezas' => $cervezas,
			'vinos'	   => $vinos,
			'licores'  => $licores,
			'tostas'   => $tostas,
			'raciones' => $raciones
		);

		$resp = array(
			'status' => 'ok',
			'hash' => ADMIN_HASH,
			'html' => Tragona::devuelve_html_despensa($despensa)
		);
	}

	echo json_encode($resp);
	exit();
}
	
if( $accion == 'check_hash' ){

	/*$resp = array(
		'status' => 'ko',
		'error' => 'Lo siento, tu llave no abre esta puerta.' . $login
	);*/

	if( $hash == ADMIN_HASH ){

		$despensa = array(
			'cervezas' => $cervezas,
			'vinos'	   => $vinos,
			'licores'  => $licores,
			'tostas'   => $tostas,
			'raciones' => $raciones
		);

		$resp = array(
			'status' => 'ok',
			'hash' => ADMIN_HASH,
			'html' => Tragona::devuelve_html_despensa($despensa)
		);
	
		echo json_encode($resp);
		exit();
	}

}


?>
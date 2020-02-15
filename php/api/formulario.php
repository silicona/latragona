<?php

require_once '../config.php';

if( isset($_POST['accion']) ){

	$accion = comprobar_dato($_POST["accion"]);

	$email    = isset($_POST["email"]) ?  	comprobar_dato($_POST["email"]) : '';
	$nombre   = isset($_POST["nombre"]) ? 	comprobar_dato($_POST["nombre"]) : '';	
	$asunto   = isset($_POST['tipo']) ?   	comprobar_dato($_POST["tipo"]) : '';
	$mensaje  = isset($_POST["mensaje"]) ? 	comprobar_dato($_POST["mensaje"]) : '';
	$idioma   = isset($_POST['idioma']) ? 	limpia_varchar($_POST['idioma']) : 'es';
	$telefono = isset($_POST["telefono"]) ? comprobar_dato($_POST["telefono"]) : '';

	$hash     = isset($_POST['hash']) ? 	limpia_varchar( $_POST['hash'] ) : '';
	$login    = isset($_POST['usuario']) ? 	limpia_varchar( $_POST['usuario'] ) : '';
	$password = isset($_POST['password']) ? limpia_varchar( $_POST['password'] ) : '';
}


if( !preg_match('/(es|en|fr|it)/', $idioma) ){ $idioma = 'es'; }

$lexico = Spyc::YAMLLoad( BASE_FILE . 'php/idiomas/lexico_' .  $idioma . '.yml' );
	
if( $accion == 'check_login' ){

	$resp = array(
		'status' => 'ko',
		'error' => $lexico['form']['acceso_ko']
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
	}
	
	exit();
}

if( $accion == 'contacto' ){

	if( $nombre != '' && ($telefono != '' || $email != '') ){

		echo json_encode( Tragona::enviar_email($email, $nombre, $asunto, $mensaje, $lexico['form'], $telefono) );
	
	} else {

		echo json_encode( array(
			'status' => 'ko',
			'error' => $lexico['form']['error_contacto']
		) );
	}
	exit(); 
}


?>
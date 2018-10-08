<?php

//error_reporting(E_ERROR | E_WARNING | E_PARSE);

//require_once 'lib/tragona.php';
require_once 'lib/spyc/spyc.php';

	function comprobar_entrada($dato){
		$dato = trim($dato);
		$dato = stripslashes($dato);
		$dato = htmlspecialchars($dato);
		return $dato;
	}

	$cuerpo = "";
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8 \r\n";
	$confirmacion = "";

	// Asunto del mensaje - equivalente a Headers "Subject:"
	$asunto = comprobar_entrada($_POST["tipo"]);

	if( isset($_POST["nombre"]) && $_POST["nombre"] != "" ){	

		$nombre = comprobar_entrada($_POST["nombre"]);

		if($asunto == "Reserva en La Tragona"){	

			$cuerpo .= "Reserva de: $nombre\r\n";
			$destinatario = "reservas@latragona.com";
			$reserva = true;

		}	elseif ($asunto == "Comentarios para La Tragona") {

			$cuerpo .= "Comentario de: $nombre\r\n";
			$destinatario = "contactanos@latragona.com";

		}
	}

	if (isset($_POST["telefono"]) && strlen($_POST["telefono"]) > 4){

		$telefono = comprobar_entrada($_POST["telefono"]);
		$headers .= "From: reservas@latragona.com\r\n";	
		$cuerpo .= "Telefono de contacto: $telefono\r\n";

	} elseif (isset($_POST["email"]) && $_POST["email"] != "") {

		$email = comprobar_entrada($_POST["email"]);
		$headers .= "From: $email\r\n";
		$cuerpo .= "Email de contacto: $email\r\n";

	}

	if (isset($_POST["mensaje"]) && $_POST["mensaje"] != ""){	

		$cuerpo .= comprobar_entrada( $_POST["mensaje"] );

	}

	$idioma = comprobar_entrada( $_POST['idioma'] );
	$datos = Spyc::YAMLLoad( 'idiomas/lexico_' .  $idioma . '.yml' );


	//email de la persona que quiero enviar
	//$destinatario = "vertederonuclear@gmail.com";

	$headers .= "Cc: latragonalavapies@gmail.com";

	if(isset($nombre) && (isset($telefono)||isset($email)) && isset($cuerpo)){

		$envio = mail($destinatario,$asunto,$cuerpo,$headers);

		if( $envio ){

			if( $reserva ){

				echo json_encode( array(
					'status' => 'ok',
					'mensaje' => $datos['form']['reserva_ok'],
				));

			} else {

				echo json_encode( array(
					'status' => 'ok',
					'mensaje' => $datos['form']['comentario_ok'],
				));

			}

		} else {

			echo json_encode( array(
				'status' => 'error',
				'mensaje' => $datos['form']['respuesta_error'],
			) );

		}
	}

?>			

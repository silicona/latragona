<?php

class Tragona {

	// Test
	public function asignar_alergenos($arr_alergenos, $nom_alergenos){

		//$titulo = $GLOBALS['producto']['alergeno'];
		$aler = '<span class="alergeno">';

		if( !empty($arr_alergenos) ){

			$aler .= '<span class="nombre">' . $nom_alergenos['alergeno'] . ':</span>';

			foreach($arr_alergenos as $alergeno){

				$aler .= '<img src="' . BASE_URL . 'media/alergeno/' . $alergeno . '.png" alt="' . $alergeno . '" title="' . $nom_alergenos[$alergeno] . '">';
				// $aler .= '<img src="' . BASE_FILE . 'media/alergeno/' . $alergeno . '.png" alt="' . $alergeno . '" title="' . $GLOBALS['alergeno'][$alergeno] . '">';
			}
		
		} else {

			$aler .= '<span class="nombre sin_alergeno">' . $nom_alergenos['alergeno'] . ': ' . $nom_alergenos['sin_aler'] . '</span>';
		}

		$aler .= '</span>';

		return $aler;
	}

	// Test
	public function comprobar_entrada($dato){

		$dato = trim($dato);
		$dato = stripslashes($dato);
		$dato = htmlspecialchars($dato);

		return $dato;
	}

	// Test
	public function crear_pasarela_comida($tostas, $raciones, $nombres){

		$arr_productos = (array) array_merge_recursive( (array) $tostas, (array) $raciones );
		$arr_nombres = array_keys($arr_productos);

		$num_elegidos = array();
		while( count( $num_elegidos ) < 5 ){

			$num = rand(0, count( $arr_nombres ) - 1 );
			
			if( !in_array($num, $num_elegidos) ){

				array_push( $num_elegidos, $num );
			} 
		}

		$salida = '<div class="camera-wrap" id="tapas">';
		foreach( $num_elegidos as $elegido){

			$producto = $arr_productos[$arr_nombres[$elegido]];

			$salida .= '
				<div data-src="' . BASE_URL . 'media/imagenes/tragar/' . $producto['imagen'] . '">
					<div class="camera_caption">' . $nombres[$producto['descripcion']] .	'</div>
				</div>';
		}

		$salida .= '</div>';

		return $salida;
	}

	// Test
	public function crear_pasarela_bebida($cervezas, $vinos, $lexico){

		$titulos = $lexico['titulos'];
		$bebidas = $lexico['bebida'];

		$arr_cervezas = array_keys( (array)$cervezas );
		$arr_vinos    = array_keys( (array)$vinos );
		$num_vinos    = array();

		while( count( $num_vinos ) < 3 ){

			$num = rand(0, count( $arr_vinos ) -1 );

			if( !in_array( $num, $num_vinos ) ){

				array_push( $num_vinos, $num );
			}
		}

		$num_cerveza = rand(0, count($arr_cervezas) - 1);
		$pasito      = $arr_cervezas[$num_cerveza];
		$producto    = $cervezas -> $pasito;

		$img_cerveza = '<div style="background-image: url(\'' . BASE_URL . 'media/imagenes/empujar/' . $producto['imagen'] . '\')" title="' . $producto['nombre'] . ' (' . ucfirst($titulos[$producto['tipo']]) . ')" alt="' . $producto['nombre'] . ' (' . ucfirst($titulos[$producto['tipo']]) . ')">';

		$img_cerveza .= '<p>' . $producto['nombre'] . ' (' . ucfirst($titulos[$producto['tipo']]) . ')</p></div>';

		$injerto_cerveza = rand(0, 2);

		$salida = '<div class="marco_bebida">';
		foreach( $num_vinos as $indice => $num ){

			$salida .= $indice == $injerto_cerveza ? $img_cerveza : '';

			$pasito = $arr_vinos[$num];
			$product = $vinos -> $pasito;

			$salida .= '<div style="background-image: url(\'' . BASE_URL . 'media/imagenes/empujar/' . $product['imagen'] . '\')" title="' . $product['nombre'] . ' - ' . ucfirst($bebidas[$product['descripcion']][0]) . '" alt="' . $product['nombre'] . '">';
			$salida .= '<p>' . $product['nombre'] . '</p></div>';
		}

		$salida .= '</div>';
		

		return $salida;
	}


	public function enviar_email($email, $nombre, $asunto, $mensaje, $idioma, $telefono = ''){

		$idioma = comprobar_entrada( $_POST['idioma'] );
		$datos = Spyc::YAMLLoad( 'idiomas/lexico_' .  $idioma . '.yml' );


		$cuerpo = "";
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/plain; charset=UTF-8 \r\n";
		$confirmacion = "";

		//email de la persona que quiero enviar
		//$destinatario = "vertederonuclear@gmail.com";

		$headers .= "Cc: latragonalavapies@gmail.com";

		// Asunto del mensaje - equivalente a Headers "Subject:"
		$asunto = comprobar_entrada($_POST["tipo"]);

		//if( $nombre != "" ){	

			//$nombre = comprobar_entrada($_POST["nombre"]);

			if($asunto == "Reserva en La Tragona"){	

				$cuerpo .= "Reserva de: $nombre\r\n";
				$destinatario = "reservas@latragona.com";
				$reserva = true;

			}	elseif ($asunto == "Comentarios para La Tragona") {

				$cuerpo .= "Comentario de: $nombre\r\n";
				$destinatario = "contactanos@latragona.com";

			}
		//}

		if( strlen($telefono) > 4 ){

			//$telefono = comprobar_entrada($_POST["telefono"]);

			$headers .= "From: reservas@latragona.com\r\n";

			$cuerpo .= 'Telefono de contacto: ' . $telefono . "\r\n";

		} elseif( $email != '' ){

			//$email = comprobar_entrada($_POST["email"]);

			$headers .= 'From: ' . $email . "\r\n";

			$cuerpo .= 'Email de contacto: ' . $email . "\r\n";

		}

		if( $mensaje != "" ){	

			$cuerpo .= comprobar_entrada( $_POST["mensaje"] );
		}




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
	}

	// Test
	public function formatear_titulo($nombre, $titulos, $objeto = ['nombre' => 'nil', "tipo" => 'nil']){

		switch($nombre){

			case "Cervezas":
				return '<legend>' . $objeto['nombre'] . ' <span class="tipo_cerveza"><sub>(' . $titulos[$objeto['tipo']] . ')</sub></span></legend>';
				break;

			// Vinos
			case "7 Puntas (Castilla)":
				return '<legend>' . $titulos['tinto'] . '</legend>';
				break;

			case "Albariño (Cosechero)":
				return '<legend>' . $titulos['blanco'] . '</legend>';
				break;

			case "Vermouth Miro":
				return '<legend>' . $titulos['vermut'] . '</legend>';
				break;

			// Licores
			case "hierbas":
			  return '<legend>' . $titulos['licor'] . '</legend>';
			  break;

			// Comida
			case "Tostas":
				return '<legend class="movil">' . $titulos['tostas'] . '</legend><h4 id="aviso_pan">' . $titulos['pan_sin'] . '</h4>';
				break;

			case "Raciones":
				return '<legend class="movil">' . $titulos['raciones'] . '</legend><h4 id="aviso_rac">' . $titulos['rac_sin'] . '</h4>';
				break;

			default:
				return "";
				break;
		}
	}

	// Test
	public function formatear_precio($producto, $material = ''){

		$datos = $producto['precio'];
		$resultado = '';

		if( $material == 'cerveza'){

			foreach($datos as $envase => $precio){

				$resultado .= "<li>" . ucfirst($envase) . " <sub>(" . $precio . "&euro;)</sub></li>"; 
				//$resultado .= "<li>".$GLOBALS['producto'][$envase]." <sub>(".$precio."&euro;)</sub></li>"; 
			}

		} else {

			$resultado = "<sub>(";
			$token = 0;

			foreach($datos as $envase => $precio){

				if($material == "Comida") { 

					$resultado .= $precio . "<sub>&euro;</sub>";	

				}	else { 

					$resultado .= $token > 0 ? ', ' : '';

					$resultado .= ucfirst($envase) . ': <sub>' . $precio . '&euro;</sub>';
					// $resultado .= $GLOBALS['producto'][$envase] . ': <sub>' . $precio . '&euro;</sub>';
					$token++;	
				}
			}

			$resultado .= ')</sub>';
		}

		return $resultado;
	}

	// Test
	public function formatear_cerveza($producto){

		$prod = '<a href="' . BASE_URL . 'media/imagenes/empujar/' . $producto['imagen'] . '" data-lightbox="example-1" data-title="' . $producto['nombre'] . '">';

		$prod .= '<img src="' . BASE_URL . 'media/imagenes/empujar/minis/' . $producto['imagen'] . '" class="imagen" alt="' . $producto['nombre'] . '" title="' . $producto['nombre'] . '">';

		$prod .= '</a><ul>' . Tragona::formatear_precio($producto, 'cerveza') . '</ul></div>';

		return $prod;
	}

	// Test
	public function formatear_vino($producto, $ver_descripcion){

		$nombre = $producto['nombre'];

		$prod = array(
			'<a href="' . BASE_URL . 'media/imagenes/empujar/' . $producto['imagen'] . '" data-lightbox="example-1" data-title="' . $nombre . '">',
			'<img src="' . BASE_URL . 'media/imagenes/empujar/minis/' . $producto['imagen'] . '" class="imagen" alt="' . $nombre . '" title="' . $nombre . '">',
			'</a>',

			//$prod .= '<div class="celda">';
			'<p>' . $nombre . '</p>',
			'<p class= "precio">' . Tragona::formatear_precio($producto) . '</p>',
			// '<p class= "precio">' . Tragona::formatear_precio($producto['precio']) . '</p>',

			'<span class="descripcion"><a data-fancybox data-src="' . BASE_URL . 'php/guia.php?vino=' . $producto['descripcion'] . '" data-type="iframe" href="javascript:;">' . $ver_descripcion . '</a></span>',
			//$prod .= '</div>';

			'</div>'
		);

		return implode('', $prod);
	}

	// Test
	public function formatear_licor($producto, $nom_bebidas){

		$licor = $nom_bebidas[$producto['nombre']];

		$prod = array(
			'<a href="' . BASE_URL . 'media/imagenes/empujar/' . $producto['imagen'] . '" data-lightbox="example-1" data-title="' . $licor . '">',
			'<img src="' . BASE_URL . 'media/imagenes/empujar/minis/' . $producto['imagen'] . '" alt="' . $licor . '" title="' . $licor . '" class="imagen">',
			'</a>',
			'<p>' . $licor . '</p>',
			'<p class="precio">' . Tragona::formatear_precio($producto) . '</p></div>'
		);
		
		return implode('', $prod);
	}

	// Test
	public function formatear_comida($producto, $lexico, $tosta = false){

		if( $tosta ){

			$light = "tostas";
			$title = $lexico['producto']['tosta'];

		} else {

			$light = 'raciones';	
			$title = "";
		}

		$nombre = $lexico['nombre'][$producto['descripcion']];
		// $nombre = $GLOBALS['nombres'][$producto['descripcion']];

		$prod = array(
			'<a href="' . BASE_URL . 'media/imagenes/tragar/' . $producto['imagen'] . '" data-lightbox="' . $light . '" data-title="' . $title . $nombre . '">',
			'<img src="' . BASE_URL . 'media/imagenes/tragar/minis/' . $producto['imagen'] . '" class="imagen" alt="' . $title . $nombre . '" title="' . $title . $nombre . '">',
			'</a>',
			'<p>' . $nombre . ' ' . Tragona::formatear_precio($producto, 'Comida') . '<br>',
			'<span class="ingredientes">',
			'<a data-fancybox data-src="' . BASE_URL . 'php/ingredientes.php?comida=' . $producto['descripcion'] . '" data-type="iframe" href="javascript:;">' . $lexico['producto']['ver'] . '</a></span>',
			'</p>',
			Tragona::asignar_alergenos($producto['alergenos'], $lexico['alergenos']) . '</div>'
		);
		/*
		$prod = '<a href="' . BASE_URL . 'media/imagenes/tragar/' . $producto['imagen'] . '" data-lightbox="' . $light . '" data-title="' . $title . $nombre . '">';
		$prod .= '<img src="' . BASE_FILE . 'media/imagenes/tragar/minis/' . $producto['imagen'] . '" class="imagen" alt="' . $title . $nombre . '" title="' . $title . $nombre . '">';
		$prod .= '</a>';
		$prod .= '<p>' . $nombre . ' ' . Tragona::formatear_precio($producto, 'Comida') . '<br>';
		$prod .= '<span class="ingredientes">';
		$prod .= '<a data-fancybox data-src="' . BASE_FILE . 'php/ingredientes.php?comida=' . $producto['descripcion'] . '" data-type="iframe" href="javascript:;">' . $GLOBALS['producto']['ver'] . '</a></span>';
		$prod .= '</p>';
		$prod .= asignarAlergenos($producto['alergenos']) . '</div>';
		*/

		return implode('', $prod);
	}

	// Test
	public function mostrar_novedad($producto){

		if( isset($producto['novedad']) ){

			return '<div class="articulo_novedad"><div class="novedad"><div class="cinta_verde">Novedad</div></div>';
		}

		return '<div>';	
	}

	// $listado proviene de despensa o bodega

	public function mostrar_productos($obj_productos, $lexico){

		$titulos = $lexico['titulos'];

		$lista 	   = '<article class="contenido">';
		$compartir = '
			<div class="compartir">
				<div class="fb-like" data-href="https://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
				<div><a href="https://twitter.com/intent/tweet?button_hashtag=familiatragona" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
			</div>';

		$material = get_class($obj_productos);

		// titulo del contenido
		if( $material == "Tostas" ){ 

			$lista .= Tragona::formatear_titulo('Tostas', $titulos);	

		} elseif($material == "Raciones") {	

			$lista .= Tragona::formatear_titulo('Raciones', $titulos); 
		}

		// Bucle de productos
		foreach( $obj_productos as $producto ){

			if($material == "Cervezas") {	

				$lista .= Tragona::formatear_titulo('Cervezas', $titulos, $producto);	

			} else { 

				$lista .= Tragona::formatear_titulo($producto['nombre'], $titulos); 
			}

			$lista .= Tragona::mostrar_novedad($producto);

 			switch( $material ){

				case "Cervezas":
					$lista .= Tragona::formatear_cerveza($producto);
					break;

				case "Vinos":	
					$lista .= Tragona::formatear_vino($producto, $lexico['producto']['descripcion']);
					break;

				case "Licores":
					$lista .= Tragona::formatear_licor($producto, $lexico['bebida']);
					break;

				case "Tostas":
					$lista .= Tragona::formatear_comida($producto, $lexico, true);
					break;

				case "Raciones":
					$lista .= Tragona::formatear_comida($producto, $lexico);
					break;

 				default:
					break;
			}
		}


		$lista .= $compartir;
		$lista .= "</article>";	

		return $lista;
	}

}

?>
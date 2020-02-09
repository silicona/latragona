<?php

class Tragona {

	public static function anadir_a_carta($tipo_producto, $id_producto, $archivo = false){

		if( !$archivo ){ $archivo = BASE_FILE . 'php/lib/carta.txt'; }

		$carta = file_get_contents($archivo);
		$arr_salida = array();

		preg_match_all('/([^\n]+)/', $carta, $arr_carta);

		foreach( $arr_carta[1] as $i => $dato ){

			$arr_dato = explode('-', $dato);
			$arr_ids = explode(',', $arr_dato[1]);

			if( $arr_dato[0] == $tipo_producto ){

				$arr_ids = anadir_a_array($arr_ids, $id_producto);
			}

			$arr_salida[] = $arr_dato[0] . '-' . implode(',', $arr_ids);
		}

		$res_bytes = file_put_contents( $archivo, implode("\n", $arr_salida), LOCK_EX );

		if( $res_bytes > 0 ){

			return array( 'status' => 'ok' );
			
		} else {

			file_put_contents( $archivo, $carta, LOCK_EX );

			return array(
				'status' => 'ko',
				'error' => 'Error: el producto no se ha añadido a la carta.'
			);
		}
	}

	public static function eliminar_de_carta($tipo_producto, $id_producto, $archivo = false){
		
		if( !$archivo ){ $archivo = BASE_FILE . 'php/lib/carta.txt'; }

		$carta = file_get_contents($archivo);
		$arr_salida = array();

		preg_match_all('/([^\n]+)/', $carta, $arr_carta);

		foreach( $arr_carta[1] as $i => $dato ){

			$arr_dato = explode('-', $dato);
			$arr_ids = explode(',', $arr_dato[1]);

			if( $arr_dato[0] == $tipo_producto ){

				$arr_ids = eliminar_de_array($arr_ids, $id_producto);
			}

			$arr_salida[] = $arr_dato[0] . '-' . implode(',', $arr_ids);
		}

		$res_bytes = file_put_contents( $archivo, implode("\n", $arr_salida), LOCK_EX );

		if( $res_bytes > 0 ){

			return array( 'status' => 'ok' );
			
		} else {

			file_put_contents( $archivo, $carta, LOCK_EX );

			return array(
				'status' => 'ko',
				'error' => 'Error: el producto no se ha eliminado de la carta.'
			);
		}
	}

	// Test
	public static function asignar_alergenos($arr_alergenos, $nom_alergenos){

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
	public static function comprobar_entrada($dato){

		$dato = trim($dato);
		$dato = stripslashes($dato);
		$dato = htmlspecialchars($dato);

		return $dato;
	}

	// Test
	public static function crear_pasarela_comida($tostas, $raciones, $nombres){

		$arr_productos = (array) array_merge_recursive( (array) $tostas, (array) $raciones );
		$arr_nombres = array_keys($arr_productos);

		$arr_nums_elegidos = array();
		//$contador = 0;
		while( count($arr_nums_elegidos) < 5 ){
		//while( $contador != count($arr_nombres) ){

			$num = rand(0, count($arr_nombres) - 1 );
			
			$arr_nums_elegidos = anadir_a_array($arr_nums_elegidos, $num);

			//$contador++;
		}

		$salida = ['<div class="camera-wrap" id="tapas">'];
		foreach( $arr_nums_elegidos as $elegido ){

			$producto = $arr_productos[$arr_nombres[$elegido]];

			$salida[] = '<div data-src="' . BASE_URL . 'media/imagenes/tragar/' . $producto['imagen'] . '">';
			$salida[] = '<div class="camera_caption">' . $nombres[$producto['descripcion']] .	'</div>';
			$salida[] = '</div>';
		}

		$salida[] = '</div>';

		return implode('', $salida);
	}

	// Test
	public static function crear_pasarela_bebida($cervezas, $vinos, $lexico){

		$titulos = $lexico['titulos'];
		$bebidas = $lexico['bebida'];

		$arr_cervezas = array_keys( (array)$cervezas );
		$arr_vinos    = array_keys( (array)$vinos );

		$num_vinos    = array();
		while( count( $num_vinos ) < 3 ){

			$num = rand(0, count($arr_vinos) - 1 );

			$num_vinos = anadir_a_array($num_vinos, $num);
		}

		$num_cerveza = rand(0, count($arr_cervezas) - 1);
		$nombre_cerveza = $arr_cervezas[$num_cerveza];
		$cerveza = $cervezas -> $nombre_cerveza;

		$img_cerveza = implode('', array(
			'<div',
				' style="background-image: url(\'' . BASE_URL . 'media/imagenes/empujar/' . $cerveza['imagen'] . '\')"',
				' title="' . $cerveza['nombre'] . ' (' . ucfirst($titulos[$cerveza['tipo']]) . ')"',
				' alt="' . $cerveza['nombre'] . ' (' . ucfirst($titulos[$cerveza['tipo']]) . ')">',
					'<p>',
						$cerveza['nombre'] . ' (' . ucfirst($titulos[$cerveza['tipo']]) . ')',
					'</p>',
			'</div>'
		) );

		$injerto_cerveza = rand(0, 2);

		$salida = ['<div class="marco_bebida">'];
		foreach( $num_vinos as $indice => $num ){

			$salida[] = $indice == $injerto_cerveza ? $img_cerveza : '';

			$pasito = $arr_vinos[$num];
			$product = $vinos -> $pasito;

			$salida[] = '<div style="background-image: url(\'' . BASE_URL . 'media/imagenes/empujar/' . $product['imagen'] . '\')" title="' . $product['nombre'] . ' - ' . ucfirst($bebidas[$product['descripcion']][0]) . '" alt="' . $product['nombre'] . '">';
			$salida[] = '<p>' . $product['nombre'] . '</p></div>';
		}

		$salida[] = '</div>';
		

		return implode('', $salida);
	}

	// Test
	public static function devuelve_carta_actual($tipo){

		$tipo = strtolower($tipo);

		$carta_actual = file_get_contents(BASE_FILE . 'php/lib/carta.txt');

		preg_match_all('/(\w+)\-([\d,]+)/', $carta_actual, $datos);

		$arr_salida = array();
		for( $i = 0; $i < count($datos[1]); $i++ ){

			$clave = strtolower($datos[1][$i]);

			$arr_salida[$clave] = explode(',', $datos[2][$i]);
		}

		$tipos = array_keys($arr_salida);

		if( !in_array($tipo, $tipos) ){ return false; }

		return $arr_salida[$tipo];
	}


	public static function devuelve_html_despensa($despensa){

		$arr_html = array('<section id="catalogo"><article class="contenido">');

		$arr_fotos_ko = array(
			"ensalada_sardinas",
			"ensalada_remo",
			"estrella_sin",
		);

		foreach( $despensa as $tipo => $productos ){

			$carta = Tragona::devuelve_carta_actual($tipo);

			$arr_html[] = '<h2 class="titulo_despensa">' . ucfirst($tipo) . '</h2>';

			$arr_html[] = '<table class="despensa ' . $tipo . '">';
			$arr_html[] = '<thead><tr>';
			$arr_html[] = '<th class="nombre">Nombre</th>';
			$arr_html[] = '<th style="width: 100px;">Precio</th>';
			$arr_html[] = '<th>En carta</th>';
			$arr_html[] = '<th>Novedad</th>';
			$arr_html[] = '<th>Imagen</th>';
			//$arr_html[] = '<th>Acciones</th>';
			$arr_html[] = '</tr></thead>';
			$arr_html[] = '<tbody>';

			foreach( $productos as $i => $producto ){

				$arr_html[] = '<tr>';
				$arr_html[] = '<td>' . $producto['nombre'] . '</td>';

				$precio = implode('<br>', $producto['precio']);
				$precio = str_replace(' - ', '', $precio);
				$arr_html[] = '<td class="centrado">' . $precio . '</td>';
				

				$en_carta = in_array($producto['id'], $carta) ? '1' : '0';
				$boton_en_carta = form_check( array(
					'label' 	=> '',
					'id' 		=> $tipo . $producto['id'],
					'checked' 	=> $en_carta,
					'clase' 	=> '',
					'valor' 	=> '1',
					//input_group: 'false',
					'col_bs_input' 	=> 'pestana',
					'col_bs_group' 	=> '',
					'atributos' => array(
						'data-tipo' => $tipo,
						'data-id_producto' => $producto['id'],
						'onClick' => 'anadir_eliminar_de_carta(this)'
					),
				) );

				$arr_html[] = '<td class="centrado mi_form">' . $boton_en_carta . '</td>';
				//$arr_html[] = '<td class="en_carta">' . $tipo . '</td>';

				$novedad = $producto['novedad'] ? 'Sí' : 'No';
				$arr_html[] = '<td class="centrado">' . $novedad . '</td>';

				if( !in_array($producto['descripcion'], $arr_fotos_ko) ){

					$imagen_label = 'OK';
					$imagen_clase = 'btn_exito';

				} else {
					
					$imagen_label = 'Ajena';
					$imagen_clase = 'btn_aviso';
				}

				$cont = 0;
				$suf_importe = '';
				foreach( $producto['precio'] as $clase => $valor ){

					if( $cont == 0 ){ 

						$importe = $producto['precio'][$clase];

					} else {

						$suf_importe = ' - ' . $valor;
					}

					$cont++;
				}
				$importe .= $suf_importe;

				if( $tipo == 'cervezas' || $tipo == 'licores' ){

					$boton_imagen = form_boton(array(
						'label' => $imagen_label,
						'id'	=> '',
						'clase' => $imagen_clase,
						'icono' => 'ver',
						'href'	=> BASE_URL . 'media/imagenes/empujar/' . $producto['imagen'],
						'input_group' => 'false',
						'atributos' => array(
							'data-lightbox' => $tipo,
							'data-title' => $producto['nombre'] . ' (' . $importe . ' euros)'
						),
					));

				} else {

					$fancy = 'comida';
					$accion = 'ingredientes';

					if( $tipo == 'vinos' ){

						$fancy = 'vinos';
						$accion = 'vino';
					}

					$boton_imagen = form_boton(array(
						'label' => $imagen_label,
						'id'	=> '',
						'clase' => $imagen_clase,
						'icono' => 'ver',
						'href'	=> '',
						'input_group' => 'false',
						'atributos' => array(
							'data-fancybox' => $fancy,
							'data-src'  => BASE_API . 'despensa.php?accion=' . $accion . '&solicitud=' . $producto['descripcion'],
							'data-type' => 'iframe'
						),
					));
				}

				$arr_html[] = '<td class="centrado">' . $boton_imagen . '</td>';
				$arr_html[] = '</tr>';

			}

			$arr_html[] = '</tbody></table>';
		}

		$arr_html[] = '</article></section>';

		return implode('', $arr_html);
	}

	// Sin Test
	public static function devuelve_html_productos($obj_productos, $lexico){

		$titulos = $lexico['titulos'];
		$material = get_class($obj_productos);
		$productos_en_carta = Tragona::devuelve_carta_actual($material);

		$lista 	 = '<article class="contenido">';
		if( $material == "Tostas" ){ 

			$lista .= Tragona::formatear_titulo('Tostas', $titulos);	

		} elseif( $material == "Raciones" ) {	

			$lista .= Tragona::formatear_titulo('Raciones', $titulos); 
		}

		// Bucle de productos
		foreach( $obj_productos as $producto ){

			if( !in_array($producto['id'], $productos_en_carta) ){ continue; }

			$lista .= Tragona::formatear_titulo($producto['nombre'], $titulos); 

			$lista .= Tragona::mostrar_novedad($producto);

 			switch( $material ){

				case "Cervezas":
					$lista .= Tragona::formatear_cerveza($producto, $lexico);
					break;

				case "Vinos":	
					$lista .= Tragona::devuelve_html_vino($producto, $lexico);
					//$lista .= Tragona::formatear_vino($producto, $lexico);
					break;

				case "Licores":
					$lista .= Tragona::formatear_cerveza($producto, $lexico);
					//$lista .= Tragona::formatear_licor($producto, $lexico);
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

		$lista .= "</article>";	

		return $lista;
	}

	// Sin Test
	public static function devuelve_html_vino($producto, $lexico){

		$nombre = $producto['nombre'];

		$prod = array(
			'<a class="img_fancybox" data-fancybox data-src="' . BASE_API . 'despensa.php?accion=vino&solicitud=' . $producto['descripcion'] . '" data-type="iframe" href="javascript:;">',
				'<div class="div_imagen">',
					'<img src="' . BASE_URL . 'media/imagenes/empujar/' . $producto['imagen'] . '" class="imagen" alt="' . $nombre . '" title="' . $nombre . '">',
				'</div>',
				'<p>' . $nombre . '</p>',
			'</a>',
			'</div></div>'
		);

		return implode('', $prod);
	}
	

	public function enviar_email($email_comentario, $nombre, $asunto, $mensaje, $idioma, $telefono = ''){

		$datos = Spyc::YAMLLoad( 'idiomas/lexico_' .  $idioma . '.yml' );

		$destinatario = "latragonalavapies@gmail.com";
		$contacto = 'Sin datos';
		$h2 	 = 'Mensaje de la web';
		$reserva = false;

		$headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=UTF-8 \r\n";

		$headers .= "Cco: alejoizquierdomartinez@gmail.com";

		if( $asunto == "Reserva en La Tragona" ){	

			$h2 = 'Reserva de: '  . $nombre;

			$destinatario = "reservas@latragona.com";
			$headers .= "Cc: latragonalavapies@gmail.com@gmail.com";
			$reserva = true;

		} elseif( $asunto == "Comentarios para La Tragona" ){

			$h2 = 'Comentario de: '. $nombre;

			$destinatario = "contactanos@latragona.com";
			$headers .= "Cc: latragonalavapies@gmail.com@gmail.com";
		}

		if( strlen($telefono) > 4 ){

			$headers .= "From: reservas@latragona.com\r\n";

			$contacto = 'Telefono - ' . $telefono;

		} elseif( $email != '' ){

			$headers .= 'From: ' . $email_comentario . "\r\n";

			$contacto = 'Email - ' . $email_comentario;
		}

		$arr_html = array(
			'<h2>' . $h2 . '</h2>',
			'<p>Datos de contacto: ' . $contacto . '</p>',
			'<p>Mensaje:<br>' . $mensaje . '</p>',
			'<br>',
			'<p>Saludos.</p>',
		);

		$cuerpo = implode('', $arr_html);

		$envio = mail($destinatario, $asunto, $cuerpo, $headers);

		if( $envio ){
			
			$mensaje = $reserva ? $datos['form']['reserva_ok'] : $datos['form']['comentario_ok'];

			return array(
				'status' => 'ok',
				'mensaje' => $mensaje,
			);

		}

		return array(
			'status' => 'ko',
			'mensaje' => $datos['form']['respuesta_error'],
		);
	}
	
	public function enviar_email_old($email, $nombre, $asunto, $mensaje, $idioma, $telefono = ''){

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
	public static function formatear_titulo($nombre, $titulos, $objeto = ['nombre' => 'nil', "tipo" => 'nil']){

		switch($nombre){

			case "Estrella Levante":
				return '<legend>Cervezas</legend>';
				//return '<legend>' . $objeto['nombre'] . ' <span class="tipo_cerveza"><sub>(' . $titulos[$objeto['tipo']] . ')</sub></span></legend>';
				break;

			// Vinos
			case "7 Puntas (Castilla)":
				return '<legend class="clearfix">' . $titulos['tinto'] . '</legend>';
				break;

			case "Albariño (Cosechero)":
				return '<legend class="clearfix">' . $titulos['blanco'] . '</legend>';
				break;

			case "Vermouth Miro":
				return '<legend class="clearfix">' . $titulos['vermut'] . '</legend>';
				break;

			// Licores
			case "hierbas":
			  return '<legend>' . $titulos['licor'] . '</legend>';
			  break;

			// Comida
			case "Tostas":
				return '<legend class="movil">' . $titulos['tostas'] . '</legend><h4 id="aviso_pan" class="aviso_alergeno">' . $titulos['pan_sin'] . '</h4>';
				break;

			case "Raciones":
				return '<legend class="movil">' . $titulos['raciones'] . '</legend><h4 id="aviso_rac" class="aviso_alergeno">' . $titulos['rac_sin'] . '</h4>';
				break;

			default:
				return "";
				break;
		}
	}

	// Test
	public static function formatear_precio($producto, $lex_prod, $material = ''){

		$datos = $producto['precio'];
		$resultado = '';

		if( $material == 'cerveza'){

			foreach($datos as $envase => $precio){

				$resultado .= "<li>" . ucfirst($lex_prod[$envase]) . " <sub>(" . $precio . "&euro;)</sub></li>"; 
			}

		} else {

			$resultado = "<sub>(";
			$token = 0;

			foreach( $datos as $envase => $precio ){

				if( $material == "Comida" ){ 

					$resultado .= $precio . "<sub>&euro;</sub>";	

				} else { 

					$resultado .= $token > 0 ? ', ' : '';

					$resultado .= ucfirst($lex_prod[$envase]) . ': <sub>' . $precio . '&euro;</sub>';
					$token++;	
				}
			}

			$resultado .= ')</sub>';
		}

		return $resultado;
	}

	// Test
	public static function formatear_cerveza($producto, $lexico){

		//$clase_lightbox = getclass($producto);
		$nombre = isset($lexico['bebida'][$producto['nombre']]) ? $nombre = $lexico['bebida'][$producto['nombre']] : $producto['nombre'];
		if( isset($lexico['bebida'][$producto['nombre']]) ){

			$nombre = $lexico['bebida'][$producto['nombre']];
			$clase_lightbox = 'cervezas';


		} else {

			$nombre = $producto['nombre'];
			$clase_lightbox = 'vinos';
		}


		$precio = ' - ' . array_shift($producto['precio']) . 'euros';

		$html = array(
			'<a class="img_lightbox" href="' . BASE_URL . 'media/imagenes/empujar/' . $producto['imagen'] . '" data-lightbox="' . $clase_lightbox . '" data-title="' . $producto['nombre'] . ' ' . $precio . '">',

				'<div class="div_imagen">',
					'<img src="' . BASE_URL . 'media/imagenes/empujar/' . $producto['imagen'] . '" class="imagen" alt="' . $nombre . '" title="' . $nombre  . '">',
					// '<img src="' . BASE_URL . 'media/imagenes/empujar/minis/' . $producto['imagen'] . '" class="imagen" alt="' . $nombre . '" title="' . $nombre . '">',
				'</div>',
				'<p>' . $nombre . '</p>',
			'</a>',
			'</div></div>',	// interior y articulo
		);

		return implode('', $html);
	}

	// Test
	public static function formatear_cerveza_old($producto, $lexico){

		$html = array(
			'<a href="' . BASE_URL . 'media/imagenes/empujar/' . $producto['imagen'] . '" data-lightbox="example-1" data-title="' . $producto['nombre'] . '">',
				'<img src="' . BASE_URL . 'media/imagenes/empujar/minis/' . $producto['imagen'] . '" class="imagen" alt="' . $producto['nombre'] . '" title="' . $producto['nombre'] . '">',
			'</a>',
			'<ul>',
				Tragona::formatear_precio($producto, $lexico['producto'], 'cerveza'),
			'</ul>',
			'</div></div>',	// interior y articulo
		);

		return implode('', $html);
	}

	// Test
	public static function formatear_vino($producto, $lexico){

		$nombre = $producto['nombre'];
		//$ver = $lexico['producto']['descripcion'];

		$prod = array(
			'<a class="img_fancybox" data-fancybox data-src="' . BASE_API . 'despensa.php?accion=vino&solicitud=' . $producto['descripcion'] . '" data-type="iframe" href="javascript:;">',
				'<div class="div_imagen">',
					'<img src="' . BASE_URL . 'media/imagenes/empujar/' . $producto['imagen'] . '" class="imagen" alt="' . $nombre . '" title="' . $nombre . '">',
				'</div>',
				'<p>' . $nombre . '</p>',
			'</a>',

			//$prod .= '<div class="celda">';
			//'<p class= "precio">' . Tragona::formatear_precio($producto, $lexico['producto']) . '</p>',
			// '<p class= "precio">' . Tragona::formatear_precio($producto['precio']) . '</p>',

			//'<span class="descripcion"><a data-fancybox data-src="' . BASE_URL . 'php/guia.php?vino=' . $producto['descripcion'] . '" data-type="iframe" href="javascript:;">' . $lexico['producto']['descripcion'] . '</a></span>',
			//$prod .= '</div>';

			'</div></div>'
		);

		return implode('', $prod);
	}

	// Test
	public static function formatear_vino_old($producto, $lexico){

		$nombre = $producto['nombre'];
		//$ver = $lexico['producto']['descripcion'];

		$prod = array(
			//'<a href="' . BASE_URL . 'media/imagenes/empujar/' . $producto['imagen'] . '" data-lightbox="example-1" data-title="' . $nombre . '">',
			'<a class="img_fancybox2 data-fancybox data-src="' . BASE_API . 'despensa.php?accion=vino&solicitud=' . $producto['descripcion'] . '" data-type="iframe" href="javascript:;">',
				'<div class="div_imagen">',
					'<img src="' . BASE_URL . 'media/imagenes/empujar/minis/' . $producto['imagen'] . '" class="imagen" alt="' . $nombre . '" title="' . $nombre . '">',
			'</a>',

			//$prod .= '<div class="celda">';
			'<p>' . $nombre . '</p>',
			'<p class= "precio">' . Tragona::formatear_precio($producto, $lexico['producto']) . '</p>',
			// '<p class= "precio">' . Tragona::formatear_precio($producto['precio']) . '</p>',

			'<span class="descripcion"><a data-fancybox data-src="' . BASE_URL . 'php/guia.php?vino=' . $producto['descripcion'] . '" data-type="iframe" href="javascript:;">' . $lexico['producto']['descripcion'] . '</a></span>',
			//$prod .= '</div>';

			'</div>'
		);

		return implode('', $prod);
	}

	// Test
	public static function formatear_licor($producto, $lexico){

		$licor = $lexico['bebida'][$producto['nombre']];

		$prod = array(
			'<a href="' . BASE_URL . 'media/imagenes/empujar/' . $producto['imagen'] . '" data-lightbox="example-1" data-title="' . $licor . '">',
				//'<img src="' . BASE_URL . 'media/imagenes/empujar/minis/' . $producto['imagen'] . '" alt="' . $licor . '" title="' . $licor . '" class="imagen">',
				'<img src="' . BASE_URL . 'media/imagenes/empujar/' . $producto['imagen'] . '" alt="' . $licor . '" title="' . $licor . '" class="imagen">',
			'</a>',
			'<p>' . $licor . '</p>',
			'<p class="precio">' . Tragona::formatear_precio($producto, $lexico['producto']) . '</p></div>'
		);
		
		return implode('', $prod);
	}

	// Test
	public static function formatear_comida($producto, $lexico, $tosta = false){

		$nombre = $tosta ? $lexico['producto']['tosta'] : '';
		
		$nombre .= $lexico['nombre'][$producto['descripcion']];

		$clase_largo = strlen($nombre) > 35 ? 'largo' : '';

		$prod = array(
			'<a class="img_fancybox" data-fancybox data-src="' . BASE_API . 'despensa.php?accion=ingredientes&solicitud=' . $producto['descripcion'] . '" data-type="iframe" href="javascript:;">',
				'<div class="div_imagen">',
					'<img src="' . BASE_URL . 'media/imagenes/tragar/' . $producto['imagen'] . '" class="imagen" alt="' . $nombre . '" title="' . $nombre . '">',
				'</div>',
				'<p class="' . $clase_largo . '">',
					'<span>' . $nombre . '</span>',
				'</p>',
			'</a>',
			'</div></div>'
		);

		return implode('', $prod);
	}

	// Test
	public static function formatear_comida_old($producto, $lexico, $tosta = false){

		if( $tosta ){

			$light = "tostas";
			$title = $lexico['producto']['tosta'];

		} else {

			$light = 'raciones';	
			$title = "";
		}

		$nombre = $lexico['nombre'][$producto['descripcion']];

		$prod = array(
			'<a class="img_lightbox" href="' . BASE_URL . 'media/imagenes/tragar/' . $producto['imagen'] . '" data-lightbox="' . $light . '" data-title="' . $title . $nombre . '">',
				'<img src="' . BASE_URL . 'media/imagenes/tragar/minis/' . $producto['imagen'] . '" class="imagen" alt="' . $title . $nombre . '" title="' . $title . $nombre . '">',
			'</a>',
			'<p>',
				$nombre . ' ' . Tragona::formatear_precio($producto, $lexico['producto'], 'Comida') . '<br>',
				'<span class="ingredientes">',
					'<a data-fancybox data-src="' . BASE_URL . 'php/ingredientes.php?comida=' . $producto['descripcion'] . '" data-type="iframe" href="javascript:;">' . $lexico['producto']['ver'] . '</a>',
				'</span>',
			'</p>',
			Tragona::asignar_alergenos($producto['alergenos'], $lexico['alergenos']) . '</div>'
		);

		return implode('', $prod);
	}

	// Para borrar
	public static function mostrar_despensa($despensa){

		$arr_html = array('<section id="despensa"><article class="contenido">');

		$arr_fotos_ko = array(
			"ensalada_sardinas",
			"ensalada_remo",
			"estrella_sin",
		);

		foreach( $despensa as $tipo => $productos ){

			$carta = Tragona::devuelve_carta_actual($tipo);

			$arr_html[] = '<h2 class="titulo_despensa">' . ucfirst($tipo) . '</h2>';

			$arr_html[] = '<table class="despensa ' . $tipo . '">';
			$arr_html[] = '<thead><tr>';
			$arr_html[] = '<th class="nombre">Nombre</th>';
			$arr_html[] = '<th style="width: 100px;">Precio</th>';
			$arr_html[] = '<th>En carta</th>';
			$arr_html[] = '<th>Novedad</th>';
			$arr_html[] = '<th>Imagen</th>';
			$arr_html[] = '</tr></thead>';
			$arr_html[] = '<tbody>';

			foreach( $productos as $i => $producto ){

				$arr_html[] = '<tr>';
				$arr_html[] = '<td>' . $producto['nombre'] . '</td>';

				$precio = implode('<br>', $producto['precio']);
				$precio = str_replace(' - ', '', $precio);
				$arr_html[] = '<td class="centrado">' . $precio . '</td>';

				$en_carta = in_array($producto['id'], $carta) ? 'Sí' : 'No';
				$arr_html[] = '<td class="centrado">' . $en_carta . '</td>';
				//$arr_html[] = '<td class="en_carta">' . $tipo . '</td>';

				$novedad = $producto['novedad'] ? 'Sí' : 'No';
				$arr_html[] = '<td class="centrado">' . $novedad . '</td>';

				$ok_foto = in_array($producto['descripcion'], $arr_fotos_ko) ? 'No OK' : 'OK';

				$arr_html[] = '<td class="centrado">' . $ok_foto . '</td>';
				$arr_html[] = '</tr>';

			}

			$arr_html[] = '</tbody></table>';
		}

		$arr_html[] = '</article></section>';

		return implode('', $arr_html);
	}

	// Test
	public static function mostrar_novedad($producto){

		$str = '<div class="articulo" data-id_producto="' . $producto['id'] . '">';
		$str .= '<div class="interior">';

		if( $producto['novedad'] ){

			$str = '<div class="articulo articulo_novedad" data-id_producto="' . $producto['id'] . '">';
			$str .= '<div class="interior">';
			$str .= '<div class="novedad"><div class="cinta_verde">Novedad</div></div>';
		}


		return $str;	
	}

	// Test
	public static function mostrar_productos($obj_productos, $lexico){

		$titulos = $lexico['titulos'];

		$lista 	   = '<article class="contenido">';
		$compartir = '
			<div class="compartir">
				<div class="fb-like" data-href="https://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
				<div><a href="https://twitter.com/intent/tweet?button_hashtag=familiatragona" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
			</div>';

		$material = get_class($obj_productos);

		$productos_en_carta = Tragona::devuelve_carta_actual($material);
		//print_r($productos_en_carta);
		// titulo del contenido
		if( $material == "Tostas" ){ 

			$lista .= Tragona::formatear_titulo('Tostas', $titulos);	

		} elseif($material == "Raciones") {	

			$lista .= Tragona::formatear_titulo('Raciones', $titulos); 
		}

		// Bucle de productos
		foreach( $obj_productos as $producto ){
			
			/*
			if( $material == "Cervezas" ){	

				//$lista .= Tragona::formatear_titulo('Cervezas', $titulos, $producto);	

			} else { 

				$lista .= Tragona::formatear_titulo($producto['nombre'], $titulos); 
			}
			*/

			if( !in_array($producto['id'], $productos_en_carta) ){ continue; }

			$lista .= Tragona::formatear_titulo($producto['nombre'], $titulos); 

			$lista .= Tragona::mostrar_novedad($producto);

 			switch( $material ){

				case "Cervezas":
					$lista .= Tragona::formatear_cerveza($producto, $lexico);
					break;

				case "Vinos":	
					$lista .= Tragona::formatear_vino($producto, $lexico);
					break;

				case "Licores":
					$lista .= Tragona::formatear_cerveza($producto, $lexico);
					//$lista .= Tragona::formatear_licor($producto, $lexico);
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

		//$lista .= $compartir;
		$lista .= "</article>";	

		return $lista;
	}

}

?>
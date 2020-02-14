<?php

require_once 'helper.php';
require_once '../php/tragona.php';

class TragonaTest extends \PHPUnit\Framework\TestCase {

	public static $lexico;

	public static $cervezas;
	public static $licores;
	public static $vinos;
	public static $tostas;
	public static $raciones;

	public static function setUpBeforeClass(){

		self::$lexico = Helper::suministra_lexico('es');

		self::$cervezas = Helper::suministra_despensa('cervezas');
		self::$vinos = Helper::suministra_despensa('vinos');
		self::$licores = Helper::suministra_despensa('licores');
		self::$tostas = Helper::suministra_despensa('tostas');
		self::$raciones = Helper::suministra_despensa('raciones');


		//define('BASE_URL', $GLOBALS['BASE_URL']);
	}

	public static function tearDownBeforeClass(){

		self::$lexico = null;
	}
	
	public function setUp(){}

	public function tearDown(){}

	public function test_check_despensa_comida(){

		//$tostas = Helper::suministra_despensa('tostas');
		//$raciones = Helper::suministra_despensa('raciones');

		$arr_productos = (array) array_merge_recursive( (array) self::$tostas, (array) self::$raciones );
		
		$arr_nombres = array_keys(self::$lexico['nombre']);
		$arr_ingredientes = array_keys(self::$lexico['ingrediente']);
		$arr_alergenos = array_keys(self::$lexico['alergenos']);
		$arr_imagenes = scandir(BASE_FILE . 'media/imagenes/tragar');

		$arr_error = array();
		foreach( $arr_productos as $producto ){

			$desc = $producto['descripcion'];

			if( !in_array($desc, $arr_nombres) ){ $arr_error[] = 'Descripcion ausente de $lexico[nombre]: ' . $desc; }

			if( !in_array($producto['imagen'], $arr_imagenes) ){ $arr_error[] = 'Imagen ausente ' . $producto['imagen'] . ' de ' . $desc . '.'; }
			
			foreach( $producto['ingredientes'] as $i => $ingre ){

				if( !in_array($ingre, $arr_ingredientes) ){ $arr_error[] = 'Ingrediente ausente de $lexico[ingrediente]: ' . $ingre . '(' . $desc . ')'; }
			}

			foreach( $producto['alergenos'] as $i => $aler ){

				if( !in_array($aler, $arr_alergenos) ){ $arr_error[] = 'Alergeno ausente de $lexico[alergeno]: ' . $aler . '(' . $desc . ')'; }
			}
		}

		$this -> assertTrue( count($arr_error) == 0, "Errores:\n" . implode("\n", $arr_error) );


	}

	public function test_check_despensa_vinos(){

		$arr_bebidas = array_keys(self::$lexico['bebida']);
		$arr_imagenes = scandir(BASE_FILE . 'media/imagenes/empujar');

		$arr_error = array();
		foreach( self::$vinos as $nombre => $producto ){

			$desc = $producto['descripcion'];

			if( !in_array($desc, $arr_bebidas) ){ $arr_error[] = 'Descripción ausente de $lexico[bebida]: ' . $desc; }

			if( gettype(self::$lexico['bebida'][$desc]) != 'array' ){ $arr_error[] = 'Descripción incorrecta de $lexico[bebida]: ' . $desc; }
			
			if( count(self::$lexico['bebida'][$desc]) == 0 ){ $arr_error[] = 'Descripción sin contenido de $lexico[bebida]: ' . $desc; }
			
			if( count($producto['precio']) <= 0 ){ $arr_error[] = 'Precio incorrecto: ' . $desc; }
		
			if( !in_array($producto['imagen'], $arr_imagenes) ){ $arr_error[] = 'Imagen ausente ' . $producto['imagen'] . ' de ' . $desc . '.'; }

		}

		$this -> assertTrue( count($arr_error) == 0, "Errores:\n" . implode("\n", $arr_error) );
	}

	public function test_check_despensa_cervezas(){

		$arr_productos = (array) array_merge_recursive( (array) self::$cervezas, (array) self::$licores );

		$arr_bebidas = array_keys(self::$lexico['bebida']);
		$arr_imagenes = scandir(BASE_FILE . 'media/imagenes/empujar');

		$arr_error = array();
		foreach( self::$cervezas as $nombre => $producto ){

			$desc = $producto['descripcion'];

			//if( !in_array($desc, $arr_bebidas) ){ $arr_error[] = 'Descripción ausente de $lexico[bebida]: ' . $desc; }

			//if( gettype(self::$lexico['bebida'][$desc]) != 'array' ){ $arr_error[] = 'Descripción incorrecta de $lexico[bebida]: ' . $desc; }
			
			if( gettype($producto['precio']) != 'array' ){ $arr_error[] = 'Precio incorrecto: ' . $desc; }
			
			if( count($producto['precio']) == 0 ){ $arr_error[] = 'Precio sin contenido: ' . $desc; }
		
			if( !in_array($producto['imagen'], $arr_imagenes) ){ $arr_error[] = 'Imagen ausente ' . $producto['imagen'] . ': ' . $desc . '.'; }

		}

		$this -> assertTrue( count($arr_error) == 0, "Errores:\n" . implode("\n", $arr_error) );
	}

	public function test_check_despensa_licores(){

		$arr_bebidas = array_keys(self::$lexico['bebida']);
		$arr_imagenes = scandir(BASE_FILE . 'media/imagenes/empujar');

		$arr_error = array();
		foreach( self::$licores as $nombre => $producto ){

			$desc = $producto['descripcion'];

			if( !in_array($desc, $arr_bebidas) ){ $arr_error[] = 'Descripción ausente de $lexico[bebida]: ' . $desc; }

			if( gettype(self::$lexico['bebida'][$desc]) != 'string' ){ $arr_error[] = 'Descripción incorrecta de $lexico[bebida]: ' . $desc; }
			
			if( gettype($producto['precio']) != 'array' ){ $arr_error[] = 'Precio incorrecto: ' . $desc; }
			
			if( count($producto['precio']) == 0 ){ $arr_error[] = 'Precio sin contenido: ' . $desc; }
		
			if( !in_array($producto['imagen'], $arr_imagenes) ){ $arr_error[] = 'Imagen ausente ' . $producto['imagen'] . ': ' . $desc . '.'; }

		}

		$this -> assertTrue( count($arr_error) == 0, "Errores:\n" . implode("\n", $arr_error) );
	}

	public function test_comparar_idiomas_es_en(){

		$lex_uno = Helper::suministra_lexico('es');
		$lex_dos = Helper::suministra_lexico('en');

		$arr_error = array();

		foreach( $lex_uno as $sec => $datos ){

			if( $sec == 'despensa' ){ continue; }

			if( gettype($lex_dos[$sec]) != 'array' ){ $arr_error[] = 'Sección ' . $sec . 'desaparecida.'; }

			foreach( $datos as $clave => $valor ){

				$tipo_uno = gettype($valor);
				$tipo_dos = gettype($lex_dos[$sec][$clave]);

				if( ($tipo_dos != 'string' && $tipo_dos != 'array') || $tipo_uno != $tipo_dos ){
					
					$arr_error[] = 'Elemento ' . $clave . ' incorrecto de sección ' . $sec . '.';
				}
			}
		}

		$this -> assertTrue( count($arr_error) == 0, "Errores del Inglés:\n" . implode("\n", $arr_error) ); 

		foreach( $lex_dos as $sec => $datos ){

			if( gettype($lex_uno[$sec]) != 'array' ){ $arr_error[] = 'Sección ' . $sec . 'desaparecida.'; }

			foreach( $datos as $clave => $valor ){

				$tipo_uno = gettype($valor);
				$tipo_dos = gettype($lex_dos[$sec][$clave]);
				if( ($tipo_dos != 'string' && $tipo_dos != 'array') || $tipo_uno != $tipo_dos ){
					
					$arr_error[] = 'Elemento ' . $clave . ' incorrecto de sección ' . $sec . '.';
				}
			}
		}

		$this -> assertTrue( count($arr_error) == 0, "Errores del Castellano sobre Inglés:\n" . implode("\n", $arr_error) ); 
	}

	public function test_comparar_idiomas_es_fr(){

		$lex_uno = Helper::suministra_lexico('es');
		$lex_dos = Helper::suministra_lexico('fr');

		foreach( $lex_uno as $sec => $datos ){

			if( $sec == 'despensa' ){ continue; }

			if( gettype($lex_dos[$sec]) != 'array' ){ $arr_error[] = 'Sección ' . $sec . 'desaparecida.'; }

			foreach( $datos as $clave => $valor ){

				$tipo_uno = gettype($valor);
				$tipo_dos = gettype($lex_dos[$sec][$clave]);

				if( ($tipo_dos != 'string' && $tipo_dos != 'array') || $tipo_uno != $tipo_dos ){
					
					$arr_error[] = 'Elemento ' . $clave . ' incorrecto de sección ' . $sec . '.';
				}
			}
		}
		
		$this -> assertTrue( count($arr_error) == 0, "Errores del Francés:\n" . implode("\n", $arr_error) ); 

		foreach( $lex_dos as $sec => $datos ){

			if( gettype($lex_uno[$sec]) != 'array' ){ $arr_error[] = 'Sección ' . $sec . 'desaparecida.'; }

			foreach( $datos as $clave => $valor ){

				$tipo_uno = gettype($valor);
				$tipo_dos = gettype($lex_dos[$sec][$clave]);
				if( ($tipo_dos != 'string' && $tipo_dos != 'array') || $tipo_uno != $tipo_dos ){
					
					$arr_error[] = 'Elemento ' . $clave . ' incorrecto de sección ' . $sec . '.';
				}
			}
		}

		$this -> assertTrue( count($arr_error) == 0, "Errores del Castellano sobre Francés:\n" . implode("\n", $arr_error) ); 
	}

	public function test_comparar_idiomas_es_it(){

		$lex_uno = Helper::suministra_lexico('es');
		$lex_dos = Helper::suministra_lexico('it');

		foreach( $lex_uno as $sec => $datos ){

			if( $sec == 'despensa' ){ continue; }

			if( gettype($lex_dos[$sec]) != 'array' ){ $arr_error[] = 'Sección ' . $sec . 'desaparecida.'; }

			foreach( $datos as $clave => $valor ){

				$tipo_uno = gettype($valor);
				$tipo_dos = gettype($lex_dos[$sec][$clave]);

				if( ($tipo_dos != 'string' && $tipo_dos != 'array') || $tipo_uno != $tipo_dos ){
					
					$arr_error[] = 'Elemento ' . $clave . ' incorrecto de sección ' . $sec . '.';
				}
			}
		}
		
		$this -> assertTrue( count($arr_error) == 0, "Errores del Italiano:\n" . implode("\n", $arr_error) ); 

		foreach( $lex_dos as $sec => $datos ){

			if( gettype($lex_uno[$sec]) != 'array' ){ $arr_error[] = 'Sección ' . $sec . 'desaparecida.'; }

			foreach( $datos as $clave => $valor ){

				$tipo_uno = gettype($valor);
				$tipo_dos = gettype($lex_dos[$sec][$clave]);
				if( ($tipo_dos != 'string' && $tipo_dos != 'array') || $tipo_uno != $tipo_dos ){
					
					$arr_error[] = 'Elemento ' . $clave . ' incorrecto de sección ' . $sec . '.';
				}
			}
		}

		$this -> assertTrue( count($arr_error) == 0, "Errores del Castellano sobre Italiano:\n" . implode("\n", $arr_error) ); 
	}


	public function PARA_DESPUES_test_comparar_idiomas_es_de(){

		$lex_uno = Helper::suministra_lexico('es');
		$lex_dos = Helper::suministra_lexico('de');

		foreach( $lex_uno as $sec => $datos ){

			if( gettype($lex_dos[$sec]) != 'array' ){

				$this -> fail('Léxico Italiano no tiene sección ' . $sec);
			}

			foreach( $datos as $clave => $valor ){

				$tipo = gettype($lex_dos[$sec][$clave]);
				if( $tipo != 'string' && $tipo != 'array' ){
					
					$this -> fail('Léxico Italiano no tiene ' . $clave . ' de la sección ' . $sec . ': tipo ' . $tipo);
				}
			}
		}

		foreach( $lex_dos as $sec => $datos ){

			if( gettype($lex_uno[$sec]) != 'array' ){

				$this -> fail('Léxico Castellano no tiene sección ' . $sec);
			}

			foreach( $datos as $clave => $valor ){

				if( gettype($lex_uno[$sec][$clave]) != 'string' ){
					
					$this -> fail('Léxico Castellano no tiene ' . $clave . ' de la sección ' . $sec);
				}
			}
		}
	}

	public function test_asignar_alergenos_si(){

		$producto = Helper::suministra_producto_alergenos(self::$raciones, true);

		$res = Tragona::asignar_alergenos($producto['alergenos'], self::$lexico['alergenos']);

		preg_match_all( '/<img.*">/', $res, $alergenos );

		$this -> assertSame(count($producto['alergenos']), count($alergenos[0]), 'Debería tener el mismo número de elementos.' );

		foreach( $alergenos[0] as $alergeno ){

			if( !preg_match('/media\/alergeno/', $alergeno) ){

				$this -> fail('La imagen no tiene la url de alergenos.' );
			}
		}
	}

	public function test_asignar_alergenos_no(){

		$producto = Helper::suministra_producto_alergenos(self::$raciones);

		$res = Tragona::asignar_alergenos($producto['alergenos'], self::$lexico['alergenos']);

		$this -> assertRegExp( '/class="nombre sin_alergeno"/', $res, 'Debería tener la clase "nombre sin_alergeno".' );
	}


	public function test_crear_pasarela_comida(){


		$nombres = self::$lexico['nombre'];
		$cantidad = 5;

		$tostas = Helper::suministra_despensa('tostas');
		$raciones = Helper::suministra_despensa('raciones');
		
		$res = Tragona::crear_pasarela_comida($tostas, $raciones, $nombres);
		$res_limpio = Helper::limpiar_saltos($res);

		preg_match_all( '/(<div data-src="[\w\/\:]+\.jpg">)/', $res_limpio, $enlaces );
		foreach( $enlaces[1] as $i => $enlace ){
			
			if( !preg_match('/media\/imagenes\/tragar\/\w+\.(jpg|jpeg|png|gif)/', $enlace) ){

				$this -> fail('Enlace erroneo: ' . $enlace);
			}
		}

		$this -> assertSame( $cantidad, count($enlaces[1]), 'Debería tener 5 enlaces.' );

		preg_match_all( '/(<div class=\"camera_caption\">[^<]+<\/div>)/', $res_limpio, $titulos );

		$this -> assertSame( count($enlaces[1]), count($titulos[1]), 'Debería tener los mismos títulos que enlaces.' );

		$this -> assertSame( $cantidad, count($titulos[1]), 'Debería tener 5 titulos.' );
	}


	public function test_crear_pasarela_bebida(){

		$titulos = self::$lexico['titulos'];
		$bebidas = self::$lexico['bebida'];
		
		$cervezas = Helper::suministra_despensa('cervezas');
		$vinos    = Helper::suministra_despensa('vinos');
		
		$res = Tragona::crear_pasarela_bebida($cervezas, $vinos, self::$lexico);
		
		preg_match_all( '/(<div style="background\-image: url\(\'[\w\/\:]+\.jpg)/', $res, $imagenes );
		foreach( $imagenes[1] as $i => $enlace ){
			
			if( !preg_match('/media\/imagenes\/empujar\/\w+\.(jpg|jpeg|png|gif)/', $enlace) ){

				$this -> fail('Enlace erroneo: ' . $enlace);
			}
		}

		$this -> assertSame( 4, count($imagenes[1]), 'Debería tener 4 enlaces de imagen de fondo.' );

		preg_match_all( '/title="([^\"]+)"/', $res, $titles );
		foreach( $titles[1] as $i => $enlace ){
			
			if( !preg_match('/[\w\-\(\)\s]+/', $enlace) ){

				$this -> fail('Title erroneo: ' . $enlace);
			}
		}
		$this -> assertSame( count($imagenes[1]), count($titles[1]), 'Debería tener los mismos titles que enlaces.' );

		$this -> assertSame( 4, count($titles[1]), 'Debería tener 4 titles de imagen de fondo.' );

		preg_match_all( '/(<p>[^<]+<\/p>)/', $res, $titulos );

		$this -> assertSame( count($imagenes[1]), count($titulos[1]), 'Debería tener los mismos títulos que enlaces.' );

		$this -> assertSame( 4, count($titulos[1]), 'Debería tener 4 titulos.' );
	}


	public function test_devuelve_carta_actual(){

		$tipo = 'Cervezas';
		$res = Tragona::devuelve_carta_actual($tipo);

		$this -> assertTrue( count($res) > 0, 'Debería tener más de 0 elementos.' );
	}

	public function test_devuelve_carta_actual_ko(){

		$tipo = 'invalido';
		$res = Tragona::devuelve_carta_actual($tipo);

		$this -> assertFalse( $res, 'Debería ser false.' );
	}


	public function DISEÑANDO_test_formatear_cerveza(){

		$res = Tragona::formatear_cerveza( self::$cervezas -> rubia );

		$respuesta = '<a href="//localhost/tragona/media/imagenes/empujar/rubia.jpg" data-lightbox="example-1" data-title="Estrella Levante"><img src="//localhost/tragona/media/imagenes/empujar/minis/rubia.jpg" class="imagen" alt="Estrella Levante" title="Estrella Levante"></a><ul><li>Caña <sub>(1.5&euro;)</sub></li><li>Doble <sub>(2.5&euro;)</sub></li><li>Tercio <sub>(2.5&euro;)</sub></li><li>Mini <sub>(3.5&euro;)</sub></li></ul></div>';

		$this -> assertSame( $respuesta, $res, 'Debería devolver algo.' );
	}


	public function DISEÑANDO_test_formatear_comida_tosta(){

		$res = Tragona::formatear_comida(self::$tostas -> brandada, self::$lexico, true);

		$respuesta = '<a href="//localhost/tragona/media/imagenes/tragar/tosta_brandada.jpg" data-lightbox="tostas" data-title="Tosta de Brandada de bacalao"><img src="//localhost/tragona/media/imagenes/tragar/minis/tosta_brandada.jpg" class="imagen" alt="Tosta de Brandada de bacalao" title="Tosta de Brandada de bacalao"></a><p>Brandada de bacalao <sub>(4,5<sub>&euro;</sub>)</sub><br><span class="ingredientes"><a data-fancybox data-src="//localhost/tragona/php/ingredientes.php?comida=brandada" data-type="iframe" href="javascript:;">Ver los ingredientes</a></span></p><span class="alergeno"><span class="nombre">Alérgenos:</span><img src="//localhost/tragona/media/alergeno/gluten.png" alt="gluten" title="Gluten"><img src="//localhost/tragona/media/alergeno/pescado.png" alt="pescado" title="Pescado"></span></div>';

		$this -> assertSame( $respuesta, $res, 'Debería devolver algo.' );

		preg_match( '/<a href=".*"><\/a>/', $res, $enlace );

		$this -> assertRegExp('/media\/imagenes\/tragar\/tosta_brandada.jpg/', $enlace[0], 'No tiene enlace a la imagen.' );

		$this -> assertRegExp('/media\/imagenes\/tragar\/minis\/tosta_brandada.jpg/', $enlace[0], 'No tiene la fuente de la miniatura.' );

		preg_match( '/<a data\-.*ingredientes<\/a>/', $res, $fancy );

		$this -> assertregExp('/php\/ingredientes\.php\?comida=brandada/', $fancy[0], 'No tiene la url de ingredientes.' );
	}


	public function DISEÑANDO_test_formatear_comida_raciones(){

		$res = Tragona::formatear_comida(self::$raciones -> rusos, self::$lexico);

		$respuesta = implode('', array(
			'<a href="' . BASE_URL . 'media/imagenes/tragar/rusos.jpg" data-lightbox="raciones" data-title="Filetes rusos con salsa de tomate">',
				'<img src="' . BASE_URL . 'media/imagenes/tragar/minis/rusos.jpg" class="imagen" alt="Filetes rusos con salsa de tomate" title="Filetes rusos con salsa de tomate">',
			'</a>',
			'<p>Filetes rusos con salsa de tomate <sub>(8<sub>&euro;</sub>)</sub><br>',
				'<span class="ingredientes">',
					'<a data-fancybox data-src="' . BASE_URL . 'php/ingredientes.php?comida=rusos" data-type="iframe" href="javascript:;">',
						'Ver los ingredientes',
					'</a>',
				'</span>',
			'</p>',
			'<span class="alergeno">',
				'<span class="nombre">Alérgenos:</span>',
				'<img src="' . BASE_URL . 'media/alergeno/huevo.png" alt="huevo" title="Huevo">',
			'</span>',
			'</div>'
		) );

		$this -> assertSame( $respuesta, $res, 'Debería devolver algo.' );

		preg_match( '/<a href=".*"><\/a>/', $res, $enlace );

		$this -> assertRegExp('/media\/imagenes\/tragar\/rusos.jpg/', $enlace[0], 'No tiene enlace a la imagen.' );

		$this -> assertRegExp('/media\/imagenes\/tragar\/minis\/rusos.jpg/', $enlace[0], 'No tiene la fuente de la miniatura.' );

		preg_match( '/<a data\-.*ingredientes<\/a>/', $res, $fancy );

		$this -> assertregExp('/php\/ingredientes\.php\?comida=rusos/', $fancy[0], 'No tiene la url de ingredientes.' );
	}


	public function DISEÑANDO_test_formatear_licor(){

		$res = Tragona::formatear_licor(self::$licores -> hierbas, self::$lexico);

		$respuesta = implode('', array(
			'<a href="' . BASE_URL . 'media/imagenes/empujar/lic_hierbas.jpg" data-lightbox="example-1" data-title="Orujo de hierbas">',
				'<img src="' . BASE_URL . 'media/imagenes/empujar/minis/lic_hierbas.jpg" alt="Orujo de hierbas" title="Orujo de hierbas" class="imagen">',
			'</a>',
			'<p>Orujo de hierbas</p>',
			'<p class="precio">',
				'<sub>(Chupito: <sub>2&euro;</sub>, Copa: <sub>4&euro;</sub>)</sub>',
			'</p>',
			'</div>'
		) );

		$this -> assertSame( $respuesta, $res, 'Debería ser el mismo html.' );
	}


	public function DISEÑANDO_test_formatear_precio_vino(){

		$res = Tragona::formatear_precio(self::$vinos -> zinio);
		$lineas = explode(',',$res);

		$this -> assertSame(2, count($lineas), 'Debería devolver los precios por envase del producto.' );

		foreach( $lineas as $linea ){

			preg_match( '/\s<sub>(.*)&euro;<\/sub>/', $linea, $sub);

			if( $sub[1] === '' ){

				$this -> fail('No hay precio en la linea');
			}
		}
	}


	public function DISEÑANDO_test_formatear_precio_cerveza(){

		$res = tragona::formatear_precio(self::$cervezas -> rubia, self::$lexico['titulos'], 'cerveza');

		$lineas = explode('<li>',$res);
		array_shift($lineas);

		$this -> assertSame(4, count($lineas), 'Debería devolver los precios por envase del producto.' );

		foreach( $lineas as $linea ){

			preg_match( '/<sub>\((.*)\)<\/sub>/', $linea, $sub);

			if( $sub[1] === '' ){

				$this -> fail('No hay precio en la linea');
			}
		}
	}


	public function DISEÑANDO_test_formatear_titulo(){

		$cervezas = Helper::suministra_despensa('cervezas');
		//print_r($cervezas);
		$nombre = 'Cervezas';
		$res = Tragona::formatear_titulo($nombre, self::$lexico['titulos'], $cervezas -> rubia);

		$this -> assertSame( '<legend>Estrella Levante <span class="tipo_cerveza"><sub>(Rubia)</sub></span></legend>', $res, 'Debería mostrar la leyenda de Estrella Levante');

		$nombre = '7 Puntas (Castilla)';
		$res = Tragona::formatear_titulo($nombre, self::$lexico['titulos']);

		$this -> assertSame( '<legend>Tintos</legend>', $res, 'Debería devolver la leyenda de Tintos.' );
	}

	public function DISEÑANDO_test_formatear_titulo_ko(){

		$res = Tragona::formatear_titulo('nombre_erroneo', self::$lexico['titulos']);

		$this -> assertSame( '', $res, 'Debería devolver String Vacio.' );
	}


	public function DISEÑANDO_test_formatear_vino(){

		$vinos = Helper::suministra_despensa('vinos');

		$res = Tragona::formatear_vino($vinos -> zinio, self::$lexico);

		$respuesta = implode('', array(
			'<a href="' . BASE_URL . 'media/imagenes/empujar/zinio.jpg" data-lightbox="example-1" data-title="Zinio (La Rioja)">',
				'<img src="' . BASE_URL . 'media/imagenes/empujar/minis/zinio.jpg" class="imagen" alt="Zinio (La Rioja)" title="Zinio (La Rioja)">',
			'</a>',
			'<p>Zinio (La Rioja)</p>',
			'<p class= "precio">',
				'<sub>(Copa: <sub>1.8&euro;</sub>, botella: <sub>12&euro;</sub>)</sub>',
			'</p>',
			'<span class="descripcion">',
				'<a data-fancybox data-src="' . BASE_URL . 'php/guia.php?vino=zinio" data-type="iframe" href="javascript:;">Ver descripción</a>',
			'</span>',
			'</div>'
		) );

		$this -> assertTrue(strlen($res) > 0, 'Debería ser el mismo html en caracteres.' );
		$this -> assertSame(strlen($respuesta), strlen($res), 'Debería ser el mismo html en caracteres.' );

		$this -> assertEquals($respuesta, $res, 'Debería ser el mismo html.' );

		preg_match('/href=".*\.jpg"/', $res, $href);

		$this -> assertRegExp('/media\/imagenes\/empujar\/zinio\.jpg/', $href[0], 'Debería tener el enlace a la imagen' );

		preg_match('/\ssrc=".*\.jpg"/', $res, $src);

		$this -> assertRegExp('/media\/imagenes\/empujar\/minis\/zinio\.jpg/', $src[0], 'Debería tener la fuente de la imagen' );
		
		preg_match('/data\-src=".*zinio"/', $res, $data);

		$this -> assertRegExp('/php\/guia\.php\?vino=zinio/', $data[0], 'Debería tener la fuente de la imagen' );
	}


	public function ESPERA_test_mostrar_novedad_si(){

		$producto = Helper::suministra_novedad(self::$cervezas, true);

		$res = Tragona::mostrar_novedad($producto);
		
		$div_novedad = '<div class="articulo_novedad"><div class="novedad"><div class="cinta_verde">Novedad</div></div>';

		$this -> assertSame( $div_novedad, $res, 'Debería devolver el div de novedad.' );
	}

	public function ESPERA_test_mostrar_novedad_no(){

		$producto = Helper::suministra_novedad(self::$cervezas);

		$res = Tragona::mostrar_novedad($producto);

		$this -> assertSame( '<div>', $res, 'Debería devolver solo la etiqueta div.' );
	}


	public function test_mostrar_productos_tostas(){

		$carta = Tragona::devuelve_carta_actual('tostas');

		$res = Tragona::mostrar_productos( self::$tostas, self::$lexico );

		$this -> assertRegExp( '/<article class="contenido">/', $res );

		preg_match_all('/(<div class="articulo.*?<\/a><\/div><\/div>)/', $res, $datos);
		
		$this -> assertSame( count($carta), count($datos[1]), 'Debería tener los elementos de la carta.' );

		$base_url = str_replace('/', '\/', BASE_URL);
		$base_api = str_replace('/', '\/', BASE_API);

		foreach( $datos[1] as $i => $prod ){

			preg_match('/data\-id_producto="(\d+)"/', $prod, $arr_id);
			
			$this -> assertGreaterThan( 0, $arr_id[1], 'Debería tener id_producto.' );

			$this -> assertTrue( in_array($arr_id[1], $carta), 'Debería estar en la carta.' );

			$ind = array_search($arr_id[1], $carta);
			unset($carta[$ind]);
			
			$reg_data_src = '/data\-src="' . $base_api . 'despensa\.php\?accion=ingredientes&solicitud=/';
			$this -> assertRegexp($reg_data_src, $prod, 'Debería tener url de fancybox.' );

			$reg_img_src = '/img src="' . $base_url . 'media\/imagenes\/tragar/';
			$this -> assertRegexp($reg_img_src, $prod, 'Debería tener url de imagen.' );

			$reg_img_title = '/title="Tosta de [\w\s]+/';
			$this -> assertRegexp('/title="Tosta de [\w\s]+/', $prod, 'Debería tener title de imagen de tosta.' );
		}

		$this -> assertTrue( count($carta) == 0, 'No deberían quedar tostas sin mostrar de la carta.' );
	}

	public function test_mostrar_productos_raciones(){

		$carta = Tragona::devuelve_carta_actual('raciones');

		$res = Tragona::mostrar_productos( self::$raciones, self::$lexico );

		$this -> assertRegExp( '/<article class="contenido">/', $res );

		preg_match_all('/(<div class="articulo.*?<\/a><\/div><\/div>)/', $res, $datos);

		$base_url = str_replace('/', '\/', BASE_URL);
		$base_api = str_replace('/', '\/', BASE_API);

		foreach( $datos[1] as $i => $prod ){
		
			preg_match('/data\-id_producto="(\d+)"/', $prod, $arr_id);

			$this -> assertGreaterThan( 0, $arr_id[1], 'Debería tener id_producto.' );

			$this -> assertTrue( in_array($arr_id[1], $carta), 'Debería estar en la carta.' );

			$ind = array_search($arr_id[1], $carta);
			unset($carta[$ind]);

			$reg_data_src = '/data\-src="' . $base_api . 'despensa\.php\?accion=ingredientes&solicitud=/';
			$this -> assertRegexp($reg_data_src, $prod, 'Debería tener url de fancybox.' );

			$reg_img_src = '/img src="' . $base_url . 'media\/imagenes\/tragar/';
			$this -> assertRegexp($reg_img_src, $prod, 'Debería tener url de imagen.' );
			
			$this -> assertNotRegexp('/title="Tosta de [\w\s]+/', $prod, 'No debería tener title de imagen de tosta.' );
		}

		$this -> assertTrue( count($carta) == 0, 'No deberían quedar raciones sin mostrar de la carta.' );
	}

}

?>

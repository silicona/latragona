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


	public function test_formatear_cerveza(){

		$res = Tragona::formatear_cerveza( self::$cervezas -> rubia );

		$respuesta = '<a href="//localhost/tragona/media/imagenes/empujar/rubia.jpg" data-lightbox="example-1" data-title="Estrella Levante"><img src="//localhost/tragona/media/imagenes/empujar/minis/rubia.jpg" class="imagen" alt="Estrella Levante" title="Estrella Levante"></a><ul><li>Caña <sub>(1.5&euro;)</sub></li><li>Doble <sub>(2.5&euro;)</sub></li><li>Tercio <sub>(2.5&euro;)</sub></li><li>Mini <sub>(3.5&euro;)</sub></li></ul></div>';

		$this -> assertSame( $respuesta, $res, 'Debería devolver algo.' );
	}


	public function test_formatear_comida_tosta(){

		$res = Tragona::formatear_comida(self::$tostas -> brandada, self::$lexico, true);

		$respuesta = '<a href="//localhost/tragona/media/imagenes/tragar/tosta_brandada.jpg" data-lightbox="tostas" data-title="Tosta de Brandada de bacalao"><img src="//localhost/tragona/media/imagenes/tragar/minis/tosta_brandada.jpg" class="imagen" alt="Tosta de Brandada de bacalao" title="Tosta de Brandada de bacalao"></a><p>Brandada de bacalao <sub>(4,5<sub>&euro;</sub>)</sub><br><span class="ingredientes"><a data-fancybox data-src="//localhost/tragona/php/ingredientes.php?comida=brandada" data-type="iframe" href="javascript:;">Ver los ingredientes</a></span></p><span class="alergeno"><span class="nombre">Alérgenos:</span><img src="//localhost/tragona/media/alergeno/gluten.png" alt="gluten" title="Gluten"><img src="//localhost/tragona/media/alergeno/pescado.png" alt="pescado" title="Pescado"></span></div>';

		$this -> assertSame( $respuesta, $res, 'Debería devolver algo.' );

		preg_match( '/<a href=".*"><\/a>/', $res, $enlace );

		$this -> assertRegExp('/media\/imagenes\/tragar\/tosta_brandada.jpg/', $enlace[0], 'No tiene enlace a la imagen.' );

		$this -> assertRegExp('/media\/imagenes\/tragar\/minis\/tosta_brandada.jpg/', $enlace[0], 'No tiene la fuente de la miniatura.' );

		preg_match( '/<a data\-.*ingredientes<\/a>/', $res, $fancy );

		$this -> assertregExp('/php\/ingredientes\.php\?comida=brandada/', $fancy[0], 'No tiene la url de ingredientes.' );
	}


	public function test_formatear_comida_raciones(){

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


	public function test_formatear_licor(){

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


	public function test_formatear_precio_vino(){

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


	public function test_formatear_precio_cerveza(){

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


	public function test_formatear_titulo(){

		$cervezas = Helper::suministra_despensa('cervezas');
		//print_r($cervezas);
		$nombre = 'Cervezas';
		$res = Tragona::formatear_titulo($nombre, self::$lexico['titulos'], $cervezas -> rubia);

		$this -> assertSame( '<legend>Estrella Levante <span class="tipo_cerveza"><sub>(Rubia)</sub></span></legend>', $res, 'Debería mostrar la leyenda de Estrella Levante');

		$nombre = '7 Puntas (Castilla)';
		$res = Tragona::formatear_titulo($nombre, self::$lexico['titulos']);

		$this -> assertSame( '<legend>Tintos</legend>', $res, 'Debería devolver la leyenda de Tintos.' );
	}


	public function test_formatear_titulo_ko(){

		$res = Tragona::formatear_titulo('nombre_erroneo', self::$lexico['titulos']);

		$this -> assertSame( '', $res, 'Debería devolver String Vacio.' );
	}


	public function test_formatear_vino(){

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


	public function test_mostrar_novedad_si(){

		$producto = Helper::suministra_novedad(self::$cervezas, true);

		$res = Tragona::mostrar_novedad($producto);
		
		$div_novedad = '<div class="articulo_novedad"><div class="novedad"><div class="cinta_verde">Novedad</div></div>';

		$this -> assertSame( $div_novedad, $res, 'Debería devolver el div de novedad.' );
	}


	public function test_mostrar_novedad_no(){

		$producto = Helper::suministra_novedad(self::$cervezas);

		$res = Tragona::mostrar_novedad($producto);

		$this -> assertSame( '<div>', $res, 'Debería devolver solo la etiqueta div.' );
	}


	public function test_mostrar_productos_tostas(){

		$res = Tragona::mostrar_productos( self::$tostas, self::$lexico );
		//print_r($res);
		$this -> assertRegExp( '/<article class="contenido">/', $res );
	}


	public function test_mostrar_productos_raciones(){

	}

}

?>

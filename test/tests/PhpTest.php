<?php

//require_once 'helper.php';

class PhpTest extends \PHPUnit\Framework\TestCase {

	public static $conexion;
	public static $link;

	public static function setUpBeforeClass(){

		//self::$conexion = Helper::establecer_conexion(DB_HOST);
		//self::$link = dblink();
        //self::assertTrue( DB_HOST == 'localhost' || DB_HOST == '127.0.0.1', 'DB_HOST NO apunta a local. ' . DB_HOST );
	}

	public static function tearDownAfterClass(){

		//self::$link = self::$conexion = NULL;
	}

	public function setUp(){

		//$this -> assertTrue( Helper::transaction_test(self::$conexion), 'La transacción de Test no se ha abierto' );
	}

	public function tearDown(){

		//$this -> assertTrue( Helper::transaction_test_fin(self::$conexion), 'No se ha realizado el rollback de Test.' );

		//$this -> assertTrue( Helper::borrar_datos_test_guardado($this), 'Los datos del test no se han borrado de la bbdd.' );
	}


	public function test_preg_match(){

		$url = 'https://www.idealista.com/login-email.htm?adId=85799834&lang=es&uri=index.htm&ident=fDFPmM0oyvStBg5YkQEMMC7l9kLDX8%2BDMmZSZV5PAeLfjoihZY%2FN4yGyFz7sdcii72l3b7jILCWR%0A455F7PwhDSnLrqliuhR%2B&xts=582065&xtor=EPR-201-[express_alerts_20190607]-20190607-[inmueble_28_77.000]-[]-20190607103902';

		preg_match( '/(adId=\d+&)/', $url, $adId );

		$this -> assertRegExp('/^adId=\d+&$/', $adId[1], 'Debería tener la adId de la url.' );

		/*
		$res = parse_url($url);
		parse_str($res['query'], $arr_res);

		print_r($arr_res['adId']);*/

		//print_r($res);
	}

	public function test_preg_match_lazy(){

		$str = '<article class="contenido"><legend class="movil">Tostas</legend><h4 id="aviso_pan" class="aviso_alergeno">¡¡Tenemos pan sin gluten. Pídelo!!</h4><div class="articulo"><div class="interior"><a class="img_fancybox" data-fancybox data-src="//localhost/latragona/php/api/despensa.php?accion=ingredientes&solicitud=tosta_brandada" data-type="iframe" href="javascript:;"><div class="div_imagen"><img src="//localhost/latragona/media/imagenes/tragar/minis/tosta_brandada.jpg" class="imagen" alt="Tosta de Brandada de bacalao" title="Tosta de Brandada de bacalao"></div><p><span>Brandada de bacalao</span></p></a></div></div><div class="articulo"><div class="interior"><a class="img_fancybox" data-fancybox data-src="//localhost/latragona/php/api/despensa.php?accion=ingredientes&solicitud=tosta_cecina" data-type="iframe" href="javascript:;"><div class="div_imagen"><img src="//localhost/latragona/media/imagenes/tragar/minis/tosta_cecina.jpg" class="imagen" alt="Tosta de Cecina de Léon" title="Tosta de Cecina de Léon"></div><p><span>Cecina de Léon</span></p></a></div></div><div class="articulo"><div class="interior"><a class="img_fancybox" data-fancybox data-src="//localhost/latragona/php/api/despensa.php?accion=ingredientes&solicitud=tosta_hummus" data-type="iframe" href="javascript:;"><div class="div_imagen"><img src="//localhost/latragona/media/imagenes/tragar/minis/tosta_hummus.jpg" class="imagen" alt="Tosta de Hummus" title="Tosta de Hummus"></div><p><span>Hummus</span></p></a></div></div><div class="articulo"><div class="interior"><a class="img_fancybox" data-fancybox data-src="//localhost/latragona/php/api/despensa.php?accion=ingredientes&solicitud=tosta_roastbeef" data-type="iframe" href="javascript:;"><div class="div_imagen"><img src="//localhost/latragona/media/imagenes/tragar/minis/tosta_roastbeef.jpg" class="imagen" alt="Tosta de Roastbeef" title="Tosta de Roastbeef"></div><p><span>Roastbeef</span></p></a></div></div><div class="articulo"><div class="interior"><a class="img_fancybox" data-fancybox data-src="//localhost/latragona/php/api/despensa.php?accion=ingredientes&solicitud=tosta_salmon" data-type="iframe" href="javascript:;"><div class="div_imagen"><img src="//localhost/latragona/media/imagenes/tragar/minis/tosta_salmon.jpg" class="imagen" alt="Tosta de Salmón" title="Tosta de Salmón"></div><p><span>Salmón</span></p></a></div></div><div class="articulo"><div class="interior"><a class="img_fancybox" data-fancybox data-src="//localhost/latragona/php/api/despensa.php?accion=ingredientes&solicitud=tosta_ventresca" data-type="iframe" href="javascript:;"><div class="div_imagen"><img src="//localhost/latragona/media/imagenes/tragar/minis/tosta_ventresca.jpg" class="imagen" alt="Tosta de Ventresca de atún con pimi. de piquillo" title="Tosta de Ventresca de atún con pimi. de piquillo"></div><p><span>Ventresca de atún con pimi. de piquillo</span></p></a></div></div></article>';

		preg_match_all( '/(<div class="articulo.*?<\/div><\/div>)/', $str, $arr_articulos );

		$this -> assertSame( 6, count($arr_articulos[1]), 'Debería tener 5 elementos.' );
		//print_r($arr_articulos);
	}

	public function test_preg_match_lookahead(){

		$this -> markTestIncomplete();

		// Coincidencia - x seguido de y

		$str = '<article class="contenido"><legend class="movil">Tostas</legend><h4 id="aviso_pan" class="aviso_alergeno">¡¡Tenemos pan sin gluten. Pídelo!!</h4><div class="articulo"><div class="interior"><a class="img_fancybox" data-fancybox data-src="//localhost/latragona/php/api/despensa.php?accion=ingredientes&solicitud=tosta_brandada" data-type="iframe" href="javascript:;"><div class="div_imagen"><img src="//localhost/latragona/media/imagenes/tragar/minis/tosta_brandada.jpg" class="imagen" alt="Tosta de Brandada de bacalao" title="Tosta de Brandada de bacalao"></div><p><span>Brandada de bacalao</span></p></a></div></div><div class="articulo"><div class="interior"><a class="img_fancybox" data-fancybox data-src="//localhost/latragona/php/api/despensa.php?accion=ingredientes&solicitud=tosta_cecina" data-type="iframe" href="javascript:;"><div class="div_imagen"><img src="//localhost/latragona/media/imagenes/tragar/minis/tosta_cecina.jpg" class="imagen" alt="Tosta de Cecina de Léon" title="Tosta de Cecina de Léon"></div><p><span>Cecina de Léon</span></p></a></div></div><div class="articulo"><div class="interior"><a class="img_fancybox" data-fancybox data-src="//localhost/latragona/php/api/despensa.php?accion=ingredientes&solicitud=tosta_hummus" data-type="iframe" href="javascript:;"><div class="div_imagen"><img src="//localhost/latragona/media/imagenes/tragar/minis/tosta_hummus.jpg" class="imagen" alt="Tosta de Hummus" title="Tosta de Hummus"></div><p><span>Hummus</span></p></a></div></div><div class="articulo"><div class="interior"><a class="img_fancybox" data-fancybox data-src="//localhost/latragona/php/api/despensa.php?accion=ingredientes&solicitud=tosta_roastbeef" data-type="iframe" href="javascript:;"><div class="div_imagen"><img src="//localhost/latragona/media/imagenes/tragar/minis/tosta_roastbeef.jpg" class="imagen" alt="Tosta de Roastbeef" title="Tosta de Roastbeef"></div><p><span>Roastbeef</span></p></a></div></div><div class="articulo"><div class="interior"><a class="img_fancybox" data-fancybox data-src="//localhost/latragona/php/api/despensa.php?accion=ingredientes&solicitud=tosta_salmon" data-type="iframe" href="javascript:;"><div class="div_imagen"><img src="//localhost/latragona/media/imagenes/tragar/minis/tosta_salmon.jpg" class="imagen" alt="Tosta de Salmón" title="Tosta de Salmón"></div><p><span>Salmón</span></p></a></div></div><div class="articulo"><div class="interior"><a class="img_fancybox" data-fancybox data-src="//localhost/latragona/php/api/despensa.php?accion=ingredientes&solicitud=tosta_ventresca" data-type="iframe" href="javascript:;"><div class="div_imagen"><img src="//localhost/latragona/media/imagenes/tragar/minis/tosta_ventresca.jpg" class="imagen" alt="Tosta de Ventresca de atún con pimi. de piquillo" title="Tosta de Ventresca de atún con pimi. de piquillo"></div><p><span>Ventresca de atún con pimi. de piquillo</span></p></a></div></div></article>';
		
		//preg_match_all( '/(<div class="articulo.*<\/div><\/div>)/', $str, $arr_articulos );
		//preg_match( '/((?:<div class="articulo)[^\2]+<\/div><\/div>)/', $str, $arr_articulos );
		/*preg_match( '/(<div class="articulo.*<\/div><\/div>)(?><div class="articulo|<\/article)/', $str, $arr_articulos );*/
		//preg_match( '/(<div class="articulo.*?<\/div><\/div)/', $str, $arr_articulos );

		preg_match_all( '/(<div class="articulo.*?<\/div><\/div>)/', $str, $arr_articulos );
		//print_r($arr_articulos);
		//preg_match_all( '/((?<=<div class="articulo")<div class="articulo.*<\/div><\/div>)/', $str, $arr_articulos );
		//preg_match_all( '/(<div class="articulo.*<\/div><\/div>(?))/', $arr_articulos[1], $art );
		# preg_match_all( '/(<div class="articulo.*<\/div><\/div>)/', $arr_articulos[1], $art );

		//print_r($art);

		//$this -> assertRegExp('/^adId=\d+&$/', $adId[1], 'Debería tener la adId de la url.' );

		/*
		$res = parse_url($url);
		parse_str($res['query'], $arr_res);

		print_r($arr_res['adId']);*/

		//print_r($res);
	}














}

?>
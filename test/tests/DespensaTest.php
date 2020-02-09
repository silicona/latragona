<?php

require_once 'helper.php';

class ApiDespensaTest extends \PHPUnit\Framework\TestCase {

	public static $url;

	public static function setUpBeforeClass(){

		self::$url = BASE_URL . 'php/api/despensa.php';
	}

	public static function tearDownBeforeClass(){}
	
	public function setUp(){}

	public function tearDown(){}


	public function test_accion_login(){

		$params = array(
			'accion' => 'check_login',
			'login' => 'despensafeliz',
			'password' => 'familiatragona'
		);

		$res = json_decode( Helper::devuelve_json_post(self::$url, $params) );

		$this -> assertNull( $res -> error, 'Debería no tener error.' );

		$this -> assertSame( 'ok', $res -> status, 'Debería tener status OK.' );

		$this -> assertRegExp( '/^<section id="despensa"><article class="contenido">/', $res -> html, 'Debería ser el html de la despensa.' );
	}

	public function test_accion_login_ko(){

		$params = array(
			'accion' => 'check_login',
			'login' => 'invalido',
			'password' => 'familiatragona'
		);

		$res = json_decode( Helper::devuelve_json_post(self::$url, $params) );

		$this -> assertSame( 'Lo siento, tu llave no abre esta puerta.', $res -> error, 'Debería tener error.' );

		$this -> assertSame( 'ko', $res -> status, 'Debería tener status KO.' );
	}


	public function test_accion_ingredientes(){

		$params = array(
			'accion' => 'ingredientes',
			'solicitud' => 'tosta_brandada'
		);

		$res = Helper::devuelve_json_post(self::$url, $params);

		$this -> assertRegExp( '/^<!DOCTYPE html>/', $res, 'Debería ser una página html.' );

		$this -> assertRegExp( '/<title>Ingredientes de la Tragona<\/title>/', $res, 'Debería ser el html del modal de Ingredientes' );
	}

	public function test_accion_ingredientes_ko(){

		$params = array(
			'accion' => 'ingredientes',
			'solicitud' => 'invalido'
		);

		$res = Helper::devuelve_json_post(self::$url, $params);

		$this -> assertRegExp( '/^<h3>Error de datos<\/h3>$/', $res, 'Debería tener error de datos.' );
	}


	public function test_accion_vino(){

		$params = array(
			'accion' => 'vino',
			'solicitud' => 'puntas'
		);

		$res = Helper::devuelve_json_post(self::$url, $params);

		$this -> assertRegExp( '/^<!DOCTYPE html>/', $res, 'Debería ser una página html.' );

		$this -> assertRegExp( '/<title>Bebidas de la Tragona<\/title>/', $res, 'Debería ser el html del modal de Bebidas' );
	}

	public function test_accion_vino_ko(){

		$params = array(
			'accion' => 'vino',
			'solicitud' => 'invalido'
		);

		$res = Helper::devuelve_json_post(self::$url, $params);

		$this -> assertRegExp( '/^<h3>Error de datos<\/h3>$/', $res, 'Debería tener error de datos.' );
	}

}

?>
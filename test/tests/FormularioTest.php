<?php

require_once 'helper.php';

class ApiFormularioTest extends \PHPUnit\Framework\TestCase {

	public static $lexico;
	public static $url;

	public static function setUpBeforeClass(){

		self::$lexico = Helper::suministra_lexico('es');

		self::$url = BASE_URL . 'php/api/formulario.php';
	}

	public static function tearDownBeforeClass(){}
	
	public function setUp(){}

	public function tearDown(){}


	public function test_accion_login(){

		$params = array(
			'accion' => 'check_login',
			'usuario' => 'despensafeliz',
			'password' => 'familiatragona'
		);

		$res = json_decode( Helper::devuelve_json_post(self::$url, $params) );

		$this -> assertNull( $res -> error, 'Debería no tener error.' );

		$this -> assertSame( 'ok', $res -> status, 'Debería tener status OK.' );

		$this -> assertRegExp( '/^<section id="catalogo">/', $res -> html, 'Debería ser el html de la despensa.' );
	}

	public function test_accion_login_ko(){

		$params = array(
			'accion' => 'check_login',
			'usuario' => 'invalido',
			'password' => 'familiatragona'
		);

		$res = json_decode( Helper::devuelve_json_post(self::$url, $params) );

		$this -> assertSame( self::$lexico['form']['acceso_ko'], $res -> error, 'Debería tener error de acceso.' );

		$this -> assertSame( 'ko', $res -> status, 'Debería tener status KO.' );
	}

	public function test_accion_login_ko_idioma_invalido(){

		$params = array(
			'accion'   => 'check_login',
			'idioma'   => 'invalido',
			'usuario'  => 'invalido',
			'password' => 'familiatragona'
		);

		$res = json_decode( Helper::devuelve_json_post(self::$url, $params) );

		$this -> assertSame( self::$lexico['form']['acceso_ko'], $res -> error, 'Debería tener error de acceso en castellano.' );

		$this -> assertSame( 'ko', $res -> status, 'Debería tener status KO.' );
	}


	public function test_accion_contacto_desde_tragar(){

		$params = array(
			'accion'	=> 'contacto',
			'nombre'	=> "Nombre de test",
			'tipo'		=> 'Reserva en La Tragona',
			'mensaje'	=> "mensaje",
			'idioma'	=> 'es',
			'telefono'	=> "918765432",
			'email'		=> "",
		);

		$res = json_decode( Helper::devuelve_json_post(self::$url, $params) );

		$this -> assertSame( 'ok', $res -> status, 'Debería tener status OK.' );

		$this -> assertSame( self::$lexico['form']['reserva_ok'], $res -> mensaje, 'Debería tener mensaje de Reserva OK' );
	}

	public function test_accion_contacto_desde_contacto(){

		$params = array(
			'accion'	=> 'contacto',
			'nombre'	=> "Nombre de test",
			'tipo'		=> 'Comentarios para La Tragona',
			'mensaje'	=> "Mensaje de test",
			'idioma'	=> 'es',
			'telefono'	=> "",
			'email'		=> "email_test@dominio.com",
		);

		$res = json_decode( Helper::devuelve_json_post(self::$url, $params) );

		$this -> assertSame( 'ok', $res -> status, 'Debería tener status OK.' );

		$this -> assertSame( self::$lexico['form']['comentario_ok'], $res -> mensaje, 'Debería tener mensaje de Comentario OK' );
	}

	public function test_accion_contacto_ko_nombre(){

		$params = array(
			'accion'	=> 'contacto',
			'nombre'	=> "",
			'tipo'		=> 'Comentarios para La Tragona',
			'mensaje'	=> "Mensaje de test",
			'idioma'	=> 'es',
			'telefono'	=> "",
			'email'		=> "email_test@dominio.com",
		);

		$res = json_decode( Helper::devuelve_json_post(self::$url, $params) );

		$this -> assertSame( 'ko', $res -> status, 'Debería tener status OK.' );

		$this -> assertSame( self::$lexico['form']['error_contacto'], $res -> error, 'Debería tener error de contacto' );
	}

	public function test_accion_contacto_ko_telefono_email(){

		$params = array(
			'accion'	=> 'contacto',
			'nombre'	=> "Nombre de test",
			'tipo'		=> 'Comentarios para La Tragona',
			'mensaje'	=> "Mensaje de test",
			'idioma'	=> 'es',
			'telefono'	=> "",
			'email'		=> "",
		);

		$res = json_decode( Helper::devuelve_json_post(self::$url, $params) );

		$this -> assertSame( 'ko', $res -> status, 'Debería tener status OK.' );

		$this -> assertSame( self::$lexico['form']['error_contacto'], $res -> error, 'Debería tener error de contacto' );
	}

}

?>
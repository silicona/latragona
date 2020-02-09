<?php
/*

// No puede incluirse en la testsuite general por carga previa de Spyc

require '../php/config.php';

class ConfigTest extends \PHPUnit\Framework\TestCase {

	public static function setUpBeforeClass(){}

	public static function tearDownBeforeClass(){}
	
	public function setUp(){}

	public function tearDown(){}

	public function test_variables(){

		$this -> assertSame( 'http://localhost', INM_DOMINIO, 'Debería de tener INM_DOMINIO correcto' );

		$this -> assertSame( 'latragona/', INM_CARPETA, 'Debería de tener INM_CARPETA correcto' );

		$this -> assertSame( 'http://localhost/latragona/', $GLOBALS['base_url'], 'Debería tener base_url.' );

		$this -> assertSame( '/latragona/', $GLOBALS['base_file'], 'Debería tener base_file parcial por $_SERVER["DOCUMENT_ROOT"].' );

		$this -> assertSame( 'index', $GLOBALS['seccion'], 'Debería ser index por defecto.' );

		$this -> assertTrue( strlen($GLOBALS['lexico']['alergenos']['altramuz']) > 0, 'Debería tener léxico con el subarray alergenos con contenido.' );
	}

	public function test_dependencias(){

		$lexico = Spyc::YAMLLoad(BASE_FILE . 'php/idiomas/lexico_es.yml');

		$this -> assertTrue( strlen($lexico['alergenos']['altramuz']) > 0, 'Debería importar un array con el subarray alergenos con contenido.' );

		$this -> assertTrue(function_exists('anadir_a_array'), 'Debería existir form_boton de Funciones.' );

		$this -> assertTrue(function_exists('form_boton'), 'Debería existir form_boton de Formularios.' );
		
		$cervezas = new Cervezas();

		$this -> assertTrue( strlen($cervezas -> rubia['id']) > 0, 'Debería importar la clase Cervezas con rubia con contenido.' );
	}
}

*/

?>
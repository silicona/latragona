<?php

require_once 'helper.php';

// Manual PHP - filtros : http://php.net/manual/es/filter.filters.php

class FuncionesTest extends \PHPUnit\Framework\TestCase {

	public static function setUpBeforeClass(){}

	public static function tearDownAfterClass(){}

	public function setUp(){}

	public function tearDown(){}


	public function test_array_a_string(){

		$arr = array(
			'primero' => 'uno',
			'segundo' => 'dos',
			'tercero'
		);

		$str_res = 'primero="uno" segundo="dos" tercero';

		$this -> assertSame( $str_res, array_a_string($arr), 'Debería convertir el array en atributos html.' );
	}


	public function test_eliminar_de_array(){

		$arr = array('1','2','3','4');

		$this -> assertSame( array('1','2','4'), eliminar_de_array($arr, '3'), 'Debería eliminar del array el 3.' );

		$this -> assertSame( array('1','2','4'), eliminar_de_array($arr, '3'), 'No debería eliminar del array si no está.' );
	}

}

?>
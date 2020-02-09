<?php

require_once 'helper.php';

// Manual PHP - filtros : http://php.net/manual/es/filter.filters.php

class FormulariosTest extends \PHPUnit\Framework\TestCase {

	public static function setUpBeforeClass(){}

	public static function tearDownAfterClass(){}

	public function setUp(){}

	public function tearDown(){}


	public function test_limpia_array(){

		$arr = array('id' => 1, 'nombre' => 'Becario&nbsp;en pruebas');
		$this -> assertSame( array('id' => 1, 'nombre' => 'Becario en pruebas'), limpia_array($arr), 'La funcion debería limpiar el &nbsp;' );

		$arr = array('xx' => '<script>alert("jajaja")</script>');
		$res = limpia_array($arr);
		$this -> assertSame('&#60;script&#62;alert(&#39;jajaja&#39;)&#60;/script&#62;', $res['xx'], 'Debería convertir los simbolos en Ascii.' );

		$arr = array('xx' => array('yy' => '12345'));
		$res = limpia_array($arr);
		$this -> assertSame('', $res['xx'], 'Debería convertir el subarray en String vacio.');

		$arr = array('xx' => undefined);
		$res = limpia_array($arr);
		$this -> assertSame('', $res['xx'], 'Debería convertir el elemento undefined en String vacio.');

		$arr = array('xx' => 'undefined');
		$res = limpia_array($arr);
		$this -> assertSame('', $res['xx'], 'Debería convertir el string undefined en String vacio.');

		$arr = array('xx' => null);
		$res = limpia_array($arr);
		$this -> assertSame('', $res['xx'], 'Debería convertir null en String vacio.');
	}


	public function test_limpia_email(){

		$email = 'mi(/)Email@dominio.com';

		$this -> assertSame( limpia_email($email), 'miEmail@dominio.com', 'Debería limpiar el email.' );
		/*
		filter_var($email, FILTER_SANITIZE_EMAIL);
		return $email;
		*/
	}


	public function test_limpia_nombre_archivo(){
		
		$nombre = 's__t#r i\'"ng&t/e?¿!¡()[]{}`^+*@=%sñÑt';

		$this -> assertSame( 's_t-r-ingandt-esnyNyt', limpia_nombre_archivo($nombre), 'Debería eliminar simbolos y convertir algunos en guión bajo o medio.');

		$nombre = 'ácÉntós_élÍmínÁdÓs_ú_qÚe';

		$this -> assertSame( limpia_nombre_archivo($nombre), 'acEntos_elIminAdOs_u_qUe', 'Debería eliminar los acentos graves de mayúsculas y minúsculas.');
	}


	public function test_limpia_text(){
		
		$string = "string&nbsp;\"test\"  o\nque<>";

		$this -> assertSame( 'string &#39;test&#39; o que&#60;&#62;', limpia_text($string), 'Debería limpiar el string de espacios dobles y comillas.');

		$string = "<script>&id=22 Esto&nbsp;es  un\t\"texto\"\n</script>";

		$this -> assertSame( "&#60;script&#62;&#38;id=22 Esto es un &#39;texto&#39; &#60;/script&#62;", limpia_text($string), 'El resultado debería haber escapado los caracteres HTML' );
	}


	public function test_limpia_url(){

		// Elimina todos los caracteres excepto letras, dígitos y $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
		$url = 'https://go¢∞¬÷“”≠´ogle.com';

		$this -> assertSame( limpia_url($url), 'https://google.com', 'Debería limpiar la url' );
		/*
		filter_var($url, FILTER_SANITIZE_URL);
		return $url;
		*/
	}


	public function test_limpia_varchar(){

		$string = '<script><b>Este es un texto</b></script>';
		$this -> assertSame( 'Este es un texto', limpia_varchar($string), 'La funcion no deberia dejar etiquetas HTML' );

		$str = 'Calle de test, 10';
		$this -> assertSame( 'Calle de test, 10', limpia_varchar($str), 'La funcion no deberia dejar etiquetas HTML' );

		$str = '"Calle de test, 10"';
		$this -> assertSame( '&#34;Calle de test, 10&#34;', limpia_varchar($str), 'La funcion no deberia dejar comillas dobles sin escapar.' );
	}


	public function test_limpia_video_youtube(){
		
		// BuenaVistaSocialClub
		$url = 'http://www.youtube.com/watch?v=JNYOVEXJBBM';
		$this -> assertSame( limpia_video_youtube($url), 'JNYOVEXJBBM', 'Debería devolver la id del video con url.' );

		// Lista Richard Cheese
		$url_lista = 'https://www.youtube.com/watch?v=O4irXQhgMqg&list=RDTSpo8M2A1tE&index=27';
		$this -> assertSame( limpia_video_youtube($url_lista), 'O4irXQhgMqg', 'Debería devolver la id del video con url de lista de reproducción.' );

		// BuenaVistaSocialClub
		$url_corta = 'https://youtu.be/JNYOVEXJBBM';
		$this -> assertSame( limpia_video_youtube($url_corta), 'JNYOVEXJBBM', 'Debería devolver la id del video con url corta.' );

		// BuenaVistaSocialClub
		$embed = '<iframe width="420" height="315" src="http://www.youtube.com/embed/JNYOVEXJBBM" frameborder="0" allowfullscreen></iframe>';
		$this -> assertSame( limpia_video_youtube($embed), 'JNYOVEXJBBM', 'Debería devolver la id del video con video embebido.' );

		// Iggy Pop
		$url_segura = 'https://www.youtube.com/watch?v=hLhN__oEHaw';
		$this -> assertSame( 'hLhN_oEHaw', limpia_video_youtube($url_segura), 'Deberia devolver la id del video.' );
	}


	public function test_valida_email(){

		$email = 'miEmail@dominio.com';

		$this -> assertTrue( valida_email($email), 'Debería ser true.');
	}


	public function test_valida_url(){

		$url = 'https://google.com';

		$this -> assertTrue( valida_url($url), 'Debería devolver true.' );
	}


	public function test_valida_ip(){

		$ip = '30.2.3.10';

		$this -> assertTrue( valida_ip($ip), 'Debería ser True.' );
	}

}

?>

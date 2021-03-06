<?php

if( preg_match( '/var\/www\/html/', __FILE__ ) ){

	define('INM_DOMINIO', 'http://localhost');
	define('INM_CARPETA', 'tragona/');

	define('INM_ENTORNO', 'pruebas');

} elseif( preg_match( '/xamppfiles\/htdocs/', __FILE__) ){

	define('INM_DOMINIO', 'http://localhost');
	define('INM_CARPETA', 'latragona/');

	define('INM_ENTORNO', 'pruebas');

} elseif( preg_match( '/latragon\/public_html/', __FILE__ ) ){

	define('INM_DOMINIO', 'https://latragona.com');
	define('INM_CARPETA', '');

	define('INM_ENTORNO', 'produ');
}

$base_url = INM_DOMINIO . '/' . INM_CARPETA;
	
$base_file = $_SERVER['DOCUMENT_ROOT'] . '/' . INM_CARPETA;

define( 'BASE_FILE', $base_file );
define( 'BASE_URL', $base_url );
define( 'BASE_API', $base_url . 'php/api/' );

define( 'BASE_CARTA', BASE_URL . 'php/lib/carta.txt' );

define( 'ADMIN_HASH', '$2fr5)unjck' );

require_once BASE_FILE . 'php/lib/spyc/spyc.php';
require_once BASE_FILE . 'php/lib/funciones.php';
require_once BASE_FILE . 'php/lib/formularios.php';
require_once BASE_FILE . 'php/lib/despensa.php';
require_once BASE_FILE . 'php/tragona.php';

if( isset($_GET['id']) ){

	preg_match( '/\A\w{2}\z/', $_GET['id'], $idioma);

} else {

	$idioma[] = 'es';
}

$seccion = isset($_GET['seccion']) ? limpia_varchar($_GET['seccion']) : 'index';

$lexico = Spyc::YAMLLoad( BASE_FILE . 'php/idiomas/lexico_' .  $idioma[0] . '.yml' );
//$lexico = Spyc::YAMLLoad( 'php/idiomas/lexico_' .  $idioma[0] . '.yml' );

// $idioma[0] = 'es' se convierte en '' en head_basico.php

//preg_match( '/(?:\w{2}\/)?(\w+)/', $_SERVER['REQUEST_URI'], $slug);
$arr_url = explode( '/', $_SERVER['REQUEST_URI'] );
$pagina = array_pop($arr_url);

$pagina = strlen($pagina) < 3 ? '' : $pagina;

?>
<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
require_once 'lib/spyc/spyc.php';
require_once 'lib/funciones.php';
require_once 'lib/formularios.php';
require_once 'lib/despensa.php';
require_once 'tragona.php';


if( isset($_GET['id']) ){

	preg_match( '/\A\w{2}\z/', $_GET['id'], $idioma);

} else {

	$idioma[] = 'es';
}

if( isset($_GET['seccion']) ){

	$seccion = $_GET['seccion'];

} else {

	$seccion = 'index';
}

$lexico = Spyc::YAMLLoad( 'php/idiomas/lexico_' .  $idioma[0] . '.yml' );

// $idioma[0] = 'es' se convierte en '' en head_basico.php

	///var/www/html/tragona
//if( strpos(__FILE__, 'var/www/html/tragona') !== false || strpos(__FILE__, 'opt/lampp') !== false ){
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
define( 'BASE_API', $base_url . 'php/api/');

//preg_match( '/(?:\w{2}\/)?(\w+)/', $_SERVER['REQUEST_URI'], $slug);
$arr_url = explode( '/', $_SERVER['REQUEST_URI'] );

$pagina = array_pop( $arr_url );

$pagina = strlen($pagina) < 3 ? '' : $pagina;

?>
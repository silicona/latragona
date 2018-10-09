<?php

require_once '../php/lib/spyc/spyc.php';
require_once '../php/lib/despensa.php';


class Helper {

	public function limpiar_saltos($string){

		$string = str_replace( ["\n", "\t", "\r"], '', $string );

		return $string;
	}


	public function suministra_lexico($idioma){
		
		/*
		$datos = Spyc::YAMLLoad( $base . 'php/idiomas/lexico_' .  $idioma . '.yml' );
		return $datos;
		*/
		return Spyc::YAMLLoad( $GLOBALS['BASE_FILE'] . 'php/idiomas/lexico_' .  $idioma . '.yml' );
	}


	public function suministra_despensa($tipo){

		$tipo = strtoupper($tipo);

		return new $tipo;
	}


	public function suministra_producto_alergenos($obj_productos, $alergia = false){

		foreach( $obj_productos as $producto ){

			if( $alergia ){

				if( !empty($producto['alergenos']) ){ return $producto; }

			} else {

				if( empty($producto['alergenos']) ){ return $producto; }
			}
		}
	}


	public function suministra_novedad($obj_productos, $novedad = false){

		foreach( $obj_productos as $producto ){

			if( $novedad ){

				if( isset($producto['novedad']) ){ return $producto; }
			
			} else {

				if( !isset($producto['novedad']) ){ return $producto; }
			}
		}
	}


	public function borrar_constante($constante){

		$cons = strtoupper($constante);

		return runkit_constant_remove($cons);
	}
}

?>
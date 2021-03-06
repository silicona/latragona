<?php

require_once '../php/lib/spyc/spyc.php';
require_once '../php/lib/funciones.php';
require_once '../php/lib/formularios.php';
require_once '../php/lib/despensa.php';


class Helper {

	public function devuelve_json_post( $url, $params = array() ){

		// Hace una llamada CURL a la API y envia $params por POST

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url );
		//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		// get headers too with this line
		// curl_setopt($ch, CURLOPT_HEADER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Ignore SSL
		curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.10; rv:37.0) Gecko/20100101 Firefox/37.0');
		curl_setopt($ch, CURLOPT_AUTOREFERER, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_VERBOSE, 0);
		//curl_setopt($ch, CURLOPT_VERBOSE, 1);

		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

		$resultado = curl_exec($ch);

		curl_close($ch);

		return $resultado;
	}


	public function limpiar_saltos($string){

		$string = str_replace( ["\n", "\t", "\r"], '', $string );

		return $string;
	}


	// Test
	public static function suministra_carta_actual($tipo){

		$tipo = strtolower($tipo);

		$carta_actual = file_get_contents(BASE_FILE . 'php/lib/carta.txt');

		preg_match_all('/(\w+)\-([\d,]+)/', $carta_actual, $datos);

		$arr_salida = array();
		for( $i = 0; $i < count($datos[1]); $i++ ){

			$clave = strtolower($datos[1][$i]);

			$arr_salida[$clave] = explode(',', $datos[2][$i]);
		}

		$tipos = array_keys($arr_salida);

		if( !in_array($tipo, $tipos) ){ return false; }

		return $arr_salida[$tipo];
	}


	public function suministra_lexico($idioma){
		
		/*
		$datos = Spyc::YAMLLoad( $base . 'php/idiomas/lexico_' .  $idioma . '.yml' );
		return $datos;
		*/
		return Spyc::YAMLLoad( BASE_FILE . 'php/idiomas/lexico_' .  $idioma . '.yml' );
	}


	public function suministra_despensa($tipo){

		$tipo = strtoupper($tipo);

		return new $tipo;
	}


	public function suministra_producto($obj_productos, $tipo){

		$material = get_class($obj_productos);

		foreach( $obj_productos as $producto ){

			if( $tipo == 'alergia' ){

				if( !empty($producto['alergenos']) ){ return $producto; }
			} 

			if( $tipo == 'fuera_carta' ){

				$carta = Helper::suministra_carta_actual($material);

				if( !in_array($producto['id'], $carta) ){ return $producto; }
			}

			if( $tipo == 'dentro_carta' ){

				$carta = Helper::suministra_carta_actual($material);

				if( in_array($producto['id'], $carta) ){ return $producto; }
			}

			if( $tipo == 'novedad' ){

				if( $producto['novedad'] ){ return $producto; }
			}
		}

		return false;
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
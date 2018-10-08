<?php

class Cartel {


	public function __construct($libreria){

		$this -> libreria = $libreria;
	}

	private function traducirNombre($nombre){

		return $this -> libreria['nombre'][$nombre];
	}

	
	private function traducir_bebida($descripcion){

		return $this -> libreria['bebida'][$descripcion];
	}

	
	private function traducirVarios($ingredientes){

		$salida = array();

		foreach( $ingredientes as $ingrediente ){

			$valor = $this -> libreria['ingrediente'][$ingrediente];
			$salida[] = $valor;
			//$salida[] = $this -> libreria['ingrediente'][$ingrediente];
			//$salida[] = $ingrediente;

			// $valor = $GLOBALS[$libreria][$ing];
			// array_push($retorno, $valor);
		}

		return $salida;
	}

	public function preparar_comida($nombre, $imagen, $ingredientes){

		$this -> nombre       = $this -> traducirNombre($nombre);
		$this -> imagen       = $imagen;
		$this -> ingredientes = $this -> traducirVarios($ingredientes);
	}

	public function preparar_bebida($nombre, $imagen, $descripcion){

		$this -> nombre      = $nombre;
		$this -> imagen      = $imagen;
		$this -> descripcion = $this -> traducir_bebida($descripcion);
	}
	
	// public function emplatar($nombre, $imagen, $ingredientes, $alergenos, $imag){
	//   $this->nombre = $this->traducirNombre($nombre);
	//   $this->imagen = $imagen;
	//   $this->ingredientes = $this->traducirVarios($ingredientes, 'datos_ingredientes');
	//   $this->alergenos = $this->traducirVarios($alergenos, 'datos_alergenos');
	//   $this->aler_imag = $imag;
	// }
}

class Info {

	public function crear($info){

		$this -> info = $this -> obtener($info);
	}

	private function obtener($info){
		
		return $GLOBALS['datos_info_mapa'][$info];
	}
}


?>
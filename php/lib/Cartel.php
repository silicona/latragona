<?php

class Cartel {


	public function __construct($libreria){

		$this -> libreria = $libreria;

		$this -> css = '<style>

			* {	
				margin: 0; 
				padding: 0;
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
			}

			body { 
				overflow-x: hidden;
				overflow-y: auto;
				
				font: 1em/1.3 Verdana Helvetica, sans-serif;
				color: #000000;
				font-weight: 500;
			}

			.comida body { 
				font-size: 1.2em;
				line-height: 1.5em;
			}

			/*.bebida body { font: 1em/1.3 Verdana Helvetica, sans-serif; }*/

			.modal_despensa { 
				position: relative;
				padding: 1ex;
			}

			img {
				position: absolute;
				opacity: 0.4;
				min-height: 100%;
				top: 0;
				left: 50%;
				transform: translateX(-50%);
			}

			h2 {
				position: relative;
				font-size: 1.3em;
				padding: 1ex 0 .5ex 0;
				/*z-index: 1;*/
			}

			.bebida h2 { font-size: 1.7em; }

			.comida ul {
				list-style: none;
				margin-top: 0;
				position: relative;
			}

			legend {
				font-weight: bold;
			}

			.comida li {
				position: relative;
				border-bottom: 1px solid blue;
				padding-left: 30px;
			}	

			.comida p {
				font-weight: bold;
				margin: 1ex 0;
				position: relative
			}

			.bebida p,
			.bebida ul {
				padding: 0 1ex 1ex;
				font: 1.2em/1.4 sans-serif;
				font-weight: 500;
			}

			.bebida p:first-letter {
				margin-left: 1ex;
				font-size: 1.3em;
				line-height: .8em;
				color: #FF0000;
			}

			.bebida ul {
				list-style: disc;
				margin-left: 3em;

			}

		</style></head><body>';
	}

	public function devuelve_html_bebidas($bebida){
		
		$this -> preparar_bebida($bebida);

		$str = '<!DOCTYPE html><html class="bebida"><head><title>Bebidas de la Tragona</title><meta charset="utf-8">';

		$str .= $this -> css;

		$interior = array(
			'<div class="modal_despensa">',
				
				'<img src="' . $this -> imagen . '" alt="' . $this -> libreria['producto']['imagen_de'] . $this -> nombre . '">',

				'<h2>' . $this -> nombre . '</h2>'
		);

		foreach( $this -> descripcion as $frase ){ $interior[] = '<p class="frase">' . $frase . '</p>'; }

		$importe = $this -> libreria['producto']['precio'] . ':<br>' . $this -> precio;

		$interior[] = '<p class="frase">' . $this -> libreria['producto']['precio'] . ':</p>' . $this -> precio;

		$interior[] = '</div>';

		$str .= implode('', $interior);

		$str .= '</body></html>';

		return $str;
	}

	public function devuelve_html_ingredientes($comida){

		$str = '<!DOCTYPE html><html class="comida"><head><title>Ingredientes de la Tragona</title><meta charset="utf-8">';

		$str .= $this -> css;

		$this -> preparar_comida($comida);

		$interior = array(
			'<div class="modal_despensa">',

				'<img src="' . $this -> imagen . '" alt="' . $this -> libreria['producto']['imagen_de'] . $this -> nombre . '">',

				'<h2>' . $this -> nombre . '</h2>',

				'<ul>',
					'<legend>' . $this -> libreria['producto']['ingredientes'] . ':</legend>',
		);

		foreach( $this -> ingredientes as $linea ){ 

			$interior[] = '<li>' . $linea . '</li>'; 
		}
		
		$interior[] = '</ul>';
		$interior[] = '<ul><legend>' . $this -> libreria['producto']['alergeno'] . ':</legend>';

		foreach( $this -> alergenos as $linea ){ 

			$interior[] = '<li>' . $linea . '</li>'; 
		}
		$interior[] = '</ul>';
		$interior[] = '<p>' . $this -> libreria['producto']['precio'] . ': ' . $this -> precio . '</p>';

		$interior[] = '</div>';

		$str .= implode('', $interior);

		$str .= '</body></html>';

		return $str;
	}

	private function traducirNombre($nombre){

		return $this -> libreria['nombre'][$nombre];
	}

	
	private function traducir_bebida($descripcion){

		return $this -> libreria['bebida'][$descripcion];
	}

	
	private function traducirVarios($ingredientes, $tipo = 'ingrediente'){

		$salida = array();

		foreach( $ingredientes as $ingrediente ){

			$valor = $this -> libreria[$tipo][$ingrediente];

			$salida[] = $valor;
		}

		return $salida;
	}

	public function preparar_comida($comida){
		
		$url = BASE_URL . 'media/imagenes/tragar/' . $comida['imagen'];

		$this -> nombre 	= $this -> traducirNombre($comida['descripcion']);
		$this -> imagen 	= $url;
		$this -> ingredientes = $this -> traducirVarios($comida['ingredientes']);


		$this -> precio = $comida['precio'][0] . '€';
		if( isset($comida['precio'][1]) ){

			$this-> precio .= ' (½: ' . $comida['precio'][1] . '€)';
		}

		$alergenos = count($comida['alergenos']) > 0 ? $comida['alergenos'] : ['sin_aler'];
		$this -> alergenos  = $this -> traducirVarios($alergenos, 'alergenos');
	}

	public function preparar_bebida($bebida){

		$this -> nombre      = $bebida['nombre'];
		$this -> imagen      = BASE_URL . 'media/imagenes/empujar/' . $bebida['imagen'];
		$this -> descripcion = $this -> traducir_bebida($bebida['descripcion']);

		$arr_precio = array();
		foreach( $bebida['precio'] as $tipo => $valor ){

			$arr_precio[] = '<li>' . $this -> libreria['producto'][$tipo] . ': ' . $valor . '€</li>';
		}
		$this -> precio = '<ul>';
		$this -> precio .= implode('', $arr_precio) . '</ul>';
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
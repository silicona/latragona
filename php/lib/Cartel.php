<?php

class Cartel {


	public function __construct($libreria){

		$this -> libreria = $libreria;
	}

	public function devuelve_html_bebidas($bebida){
		
		$this -> preparar_bebida($bebida);

		$str = '<!DOCTYPE html><html><head><title>Bebidas de la Tragona</title><meta charset="utf-8">';

		$str .=	'<style>

			* {	margin: 0; padding: 0; }

			html { height: 100%; }

			body {
				/*width: 50%;*/
				height: inherit;
				overflow-x: hidden;
				background: url("' . BASE_URL . 'media/imagenes/empujar/' . $this -> imagen . '");
			}

			.modal_despensa {
				overflow-y: auto;
				height: inherit;
				position: relative;
				/*top: 0;
				bottom: 0;*/
				background-color: rgba(255, 255, 255, .8);
			}

			img {
				position: absolute;
				opacity: 0.3;
				z-index: 0;
				width: 100%;
			}

			h2 {
				position: relative;
				font-size: 1.7em;
				padding: 1ex 0 .5ex 1ex;
				z-index: 1;
			}

			p {
				z-index: 1;
				padding: 0 1ex 1ex;
				font: 1.2em/1.4 sans-serif;
			}

			p:first-letter {
				margin-left: 1ex;
				font-size: 1.3em;
				line-height: .8em;
				color: #FF0000;
			}
		</style></head><body>';

		$interior = array(
			'<div class="modal_despensa">',
			
				'<h2>' . $this -> nombre . '</h2>'
		);

		foreach($this -> descripcion as $frase){

			$interior[] = '<p>' . $frase . '</p>';
		}

		$interior[] = '</div>';

		$str .= implode('', $interior);

		$str .= '</body></html>';

		return $str;
	}

	public function devuelve_html_ingredientes($comida){

		$str = '<!DOCTYPE html><html><head><title>Ingredientes de la Tragona</title><meta charset="utf-8">';

		$str .= '<style>
					* {	margin: 0; padding: 0; }

					body { 
						overflow-x: hidden;
						overflow-y: auto;
					}

					.modal_despensa { 
						position: relative;
						padding: 1ex;
					}

					img {
						position: absolute;
						opacity: 0.4;
						z-index: 0;
						transform: scale(1.2);
					}

					h2 {
						position: relative;
						font-size: 1.3em;
						text-align: center;
						padding: 1ex 0 .5ex 1ex;
					}

					ul {
						list-style: none; 
						font-size: 14pt;
						line-height: 1.5em;
						margin-top: 0;
						position: relative;
						font-weight: bold;
					}

					legend {
						font-size: 18px;
					}


					li {
						position: relative;
						border-bottom: 1px solid blue;
						padding-left: 30px;
					}	

					p {
						font-weight: bold;
						color: #000000;
						margin: 1ex;
					}
				</style></head><body>';

		//$str = quitar_espacios($str);

		$this -> preparar_comida($comida);

		$interior = array(
			'<div class="modal_despensa">',
				'<img src="' . $this -> imagen . '" alt="imagen de ' . $this -> nombre . '">',
				'<h2>' . $this -> nombre . '</h2>',
				'<ul>',
					'<legend>Ingredientes:</legend>',
		);

		foreach( $this -> ingredientes as $linea ){ 

			$interior[] = '<li>' . $linea . '</li>'; 
		}
		
		$interior[] = '</ul>';
		$interior[] = '<ul><legend>Alérgenos:</legend>';

		foreach( $this -> alergenos as $linea ){ 

			$interior[] = '<li>' . $linea . '</li>'; 
		}
		$interior[] = '</ul>';
		$interior[] = '<p>Precio: ' . $this -> precio . '</p>';

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
		$this -> precio = implode(' ', $comida['precio']);

		$alergenos = count($comida['alergenos']) > 0 ? $comida['alergenos'] : ['sin_aler'];
		$this -> alergenos  = $this -> traducirVarios($alergenos, 'alergenos');
	}

	public function preparar_bebida($bebida){

		$this -> nombre      = $bebida['nombre'];
		$this -> imagen      = $bebida['imagen'];
		$this -> descripcion = $this -> traducir_bebida($bebida['descripcion']);
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
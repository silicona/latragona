<?php
	$url = $_SERVER["REQUEST_URI"];
	//require('traductor.php');

	if( preg_match("/(\/en\/)/", $url) != 0 ){ $idioma = 'lexico_en.yml'; }

	else if( preg_match("/(\/fr\/)/", $url) != 0 ){	$idioma = 'lexico_fr.yml'; }

	else if( preg_match("/(\/it\/)/", $url) != 0 ){	$idioma = 'lexico_it.yml'; }

	else if( preg_match("/(\/de\/)/", $url) != 0 ){	$idioma = 'lexico_de.yml'; }
	
	else { $idioma = 'lexico_es.yml'; }

	if($idioma == 'lexico_es.yml'){

		require_once('php/lib/spyc/spyc.php');
		$menu = Spyc::YAMLLoad('php/idiomas/'.$idioma);
	
	} else {

		require_once('../php/lib/spyc/spyc.php');
		$menu = Spyc::YAMLLoad('../php/idiomas/'.$idioma);	
	}

	$menu_nombre       = $menu['nombre'];
	$menu_ingredientes = $menu['ingrediente'];
	$menu_alergenos    = $menu['alergenos'];
	$menu_texto        = $menu['menu'];
	$menu_dia          = $menu['dia'];

	class SemanaActual {
		
		public $martes = array(
			"nombre" => "potaje_punaico", 
			"imagen" => "potaje_punaico.jpg", // imagen NO
			"ingredientes" => ["alubia_carilla", "lenteja", "trigo", "verduras"], 
			"alergenos" => ['gluten']
			);

		public $miercoles = array(
			"nombre" => "pollo_chilindron", 
			"imagen" => "pollo_chilindron.jpg", // imagen NO
			"ingredientes" => ["pollo", "ajo", "almendras", "azafran", "cebolla", "aceite", "sal", "huevos", "pan"], 
			"alergenos" => ['frutos', "gluten", "huevo"]
			);

		public $jueves = array(
			"nombre" => "lasagna_setas", 
			"imagen" => "lasagna_setas.jpg", // ok
			"ingredientes" => ["pasta_trigo", "bechamel", "tomate_frito", "setas"], 
			"alergenos" => ["lacteos", "gluten"]
			);

		public $viernes = array(
			"nombre" => "patatas_costillas", 
			"imagen" => "patatas_costillas.jpg", // imagen NO
			"ingredientes" => ["patata", "costilla", "ajo", "cebolla", "pimenton", "laurel", "sal", "aceite"], 
			"alergenos" => []
			);
	}
	
	class ProximaSemana {

		public $martes = array(
			"nombre" => "arroz_huerta", 
			"imagen" => "arroz_huerta.jpg", 
			"ingredientes" => ["arroz", "verduras", "pimenton"], 
			"alergenos" => []
			);

		public $miercoles = array(
			"nombre" => "potaje_garbanzos", 
			"imagen" => "potaje_garbanzos.jpg", 
			"ingredientes" => ["garbanzos", "espinacas", "bacalao", "ajo", "cebolla", "pimenton", "aceite", "sal"], 
			"alergenos" => []
			);

		public $jueves = array(
			"nombre" => "lasagna_setas", 
			"imagen" => "lasagna_setas.jpg", // ok
			"ingredientes" => ["pasta_trigo", "bechamel", "tomate_frito", "setas"], 
			"alergenos" => ["lacteos", "gluten"]
			);

		public $viernes = array(
			"nombre" => "patatas_costillas", 
			"imagen" => "patatas_costillas.jpg", 
			"ingredientes" => ["patata", "costilla", "ajo", "cebolla", "pimenton", "laurel", "sal", "aceite"], 
			"alergenos" => []
			);
	}

	class Menu {

		public function crear($nombre, $imagen, $ingredientes, $alergenos, $imag){

			$this->nombre = $nombre;
			$this->imagen = $imagen;
			$this->ingredientes = $ingredientes;
			$this->alergenos = $alergenos;
			$this->aler_imag = $imag;
		}

		public function hacer($nombre, $imagen){

			$this->nombre = $this->traducir($nombre, 'menu_nombre');
			$this->imagen = $imagen;
		}

		public function emplatar(){

			$this->nombre = $this->traducir($this->nombre, 'menu_nombre');
			$this->ingredientes = $this->traducirVarios($this->ingredientes, 'menu_ingredientes');
			$this->alergenos = $this->traducirVarios($this->alergenos, 'menu_alergenos');
		}

		public function textualizar($enlace, $legend, $leyenda1, $leyenda2, $entresemana, $finde, $alergeno, $sin_alerg, $dia, $hoy, $tenemos){

			$this->enlace = $this->traducir($enlace, 'menu_texto');
			$this->legend = $this->traducir($legend, 'menu_texto');
			$this->leyenda1 = $this->traducir($leyenda1, 'menu_texto');
			$this->leyenda2 = $this->traducir($leyenda2, 'menu_texto');
			$this->entresemana = $this->traducir($entresemana, 'menu_texto');
			$this->finde = $this->traducir($finde, 'menu_texto');
			$this->alergeno = $this->traducir($alergeno, 'menu_texto');
			$this->sin_alerg = $this->traducir($sin_alerg, 'menu_texto');
			$this->hoy = $this->traducir($hoy, 'menu_texto');
			$this->tenemos = $this->traducir($tenemos, 'menu_texto');
			$this->dia = $this->traducir($dia, 'menu_dia');
		}

		private function traducirVarios($elemento, $libreria){

			$retorno = [];
			foreach($elemento as $ing){
				$valor = $GLOBALS[$libreria][$ing];
				array_push($retorno, $valor);
			}
			return $retorno;
		}

		private function traducir($elemento, $libreria){
			return $GLOBALS[$libreria][$elemento];
		}
	}

	$semana_actual = new SemanaActual();

	$proxima_semana = new ProximaSemana();

	foreach( $semana_actual as $clave => $dia ){

		${$clave} = new Menu;

		${$clave} -> hacer( $dia['nombre'], $dia['imagen'] );
	}

	foreach( $proxima_semana as $clave => $dia ){

		${"prox_".$clave} = new Menu;

		${"prox_".$clave} -> hacer($dia['nombre'], $dia['imagen']);
	}

	$num_dia = Date("N");
	//$num_dia = 1;
	$semana = ["domingo", "lunes", "martes", "miercoles", "jueves", "viernes", "sabado"];
	$dia = $semana[$num_dia];

	if( ($num_dia > 1) && ($num_dia < 6) ){	

		$mar = $semana_actual->$dia;
	
	} else { 
		
		$num_dia = 2;
		$mar = $semana_actual->$semana[$num_dia];
	}
	

	$plato_dia = new Menu;
	$plato_dia->crear($mar['nombre'], $mar['imagen'], $mar['ingredientes'], $mar['alergenos'], $mar['alergenos']);

	$texto_menu = new Menu;
	$texto_menu->textualizar('enlace', 'legend', 'leyenda1', 'leyenda2', 'entresemana', 'finde', 'alergeno', 'sin_aler', $dia, 'hoy', 'tenemos');

?>
<?php
	$url = $_SERVER["REQUEST_URI"];
	//require('traductor.php');
	if(preg_match("/(\/en\/)/", $url) != 0){
		$idioma = 'lexico_en.yml';
	}
	else if(preg_match("/(\/fr\/)/", $url) != 0){
		$idioma = 'lexico_fr.yml';
	}
	else if(preg_match("/(\/it\/)/", $url) != 0){
		$idioma = 'lexico_it.yml';
	}
	else if(preg_match("/(\/de\/)/", $url) != 0){
		$idioma = 'lexico_de.yml';
	}
	else {
		$idioma = 'lexico_es.yml';
	}

	if($idioma == 'lexico_es.yml'){
		require_once('php/lib/spyc/spyc.php');
		$menu = Spyc::YAMLLoad('php/idiomas/'.$idioma);
	}
	else {
		require_once('../php/lib/spyc/spyc.php');
		$menu = Spyc::YAMLLoad('../php/idiomas/'.$idioma);	
	}
	$menu_nombre = $menu['nombre'];
	$menu_ingredientes = $menu['ingrediente'];
	$menu_alergenos = $menu['alergenos'];
	$menu_texto = $menu['menu'];
	$menu_dia = $menu['dia'];

	class SemanaActual {
		public $martes = array(
			"nombre" => "lasagna_setas", 
			"imagen" => "lasagna_setas.jpg", 
			"ingredientes" => ["pasta_trigo", "bechamel", "tomate_frito", "setas"], 
			"alergenos" => ["lacteo", "gluten"]
			);

		public $miercoles = array(
			"nombre" => "ragout_arroz", 
			"imagen" => "ragout_arroz.jpg", 
			"ingredientes" => ["ternera", "arroz", "zanahoria"], 
			"alergenos" => ["gluten"]
			);

		public $jueves = array(
			"nombre" => "macarron_verdura", 
			"imagen" => "macarron_verdura.jpg", 
			"ingredientes" => ["pasta_integral", "verduras", "salsa_tomate_casera"], 
			"alergenos" => ["gluten"]
			);

		public $viernes = array(
			"nombre" => "ensalada_campera", 
			"imagen" => "ensalada_campera.jpg", 
			"ingredientes" => ["patata", "tomate", "huevos", "pimiento_verde", "pepino", "huevo_duro", "cebolla", "atun"], 
			"alergenos" => ["pescado", "huevo"]
			);
	}
	
	class ProximaSemana {
		public $martes = array(
			"nombre" => "lentejas_verduras", 
			"imagen" => "lentejas_verduras.jpg", 
			"ingredientes" => ["lenteja", "cebolla", "pimiento_rojo", "pimiento_verde", "ajo", "aceite", "pimenton"], 
			"alergenos" => []
			);

		public $miercoles = array(
			"nombre" => "carne_mechada", 
			"imagen" => "carne_mechada.jpg", 
			"ingredientes" => ["lomo", "ajo", "cebolla", "zanahoria", "pimienta_negra", "patata", "mantequilla", "leche", "aceite", "sal"], 
			"alergenos" => ["lacteo"]
			);

		public $jueves = array(
			"nombre" => "calabacin_relleno", 
			"imagen" => "calabacin_relleno.jpg", 
			"ingredientes" => ["calabacin", "quinoa", "cebolla", "ajo", "aceite", "queso"], 
			"alergenos" => ["lacteo"]
			);

		public $viernes = array(
			"nombre" => "ensalada_alubias", 
			"imagen" => "ensalada_alubias.jpg", 
			"ingredientes" => ["judia_blanca", "tomate", "aceite", "pimiento_verde", "vinagre", "huevo_duro", "cebolla", "atun", "sal"], 
			"alergenos" => ["pescado", "huevo"]
			);
	}
  // 		public $martes = array(
		// 	"nombre" => "ensalada_garbanzo", 
		// 	"imagen" => "ensalada_garbanzo.jpg", 
		// 	"ingredientes" => ["garbanzo", "cebolla", "vinagre_jerez", "aceite", "tomillo"], 
		// 	"alergenos" => []
		// 	);

		// public $miercoles = array(
		// 	"nombre" => "mousaka", 
		// 	"imagen" => "mousaka.jpg", 
		// 	"ingredientes" => ["carne_picada", "berenjena", "tomate", "oregano", "laurel", "ajo", "cebolla", "pimiento_verde", "aceite", "sal"], 
		// 	"alergenos" => []
		// 	);

		// public $jueves = array(
		// 	"nombre" => "canelones_verduras", 
		// 	"imagen" => "canelones_verduras.jpg", 
		// 	"ingredientes" => ["pasta_trigo", "cebolla", "calabacin", "pate_shiitake", "queso", "bechamel"], 
		// 	"alergenos" => ["lacteo", "gluten"]
		// 	);

		// public $viernes = array(
		// 	"nombre" => "judiones_compango", 
		// 	"imagen" => "judiones_compango.jpg", 
		// 	"ingredientes" => ["judion", "chorizo", "morcilla", "panceta", "sal"], 
		// 	"alergenos" => []
		// 	);

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

  foreach($semana_actual as $clave=>$dia){
  	${$clave} = new Menu;
  	${$clave} -> hacer($dia['nombre'], $dia['imagen']);
  }

  foreach($proxima_semana as $clave=>$dia){
  	${"prox_".$clave} = new Menu;
  	${"prox_".$clave} -> hacer($dia['nombre'], $dia['imagen']);
  }

	$num_dia = Date("N");
	//$num_dia = 0;
	$semana = ["domingo", "lunes", "martes", "miercoles", "jueves", "viernes", "sabado"];
	$dia = $semana[$num_dia];
	if(($num_dia > 1) && ($num_dia < 6)){
		$mar = $semana_actual->$dia;
	}
	else { 
	  $num_dia = 2;
		$mar = $semana_actual->$semana[$num_dia];
	}
	

	$plato_dia = new Menu;
	$plato_dia->crear($mar['nombre'], $mar['imagen'], $mar['ingredientes'], $mar['alergenos'], $mar['alergenos']);

	$texto_menu = new Menu;
	$texto_menu->textualizar('enlace', 'legend', 'leyenda1', 'leyenda2', 'entresemana', 'finde', 'alergeno', 'sin_aler', $dia, 'hoy', 'tenemos');

	// $martes = $semana_actual->martes;
	// $miercoles = $semana_actual->miercoles;
	// $jueves = $semana_actual->jueves;
	// $viernes = $semana_actual->viernes;

	// $prox_martes = $proxima_semana->martes;
	// $prox_miercoles = $proxima_semana->miercoles;
	// $prox_jueves = $proxima_semana->jueves;
	// $prox_viernes = $proxima_semana->viernes;
	
	// switch($num_dia){
	// 	case 2:
	// 		$mar = $semana_actual -> $semana[$num_dia];
	// 		$plato_dia->emplatar($mar['nombre'], $mar['imagen'], $mar['ingredientes'], $mar['alergenos'], $mar['alergenos']);
	// 		break;
	// 	case 3:
	// 		$mar = $semana_actual -> miercoles;
	// 		$plato_dia->emplatar($mar['nombre'], $mar['imagen'], $mar['ingredientes'], $mar['alergenos'], $mar['alergenos']);
	// 		break;
	// 	case 4:
	// 		$mar = $semana_actual -> jueves;
	// 		$plato_dia->emplatar($mar['nombre'], $mar['imagen'], $mar['ingredientes'], $mar['alergenos'], $mar['alergenos']);
	// 		break;
	// 	case 5:
	// 		$mar = $semana_actual -> viernes;
	// 		$plato_dia->emplatar($mar['nombre'], $mar['imagen'], $mar['ingredientes'], $mar['alergenos'], $mar['alergenos']);
	// 		break;
	// 	default:
	// 		$mar = $semana_actual -> martes;
	// 		$plato_dia->emplatar($mar['nombre'], $mar['imagen'], $mar['ingredientes'], $mar['alergenos'], $mar['alergenos']);
	// 		break;
	// }
	//var_export($plato_dia);



?>
<?php 

class Cervezas {

	public $rubia = array(
		"id" 	 => "1",
		"nombre" => "Estrella Levante",
		"imagen" => "rubia.jpg",
		"descripcion" => "estrella_levante",
		"tipo"   => "rubia",
		"precio" => array(
			"caña"   => "1.5",
			"doble"  => "2.5",
			"tercio" => "2.5",
			"mini"   => "3.5"
		),
		"novedad"   => false
	);

	public $sin_alcohol = array(
		"id" 	 => "2",
		"nombre" => "Estrella sin alcohol",
		"imagen" => "estrella_sin.jpg", // Imagen Ajena
		"descripcion" => "estrella_sin",
		"tipo"   => "sin",
		"precio" => array("botellin" => "1.5"),
		"novedad"   => false
	);

	public $punta = array(
		"id" 	 => "3",
		"nombre" => "Punta Este",
		"imagen" => "tostada.jpg",
		"descripcion" => "punta_este",
		"tipo"   => "tostada",
		"precio" => array(
			"caña"  => "1.7",
			"doble" => "3",
			"mini"  => "4"
		),
		"novedad"   => false
	);

	public $daura = array(
		"id" 	 => "4",
		"nombre"  => "Daura Damm",
		"imagen"  => "daura.jpg",
		"descripcion" => "daura",
		"tipo"    => "sin_glu",
		"precio"  => array( "tercio" => "2.5" ),
		"novedad" => true
	);
}

class Vinos {

	// Tintos
	public $puntas = array(
		"id"		  => "1",
		"nombre"      => "7 Puntas (Castilla)",
		"imagen"      => "7puntas.jpg",
		"descripcion" => "puntas",
		"precio"      => array(
			"copa"    => "1.5",
			"botella" => "12"
		),
		"novedad"   => false
	);

	public $zinio = array(
		"id"		  => "2",
		"nombre"      => "Zinio (La Rioja)",
		"imagen"      => "zinio.jpg",
		"descripcion" => "zinio",
		"precio"      => array(
			"copa"    => "1.8", 
			"botella" => "12"
		),
		"novedad"   => false
	);

	public $muriel = array(
		"id"		  => "3",
		"nombre"      => "Muriel Crianza (La Rioja)",
		"imagen"      => "muriel.jpg",
		"descripcion" => "muriel",
		"precio"      => array(
			"copa"    => "2.4", 
			"botella" => "15"
		),
		"novedad"   => false
	);

	public $menina = array(
		"id"		  => "4",
		"nombre"      => "Menina Crianza (Madrid)",
		"imagen"      => "menina.jpg",
		"descripcion" => "menina",
		"precio"      => array(
			"copa"    => "2.8", 
			"botella" => "18"
		),
		"novedad"   => false
	);

	public $feroes = array(
		"id"		  => "5",
		"nombre"      => "Finca Feroes (Ribera)",
		"imagen"      => "feroes.jpg",
		"descripcion" => "feroes",
		"precio"      => array(
			"copa"    => "2.4", 
			"botella" => "15"
		),
		"novedad"   => false
	);

	public $mureda = array(
		"id"		  => "6",
		"nombre"      => "Mureda (Syrah)",
		"imagen"      => "mureda.jpg",
		"descripcion" => "mureda",
		"precio"      => array(
			"copa"    => "2.4", 
			"botella" => "15"
		),
		"novedad"   => false
	);

	public $bierzo = array(
		"id"		  => "7",
		"nombre"      => "Bierzo (Mencia)",
		"imagen"      => "bierzo.jpg",
		"descripcion" => "bierzo",
		"precio"      => array(
			"copa"    => "2.8", 
			"botella" => "18"
		),
		"novedad"   => false
	);

	public $nuviana_tinto = array(
		"id"		  => "8",
		"nombre"      => "Nuviana",
		"imagen"      => "nuviana_tinto.jpg",
		"descripcion" => "nuviana_tinto",
		"precio"      => array(
			"copa"    => "2.4", 
			"botella" => "15"
		),
		"novedad"   => false
	);

	public $vizconde = array(
		"id"		  => "9",
		"nombre"      => "Vizconde de la Villa",
		"imagen"      => "vizconde.jpg",
		"descripcion" => "vizconde",
		"precio"      => array(
			"copa"    => "2.4", 
			"botella" => "15"
		),
		'novedad' => true
	);

	// Blancos
	public $albarino = array(
		"id"		  => "10",
		"nombre"      => "Albariño (Cosechero)",
		"imagen"      => "albarino.jpg",
		"descripcion" => "albarino",
		"precio"      => array(
			"copa"    => "2.2",
			"botella" => "12"
		),
		"novedad"   => false
	);

	public $bierzo_god = array(
		"id"		  => "11",
		"nombre"      => "Bierzo Godello",
		"imagen"      => "bierzo_godello.jpg",
		"descripcion" => "bierzo_god",
		"precio"      => array(
			"copa"    => "2.8", 
			"botella" => "18"
		),
		"novedad"   => false
	);

	public $lagartijo = array(
		"id"		  => "12",
		"nombre"      => "Lagartijo (Verdejo)",
		"imagen"      => "lagartijo.jpg",
		"descripcion" => "lagartijo",
		"precio"      => array(
			"copa"    => "2.2", 
			"botella" => "12"
		),
		"novedad"   => false
	);

	public $nuviana_blanco = array(
		"id"		  => "13",
		"nombre"	  => "Nuviana",
		"imagen" 	  => "nuviana_blanco.jpg",
		"descripcion" => "nuviana_blanco",
		"precio" 	  => array(
			"copa" 	  => "2.2", 
			"botella" => "12"
		),
		"novedad"   => false
	);

	public $sastreria = array(
		"id"		=> "14",
		"nombre"	=> "La sastreria (Garnacha)",
		"imagen"	=> "sastreria.jpg",
		"descripcion" => "sastreria",
		"precio"	=> array(
			"copa"    => "2.2", 
			"botella" => "12"
		),
		"novedad"   => false
	);		

	public $vinaldena = array(
		"id"		=> "15",
		"nombre" 	=> "Viñaldena (Verdejo)",
		"imagen"	=> "vinaldena.jpg",
		"descripcion" => "vinaldena",
		"precio"	=> array(
			"copa"    => "2.2", 
			"botella" => "12"
		),
		"novedad"   => false
	);

	// Vermout
	public $vermouth = array(
		"id"		=> "16",
		"nombre"	=> "Vermouth Miro",
		"imagen"	=> "vermouth.jpg",
		"descripcion" => "vermouth",
		"precio"	=> array(
			"copa" => "2"
		),
		"novedad"   => false
	);
}

class Licores {

	public $hierbas = array(
		"id"		  => "1",
		"nombre" 	  => "Licor de hierbas",
		"imagen" 	  => "lic_hierbas.jpg",
		"descripcion" => "lic_hierbas",
		"precio" 	  => array(
			"chupito" => "2", 
			"copa"    => "4"
		),
		"novedad"   => false
	);

	public $blanco = array(
		"id"		  => "2",
		"nombre" 	  => "Licor blanco",
		"imagen"      => "lic_blanco.jpg",
		"descripcion" => "lic_blanco",
		"precio" 	  => array(
			"chupito" => "2", 
			"copa"    => "4"
		),
		"novedad"   => false
	);

	public $tostado = array(
		"id"		  => "3",
		"nombre" 	  => "Licor tostado",
		"imagen" 	  => "lic_tostado.jpg",
		"descripcion" => "lic_tostado",
		"precio" 	  => array(
			"chupito" => "2", 
			"copa"    => "4"
		),
		"novedad"   => false
	);

	public $licor_cafe = array(
		"id"		  => "4",
		"nombre" 	  => "Licor cafe",
		"imagen" 	  => "lic_cafe.jpg",
		"descripcion" => "lic_cafe",
		"precio" 	  => array(
			"chupito" => "2", 
			"copa"    => "4"
		),
		"novedad"   => false
	);

	public $pacharan = array(
		"id"		  => "5",
		"nombre" 	  => "Pacharán",
		"imagen" 	  => "lic_pacharan.jpg",
		"descripcion" => "pacharan",
		"precio"      => array(
			"chupito" => "2", 
			"copa"    => "4"
		),
		"novedad"   => false
	);

	public $crema_orujo = array(
		"id"		  => "6",
		"nombre" 	  => "Crema de orujo",
		"imagen" 	  => "lic_crema_orujo.jpg",
		"descripcion" => "crema_orujo",
		"precio"	  => array(
			"chupito" => "2", 
			"copa"    => "4"
		),
		"novedad"   => false
	);

	public $crema_chocolate = array(
		"id"		=> "7",
		"nombre"	=> "Crema de chocolate",
		"imagen"	=> "lic_choco.jpg",
		"descripcion" => "crema_choco",
		"precio"	=> array(
			"chupito" => "2", 
			"copa"    => "4"
		),
		"novedad"   => false
	);

	public $crema_cafe = array(
		"id"		=> "8",
		"nombre"	=> "Crema de café",
		"imagen"	=> "lic_crem_cafe.jpg",
		"descripcion" => "crema_cafe",
		"precio"	=> array(
			"chupito" => "2", 
			"copa"    => "4"
		),
		"novedad"   => false
	);
}

class Tostas {

	public $tosta_brandada = array(
		"id"		=> "1",
		"nombre" 	=> "Brandada de bacalao",
		"imagen" 	=> "tosta_brandada.jpg",
		"precio" 	=> ["4,5"],
		"descripcion"  => "tosta_brandada",
		"ingredientes" => [
			"bacalao",
			"aceite",
			"ajo",
			"cayena",
			"patata"
		],
		"alergenos" => [
			"gluten",
			"pescado"
		],
		"novedad"   => false
	);
	
	public $tosta_cecina = array(
		"id"		=> "2",
		"nombre" 	=> "Cecina de León",
		"imagen" 	=> "tosta_cecina.jpg",
		"precio" 	=> ["4,5"],
		"descripcion"  => "tosta_cecina",
		"ingredientes" => [
			"cecina",
			"queso_oveja",
			"pimienta_blanca"
		],
		"alergenos" => ["gluten"],
		"novedad"   => false
	);

	public $tosta_hummus = array(
		"id"		=> "3",
		"nombre" 	=> "Hummus",
		"imagen" 	=> "tosta_hummus.jpg",
		"precio" 	=> ["3,5"],
		"descripcion"  => "tosta_hummus",
		"ingredientes" => [
			"garbanzo",
			"ajo",
			"comino",
			"sal",
			"aceite",
			"zumo_limon",
			"pimenton"
		],
		"alergenos" => [
			"gluten"
		],
		"novedad"   => false
	);

	public $tosta_roastbeef = array(
		"id"		=> "4",
		"nombre" 	=> "Roastbeef con salsa de mostaza",
		"imagen" 	=> "tosta_roastbeef.jpg",
		"precio" 	=> ["5"],
		"descripcion"  => "tosta_roastbeef",
		"ingredientes" => [
			"ternera",
			"sal",
			"aceite",
			"tomillo",
			"romero",
			"mostaza",
			"miel",
			"vinagre"
		],
		"alergenos" => [
			"gluten",
			"mostaza"
		],
		"novedad"   => false
	);	

	public $tosta_salmon = array(
		"id"		=> "5",
		"nombre" 	=> "Salmón con crema de queso",
		"imagen" 	=> "tosta_salmon.jpg",
		"precio" 	=> ["4,5"],
		"descripcion"  => "tosta_salmon",
		"ingredientes" => [
			"salmon_ahumado",
			"crema_queso",
			"pimienta_blanca",
			"eneldo"
		],
		"alergenos" => [
			"gluten",
			"pescado",
			"lacteo"
		],
		"novedad"   => false
	);
	/*
	public $tosta_shiitake = array(
		"id"		=> "6",
		"nombre"	=> "Pate de shiitake",
		"imagen"	=> "tosta_shiitake.jpg",
		"precio"	=> array("4,5"),
		"descripcion"  => "tosta_shiitake",
		"ingredientes" => array(
			"patata", 
			"chorizo", 
			"panceta", 
			"aceite", 
			"ajo", 
			"pimenton", 
			"sal"
		),
		"alergenos"	=> array("soja"),
		"novedad"	=> true
	);
	*/

	public $tosta_ventresca = array(
		"id"		=> "7",
		"nombre"	=> "Ventresca con pimientos del piquillo",
		"imagen"	=> "tosta_ventresca.jpg",
		"precio"	=> ["4,5"],
		"descripcion"  => "tosta_ventresca",
		"ingredientes" => [
			"ventresca",
			"pimiento_piquillo",
			"sal_gorda",
			"aceite"
		],
		"alergenos" => [
			"gluten",
			"pescado"
		],
		"novedad"   => false
	);
}

class Raciones {

	public $atun = array(
		"id"		=> "1",
		"nombre"	=> "Atún en salazón",
		"imagen"	=> "atun.jpg",
		"precio"	=> array("8"),
		"descripcion"  => "atun",
		"ingredientes" => array(
			"atun", 
			"aceite", 
			"sal", 
			"azucar"
		),
		"alergenos"	=> array("pescado"),
		"novedad"   => false
	);

	public $babaganoush = array(
		"id"		=> "2",
		"nombre"	=> "Babaganoush",
		"imagen"	=> "babaganoush.jpg",
		"precio"	=> array(
			"6", 
			"3"
		),
		"descripcion"  => "babaganoush",
		"ingredientes" => array(
			"berenjena", 
			"ajo", 
			"comino", 
			"sesamo", 
			"aceite", 
			"zumo_limon"
		),
		"alergenos"	=> array("sesamo"),
		"novedad"   => false
	);

	public $berenjena = array(
		"id"		=> "3",
		"nombre"	=> "Berenjenas rellenas",
		"imagen"	=> "berenjena.jpg",
		"precio"	=> array("8"),
		"descripcion"  => "berenjena",
		"ingredientes" => array(
			"berenjena", 
			"pimiento_rojo", 
			"pimiento_verde", 
			"calabacin", 
			"cebolla", 
			"salsa_tomate", 
			"bechamel", 
			"aceite", 
			"sal"
		),
		"alergenos"	=> array(),
		"novedad"   => false
	);

	public $brandada = array(
		"id"		=> "4",
		"nombre" 	=> "Brandada de bacalao",
		"imagen" 	=> "brandada.jpg",
		"precio" 	=> array('9'),
		"descripcion"  => "brandada",
		"ingredientes" => [
			"bacalao",
			"ajo",
			"cayena",
			"aceite",
			"patata"
		],
		"alergenos" => ["pescado"],
		"novedad"   => false
	);

	public $canelones_morcilla = array(
		"id"		=> "5",
		"nombre"	=> "Canelones de morcilla de guerra",
		"imagen"	=> "canelones_morcilla.jpg",
		"precio"	=> array("7,5"),
		"descripcion"  => "canelones_morcilla",
		"ingredientes" => array(
			"pasta_trigo", 
			"berenjena", 
			"pimienta_blanca", 
			"pimenton", 
			"oregano", 
			"cebolla", 
			"bechamel", 
			"aceite", 
			"sal", 
			"queso", 
			"nuez_moscada", 
			"salsa_tomate"
		),
		"alergenos"	=> array(),
		"novedad" 	=> true
	);

	public $carne_mechada = array(
		"id"		=> "6",
		"nombre"	=> "Carne mechada",
		"imagen" 	=> "carne_mechada.jpg", // imagen de menu
		"precio"	=> array("8"),
		"descripcion"  => "carne_mechada",
		"ingredientes" => array(
			"lomo", 
			"ajo", 
			"cebolla", 
			"zanahoria", 
			"pimienta_negra", 
			"patata", 
			"mantequilla", 
			"leche", 
			"aceite", 
			"sal"
		), 
		"alergenos"	=> array(),
		"novedad"	=> true
	);

	public $carpaccio = array(
		"id"		=> "7",
		"nombre"	=> "Carpaccio de calabacín",
		"imagen"	=> "carpaccio_calabacin.jpg",
		"precio"	=> array( "5" ),
		"descripcion"  => "carpaccio",
		"ingredientes" => array(
			"calabacin", 
			"pimienta_blanca", 
			"sal_gorda", 
			"queso_oveja", 
			"zumo_lima", 
			"salsa", 
			"zumo_naranja", 
			"vinagre", 
			"salsa_soja", 
			"azucar"
		),
		"alergenos"	=> array("soja"),
		"novedad"   => false
	);

	public $cecina = array(
		"id"		=> "8",
		"nombre"	=> "Cecina de León",
		"imagen"	=> "racion_cecina.jpg",
		"precio"	=> array(
			"9", 
			"4.5"
		),
		"descripcion"  => "cecina",
		"ingredientes" => array(
			"cecina", 
			"queso_oveja", 
			"pimienta_blanca"
		),
		"alergenos"	=> array(),
		"novedad"   => false
	);

	public $ensalada_remo = array( 
		"id"		=> "9",
		"nombre"       => "Ensalada de remolacha, rúcula y queso de cabra eco",
		"imagen"       => "ensalada_remo.jpg",  // Imagen Ajena
		"precio"       => array( "7" ),
		"descripcion"  => "ensalada_remo",
		"ingredientes" => array(
			"remolacha", 
			"rucula", 
			"queso_cabra", 
			"aceite", 
			"salsa_agridulce"
		),
		"alergenos"    => array("soja"),
		"novedad"   => false
	);

	public $ensalada_rusa = array( 
		"id"		=> "10",
		"nombre"	=> "Ensaladilla rusa",
		"imagen"	=> "ensaladilla_rusa.jpg",
		"precio"	=> array("7"),
		"descripcion"  => "ensalada_rusa",
		"ingredientes" => array(
			"patata", 
			"pimiento_rojo", 
			"aceituna", 
			"aceite", 
			"huevo",
			'atun'
		),
		"alergenos"	=> array(
			"pescado",
			"huevo"
		),
		"novedad"   => false
	);

	public $ensalada_sardinas = array( 
		"id"		=> "11",
		"nombre"	=> "Ensalada de sardinas marinadas caseras, tomate y albahaca",
		"imagen"	=> "ensalada_sardinas.jpg",
		"precio"	=> array("9"),
		"descripcion"  => "ensalada_sardinas",	// Imagen ajena
		"ingredientes" => array(
			"sardina", 
			"tomate", 
			"albahaca", 
			"aceite"
		),
		"alergenos"	=> array("pescado"),
		"novedad"   => false
	);
	
	public $gazpacho = array( 
		"id"		=> "12",
		"nombre"	=> "Gazpacho",
		"imagen"	=> "gazpacho.jpg",	// Imagen ajena
		"precio"	=> array("2"),
		"descripcion"  => "gazpacho",
		"ingredientes" => array( 
			"tomate",
			"aceite",
			'pan'
		),
		"alergenos"	=> array("gluten"),
		"novedad"   => false
	);
	
	public $hummus = array(
		"id"		=> "13",
		"nombre"	=> "Hummus",
		"imagen"	=> "racion_hummus.jpg",
		"precio"	=> array(
			"6",
			"3"
		),
		"descripcion"  => "hummus",
		"ingredientes" => [
			"garbanzo",
			"ajo",
			"comino",
			"sal",
			"aceite",
			"zumo_limon",
			"pimenton"
		],
		"alergenos"	=> [],
		"novedad"   => false
	);
	
	public $judiones = array(
		"id"		=> "14",
		"nombre"       => "Judiones con compango",
		"imagen"       => "judiones.jpg",
		"precio"       => array("8"),
		"descripcion"  => "judiones",
		"ingredientes" => [
			"judia_pinta",
			"ajo", 
			"comino",
			"sal", 
			"aceite",
			"zumo_limon",
			"pimenton"
		],
		"alergenos"    => [],
		"novedad"   => false
	);

	public $lasagna = array(
		"id"		=> "15",
		"nombre"	=> "Lasagna de setas",
		"imagen"	=> "lasagna_setas.jpg",
		"precio"	=> ["8"],
		"descripcion"  => "lasagna",
		"ingredientes" => [
			"pasta_trigo",
			"setas",
			"harina",
			"mantequilla",
			"nuez_moscada",
			"sal",
			"pimienta_blanca",
			"leche",
			"tomate_frito",
			"cayena",
			"ajo",
			"aceite"
		],
		"alergenos"	=> [],
		"novedad"   => false
	);
	
	public $lomo = array(
		"id"		=> "16",
		"nombre"       => "Lomo embuchado",
		"imagen"       => "lomo.jpg",	// Imagen Ajena
		"precio"       => [
			"7",
			"3,5"
		],
		"descripcion"  => "lomo",
		"ingredientes" => ["lomo_embuchado"],
		"alergenos"    => [],
		"novedad"   => false
	);
	
	public $migas = array(
		"id"		=> "17",
		"nombre"	=> "Migas",
		"imagen"	=> "migas.jpg",
		"precio"	=> ["6,5"],
		"descripcion"  => "migas",
		"ingredientes" => [
			"pan",
			"chorizo",
			"panceta",
			"aceite",
			"ajo",
			"pimenton",
			"sal"
		],
		"alergenos"	 => array("gluten"),
		"novedad"	=> true
	);

	public $mousaka = array(
		"id"		=> "18",
		"nombre"	=> "Mousaka",
		"imagen"	=> "mousaka.jpg", // Imagen Ajena
		"precio"	=> array("8"),
		"descripcion"  => "mousaka",
		"ingredientes" => array(
			"carne_picada", 
			"berenjena", 
			"tomate", 
			"oregano", 
			"laurel", 
			"ajo", 
			"cebolla", 
			"pimiento_verde", 
			"aceite", 
			"sal"
		), 
		"alergenos"	=> array(),
		"novedad"	=> true			
	);

	public $papas_2mojos = array(
		"id"		=> "19",
		"nombre"	=> "'Papas arrugás' con 2 mojos",
		"imagen"	=> "racion_papa_mojo.jpg",
		"precio"	=> array("6,5"),
		"descripcion"  => "papas_2mojos",
		"ingredientes" => array(
			"patata", 
			"sal_gorda", 
			"mojo", 
			"cayena", 
			"ajo", 
			"comino", 
			"vinagre", 
			"sal", 
			"aceite", 
			"pimenton_cilantro"
		),
		"alergenos"	=> array(),
		"novedad"   => false
	);

	public $pastel_salmon = array(
		"id"		=> "20",
		"nombre"       => "Pastel de salmón",
		"imagen"       => "pastel_salmon.jpg",
		"precio"       => array("7"),
		"descripcion"  => "pastel_salmon",
		"ingredientes" => array(
			"salmon_fresco", 
			"nata", 
			"sal", 
			"huevo", 
			"eneldo"
		),
		"alergenos"    => array(
			"pescado", 
			"lacteo"
		),
		"novedad"   => false
	);

	public $patatas_cabrales = array(
		"id"		=> "21",
		"nombre"       => "Patatas con queso cabrales",
		"imagen"       => "patatas_cabrales.jpg",
		"precio"       => array("5"),
		"descripcion"  => "patatas_cabrales",
		"ingredientes" => array(
			"patata", 
			"chorizo", 
			"panceta", 
			"aceite", 
			"ajo", 
			"pimenton", 
			"sal"
		),
		"alergenos"    => array('lacteo'),
		"novedad"   => false
	);

	public $patatas_rellenas = array(
		"id"		=> "22",
		"nombre"       => "Patatas rellenas de pisto o cabrales",
		"imagen"       => "racion_patata_rellena.jpg",
		"precio"       => array( "5" ),
		"descripcion"  => "patatas_rellenas",
		"ingredientes" => array(
			"patata", 
			"pimiento_rojo", 
			"pimiento_verde", 
			"cebolla", 
			"calabacin", 
			"salsa_tomate", 
			"queso"
		),
		"alergenos"    => array(),
		"novedad"   => false
	);
	
	public $patatas_revolconas = array(
		"id"		=> "23",
		"nombre"	=> "Patatas revolconas",
		"imagen"	=> "patatas_revolconas.jpg",
		"precio"	=> array("7"),
		"descripcion"  => "patatas_revolconas",
		"ingredientes" => array(
			"patata", 
			"chorizo", 
			"panceta", 
			"aceite", 
			"ajo", 
			"pimenton", 
			"sal"
		),
		"alergenos"    => array(),
		"novedad"   => false
	);
	
	public $pate_shiitake = array(
		"id"		=> "25",
		"nombre"	=> "Pate de shiitake",
		"imagen"	=> "pate_shiitake.jpg",
		"precio"	=> array(
			"7",
			"3,5"
		),
		"descripcion"  => "pate_shiitake",
		"ingredientes" => array(
			"patata", 
			"chorizo", 
			"panceta", 
			"aceite", 
			"ajo", 
			"pimenton", 
			"sal"
		),
		"alergenos"	=> array(
			"soja",
		),
		"novedad"	=> true
	);

	public $queso_tietar = array(
		"id"		=> "26",
		"nombre"	=> "Queso de cabra ecológico del Tietar",
		"imagen"	=> "queso_tietar.jpg",
		"precio"	=> array('5'),
		"descripcion"  => "queso_tietar",
		"ingredientes" => array(
			"queso", 
		),
		"alergenos"	=> array( "lacteo" ),
		"novedad"	=> true
	);
	
	public $ragout = array(
		"id"		=> "27",
		"nombre"	=> "Ragout de ternera",
		"imagen"	=> "ragout.jpg",
		"precio"	=> array(
			"8", 
			" - ½: 4" 
		),
		"descripcion"  => "ragout",
		"ingredientes" => array(
			"ternera", 
			"zanahoria", 
			"guisante", 
			"cebolla", 
			"ajo", 
			"tomillo", 
			"romero", 
			"oregano", 
			"harina", 
			"sal"
		),
		"alergenos"	=> array(),
		"novedad"   => false
	);
	
	public $solomillo = array(
		"id"		=> "28",
		"nombre"       => "Solomillo con 2 salsas (cerveza y manzana)",
		"imagen"       => "solomillo.jpg",
		"precio"       => array("7"),
		"descripcion"  => "solomillo",
		"ingredientes" => array(
			"solomillo", 
			"cebolla", 
			"cerveza", 
			"manzana", 
			"mostaza", 
			"aceite", 
			"sal"
		),
		"alergenos"    => array("mostaza"),
		"novedad"   => false
	);

	public $solomillo_aji = array(
		"id"		=> "29",
		"nombre"	=> "Solomillo al aji amarillo",
		"imagen"	=> "solomillo.jpg",
		//"imagen"	=> "solomillo_aji.jpg",
		"precio"	=> array("8"),
		"descripcion"  => "solomillo_aji",
		"ingredientes" => array(
			"solomillo", 
			"cebolla", 
			"cerveza", 
			"manzana", 
			"mostaza", 
			"aceite", 
			"sal",
			"patata",
			"huevo",
		),
		"alergenos"	=> array("huevo"),
		"novedad"   => false
	);
	
	public $solomillo_sal = array(
		"id"		=> "30",
		"nombre"       => "Solomillo curado a la sal con especias",
		"imagen"       => "solomillo_sal.jpg",
		"precio"       => array('8'),
		"descripcion"  => "solomillo_sal",
		"ingredientes" => array(
			"solomillo", 
			"pimenton_agridulce", 
			"oregano", 
			"comino", 
			"sal_gorda"
		),
		"alergenos" => array(),
		"novedad"   => true
	);

	public $rusos = array(
		"id"		=> "31",
		"nombre"	=> "Filetes rusos con salsa de tomate",
		"imagen"	=> "rusos.jpg",
		"precio"	=> array("8"),
		"descripcion"  => "rusos",
		"ingredientes" => array(
			"carne_picada", 
			"huevo", 
			"ajo", 
			"pan_rallado", 
			"perejil", 
			"sal", 
			"aceite", 
			"perrins", 
			"pimienta_blanca", 
			"cebolla"
		),
		"alergenos"	=> array("huevo"),
		"novedad"   => false
	);

	public $tartar_verduras = array(
		"id"		=> "32",
		"nombre"       => "Tartar de verduras, quinoa y salsa de aceituna verde",
		"imagen"       => "tartar_verduras.jpg",
		"precio"       => array("8"),
		"descripcion"  => "tartar_verduras",
		"ingredientes" => array(
			"judia_verde", 
			"quinoa", 
			'aceituna'
		),
		"alergenos" => array(),
		"novedad"   => false
	);

	public $ventresca = array(
		"id"		=> "33",
		"nombre"	=> "Ensalada de ventresca con p. del piquillo",
		"imagen"	=> "ensalada_ventresca.jpg",
		"precio"	=> [
			"9",
			"4,5"
		],
		"descripcion"  => "ventresca",
		"ingredientes" => [
			"ventresca",
			"pimiento_piquillo",
			"sal_gorda",
			"aceite"
		],
		"alergenos"	=> ["pescado"],
		"novedad"   => false
	);
}

$cervezas = new Cervezas;

$vinos    = new Vinos;

$licores  = new Licores;

$tostas   = new Tostas;

$raciones = new Raciones;

?>
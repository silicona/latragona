 <?php	

class Cervezas{

	public $rubia = array(
		"nombre" => "Estrella Levante",
		"imagen" => "rubia.jpg",
		"tipo"   => "rubia",
		"precio" => array(
			"caña"   => "1.5",
			"doble"  => "2.5",
			"tercio" => "2.5",
			"mini"   => "3.5"
		)
	);

	public $sin_alcohol = array(
		"nombre" => "Estrella sin alcohol",
		"imagen" => "estrella_sin.jpg", // Imagen Ajena
		"tipo"   => "sin",
		"precio" => array( "botellin" => "1.5" )
	);

	public $punta = array(
		"nombre" => "Punta Este",
		"imagen" => "tostada.jpg",
		"tipo"   => "tostada",
		"precio" => array(
			"caña"  => "1.7",
			"doble" => "3",
			"mini"  => "4"
		)
	);

	public $daura = array(
		"nombre"  => "Daura Damm",
		"imagen"  => "daura.jpg",
		"tipo"    => "sin_glu",
		"precio"  => array( "tercio" => "2.5" ),
		"novedad" => true
	);
}


class Vinos {

	// Tintos
	public $puntas = array(
		"nombre"      => "7 Puntas (Castilla)",
		"imagen"      => "7puntas.jpg",
		"descripcion" => "puntas",
		"precio"      => array(
			"copa"    => "1.5",
			"botella" => "12"
		)
	);

	public $zinio = array(
		"nombre"      => "Zinio (La Rioja)",
		"imagen"      => "zinio.jpg",
		"descripcion" => "zinio",
		"precio"      => array(
			"copa"    => "1.8", 
			"botella" => "12"
		)
	);

	public $muriel = array(
		"nombre"      => "Muriel Crianza (La Rioja)",
		"imagen"      => "muriel.jpg",
		"descripcion" => "muriel",
		"precio"      => array(
			"copa"    => "2.4", 
			"botella" => "15"
		)
	);

	public $menina = array(
		"nombre"      => "Menina Crianza (Madrid)",
		"imagen"      => "menina.jpg",
		"descripcion" => "menina",
		"precio"      => array(
			"copa"    => "2.8", 
			"botella" => "18"
		)
	);

	public $feroes = array(
		"nombre"      => "Finca Feroes (Ribera)",
		"imagen"      => "feroes.jpg",
		"descripcion" => "feroes",
		"precio"      => array(
			"copa"    => "2.4", 
			"botella" => "15"
		)
	);

	public $mureda = array(
		"nombre"      => "Mureda (Syrah)",
		"imagen"      => "mureda.jpg",
		"descripcion" => "mureda",
		"precio"      => array(
			"copa"    => "2.4", 
			"botella" => "15"
		)
	);

	public $bierzo = array(
		"nombre"      => "Bierzo (Mencia)",
		"imagen"      => "bierzo.jpg",
		"descripcion" => "bierzo",
		"precio"      => array(
			"copa"    => "2.8", 
			"botella" => "18"
		)
	);

	public $nuviana_tinto = array(
		"nombre"      => "Nuviana",
		"imagen"      => "nuviana_tinto.jpg",
		"descripcion" => "nuviana_tinto",
		"precio"      => array(
			"copa"    => "2.4", 
			"botella" => "15"
		)
	);

	// Blancos
	public $albarino = array(
		"nombre"      => "Albariño (Cosechero)",
		"imagen"      => "albarino.jpg",
		"descripcion" => "albarino",
		"precio"      => array(
			"copa"    => "2.2",
			"botella" => "12"
		)
	);

	public $bierzo_god = array(
		"nombre"      => "Bierzo Godello",
		"imagen"      => "bierzo_godello.jpg",
		"descripcion" => "bierzo_god",
		"precio"      => array(
			"copa"    => "2.8", 
			"botella" => "18"
		)
	);

	public $lagartijo = array(
		"nombre"      => "Lagartijo (Verdejo)",
		"imagen"      => "lagartijo.jpg",
		"descripcion" => "lagartijo",
		"precio"      => array(
			"copa"    => "2.2", 
			"botella" => "12"
		)
	);

	public $nuviana_blanco = array(
		"nombre" => "Nuviana",
		"imagen" => "nuviana_blanco.jpg",
		"descripcion" => "nuviana_blanco",
		"precio" => array(
			"copa" => "2.2", 
			"botella" => "12"
		)
	);

	public $sastreria = array(
		"nombre"      => "La sastreria (Garnacha)",
		"imagen"      => "sastreria.jpg",
		"descripcion" => "sastreria",
		"precio"      => array(
			"copa"    => "2.2", 
			"botella" => "12"
		)
	);		

	public $vinaldena = array(
		"nombre"      => "Viñaldena (Verdejo)",
		"imagen"      => "vinaldena.jpg",
		"descripcion" => "vinaldena",
		"precio"      => array(
			"copa"    => "2.2", 
			"botella" => "12"
		)
	);

	// Vermout
	public $vermouth = array(
		"nombre"      => "Vermouth Miro",
		"imagen"      => "vermouth.jpg",
		"descripcion" => "vermouth",
		"precio"      => array( "copa" => "2" )
	);
}


class Licores {

	public $hierbas = array(
		"nombre" => "hierbas",
		"imagen" => "lic_hierbas.jpg",
		"precio" => array(
			"chupito" => "2", 
			"copa"    => "4"
		)
	);

	public $blanco = array(
		"nombre" => "blanco",
		"imagen" => "lic_blanco.jpg",
		"precio" => array(
			"chupito" => "2", 
			"copa"    => "4"
		)
	);

	public $tostado = array(
		"nombre" => "tostado",
		"imagen" => "lic_tostado.jpg",
		"precio" => array(
			"chupito" => "2", 
			"copa"    => "4"
		)
	);

	public $licor_cafe = array(
		"nombre" => "licor_cafe",
		"imagen" => "lic_cafe.jpg",
		"precio" => array(
			"chupito" => "2", 
			"copa"    => "4"
		)
	);

	public $pacharan = array(
		"nombre" => "pacharan",
		"imagen" => "lic_pacharan.jpg",
		"precio" => array(
			"chupito" => "2", 
			"copa"    => "4"
		)
	);

	public $crema_orujo = array(
		"nombre" => "crema_orujo",
		"imagen" => "lic_crema_orujo.jpg",
		"precio" => array(
			"chupito" => "2", 
			"copa"    => "4"
		)
	);

	public $crema_chocolate = array(
		"nombre" => "crema_chocolate",
		"imagen" => "lic_choco.jpg",
		"precio" => array(
			"chupito" => "2", 
			"copa"    => "4"
		)
	);

	public $crema_cafe = array(
		"nombre" => "crema_cafe",
		"imagen" => "lic_crem_cafe.jpg",
		"precio" => array(
			"chupito" => "2", 
			"copa"    => "4"
		)
	);
}


class Tostas {

	public $brandada = array(
		"nombre" => "Brandada de bacalao",
		"imagen" => "tosta_brandada.jpg",
		"precio" => ["4,5"],
		"descripcion" => "brandada",
		"ingredientes" => ["bacalao", "ajo", "cayena", "aceite", "patata", "leche"],
		"alergenos" => ["gluten", "pescado"]
	);
	
	public $tosta_cecina = array(
		"nombre" => "Cecina de León",
		"imagen" => "tosta_cecina.jpg",
		"precio" => ["4,5"],
		"descripcion" => "tosta_cecina",
		"ingredientes" => ["cecina", "queso_oveja", "pimienta_blanca"],
		"alergenos" => ["gluten"]
	);

	public $tosta_hummus = array(
		"nombre" => "Hummus",
		"imagen" => "tosta_hummus.jpg",
		"precio" => ["3,5"],
		"descripcion" => "hummus",
		"ingredientes" => ["garbanzo", "ajo", "comino", "sal", "aceite", "zumo_limon", "pimenton"],
		"alergenos" => ["gluten"]
	);

	public $roastbeef = array(
		"nombre" => "Roastbeef con salsa de mostaza",
		"imagen" => "tosta_roastbeef.jpg",
		"precio" => ["5"],
		"descripcion" => "roastbeef",
		"ingredientes" => ["ternera", "sal", "aceite", "tomillo", "romero", "mostaza", "miel", "vinagre"],
		"alergenos" => ["gluten", "mostaza"]
	);	

	public $salmon = array(
		"nombre" => "Salmón con crema de queso",
		"imagen" => "tosta_salmon.jpg",
		"precio" => ["4,5"],
		"descripcion" => "salmon",
		"ingredientes" => ["salmon_ahumado", "crema_queso", "pimienta_blanca", "eneldo"],
		"alergenos" => ["gluten", "pescado", "lacteo"]
	);

	public $tosta_ventresca = array(
		"nombre" => "Ventresca con pimientos del piquillo",
		"imagen" => "tosta_ventresca.jpg",
		"precio" => ["4,5"],
		"descripcion" => "tosta_ventresca",
		"ingredientes" => ["ventresca", "pimiento_piquillo", "sal_gorda", "aceite"],
		"alergenos" => ["gluten", "pescado"]
	);
}


class Raciones {

	public $atun = array(
		"nombre"       => "Atún en salazón",
		"imagen"       => "atun.jpg",
		"precio"       => array( "8" ),
		"descripcion"  => "atun",
		"ingredientes" => array(
			"atun", 
			"aceite", 
			"sal", 
			"azucar"
		),
		"alergenos"    => array( "pescado" )
	);

	public $babaganoush = array(
		"nombre"       => "Babaganoush",
		"imagen"       => "babaganoush.jpg",
		"precio"       => array(
			"6", 
			" - ½: 3"
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
		"alergenos"    => array( "sesamo" )
	);

	public $berenjena = array(
		"nombre"       => "Berenjenas rellenas",
		"imagen"       => "berenjena.jpg",
		"precio"       => array( "7" ),
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
		"alergenos"    => array()
	);

	public $canelones_morcilla = array(
		"nombre"       => "Canelones de morcilla de guerra",
		"imagen"       => "canelones_morcilla.jpg",
		"precio"       => array( "7" ),
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
		"alergenos"    => array(),
		"novedad"      => true
	);

	public $carne_mechada = array(
		"nombre"       => "Carne mechada",
		"imagen"       => "carne_mechada.jpg", // imagen de menu
		"precio"       => array( "7" ),
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
		"alergenos"    => array(),
		"novedad"      => true
		);

	public $carpaccio = array(
		"nombre"       => "Carpaccio de calabacín",
		"imagen"       => "carpaccio_calabacin.jpg",
		"precio"       => array( "5" ),
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
		"alergenos"    => array( "soja" )
	);

	public $cecina = array(
		"nombre"       => "Cecina de León",
		"imagen"       => "racion_cecina.jpg",
		"precio"       => array(
			"9", 
			" - ½: 4.5"
		),
		"descripcion"  => "cecina",
		"ingredientes" => array(
			"cecina", 
			"queso_oveja", 
			"pimienta_blanca"
		),
		"alergenos"    => array()
	);

	public $ensalada_remo = array( 
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
		"alergenos"    => array( "soja" )
	);

	public $ventresca = array(
		"nombre"       => "Ensalada de ventresca con p. del piquillo",
		"imagen"       => "ensalada_ventresca.jpg",
		"precio"       => ["9", " - ½: 4,5"],
		"descripcion"  => "ventresca",
		"ingredientes" => ["ventresca", "pimiento_piquillo", "sal_gorda", "aceite"],
		"alergenos"    => ["pescado"]
	);
	
	public $hummus = array(
		"nombre"       => "Hummus",
		"imagen"       => "racion_hummus.jpg",
		"precio"       => ["6", " - ½: 3"],
		"descripcion"  => "hummus",
		"ingredientes" => ["garbanzo", "ajo", "comino", "sal", "aceite", "zumo_limon", "pimenton"],
		"alergenos"    => []
	);

	public $lasagna = array(
		"nombre"       => "Lasagna de setas",
		"imagen"       => "lasagna_setas.jpg",
		"precio"       => ["7"],
		"descripcion"  => "lasagna",
		"ingredientes" => ["pasta_trigo", "setas", "harina", "mantequilla", "nuez_moscada", "sal", "pimienta_blanca", "leche", "tomate_frito", "cayena", "ajo", "aceite"],
		"alergenos"    => []
	);
	
	public $lomo = array(
		"nombre"       => "Lomo embuchado",
		"imagen"       => "lomo.jpg",	// Imagen Ajena
		"precio"       => ["7", " - ½: 3,5"],
		"descripcion"  => "lomo",
		"ingredientes" => ["lomo_embuchado"],
		"alergenos"    => []
	);

	public $migas = array(
		"nombre"       => "Migas",
		"imagen"       => "migas.jpg",
		"precio"       => ["6"],
		"descripcion"  => "migas",
		"ingredientes" => ["pan", "chorizo", "panceta", "aceite", "ajo", "pimenton", "sal"],
		"alergenos"    => ["gluten"],
		"novedad"      => true
	);

	public $mousaka = array(
		"nombre"       => "Mousaka",
		"imagen"       => "mousaka.jpg", // Imagen Ajena
		"precio"       => array( "7" ),
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
		"alergenos"    => array(),
		"novedad"      => true			
	);

	public $papas_2mojos = array(
		"nombre"       => "'Papas arrugás' con 2 mojos",
		"imagen"       => "racion_papa_mojo.jpg",
		"precio"       => array( "6" ),
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
		"alergenos"    => array()
	);

	public $pastel_salmon = array(
		"nombre"       => "Pastel de salmón",
		"imagen"       => "pastel_salmon.jpg",
		"precio"       => array("7"),
		"descripcion"  => "pastel_salmon",
		"ingredientes" => array(
			"salmon_fresco", 
			"nata", 
			"sal", 
			"huevos", 
			"eneldo"
		),
		"alergenos"    => array(
			"pescado", 
			"lacteo"
		)
	);

	public $patatas_rellenas = array(
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
		"alergenos"    => array()
	);
	
	public $patatas_revolconas = array(
		"nombre"       => "Patatas revolconas",
		"imagen"       => "patatas_revolconas.jpg",
		"precio"       => array( "6" ),
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
		"novedad"      => true
	);

	public $ragout = array(
		"nombre"       => "Ragout de ternera",
		"imagen"       => "ragout.jpg",
		"precio"       => array(
			"7", 
			" - ½: 3,5" 
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
		"alergenos"    => array()
	);

	public $solomillo = array(
		"nombre"       => "Solomillo con 2 salsas (cerveza y manzana)",
		"imagen"       => "solomillo.jpg",
		"precio"       => array( "7" ),
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
		"alergenos"    => array( "mostaza" )
	);

	public $solomillo_sal = array(
		"nombre"       => "Solomillo curado a la sal con especias",
		"imagen"       => "solomillo_sal.jpg",
		"precio"       => array( '8' ),
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
		"nombre"       => "Filetes rusos con salsa de tomate",
		"imagen"       => "rusos.jpg",
		"precio"       => array( "7" ),
		"descripcion"  => "rusos",
		"ingredientes" => array(
			"carne_picada", 
			"huevos", 
			"ajo", 
			"pan_rallado", 
			"perejil", 
			"sal", 
			"aceite", 
			"perrins", 
			"pimienta_blanca", 
			"cebolla"
		),
		"alergenos" => array( "huevo" )
	);
}


$cervezas = new Cervezas;

$vinos    = new Vinos;

$licores  = new Licores;

$tostas   = new Tostas;

$raciones = new Raciones;



?>
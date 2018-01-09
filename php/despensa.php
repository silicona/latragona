<?php
	$tostas = new Tostas;

	$raciones = new Raciones;

	class Tostas{

		public $brandada = array(
			"nombre" => "Brandada de bacalao",
			"imagen" => "tosta_brandada.jpg",
			"precio" => ["4,5"],
			"descripcion" => "brandada",
			"ingredientes" => ["bacalao", "ajo", "cayena", "aceite", "patata", "leche"],
			"alergenos" => ["gluten", "pescado", "lacteo"]
			);
		
		public $tosta_cecina = array(
			"nombre" => "Cecina de León",
			"imagen" => "tosta_cecina.jpg",
			"precio" => ["4,5"],
			"descripcion" => "tosta_cecina",
			"ingredientes" => ["cecina", "queso_oveja", "pimienta_blanca"],
			"alergenos" => ["gluten", "lacteo"]
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

	class Raciones{

		public $atun = array(
			"nombre" => "Atún en salazón",
			"imagen" => "atun.jpg",
			"precio" => ["8"],
			"descripcion" => "atun",
			"ingredientes" => ["atun", "aceite", "sal", "azucar"],
			"alergenos" => ["pescado"]
			);

		public $babaganoush = array(
			"nombre" => "Babaganoush",
			"imagen" => "babaganoush.jpg",
			"precio" => ["6", " - ½: 3"],
			"descripcion" => "babaganoush",
			"ingredientes" => ["berenjena", "ajo", "comino", "sesamo", "aceite", "zumo_limon"],
			"alergenos" => ["sesamo"]
			);

		public $berenjena = array(
			"nombre" => "Berenjenas rellenas",
			"imagen" => "berenjena.jpg",
			"precio" => ["7"],
			"descripcion" => "berenjena",
			"ingredientes" => ["berenjena", "pimiento_rojo", "pimiento_verde", "calabacin", "cebolla", "salsa_tomate", "bechamel", "aceite", "sal"],
			"alergenos" => ["lacteo", "gluten"]
			);

		public $canelones_morcilla = array(
			"nombre" => "Canelones de morcilla de guerra",
			"imagen" => "canelones_morcilla.jpg",
			"precio" => ["7"],
			"descripcion" => "canelones_morcilla",
			"ingredientes" => ["pasta_trigo", "berenjena", "pimienta_blanca", "pimenton", "oregano", "cebolla", "bechamel", "aceite", "sal", "queso", "nuez_moscada", "salsa_tomate"],
			"alergenos" => ["lacteo", "gluten"],
			"novedad" => true
			);

		public $carne_mechada = array(
			"nombre" => "Carne mechada",
			"imagen" => "carne_mechada.jpg", // imagen de menu
			"precio" => ["7"],
			"descripcion" => "carne_mechada",
			"ingredientes" => ["lomo", "ajo", "cebolla", "zanahoria", "pimienta_negra", "patata", "mantequilla", "leche", "aceite", "sal"], 
			"alergenos" => ["lacteo"],
			"novedad" => true
			);

		public $carpaccio = array(
			"nombre" => "Carpaccio de calabacín",
			"imagen" => "carpaccio_calabacin.jpg",
			"precio" => ["5"],
			"descripcion" => "carpaccio",
			"ingredientes" => ["calabacin", "pimienta_blanca", "sal_gorda", "queso_oveja", "zumo_lima", "salsa", "zumo_naranja", "vinagre", "salsa_soja", "azucar"],
			"alergenos" => ["lacteo", "soja"]
			);

		public $cecina = array(
			"nombre" => "Cecina de León",
			"imagen" => "racion_cecina.jpg",
			"precio" => ["9", " - ½: 4.5"],
			"descripcion" => "cecina",
			"ingredientes" => ["cecina", "queso_oveja", "pimienta_blanca"],
			"alergenos" => ["lacteo"]
			);

		public $ensalada_remo = array( 
			"nombre" => "Ensalada de remolacha, rúcula y queso de cabra eco",
			"imagen" => "ensalada_remo.jpg",  // Imagen Ajena
			"precio" => ["7"],
			"descripcion" => "ensalada_remo",
			"ingredientes" => ["remolacha", "rucula", "queso_cabra", "aceite", "salsa_agridulce"],
			"alergenos" => ["lacteo", "soja"]
			);

		public $ventresca = array(
			"nombre" => "Ensalada de ventresca con p. del piquillo",
			"imagen" => "ensalada_ventresca.jpg",
			"precio" => ["9", " - ½: 4,5"],
			"descripcion" => "ventresca",
			"ingredientes" => ["ventresca", "pimiento_piquillo", "sal_gorda", "aceite"],
			"alergenos" => ["pescado"]
			);
		
		public $hummus = array(
			"nombre" => "Hummus",
			"imagen" => "racion_hummus.jpg",
			"precio" => ["6", " - ½: 3"],
			"descripcion" => "hummus",
			"ingredientes" => ["garbanzo", "ajo", "comino", "sal", "aceite", "zumo_limon", "pimenton"],
			"alergenos" => []
			);

		public $lasagna = array(
			"nombre" => "Lasagna de setas",
			"imagen" => "lasagna_setas.jpg",
			"precio" => ["7"],
			"descripcion" => "lasagna",
			"ingredientes" => ["pasta_trigo", "setas", "harina", "mantequilla", "nuez_moscada", "sal", "pimienta_blanca", "leche", "tomate_frito", "cayena", "ajo", "aceite"],
			"alergenos" => ["lacteo", "gluten"]
			);
		
		public $lomo = array(
			"nombre" => "Lomo embuchado",
			"imagen" => "lomo.jpg",	// Imagen Ajena
			"precio" => ["7", " - ½: 3,5"],
			"descripcion" => "lomo",
			"ingredientes" => ["lomo_embuchado"],
			"alergenos" => []
			);

		public $migas = array(
			"nombre" => "Migas",
			"imagen" => "migas.jpg",
			"precio" => ["6"],
			"descripcion" => "migas",
			"ingredientes" => ["pan", "chorizo", "panceta", "aceite", "ajo", "pimenton", "sal"],
			"alergenos" => ["gluten"],
			"novedad" => true
			);

		public $mousaka = array(
			"nombre" => "Mousaka",
			"imagen" => "mousaka.jpg", // Imagen Ajena
			"precio" => ["7"],
			"descripcion" => "mousaka",
			"ingredientes" => ["carne_picada", "berenjena", "tomate", "oregano", "laurel", "ajo", "cebolla", "pimiento_verde", "aceite", "sal"], 
			"alergenos" => [],
			"novedad" => true			
			);

		public $papas_2mojos = array(
			"nombre" => "'Papas arrugás' con 2 mojos",
			"imagen" => "racion_papa_mojo.jpg",
			"precio" => ["6"],
			"descripcion" => "papas_2mojos",
			"ingredientes" => ["patata", "sal_gorda", "mojo", "cayena", "ajo", "comino", "vinagre", "sal", "aceite", "pimenton_cilantro"],
			"alergenos" => []
			);

		public $pastel_salmon = array(
			"nombre" => "Pastel de salmón",
			"imagen" => "pastel_salmon.jpg",
			"precio" => ["7"],
			"descripcion" => "pastel_salmon",
			"ingredientes" => ["salmon_fresco", "nata", "sal", "huevos", "eneldo"],
			"alergenos" => ["pescado", "lacteo", "gluten"]
			);

		public $patatas_rellenas = array(
			"nombre" => "Patatas rellenas de pisto o cabrales",
			"imagen" => "racion_patata_rellena.jpg",
			"precio" => ["5"],
			"descripcion" => "patatas_rellenas",
			"ingredientes" => ["patata", "pimiento_rojo", "pimiento_verde", "cebolla", "calabacin", "salsa_tomate", "queso"],
			"alergenos" => ["lacteo"]
			);
		
		public $patatas_revolconas = array(
			"nombre" => "Patatas revolconas",
			"imagen" => "patatas_revolconas.jpg",
			"precio" => ["6"],
			"descripcion" => "patatas_revolconas",
			"ingredientes" => ["patata", "chorizo", "panceta", "aceite", "ajo", "pimenton", "sal"],
			"alergenos" => [],
			"novedad" => true
			);

		public $ragout = array(
			"nombre" => "Ragout de ternera",
			"imagen" => "ragout.jpg",
			"precio" => ["7", " - ½: 3,5"],
			"descripcion" => "ragout",
			"ingredientes" => ["ternera", "zanahoria", "guisante", "cebolla", "ajo", "tomillo", "romero", "oregano", "harina", "sal"],
			"alergenos" => ["gluten"]
			);

		public $solomillo = array(
			"nombre" => "Solomillo con 2 salsas (cerveza y manzana)",
			"imagen" => "solomillo.jpg",
			"precio" => ["7"],
			"descripcion" => "solomillo",
			"ingredientes" => ["solomillo", "cebolla", "cerveza", "manzana", "mostaza", "aceite", "sal"],
			"alergenos" => ["mostaza"]
			);

		public $solomillo_sal = array(
			"nombre" => "Solomillo curado a la sal con especias",
			"imagen" => "solomillo_sal.jpg",
			"precio" => ["8"],
			"descripcion" => "solomillo_sal",
			"ingredientes" => ["solomillo", "pimenton_agridulce", "oregano", "comino", "sal_gorda"],
			"alergenos" => [],
			"novedad" => true
			);

		public $rusos = array(
			"nombre" => "Filetes rusos con salsa de tomate",
			"imagen" => "rusos.jpg",
			"precio" => ["7"],
			"descripcion" => "rusos",
			"ingredientes" => ["carne_picada", "huevos", "ajo", "pan_rallado", "perejil", "sal", "aceite", "perrins", "pimienta_blanca", "cebolla"],
			"alergenos" => ["lacteo", "gluten", "huevo"]
			);
	}
	
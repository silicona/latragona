<?php	

	$cervezas = new Cervezas;

	$vinos = new Vinos;

	$licores = new Licores;

	class Cervezas{
		public $rubia = array(
			"nombre" => "Estrella Levante",
			"imagen" => "rubia.jpg",
			"tipo" => "rubia",
			"precio" => ["caña" => "1.50",
									 "doble" => "2.50",
									 "tercio" => "2.50",
									 "mini" => "3.50"]
			);

		public $sin_alcohol = array(
			"nombre" => "Estrella sin alcohol",
			"imagen" => "estrella_sin.jpg", // Imagen Ajena
			"tipo" => "sin",
			"precio" => ["botellin" => "1.50"]
			);

		public $punta = array(
			"nombre" => "Punta Este",
			"imagen" => "tostada.jpg",
			"tipo" => "tostada",
			"precio" => ["caña" => "1.70",
									 "doble" => "3.00",
									 "mini" => "4.00"]
			);

		public $daura = array(
			"nombre" => "Daura Damm",
			"imagen" => "daura.jpg",
			"tipo" => "sin_glu",
			"precio" => ["tercio" => "2.50"],
			"novedad" => true
			);
	}

	class Vinos {
		// Tintos
		public $puntas = array(
			"nombre" => "7 Puntas (Castilla)",
			"imagen" => "7puntas.jpg",
			"descripcion" => "puntas",
			"precio" => ["copa" => "1.50", "botella" => "12"]
			);

		public $zinio = array(
			"nombre" => "Zinio (La Rioja)",
			"imagen" => "zinio.jpg",
			"descripcion" => "zinio",
			"precio" => ["copa" => "1.80", "botella" => "12"]
			);

		public $muriel = array(
			"nombre" => "Muriel Crianza (La Rioja)",
			"imagen" => "muriel.jpg",
			"descripcion" => "muriel",
			"precio" => ["copa" => "2.40", "botella" => "15"]
			);

		public $menina = array(
			"nombre" => "Menina Crianza (Madrid)",
			"imagen" => "menina.jpg",
			"descripcion" => "menina",
			"precio" => ["copa" => "2.80", "botella" => "18"]
			);

		public $feroes = array(
			"nombre" => "Finca Feroes (Ribera)",
			"imagen" => "feroes.jpg",
			"descripcion" => "feroes",
			"precio" => ["copa" => "2.40", "botella" => "15"]
			);

		public $mureda = array(
			"nombre" => "Mureda (Syrah)",
			"imagen" => "mureda.jpg",
			"descripcion" => "mureda",
			"precio" => ["copa" => "2.40", "botella" => "15"]
			);
  
		public $bierzo = array(
			"nombre" => "Bierzo (Mencia)",
			"imagen" => "bierzo.jpg",
			"descripcion" => "bierzo",
			"precio" => ["copa"=> "2.80", "botella" => "18"]
			);

		public $nuviana_tinto = array(
			"nombre" => "Nuviana",
			"imagen" => "nuviana_tinto.jpg",
			"descripcion" => "nuviana_tinto",
			"precio" => ["copa" => "2.40", "botella" => "15"]
			);

		// Blancos
		public $albarino = array(
			"nombre" => "Albariño (Cosechero)",
			"imagen" => "albarino.jpg",
			"descripcion" => "albarino",
			"precio" => ["copa" => "2.20","botella" => "12"]
			);

		public $bierzo_god = array(
			"nombre" => "Bierzo Godello",
			"imagen" => "bierzo_godello.jpg",
			"descripcion" => "bierzo_god",
			"precio" => ["copa" => "2.80", "botella" => "18"]
			);

		public $lagartijo = array(
			"nombre" => "Lagartijo (Verdejo)",
			"imagen" => "lagartijo.jpg",
			"descripcion" => "lagartijo",
			"precio" => ["copa" => "2.20", "botella" => "12"]
			);

		public $nuviana_blanco = array(
			"nombre" => "Nuviana",
			"imagen" => "nuviana_blanco.jpg",
			"descripcion" => "nuviana_blanco",
			"precio" => ["copa" => "2.20", "botella" => "12"]
			);

		public $sastreria = array(
			"nombre" => "La sastreria (Garnacha)",
			"imagen" => "sastreria.jpg",
			"descripcion" => "sastreria",
			"precio" => ["copa" => "2.20", "botella" => "12"]
			);		

		public $vinaldena = array(
			"nombre" => "Viñaldena (Verdejo)",
			"imagen" => "vinaldena.jpg",
			"descripcion" => "vinaldena",
			"precio" => ["copa" => "2.20", "botella" => "12"]
			);

		// Vermout
		public $vermouth = array(
			"nombre" => "Vermouth Miro",
			"imagen" => "vermouth.jpg",
			"descripcion" => "vermouth",
			"precio" => ["copa" => "2"]
			);
	}

	class Licores {
		public $hierbas = array(
			"nombre" => "hierbas",
			"imagen" => "lic_hierbas.jpg",
			"precio" => ["chupito" => "2", "copa" => "4"]
			);

		public $blanco = array(
			"nombre" => "blanco",
			"imagen" => "lic_blanco.jpg",
			"precio" => ["chupito" => "2", "copa" => "4"]
			);

		public $tostado = array(
			"nombre" => "tostado",
			"imagen" => "lic_tostado.jpg",
			"precio" => ["chupito" => "2", "copa" => "4"]
			);

		public $licor_cafe = array(
			"nombre" => "licor_cafe",
			"imagen" => "lic_cafe.jpg",
			"precio" => ["chupito" => "2", "copa" => "4"]
			);

		public $pacharan = array(
			"nombre" => "pacharan",
			"imagen" => "lic_pacharan.jpg",
			"precio" => ["chupito" => "2", "copa" => "4"]
			);

		public $crema_orujo = array(
			"nombre" => "crema_orujo",
			"imagen" => "lic_crema_orujo.jpg",
			"precio" => ["chupito" => "2", "copa" => "4"]
			);

		public $crema_chocolate = array(
			"nombre" => "crema_chocolate",
			"imagen" => "lic_choco.jpg",
			"precio" => ["chupito" => "2", "copa" => "4"]
			);

		public $crema_cafe = array(
			"nombre" => "crema_cafe",
			"imagen" => "lic_crem_cafe.jpg",
			"precio" => ["chupito" => "2", "copa" => "4"]
			);
	}

?>
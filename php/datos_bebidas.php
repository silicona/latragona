<?php
	ini_set("display_errors", 1);
  error_reporting(E_ALL);

	$url = $_SERVER['HTTP_REFERER'];
	include('traductor.php');
	class Bodega {
		public $puntas = array(
			"nombre" => "7 Puntas",
			"imagen" => "../media/imagenes/empujar/7puntas.jpg",
			"descripcion" => "7puntas"
			);

		public $zinio = array(
			"nombre" => "Zinio",
			"imagen" => "../media/imagenes/empujar/zinio.jpg",
			"descripcion" => "zinio"
			);

		public $muriel = array(
			"nombre" => "Muriel",
			"imagen" => "../media/imagenes/empujar/muriel.jpg",
			"descripcion" => "muriel"
			);

		public $menina = array(
			"nombre" => "Menina",
			"imagen" => "../media/imagenes/empujar/menina.jpg",
			"descripcion" => "menina"
			);

		public $feroes = array(
			"nombre" => "Finca Feroes",
			"imagen" => "../media/imagenes/empujar/feroes.jpg",
			"descripcion" => "feroes"
			);

		public $mureda = array(
			"nombre" => "Mureda",
			"imagen" => "../media/imagenes/empujar/mureda.jpg",
			"descripcion" => "mureda"
			);

		public $bierzo = array(
			"nombre" => "Bierzo",
			"imagen" => "../media/imagenes/empujar/bierzo.jpg",
			"descripcion" => "bierzo"
			);

		public $nuviana_tinto = array(
			"nombre" => "Nuviana",
			"imagen" => "../media/imagenes/empujar/nuviana_tinto.jpg",
			"descripcion" => "nuviana_tinto"
			);

		public $nuviana_blanco = array(
			"nombre" => "Nuviana",
			"imagen" => "../media/imagenes/empujar/nuviana_blanco.jpg",
			"descripcion" => "nuviana_blanco"
			);

		public $albarino = array(
			"nombre" => "Albariño",
			"imagen" => "../media/imagenes/empujar/albarino.jpg",
			"descripcion" => "albarino"
			);

		public $bierzo_god = array(
			"nombre" => "Bierzo Godello",
			"imagen" => "../media/imagenes/empujar/bierzo_godello.jpg",
			"descripcion" => "bierzo_god"
			);

		public $lagartijo = array(
			"nombre" => "Lagartijo",
			"imagen" => "../media/imagenes/empujar/lagartijo.jpg",
			"descripcion" => "lagartijo"
			);

		public $vinaldena = array(
			"nombre" => "Viñaldena",
			"imagen" => "../media/imagenes/empujar/vinaldena.jpg",
			"descripcion" => "vinaldena"
			);

		public $sastreria = array(
			"nombre" => "La sastreria",
			"imagen" => "../media/imagenes/empujar/sastreria.jpg",
			"descripcion" => "sastreria"
			);		

		public $vermouth = array(
			"nombre" => "Vermouth Miro",
			"imagen" => "../media/imagenes/empujar/vermouth.jpg",
			"descripcion" => "vermouth"
			);
	}

	$objeto = new Bodega;
	$bebida = new Cartel;

	if(isset($_GET["vino"])){
		$vino = $objeto -> $_GET["vino"];
		$bebida->beber($vino['nombre'], $vino['imagen'], $vino['descripcion']);
		
		echo "<h2>".$bebida->nombre."</h2>";
		echo "<img src='".$bebida->imagen."' alt='".$bebida->nombre."'>";
		foreach($bebida->descripcion as $frase){
			echo "<p>$frase</p>";
		}
	} else {
		echo "<div style='position: absolute; top: 20%; left: 40%'>";
		echo "<h2 style='position: relative'>Acceso accidental</h2>";
		echo "<img src='../media/logo_red.jpg' width='300px' style='top:10%;'>";
		echo "<p>Vaya, parece que has accedido a esta página de forma accidental.</p>";
		echo "<p>Vuelve a <a href='../empujar.html'>La Tragona</a> para acceder correctamente</p>";
		echo "</div>";
	}

?>
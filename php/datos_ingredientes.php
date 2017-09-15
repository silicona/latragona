<?php
	$url = $_SERVER['HTTP_REFERER'];
	include('traductor.php');
	
	class Comida {
		public $atun = array(
			"nombre" => "atun",
			"imagen" => "../media/imagenes/tragar/atun.JPG",
			"ingredientes" => ["atun", "aceite", "sal", "azucar"]
			);

		public $babaganoush = array(
			"nombre" => "babaganoush",
			"imagen" => "../media/imagenes/tragar/babaganoush.jpg",
			"ingredientes" => ["berenjena", "ajo", "comino", "sesamo", "aceite", "zumo_limon"]
			);

		public $berenjena = array(
			"nombre" => "berenjenas",
			"imagen" => "../media/imagenes/tragar/berenjena.JPG",
			"ingredientes" => ["berenjena", "pimiento_rojo", "pimiento_verde", "calabacin", "cebolla", "salsa_tomate", "bechamel", "aceite", "sal"]
			);
		
		public $brandada = array(
			"nombre" => "brandada_bacalao",
			"imagen" => "../media/imagenes/tragar/tosta_brandada.JPG",
			"ingredientes" => ["bacalao", "ajo", "cayena", "aceite", "patata", "leche"]
			);

		public $carpaccio = array(
			"nombre" => "carpaccio",
			"imagen" => "../media/imagenes/tragar/carpaccio_calabacin.JPG",
			"ingredientes" => ["calabacin", "pimienta_blanca", "sal_gorda", "queso_oveja", "zumo_lima", "salsa", "zumo_naranja", "vinagre", "salsa_soja", "azucar"]
			);

		public $cecina = array(
			"nombre" => "cecina",
			"imagen" => "../media/imagenes/tragar/tosta_cecina.JPG",
			"ingredientes" => ["cecina", "queso_oveja", "pimienta_blanca"]
			);

		public $ensalada_remo = array(
			"nombre" => "ensalada_remo",
			"imagen" => "../imag_ejemplos/comida/ensalada_remo.jpg",
			"ingredientes" => ["remolacha", "rucula", "queso_cabra", "aceite", "salsa_agridulce"]
			);

		public $hummus = array(
			"nombre" => "hummus",
			"imagen" => "../media/imagenes/tragar/racion_hummus.JPG",
			"ingredientes" => ["garbanzo", "ajo", "comino", "sal", "aceite", "zumo_limon", "pimenton"]
			);

		public $lasagna = array(
			"nombre" => "lasagna",
			"imagen" => "../media/imagenes/tragar/lasagna_setas.JPG",
			"ingredientes" => ["pasta_trigo", "setas", "harina", "mantequilla", "nuez_moscada", "sal", "pimienta_blanca", "leche", "tomate_frito", "cayena", "ajo", "aceite"]
			);

		public $lomo = array(
			"nombre" => "lomo_embuchado",
			"imagen" => "../media/imagenes/tragar/lomo.jpg",
			"ingredientes" => ["lomo_embuchado"]
			);

		public $papas_2mojos = array(
			"nombre" => "patata_mojo",
			"imagen" => "../media/imagenes/tragar/racion_papa_mojo.JPG",
			"ingredientes" => ["patata", "sal_gorda", "mojo", "cayena", "ajo", "comino", "vinagre", "sal", "aceite", "pimenton_cilantro"]
			);

		public $pastel_salmon = array(
			"nombre" => "pastel_salmon",
			"imagen" => "../media/imagenes/tragar/pastel_salmon.JPG",
			"ingredientes" => ["salmon_fresco", "nata", "sal", "huevos", "eneldo"]
			);
		
		public $patatas_rellenas = array(
			"nombre" => "patata_rellena",
			"imagen" => "../media/imagenes/tragar/racion_patata_rellena.JPG",
			"ingredientes" => ["patata", "pimiento_rojo", "pimiento_verde", "cebolla", "calabacin", "salsa_tomate", "queso"]
			);

		public $racion_cecina = array(
			"nombre" => "cecina",
			"imagen" => "../media/imagenes/tragar/racion_cecina.JPG",
			"ingredientes" => ["cecina", "queso_oveja", "pimienta_blanca"]
			);
		
		public $ragout = array(
			"nombre" => "ragout",
			"imagen" => "../media/imagenes/tragar/ragout.jpg",
			"ingredientes" => ["ternera", "zanahoria", "guisante", "cebolla", "ajo", "tomillo", "romero", "oregano", "harina", "sal"]
			);

		public $roastbeef = array(
			"nombre" => "roastbeef",
			"imagen" => "../media/imagenes/tragar/tosta_roastbeef.JPG",
			"ingredientes" => ["ternera", "sal", "aceite", "tomillo", "romero", "mostaza", "miel", "vinagre"]
			);

		public $rusos = array(
			"nombre" => "rusos",
			"imagen" => "../media/imagenes/tragar/rusos.jpg",
			"ingredientes" => ["carne_picada", "huevos", "ajo", "pan_rallado", "perejil", "sal", "aceite", "perrins", "pimienta_blanca", "cebolla"]
			);

		public $salmon = array(
			"nombre" => "tosta_salmon",
			"imagen" => "../media/imagenes/tragar/tosta_salmon.JPG",
			"ingredientes" => ["salmon_ahumado", "crema_queso", "pimienta_blanca", "eneldo"]
			);

		public $solomillo = array(
			"nombre" => "solomillo",
			"imagen" => "../media/imagenes/tragar/solomillo.JPG",
			"ingredientes" => ["solomillo", "cebolla", "cerveza", "manzana", "mostaza", "aceite", "sal"]
			);

		public $tortilla = array(
			"nombre" => "tortilla",
			"imagen" => "../media/imagenes/tragar/tosta_hummus.JPG",
			"ingredientes" => ["patata", "huevo", "cebolla", "sal"]
			);

		public $tosta_ventresca = array(
			"nombre" => "tosta_ventresca",
			"imagen" => "../media/imagenes/tragar/tosta_ventresca.JPG",
			"ingredientes" => ["ventresca", "pimiento_piquillo", "sal_gorda", "aceite"]
			);

		public $ventresca = array(
			"nombre" => "ventresca",
			"imagen" => "../media/imagenes/tragar/ensalada_ventresca.JPG",
			"ingredientes" => ["ventresca", "pimiento_piquillo", "sal_gorda", "aceite"]
			);
	}

	$inicial = new Comida;
	$comida = new Cartel;

if(isset($_GET["comida"]) || isset($_GET["menu"])){
	if(isset($_GET["comida"])){
		$com = $inicial -> $_GET["comida"];
		$comida->comer($com['nombre'], $com['imagen'], $com['ingredientes']);
	}
	else if(isset($_GET["menu"])){
		$comida->comer($_GET["nombre"], "../".$_GET["imagen"], explode(" ", $_GET["ingredientes"]));
	}

	echo "<ul>";
	echo "<img src='".$comida->imagen."' alt='imagen de ".$comida->nombre."'>";
	echo "<legend>".$comida->nombre."</legend>";
	foreach($comida->ingredientes as $linea){
		echo "<li>$linea</li>";
	}
	echo "</ul>";
}
else {
		echo "<div style='position: absolute; top: 20%; left: 40%'>";
		echo "<h2 style='position: relative'>Acceso accidental</h2>";
		echo "<img src='../media/logo_red.jpg' width='300px' style='top:10%;'>";
		echo "<p>Vaya, parece que has accedido a esta página de forma accidental.</p>";
		echo "<p>Vuelve a <a href='../tragar.php'>La Tragona</a> para acceder correctamente</p>";
		echo "</div>";
}

?>
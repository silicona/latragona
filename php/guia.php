<!DOCTYPE html>
<html>
<head>
	<title>Bebidas de la Tragona</title>
	<meta charset="utf-8">
	<style>
		* {	margin: 0; padding: 0; }

		body {
			width: 400px;
			height: 500px;
			overflow: hidden;
		}

		section { position: relative;	}

		img {
			position: absolute;
			opacity: 0.3;
			z-index: 0;
		}

		h2 {
			position: relative;
			font-size: 1.7em;
			padding: 1ex 0 .5ex 1ex;
			z-index: 1;
		}

		p {
			position: relative;
			top: 15%;
			padding: 0 1ex 1ex;
			z-index: 1;
			line-height: 1.5em;
			font-size: 1.2em;
			text-align: justify;
		}

		p:first-letter {
			margin-left: 10px;
			font-size: 2em;
			color: #f00;
		}
	</style>
	<?php	
		$url = $_SERVER['HTTP_REFERER'];
		include('traductor.php');
		include 'bodega.php';

		$bebida = new Cartel;
	?>
</head>
<body>
<?php
	if(isset($_GET["vino"])){
		$vino = $vinos -> $_GET["vino"];
		$bebida->beber($vino['nombre'], $vino['imagen'], $vino['descripcion']);
		echo "<section>";
		echo "<img src='../media/imagenes/empujar/".$bebida->imagen."' alt='".$bebida->nombre."'>";
		echo "<h2>".$bebida->nombre."</h2>";
		foreach($bebida->descripcion as $frase){
			echo "<p>$frase</p>";
		}
		echo "</section>";
	} else {
		echo "<div style='position: absolute; top: 20%; left: 40%'>";
		echo "<h2 style='position: relative'>Acceso accidental</h2>";
		echo "<img src='../media/logo_red.jpg' width='300px' style='top:10%;'>";
		echo "<p>Vaya, parece que has accedido a esta página de forma accidental.</p>";
		echo "<p>Vuelve a <a href='../empujar.html'>La Tragona</a> para acceder correctamente</p>";
		echo "</div>";
	}
?>
</body>
</html>

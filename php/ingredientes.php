<!DOCTYPE html>
<html>
<head>
	<title>Ingredientes de la Tragona</title>
	<meta charset="utf-8">

	<style>
		* {	margin: 0; padding: 0; }

		body { overflow: hidden; }

		section { position: relative; }

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


		li {
			position: relative;
			border-bottom: 1px solid blue;
			padding-left: 30px;
		}
	</style>
	
	<?php
		$url = $_SERVER['HTTP_REFERER'];
		include 'traductor.php';
		include 'despensa.php';
		
		$comida = new Cartel;
	?>
</head>
<body>
<?php 
	if(isset($_GET["comida"])){
		$com = ($tostas -> $_GET["comida"]) ? $tostas -> $_GET["comida"] : $raciones -> $_GET['comida'];
		$comida->comer($com['descripcion'], "../media/imagenes/tragar/".$com['imagen'], $com['ingredientes']);

		echo '<section>';
		echo "<img src='".$comida->imagen."' alt='imagen de ".$comida->nombre."'>";
		echo "<h2>".$comida->nombre."</h2>";
		echo "<ul>";
		foreach($comida->ingredientes as $linea){	echo "<li>$linea</li>";	}
		echo "</ul></section>";
	}
	else {
		echo "<section style='position: absolute; top: 20%; left: 40%'>";
		echo "<h2 style='position: relative'>Acceso accidental</h2>";
		echo "<img src='../media/logo_red.jpg' width='300px' style='top:10%;'>";
		echo "<p>Vaya, parece que has accedido a esta página de forma accidental.</p>";
		echo "<p>Vuelve a <a href='../tragar.php'>La Tragona</a> para acceder correctamente</p>";
		echo "</section>";
	}
?>
</body>
</html>

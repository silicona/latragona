<!DOCTYPE html>
<html>
<head>
	<title>Ingredientes de la Tragona</title>
	<meta charset="utf-8">
	<script type="text/javascript">
		// function calcularAlto(){
		// 	lineas = document.getElementsByTagName('li');
		// 	cuerpo = document.getElementsByTagName('body')[0];
		// 	altura = ((lineas.length + 1) * 30 + 50) + "px";
		// 	cuerpo.style.height = altura;
		// }
	</script>

	<style>
		* {
			margin: 0;
			padding: 0;
		}

		body {
			overflow: hidden;
		}

		ul, li {
			list-style: none;
		}

		ul {
			font-size: 14pt;
			line-height: 1.5em;
			margin-top: 0;
			position: relative;
			font-weight: bold;
		}

		legend {
			position: relative;
			font-size: 1.3em;
			margin: 10px;
			text-align: center;
		}

		ul img {
			position: absolute;
			left: 0;
			/*top: -10px;*/
			opacity: 0.4;
			z-index: 0;
			transform: scale(1.2);
		}

		li {
			position: relative;
			border-bottom: 1px solid blue;
			padding-left: 30px;
		}
	</style>
</head>
<body>
<?php include "datos_ingredientes.php" ?>
</body>
</html>

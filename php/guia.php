<!DOCTYPE html>
<html>
<head>
	<title>Bebidas de la Tragona</title>
	<meta charset="utf-8">
	<style>
		* {
			margin: 0;
			padding: 0;
		}

		body {
			width: 400px;
			height: 500px;
			overflow: hidden;
		}

		/*
		ul, li {
			list-style: none;
		}

		ul {
			font-size: 14pt;
			line-height: 1.5em;
			margin:20px;
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
		*/

		img {
			position: absolute;
			/*left: -20%;
			top: -10%;*/
			opacity: 0.4;
			z-index: 0;
		}

		/*
		li {
			position: relative;
			border-bottom: 1px solid blue;
			padding-left: 30px;
		}*/

		h2 {
			position: absolute;
			font-size: 2.5em;
			margin: 20px;
			margin-bottom: 0px;
			padding-left: 30px;
			z-index: 1;
		}

		p {
			position: relative;
			top: 20%;
			margin: 0 20px 5px;
			z-index: 1;
			line-height: 1.5em;
			font-size: 1.2em;
		}

		p:first-letter {
			margin-left: 10px;
			font-size: 2em;
			color: #f00;
		}
	</style>
</head>
<body>
<?php include "datos_bebidas.php" ?>
</body>
</html>

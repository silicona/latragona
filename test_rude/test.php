<?php 
	ini_set("display_errors", "1");
	error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head>

	<title>Rude-Test de Idiomas</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="test.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="index.css"> -->

	<style type="text/css">
		
		.cajon_test:after{

			content:'';
			display: block;
			background-color: #FF0000;
			height: 10px;
			margin: 5px;
		}

	</style>

	<?php require_once 'test_idioma.php'; ?>

</head>
<body>

	<h1>Rude-Test de Idiomas de La Tragona</h1>

	<button onclick="window.location.href = '/tragona/test_rude/'">Volver a Rude-Test Básico de JS</button>&emsp;

	<button onclick="window.location.href = '/tragona/test_rude/test.php'">Recargar Rude-Test de idiomas</button>

	<div id="tests">

		<div class="cajon_test">

			<h2>Rude-Test de un solo idioma</h2>

			<div class="botones">
				<input type="button" onclick="enviarAjax('es');" name="" value="Comprobar castellano con Ajax">&emsp;

				<input type="button" onclick="enviarAjax('en');" name="" value="Comprobar ingles con Ajax">&emsp;
				
				<input type="button" onclick="enviarAjax('de');" name="" value="Comprobar alemán con Ajax">
			</div>

			<br>

			<div id="respuesta"></div>

		</div>

		<div class="cajon_test">

			<h2>Rude-Test comparativo de idiomas</h2>

			<form action ="#" method="post" id="" onsubmit="return comprobar_idiomas();">

				<label>Seleciona un idioma</label>

				<select id="idioma1" name="idioma1">
					<option value="false">Primer idioma</option>
					<option value="es">Castellano</option>
					<option value="en">Ingles</option>
					<option value="it">Italiano</option>
					<option value="fr">Frances</option>
					<option value="de">Aleman</option>
				</select>

				<br><br>

				<label>Selecciona otro idioma</label>

				<select id="idioma2" name="idioma2">
					<option value="false">Eliga el segundo idioma</option>
				</select>

				<br><br>

				<input type="submit" name="comprobar" value="Comparar idiomas" id="comprobar">

				<input type="hidden" name="test_hecho" id="test_hecho" value="<?php echo $test ?>">
				<input type="submit" id="invertir" name="invertir" value ="Invertir" style="opacity: 0;">

			</form>
			
			<?php if( isset($_POST['comprobar']) ){ ?>

				<h4 id='titulo_test'><?php echo $titulo ?></h4>
				
				<div id='respuesta_idioma'><?php echo $resultado ?></div>
			
			<?php }	?>

		</div>

	</div>

</body>
</html>
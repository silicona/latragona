<?php 
	ini_set("display_errors", "1");
	error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head>

	<title>Test</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="test.js"></script>

	<script type="text/javascript">

		function iniciar(){

			document.getElementById('idioma1').addEventListener('change', hacerIdioma2, false);		
			//prepararInversion(); // Falta terminar la inversion
		}

		window.addEventListener('load', iniciar, false);

	</script>

	<?php require_once 'test_idioma.php'; ?>

</head>
<body>

	<h1>Test de Idiomas de La Tragona</h1>

	<button onclick="window.location.href = '/tragona/test/test.php'">Recargar</button>

	<h2>Test de un solo idioma</h2>

	<input type="button" onclick="enviarAjax('es');" name="" value="Comprobar castellano con Ajax">

	<div id="respuesta"></div>

	<h2>Test comparativo de idiomas</h2>

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

</body>
</html>
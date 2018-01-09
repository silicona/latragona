<!DOCTYPE html>
<html>
<head>
	<title>Per deglutire en La Tragona</title>

	<?php
		include 'basica_head.php';
		require_once '../php/lib/spyc/spyc.php';
		$datos = Spyc::YAMLLoad('../php/idiomas/lexico_it.yml');
		require "../php/formulario.php";

		$nombres = $datos['nombre'];
		$alergeno = $datos['alergenos'];
		$producto = $datos['producto'];
		$titulos = $datos['titulos'];
		$inter = true;
		include '../php/presentarProductos.php';

		$navidad = $datos['aviso']['navidad'];
	?>
	
	<link rel="stylesheet" href="../css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="../css/tcal.css">
	<link rel="stylesheet" type="text/css" href="../css/tragar.css">
	
	<script src="../js/lightbox.min.js"></script>
	<script type="text/javascript" src="../js/tcal.js"></script>
	<script type="text/javascript" src="../js/tragar.js"></script>

	<style type="text/css">
		header {
			background-image: url("../media/cabeceras/deglutire.png");
		}

		@media screen and (max-width: 650px), screen and (max-device-width: 650px), screen and (min-width: 651px)and (max-width: 1024px), screen and (min-device-width: 651px)	and (max-device-width: 1024px) {
			header {
				background-image: url("../media/cabeceras/deglutire_sin.png");
			}
		}
	</style>
</head>
<body>
	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="index.php" alt="Inicio" title="Index">La Tragona</a></li>
			<li><a href="spinta.php" alt="Le bevande" title="Le bevande">Per spinta</a></li>
			<li><a href="dovesiamo.php" alt="Dove siamo" title="Dove siamo">Dove siamo</a></li>
			<li><a href="chisiamo.php" alt="Chi siamo" title="Chi siamo">Chi siamo</a></li>
			<li><a href="contattaci.php" alt="Contattaci" title="Contattaci">Contattaci</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="../tragar.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Spanish"><span>Castellano</span></a></li>
			<li><a href="../en/swallow.php" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English"><span>English</span></a></li>
			<li><a href="../fr/avaler.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="French"><span>Français</span></a></li>
			<li><a href="#" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Italian"><span>Italiano</span></a></li>
		</ul>
	</section>

	<div id="contenedor">
		<nav id="superior">
			<ul>
				<li>
					<a href="index.php" alt="Inicio" title="Inicio"><span>La Tragona</span></a>
					<img src="../media/banderas/multi.jpg" alt="multibandera" title="Idiomas" class="movil bandera" id="multi">
					<a href="../tragar.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Web castellano" class="desktop ipad bandera"></a>
					<a href="../en/swallow.php" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English web" class="desktop ipad bandera"></a>
					<a href="../fr/avaler.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="#" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li class="movil ipad" id="logo_superior"><span>Menu</span><img src="../media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="contattaci.php" alt="Contattaci" title="Contattaci">Contattaci</a></li>
				<li class="desktop"><a href="chisiamo.php" alt="Chi siamo" title="Chi siamo">Chi siamo</a></li>
				<li class="desktop"><a href="dovesiamo.php" alt="Dove siamo" title="Dove siamo">Dove siamo</a></li>
				<li class="desktop"><a href="spinta.php" alt="Le bevande" title="Le bevande">Per spinta</a></li>
			</ul>
		</nav>

		<nav id="lateral">
			<ul>
				<li><a href="#tosta" id="tos">Tostas</a></li>
				<li><a href="#racion" id="rac">Porzioni</a></li>
				<li><a href="#reservas" id="res">Riserva</a></li>
			</ul>
		</nav>

		<header></header>

		<section id="tosta">
			<article class="foto">
				<a name="tosta"><p id="tos">Tostas</p></a>
				<?php include '../php/plantillas/cartel_navidades.php' ?>
			</article>	

			<?= mostrarProductos($tostas); ?>
		</section>

		<section id="compartir" class="movil">
			<div class="fb-like" data-href="http://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>
		
		<section id="racion">
			<article class="foto">
				<a name="racion"><p id="rac">Porzioni</p></a>
			</article>	

			<?= mostrarProductos($raciones); ?>
		</section>	
		
		<section id="compartir" class="movil">
			<div class="fb-like" data-href="http://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>
		
		<section id="reservas">
			<article class="foto">
				<a name="reservas"><p id="reser">Prenota il tuo posto</p></a>
			</article>

			<article class="contenido">
				<p class="mitad">
					Per prenotazioni di 4 o più persone, contattateci al telefono 91-148-43-76 o 685-954-545 <img src="../media/iconos/wasap.png" alt="wasap" title="Inviaci una vaschetta" id="wasap">
				</p>

				<p class="mitad">
					Se vuoi che prepariamo il cibo da asporto, usiamo il modulo.
				</p>

				<form action="#reservas" method="post">
					<input type="hidden" name="tipo" value="Reserva en La Tragona">
					<input type="text" name="nombre" id="nombre" size="25" onkeypress="return permite(event, 'car');">
					<span class="error_form">Scrivi il tuo nome, per favore</span>
					<label for="nombre" class="impar">Nome (obbligatorio)</label>

					<input type="text" name="telefono" id="telefono" value="(+34)" size="25" onkeypress="return permite(event, 'num');">
					<span class="error_form">Scrivi il tuo numero di telefono, per favore</span>
					<label for="telefono">Telefono (obbligatorio)</label>
					<input type="text" name="fecha" id="fecha" class="tcal" placeholder="giorno/mese/anno">
					<label for="fecha" class="impar">Data dell'evento</label>

					<label for="mensaje" id="etiquetaTexto">Dimmi cosa hai bisogno:</label>
					<span class="error_form">Non hai chiesto niente.</span>
					<textarea id="mensaje" name="mensaje" columns="50" rows="8"></textarea>
					<input type="submit" name="enviar" id="enviar" value="Submit" onclick="return validarForm();">
					
					<?php if($confirmacion == "Error de envio"){ ?>
						<span id="confirmacion" style="color: #f00; border: 1px solid #f00; background-color: #fdd"><?= $confirmacion ?></span>
					<?php } else if($confirmacion == "Reserva enviada") { ?>
						<span id="confirmacion" style="background-color: #dfd; color: #0f0;	border: 1px solid #0f0;"><?= $confirmacion ?></span>
					<?php } else { ?>
						<span id="confirmacion"><?= $confirmacion ?></span>
					<?php } ?>
				</form>			
			</article>
		</section>
		<div style="clear: both"></div>
	</div>

	<footer id="legal">
		<p>La Tragona <img src="../media/iconos/copyleft.png" alt="Copyleft" title="Copyleft">2017.<span class="desktop"> Autorizzazione per diffondere e copiare il contenuto di Questo sito web, la paternità dello stesso.</span><span class="ipad"> Copia il contenuto di questo web, conservando la paternità.</span></p>
	</footer>
</body>
</html>
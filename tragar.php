<!DOCTYPE html>
<html>
<head>
	<title>Para tragar en La Tragona</title>

	<?php
		include 'head_basico.php';
		require_once('php/lib/spyc/spyc.php');
		$datos = Spyc::YAMLLoad('php/idiomas/lexico_es.yml');
		require("php/formulario.php");
		
		$nombres = $datos['nombre'];
		$alergeno = $datos['alergenos'];
		$producto = $datos['producto'];
		$titulos = $datos['titulos'];
		include 'php/presentarProductos.php';

		$navidad = $datos['aviso']['navidad'];
	?>
	
	<link rel="stylesheet" href="css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="css/tcal.css">
	<link rel="stylesheet" type="text/css" href="css/tragar.css">

	<script src="js/lightbox.min.js"></script>
	<script type="text/javascript" src="js/tcal.js"></script>
	<script type="text/javascript" src="js/tragar.js"></script>
	
</head>
<body>
	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="index.php" alt="Inicio" title="Inicio">La Tragona</a></li>
			<li><a href="empujar.php" alt="Para empujar" title="Las bebidas">Para empujar</a></li>
			<li><a href="dondeestamos.php" alt="Donde estamos" title="Donde estamos">Donde estamos</a></li>
			<li><a href="quienessomos.php" alt="Quienes somos" title="Quienes somos">Quienes somos</a></li>
			<li><a href="contacta.php" alt="Contactar" title="Contacta con nosotras">Contacta</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="#" alt="castellano" title="Web castellano"><img src="media/banderas/espana.png" alt="España" title="España"><span>Castellano</span></a></li>
			<li><a href="/en/swallow.php" alt="english" title="English web"><img src="media/banderas/inglaterra.jpg" alt="Inglaterra" title="Inglaterra"><span>English</span></a></li>
			<li><a href="/fr/avaler.php" alt="français" title="Web français"><img src="media/banderas/francia.png" alt="Francia" title="Francia"><span>Français</span></a></li>
			<li><a href="/it/deglutire.php" alt="italiano" title="Web italiana"><img src="media/banderas/italia.jpg" alt="Italia" title="Italia"><span>Italiano</span></a></li>
		</ul>
	</section>

	<div id="contenedor">
		<nav id="superior">
			<ul>
				<li>
					<a href="index.php" alt="Inicio" title="Inicio"><span>La Tragona</span></a>
					<img src="media/banderas/multi.jpg" alt="multibandera" title="Idiomas" class="movil bandera" id="multi">
					<a href="#" alt="castellano" title="Web castellano"><img src="media/banderas/espana.png" alt="España" title="Web castellano" class="desktop ipad bandera"></a>
					<a href="/en/swallow.php" alt="english" title="English web"><img src="media/banderas/inglaterra.jpg" alt="Inglaterra" title="English web" class="desktop ipad bandera"></a>
					<a href="/fr/avaler.php" alt="français" title="Web français"><img src="media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="/it/deglutire.php" alt="italiano" title="Web italiana"><img src="media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li class="movil ipad" id="logo_superior"><span>Menu</span><img src="media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="contacta.php" alt="Contactar" title="Contacta con nosotras">Contacta</a></li>
				<li class="desktop"><a href="quienessomos.php" alt="Quienes somos" title="Quienes somos">Quienes somos</a></li>
				<li class="desktop"><a href="dondeestamos.php" alt="Donde estamos" title="Donde estamos">Donde estamos</a></li>
				<li class="desktop"><a href="empujar.php" alt="Para empujar" title="Las bebidas">Para empujar</a></li>
			</ul>
		</nav>

		<nav id="lateral">
			<ul>
				<li><a href="#tosta" id="tos">Tostas</a></li>
				<li><a href="#racion" id="rac">Raciones</a></li>
				<li><a href="#reservas" id="res">Reservas</a></li>
			</ul>
		</nav>

		<header></header>

		<section id="tosta">
			<article class="foto">
				<a name="tosta"><p id="tos">Tostas</p></a>
				<?php include 'php/plantillas/cartel_navidades.php' ?>
			</article>	

			<?= mostrarProductos($tostas); ?>

		</section>

		<section id="compartir" class="movil">
			<div class="fb-like" data-href="http://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>

		<section id="racion">
			<article class="foto">
				<a name="racion"><p id="rac">Raciones</p></a>
			</article>	

			<?= mostrarProductos($raciones); ?>

		</section>	
		
		<section id="compartir" class="movil">
			<div class="fb-like" data-href="http://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>
		
		<section id="reservas">
			<article class="foto">
				<a name="reservas"><p id="reser">Reserva tu mesa</p></a>
			</article>

			<article class="contenido">
				<p class="mitad">
					Para reservas de 4 o más personas, contacta con nosotras en el teléfono 91-148-43-76 o 685-954-545 <img src="media/iconos/wasap.png" alt="wasap" title="Envianos un wasap" id="wasap">
				</p>

				<p class="mitad">
					Si quieres que te preparemos comida para llevar, utiliza el formulario.
				</p>

				<form action="#reservas" method="post">
					<input type="hidden" name="tipo" value="Reserva en La Tragona">

					<input type="text" data-label="Nombre (requerido)" name="nombre" id="nombre" size="25" onkeypress="return permite(event, 'car');">
					<span class="error_form">Escribe tu nombre, por favor</span>
					<label for="nombre" class="impar">Nombre (requerido)</label>

					<input type="text" name="telefono" id="telefono" value="(+34)" size="25" onkeypress="return permite(event, 'num');">
					<span class="error_form">Escribe tu telefono, por favor</span>
					<label for="telefono" class="impar">Telefono (requerido)</label>

					<input type="text" name="fecha" id="fecha" class="tcal" placeholder="dia/mes/año">
					<label for="fecha">Fecha del evento</label>

					<label for="mensaje" id="etiquetaTexto">Dinos qué necesitas:</label>
					<span class="error_form">No has pedido nada.</span>
					<textarea id="mensaje" name="mensaje" columns="50" rows="8"></textarea>

					<input type="submit" name="enviar" id="enviar" value="Enviar" onclick="return validarForm();">
					
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
		<p>La Tragona <img src="media/iconos/copyleft.png" alt="Copyleft" title="Copyleft"> 2017.<span class="desktop"> Se autoriza la difusión y copia del contenido de este sitio web, manteniendo la autoría del mismo.</span><span class="ipad"> Copia el contenido de esta web, conservando la autoría.</span></p>
	</footer>
</body>
</html>
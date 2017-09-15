<?php
	//setcookie(idioma, "castellano")
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contacta con La Tragona</title>

	<meta charset="utf-8">
	<meta name="author" content="alejoizquierdomartinez@gmail.com">
	<meta name="keywords" content="tapas, tapeo, tostas, raciones, vino, licor artesanal, cañas, Rastro, junto al Rastro, a dos minutos del Rastro, La Latina, Tirso de Molina, oasis en Madrid, buen ambiente, sitio tranquilo, trato personal, ambiente agradable, bar de barrio, punto de encuentro, cercania a teatro, Lavapies, teatro, cabaret, buen precio, precio asequible, sin gluten, carta de alergenos, comida cuidada, productos frescos, productos de mercado, mercado cercano, productor cercano, pan ecologico, pan artesanal, vino ecologico, prensa alternativa, wifi gratis">
	<meta name="description" content ="">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">

	<link rel="shortcut icon" href="media/icono.ico" type="image/x-icon">
	<link rel="icon" href="media/icono.ico" type="image/x-icon">
	
	<link rel="stylesheet" type="text/css" href="css/tripoli_index.css">
	<link rel="stylesheet" type="text/css" href="css/contactar.css">

	<?php
		require_once('php/lib/spyc/spyc.php');
		$datos = Spyc::YAMLLoad('php/idiomas/lexico_es.yml');
	?>

	<script type="text/javascript">
		titular = '<?= $datos['aviso']['agosto']['titular']; ?>';
		vuelta = '<?= $datos['aviso']['agosto']['vuelta']; ?>';
	</script>
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="js/contactar.js"></script>
</head>
<body>
	<div id="fb-root"></div>

	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="index.php" alt="Inicio" title="Inicio">La Tragona</a></li>
			<li><a href="tragar.php" alt="Para tragar" title="Tapas y raciones">Para tragar</a></li>
			<li><a href="empujar.php" alt="Para empujar" title="Las bebidas">Para empujar</a></li>
			<li><a href="dondeestamos.php" alt="Donde estamos" title="Donde estamos">Donde estamos</a></li>
			<li><a href="quienessomos.php" alt="Quienes somos" title="Quienes somos">Quienes somos</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="#" alt="castellano" title="Web castellano"><img src="media/banderas/espana.png" alt="España" title="España"><span>Castellano</span></a></li>
			<li><a href="/en/contactus.php" alt="english" title="English web"><img src="media/banderas/inglaterra.jpg" alt="Inglaterra" title="Inglaterra"><span>English</span></a></li>
			<li><a href="/fr/index.php" alt="français" title="Web français"><img src="media/banderas/francia.png" alt="Francia" title="Francia"><span>Français</span></a></li>
			<li><a href="/it/index.php" alt="italiano" title="Web italiana"><img src="media/banderas/italia.jpg" alt="Italia" title="Italia"><span>Italiano</span></a></li>
		</ul>
	</section>

	<header>
		La Tragona<span class="desktop ipad"> está a la escucha</span><br>
		<img src="media/logo_red.gif" alt="La Tragona" title="La Tragona">
	</header>

	<div id="leer">
		<p><span class="movil ipad">Contáctanos</span><span class="desktop">Contacta con nosotras</span></p>
	</div>
	
	<div id="contenedor">
		<nav id="superior">
			<ul>
				<li>
					<a href="index.php" alt="Inicio" title="Inicio"><span>La Tragona</span></a>
					<img src="media/banderas/multi.jpg" alt="multibandera" title="Idiomas" class="movil bandera" id="multi">
					<a href="#" alt="castellano" title="Web castellano"><img src="media/banderas/espana.png" alt="España" title="Web castellano" class="desktop ipad bandera"></a>
					<a href="/en/contactus.php" alt="english" title="English web"><img src="media/banderas/inglaterra.jpg" alt="Inglaterra" title="English web" class="desktop ipad bandera"></a>
					<a href="/fr/inl.php" alt="français" title="Web français"><img src="media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="/it/inl.php" alt="italiano" title="Web italiana"><img src="media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li class="movil ipad" id="logo_superior"><span>Menu</span><img src="media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="quienessomos.php" alt="Quienes somos" title="Quienes somos">Quienes somos</a></li>
				<li class="desktop"><a href="dondeestamos.php" alt="Donde estamos" title="Donde estamos">Donde estamos</a></li>
				<li class="desktop"><a href="empujar.php" alt="Para empujar" title="Las bebidas">Para empujar</a></li>
				<li class="desktop"><a href="tragar.php" alt="Para tragar" title="Tapas y raciones">Para tragar</a></li>
			</ul>
		</nav>

		<h1>Contacta con La Tragona</h1>

		<aside id="fotolateral">
			<img src="media/imagenes/venus.jpg" alt="Dionaea Muscipula" title="Venus atrapamosca <em>Dionaea Muscipula</em>">		
		</aside>

		<section class="desktop ipad" id="texto">
			<p>
				Si tienes alguna duda, quieres hacer una reserva o deseas comentarnos, no dudes en decirnoslo. Haznos crecer con tu opinión.<br>
				<br>
				Puedes llamarnos, o escribirnos un wasap, al telefono 91-148-43-76 o al 685-954-545 <img src="media/iconos/wasap.png" alt="wasap" title="Envianos un wasap" id="wasap">.<br>
				<br>
				Tambíen atendemos el email contactanos@latragona.com, o puedes dejar aqui mismo tus palabras y nuestra planta carnivora nos las trasmitirá.
			</p>
		</section>

		<section class="movil">
			<p>
				Haznos crecer con tu opinión. Contáctanos a traves del teléfono 91-148-43-76 o al 685-954-545 <img src="media/iconos/wasap.png" alt="wasap" title="Envianos un wasap" id="wasap">.<br>
				Tambien puedes escribir a contactanos@latragona.com o utilizar nuestro formulario:
			</p>
		</section>

		<section id="rrss">
			<ul class="desktop">
				<li><span>Siguenos en:</span></li>
				<li><a href="https://www.facebook.com/latragonalavapies"><img src="media/iconos/fb.jpg" alt="Facebook" title="facebook.com/latragonalavapies"><span>@latragonalavapies</span></a></li>
				<li><a href="https://twitter.com/TragonaBar"><img src="media/iconos/twitter.png" alt="Twitter" title="@TragonaBar"><span>@tragonabar</span></a></li>
			</ul>
		</section>

		<section id="formulario">
			<a name="formulario"></a>
			<?php require "php/formulario.php" ?>
			<form action="#formulario" method="post">
				<input type="hidden" name="tipo" value="Comentarios para La Tragona">

				<input type="text" name="nombre" id="nombre" size="25" onkeypress="return permite(event, 'car');">
				<span class="error_form">Escribe tu nombre<span class="desktop">, por favor</span></span>
				<label for="nombre">Nombre (requerido)</label>

				
				<input type="text" name="email" id="email" size="25">
				<span class="error_form">Escribe tu email<span class="desktop">, por favor</span></span>
				<span class="error_form"><span class="desktop">La direccion email no es válida</span><span class="movil">Email no valido</span></span>
				<label for="email" class="impar">Email (requerido)</label>

				<label for="mensaje" id="etiquetaTexto">Dejanos tus comentarios:</label>
				<span class="error_form">No has comentado nada.</span>
				<textarea id="mensaje" name="mensaje" columns="50" rows="8"></textarea>
				
				<input type="submit" name="enviar" id="enviar" value="Enviar" onclick="return validarForm();">

				<?php if($confirmacion == "Error de envio"){ ?>
					<span id="confirmacion" style="color: #f00; border: 1px solid #f00; background-color: #fdd"><?= $confirmacion ?></span>
				<?php } else if($confirmacion == "Comentario enviado") { ?>
					<span id="confirmacion" style="background-color: #dfd; color: #0f0;	border: 1px solid #0f0;"><?= $confirmacion ?></span>
				<?php } else { ?>
					<span id="confirmacion"><?= $confirmacion ?></span>
				<?php } ?>
			</form>
		</section>

		<section id="compartir" class="movil">
			<div class="fb-like" data-href="http://latragona.esy.es" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>
		<div style="clear: both"></div>
	</div>

	<footer id="legal">
		<p>La Tragona <img src="media/iconos/copyleft.png" alt="Copyleft" title="Copyleft"> 2017.<span class="desktop"> Se autoriza la difusión y copia del contenido de este sitio web, manteniendo la autoría del mismo.</span><span class="ipad"> Copia el contenido de esta web, conservando la autoría.</span></p>
	</footer>

</body>
</html>
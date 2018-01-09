<!DOCTYPE html>
<html>
<head>
	<title>Contattate La Tragona</title>

	<?php
		include 'basica_head.php';
		require "../php/formulario.php";
		//require_once('../php/lib/spyc/spyc.php');
		//$datos = Spyc::YAMLLoad('../php/idiomas/lexico_it.yml');
	?>

	<link rel="stylesheet" type="text/css" href="../css/contactar.css">
	<script type="text/javascript" src="../js/contactar.js"></script>

</head>
<body>
	<div id="fb-root"></div>

	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="index.php" alt="Inicio" title="Inicio">La Tragona</a></li>
			<li><a href="spinta.php" alt="Le bevande" title="Le bevande">Per spinta</a></li>
			<li><a href="deglutire.php" alt="Capsule e porzioni" title="Capsule e porzioni">Per deglutire</a></li>
			<li><a href="dovesiamo.php" alt="Dove siamo" title="Dove siamo">Dove siamo</a></li>
			<li><a href="chisiamo.php" alt="Chi siamo" title="Chi siamo">Chi siamo</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="../contacta.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Spanish"><span>Castellano</span></a></li>
			<li><a href="../en/contactus.php" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English"><span>English</span></a></li>
			<li><a href="../fr/contacteznous.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="French"><span>Français</span></a></li>
			<li><a href="#" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Italian"><span>Italiano</span></a></li>
		</ul>
	</section>

	<header>
		La Tragona<span class="desktop ipad"> sta ascoltando</span><br>
		<img src="../media/logo_red.gif" alt="La Tragona" title="La Tragona">
	</header>

	<div id="leer">
		<p>Contattaci</p>
	</div>
	
	<div id="contenedor">
		<nav id="superior">
			<ul>
				<li>
					<a href="index.php" alt="Inicio" title="Inicio"><span>La Tragona</span></a>
					<img src="../media/banderas/multi.jpg" alt="multibandera" title="Idiomas" class="movil bandera" id="multi">
					<a href="../contacta.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Web castellano" class="desktop ipad bandera"></a>
					<a href="#" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English web" class="desktop ipad bandera"></a>
					<a href="../fr/contacteznous.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="../it/contattaci.php" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li class="movil ipad" id="logo_superior"><span>Menu</span><img src="../media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="chisiamo.php" alt="Chi siamo" title="Chi siamo">Chi siamo</a></li>
				<li class="desktop"><a href="dovesiamo.php" alt="Dove siamo" title="Dove siamo">Dove siamo</a></li>
				<li class="desktop"><a href="spinta.php" alt="Le bevande" title="Le bevande">Per spinta</a></li>
				<li class="desktop"><a href="deglutire.php" alt="Capsule e porzioni" title="Capsule e porzioni">Per deglutire</a></li>
			</ul>
		</nav>
		<h1>Contattate La Tragona</h1>

		<aside id="fotolateral">
			<img src="../media/imagenes/venus.jpg" alt="Dionaea Muscipula" title="Venus atrapamosca <em>Dionaea Muscipula</em>">		
		</aside>

		<section class="desktop ipad" id="texto">
			<p>
				Se hai qualche dubbio, vuoi fare una prenotazione o vuoi commentare, non esitate a dirci. Farci crescere con la tua opinione.
				<br>
				<br>
				Potete chiamarci o scrivere una risciacquatura al telefono 91-148-43-76 o 658-954-545 <img src="../media/iconos/wasap.png" alt="wasap" title="Scrivici un wasap" id="wasap">.
				<br>
				<br>
				Ci occupiamo anche dell'e-mail contactanos@latragona.com oppure potete lasciare qui le tue parole e la nostra pianta carnivora li trasmetterà.
			</p>
		</section>

		<section class="movil">
			<p>
				Farci crescere con la tua opinione. Potete chiamarci al telefono 91-148-43-76 o 658-954-545 <img src="../media/iconos/wasap.png" alt="wasap" title="Scrivici un wasap" id="wasap">.<br>
				Puoi anche scrivere a contactanos@latragona.com oppure utilizzare il nostro modulo:
			</p>
		</section>

		<section id="rrss">
			<ul class="desktop">
				<li><span>Seguici:</span></li>
				<li><a href="https://www.facebook.com/latragonalavapies"><img src="../media/iconos/fb.jpg" alt="Facebook" title="facebook.com/latragonalavapies"><span>@latragonalavapies</span></a></li>
				<li><a href="https://twitter.com/TragonaBar"><img src="../media/iconos/twitter.png" alt="Twitter" title="@TragonaBar"><span>@tragonabar</span></a></li>
			</ul>
		</section>

		<section id="formulario">
			<a name="formulario"></a>
			<form action="#formulario" method="post">
				<input type="hidden" name="tipo" value="Comentarios para La Tragona">

				<input type="text" name="nombre" id="nombre" size="25" onkeypress="return permite(event, 'car');">
				<span class="error_form">Scrivi il tuo nome<span class="desktop">, per favore</span></span>
				<label for="nombre">Nome (obbligatorio)</label>

				
				<input type="text" name="email" id="email" size="25">
				<span class="error_form">Scrivi la tua email<span class="desktop">, per favore</span></span>
				<span class="error_form"><span class="desktop">Indirizzo email non valido</span><span class="movil">L'email non è valida</span></span>
				<label for="email" class="impar">Email (obbligatorio)</label>

				<label for="mensaje" id="etiquetaTexto">Lasciaci i tuoi commenti:</label>
				<span class="error_form">Non hai detto niente.</span>
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
			<div class="fb-like" data-href="http://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>

		<div style="clear: both"></div>
	</div>

	<footer id="legal">
		<p>La Tragona <img src="../media/iconos/copyleft.png" alt="Copyleft" title="Copyleft">2017.<span class="desktop"> Autorizzazione per diffondere e copiare il contenuto di Questo sito web, la paternità dello stesso.</span><span class="ipad"> Copia il contenuto di questo web, conservando la paternità.</span></p>
	</footer>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Pour avaler dans La Tragona</title>

	<?php
		include 'tete_base.php';
		require_once('../php/lib/spyc/spyc.php');
		$datos = Spyc::YAMLLoad('../php/idiomas/lexico_fr.yml');
		include "../php/formulario.php";

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
			background-image: url("../media/cabeceras/avaler.png");
		}

		@media screen and (max-width: 650px), screen and (max-device-width: 650px), screen and (min-width: 651px)and (max-width: 1024px), screen and (min-device-width: 651px)	and (max-device-width: 1024px) {
			header {
				background-image: url("../media/cabeceras/avaler_sin.png");
			}
		}
	</style>
</head>
<body>
	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="index.php" alt="Index" title="Index">La Tragona</a></li>
			<li><a href="pousser.php" alt="Pour pousser" title="Les boissons">Pour pousser</a></li>
			<li><a href="ousommesnous.php" alt="Où sommes-nous" title="Où sommes-nous">Où sommes-nous</a></li>
			<li><a href="quisommesnous.php" alt="Qui sommes nous" title="Qui sommes nous">Qui sommes nous</a></li>
			<li><a href="contacteznous.php" alt="Contactez-nous" title="Contactez-nous">Contactez-nous</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="../tragar.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Spanish"><span>Castellano</span></a></li>
			<li><a href="../en/swallow.php" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English"><span>English</span></a></li>
			<li><a href="#" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="French"><span>Français</span></a></li>
			<li><a href="../it/deglutire.php" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Italian"><span>Italiano</span></a></li>
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
					<a href="#" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="../it/deglutire.php" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li class="movil ipad" id="logo_superior"><span>Menu</span><img src="../media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="contacteznous.php" alt="Contactez-nous" title="Contactez-nous">Contactez-nous</a></li>
				<li class="desktop"><a href="quisommesnous.php" alt="Qui sommes nous" title="Qui sommes nous">Qui sommes nous</a></li>
				<li class="desktop"><a href="ousommesnous.php" alt="Où sommes-nous" title="Où sommes-nous">Où sommes-nous</a></li>
				<li class="desktop"><a href="pousser.php" alt="Pour pousser" title="Les boissons">Pour pousser</a></li>
			</ul>
		</nav>

		<nav id="lateral">
			<ul>
				<li><a href="#tosta" id="tos">Toasties</a></li>
				<li><a href="#racion" id="rac">Portions</a></li>
				<li><a href="#reservas" id="res">Réserve</a></li>
			</ul>
		</nav>

		<header></header>

		<section id="tosta">
			<article class="foto">
				<a name="tosta"><p id="tos">Toasties</p></a>
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
				<a name="racion"><p id="rac">Portions</p></a>
			</article>	

			<?= mostrarProductos($raciones); ?>
		</section>	
		
		<section id="compartir" class="movil">
			<div class="fb-like" data-href="http://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>
		
		<section id="reservas">
			<article class="foto">
				<a name="reservas"><p id="reser">Réserver votre place</p></a>
			</article>

			<article class="contenido">
				<p class="mitad">
					Pour les réservations de 4 personnes ou plus, contactez-nous au téléphone 91-148-43-76 o 685-954-545 <img src="../media/iconos/wasap.png" alt="wasap" title="Envoyez-nous un wasap" id="wasap">
				</p>

				<p class="mitad">
					Si vous souhaitez que nous préparions des plats à emporter, utilisez le formulaire.
				</p>

				<form action="#reservas" method="post">
					<input type="hidden" name="tipo" value="Reserva en La Tragona">
					
					<input type="text" name="nombre" id="nombre" size="25" onkeypress="return permite(event, 'car');">
					<span class="error_form">Écrivez votre nom, s'il vous plaît</span>
					<label for="nombre" class="impar">Nom (obligatoire)</label>

					<input type="text" name="telefono" id="telefono" value="(+34)" size="25" onkeypress="return permite(event, 'num');">
					<span class="error_form">Écrivez votre téléphone, s'il vous plaît</span>
					<label for="telefono" class="impar">Téléphone (obligatoire)</label>
					
					<input type="text" name="fecha" id="fecha" class="tcal" placeholder="jour/mois/année">
					<label for="fecha">Date de l'événement</label>

					<label for="mensaje" id="etiquetaTexto">Dites-nous ce dont vous avez besoin:</label>
					<span class="error_form">Vous n'avez rien demandé.</span>
					<textarea id="mensaje" name="mensaje" columns="50" rows="8"></textarea>
					<input type="submit" name="enviar" id="enviar" value="Soumettre" onclick="return validarForm();">
					
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
		<p>La Tragona <img src="../media/iconos/copyleft.png" alt="Copyleft" title="Copyleft"> 2017.<span class="desktop"> Autorisation de diffuser et de copier le contenu de ce site, La paternité de la même.</span><span class = "ipad"> Copiez le contenu de ce site, en conservant la paternité.</span></p>
	</footer>
</body>
</html>
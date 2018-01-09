<!DOCTYPE html>
<html>
<head>
	<title>Contactez La Tragona</title>

	<?php
		include 'tete_base.php';
		require "../php/formulario.php";
	?>

	<link rel="stylesheet" type="text/css" href="../css/contactar.css">

	<script type="text/javascript" src="../js/contactar.js"></script>

</head>
<body>
	<div id="fb-root"></div>

	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="index.php" alt="Index" title="Index">La Tragona</a></li>
			<li><a href="pousser.php" alt="Pour pousser" title="Les boissons">Pour pousser</a></li>
			<li><a href="avaler.php" alt="Pour avaler" title="Tapas and portions">Pour avaler</a></li>
			<li><a href="ousommesnous.php" alt="Où sommes-nous" title="Où sommes-nous">Où sommes-nous</a></li>
			<li><a href="quisommesnous.php" alt="Qui sommes nous" title="Qui sommes nous">Qui sommes nous</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="../contacta.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Spanish"><span>Castellano</span></a></li>
			<li><a href="../en/contactus.php" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English"><span>English</span></a></li>
			<li><a href="#" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="French"><span>Français</span></a></li>
			<li><a href="../it/contattaci.php" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Italian"><span>Italiano</span></a></li>
		</ul>
	</section>

	<header>
		La Tragona<span class="desktop ipad"> écoute</span><br>
		<img src="../media/logo_red.gif" alt="La Tragona" title="La Tragona">
	</header>

	<div id="leer">
		<p>Contactez-nous</p>
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
				<li class="desktop"><a href="quisommesnous.php" alt="Qui sommes nous" title="Qui sommes nous">Qui sommes nous</a></li>
				<li class="desktop"><a href="ousommesnous.php" alt="Où sommes-nous" title="Où sommes-nous">Où sommes-nous</a></li>
				<li class="desktop"><a href="pousser.php" alt="Pour pousser" title="Les boissons">Pour pousser</a></li>
				<li class="desktop"><a href="avaler.php" alt="Pour avaler" title="Tapas and portions">Pour avaler</a></li>
			</ul>
		</nav>
		<h1>Contactez La Tragona</h1>

		<aside id="fotolateral">
			<img src="../media/imagenes/venus.jpg" alt="Dionaea Muscipula" title="Venus atrapamosca <em>Dionaea Muscipula</em>">		
		</aside>

		<section class="desktop ipad" id="texto">
			<p>
				Si vous avez des doutes, vous souhaitez faire une réservation ou si vous souhaitez commenter, n'hésitez pas à nous le dire. Faites-nous grandir avec votre avis.
				<br>
				<br>
				Vous pouvez nous appeler, ou écrivez-nous un savon, au téléphone 91-148-43-76 ou 658-954-545 <img src="../media/iconos/wasap.png" alt="wasap" title="Écrivez-nous un gâteau" id="wasap">.
				<br>
				<br>
				Nous prenons également en charge l'email contactanos@latragona.com, ou vous pouvez laisser vos mots ici et notre usine carnivore nous les transmettra.
			</p>
		</section>

		<section class="movil">
			<p>
				Faites-nous grandir avec votre avis. Vous pouvez nous appeler par téléphone au 91-148-43-76 ou au 658-954-545 <img src="../media/iconos/wasap.png" alt="wasap" title="Écrivez-nous un gâteau" id="wasap">.<br>
				Vous pouvez également écrire à contactanos@latragona.com ou utiliser notre formulaire:
			</p>
		</section>

		<section id="rrss">
			<ul class="desktop">
				<li><span>Suivez nous:</span></li>
				<li><a href="https://www.facebook.com/latragonalavapies"><img src="../media/iconos/fb.jpg" alt="Facebook" title="facebook.com/latragonalavapies"><span>@latragonalavapies</span></a></li>
				<li><a href="https://twitter.com/TragonaBar"><img src="../media/iconos/twitter.png" alt="Twitter" title="@TragonaBar"><span>@tragonabar</span></a></li>
			</ul>
		</section>
		
		<section id="formulario">
			<a name="formulario"></a>
			<form action="#formulario" method="post">
				<input type="hidden" name="tipo" value="Comentarios para La Tragona">

				<input type="text" name="nombre" id="nombre" size="25" onkeypress="return permite(event, 'car');">
				<span class="error_form">Écrivez votre nom<span class="desktop">, s'il vous plaît</span></span>
				<label for="nombre">Nom (obligatoire)</label>

				
				<input type="text" name="email" id="email" size="25">
				<span class="error_form">Ecrivez votre email<span class="desktop">, s'il vous plaît</span></span>
				<span class="error_form"><span class="desktop">L'adresse email n'est pas valide</span><span class="movil">Email non valide</span></span>
				<label for="email" class="impar">Email (obligatoire)</label>

				<label for="mensaje" id="etiquetaTexto">Leave us your comments:</label>
				<span class="error_form">Vous n'avez rien dit.</span>
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
		<p>La Tragona <img src="../media/iconos/copyleft.png" alt="Copyleft" title="Copyleft"> 2017.<span class="desktop"> Autorisation de diffuser et de copier le contenu de ce site, La paternité de la même.</span><span class = "ipad"> Copiez le contenu de ce site, en conservant la paternité.</span></p>
	</footer>

</body>
</html>
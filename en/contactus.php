<!DOCTYPE html>
<html>
<head>
	<title>Contact La Tragona</title>

	<meta charset="utf-8">
	<meta name="author" content="alejoizquierdomartinez@gmail.com">
	<meta name="keywords" content="Tapas, toasts, tapeo, portions, wine, homemade liquor, cañas, Rastro, next to the Rastro, two minutes from the Rastro, La Latina, Tirso de Molina, oasis in Madrid, Bar area, meeting point, near to theater, Lavapies, theater, cabaret, good price, affordable price, gluten free, allergen menu, caring food, fresh food, fresh produce, market products, nearby market, ecological bread, Artisan bread, organic wine, alternative press, free wifi">
	<meta name="description" content ="Tapas bar where you can enjoy toasts and gluten-free rations made with market products and organic wine, as well as artisan and combined liquors that remove hiccups. Located next to the Rastro, in the center of Madrid, between La Latina and Tirso de Molina.">

	<meta name="viewport" content="width=device-width; initial-scale=1.0">

	<link rel="shortcut icon" href="../media/icono.ico" type="image/x-icon">
	<link rel="icon" href="../media/icono.ico" type="image/x-icon">
	
	<link rel="stylesheet" type="text/css" href="../css/tripoli_index.css">
	<link rel="stylesheet" type="text/css" href="../css/contactar.css">

	<?php
		require "../php/formulario.php";
		require_once('../php/lib/spyc/spyc.php');
		$datos = Spyc::YAMLLoad('../php/idiomas/lexico_en.yml');
	?>
	<script type="text/javascript">
		titular = '<?= $datos['aviso']['agosto']['titular']; ?>';
		vuelta = '<?= $datos['aviso']['agosto']['vuelta']; ?>';
	</script>

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="../js/contactar.js"></script>
</head>
<body>
	<div id="fb-root"></div>

	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="index.php" alt="Inicio" title="Inicio">La Tragona</a></li>
			<li><a href="push.php" alt="Para empujar" title="The drinks">To push</a></li>
			<li><a href="swallow.php" alt="Para tragar" title="Tapas and portions">To swallow</a></li>
			<li><a href="whereweare.php" alt="Donde estamos" title="Where we are">Where we are</a></li>
			<li><a href="whoweare.php" alt="Quienes somos" title="Who we are">Who we are</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="../contacta.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Spanish"><span>Castellano</span></a></li>
			<li><a href="#" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English"><span>English</span></a></li>
			<li><a href="../fr/contacteznous.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="French"><span>Français</span></a></li>
			<li><a href="../it/contattaci.php" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Italian"><span>Italiano</span></a></li>
		</ul>
	</section>

	<header>
		La Tragona<span class="desktop ipad"> is listening</span><br>
		<img src="../media/logo_red.gif" alt="La Tragona" title="La Tragona">
	</header>

	<div id="leer">
		<p>Contact us</p>
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
				<li class="desktop"><a href="whoweare.php" alt="Quienes somos" title="Who we are">Who we are</a></li>
				<li class="desktop"><a href="whereweare.php" alt="Donde estamos" title="Where we are">Where we are</a></li>
				<li class="desktop"><a href="push.php" alt="Para empujar" title="The drinks">For push</a></li>
				<li class="desktop"><a href="swallow.php" alt="Para tragar" title="Tapas and portions">For swallow</a></li>
			</ul>
		</nav>
		<h1>Contact La Tragona</h1>

		<aside id="fotolateral">
			<img src="../media/imagenes/venus.jpg" alt="Dionaea Muscipula" title="Venus atrapamosca <em>Dionaea Muscipula</em>">		
		</aside>

		<section class="desktop ipad" id="texto">
			<p>
				If you have any doubts, you want to make a reservation or you want to comment, do not hesitate to tell us. Make us grow with your opinion.<br>
				<br>
				You can call us, or write us a wasap, on the phone 91-148-43-76 or 685-954-545 <img src="../media/iconos/wasap.png" alt="wasap" title="Write us a wasap" id="wasap">.<br>
				<br>
				We also take care of the email contactanos@latragona.com, or you can leave your words here and our carnivorous plant will transmit them to us.
			</p>
		</section>

		<section class="movil">
			<p>
				Make us grow with your opinion. You can call us on the phone 91-148-43-76 or 685-954-545 <img src="../media/iconos/wasap.png" alt="wasap" title="Write us a wasap" id="wasap">.<br>
				You can also write to contactanos@latragona.com or use our form:
			</p>
		</section>

		<section id="rrss">
			<ul class="desktop">
				<li><span>Follow us:</span></li>
				<li><a href="https://www.facebook.com/latragonalavapies"><img src="../media/iconos/fb.jpg" alt="Facebook" title="facebook.com/latragonalavapies"><span>@latragonalavapies</span></a></li>
				<li><a href="https://twitter.com/TragonaBar"><img src="../media/iconos/twitter.png" alt="Twitter" title="@TragonaBar"><span>@tragonabar</span></a></li>
			</ul>
		</section>

		<section id="formulario">
			<a name="formulario"></a>
			<form action="#formulario" method="post">
				<input type="hidden" name="tipo" value="Comentarios para La Tragona">

				<input type="text" name="nombre" id="nombre" size="25" onkeypress="return permite(event, 'car');">
				<span class="error_form">Write your name<span class="desktop">, please</span></span>
				<label for="nombre">Name (required)</label>

				
				<input type="text" name="email" id="email" size="25">
				<span class="error_form">Write your email<span class="desktop">, please</span></span>
				<span class="error_form"><span class="desktop">Email address is not valid</span><span class="movil">Email not valid</span></span>
				<label for="email" class="impar">Email (required)</label>

				<label for="mensaje" id="etiquetaTexto">Leave us your comments:</label>
				<span class="error_form">You have not said anything.</span>
				<textarea id="mensaje" name="mensaje" columns="50" rows="8"></textarea>
				
				<input type="submit" name="enviar" id="enviar" value="Submit" onclick="return validarForm();">

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
		<p>La Tragona <img src="../media/iconos/copyleft.png" alt="Copyleft" title="Copyleft"> 2017.<span class="desktop"> Authorization to disseminate and copy the content of this website, The authorship of the same.</span><span class = "ipad"> Copy the contents of this web, conserving the authorship.</span></p>
	</footer>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Find La Tragona</title>

	<?php
		include 'basic_head.php';
		require_once('../php/lib/spyc/spyc.php');
		$datos = Spyc::YAMLLoad('../php/idiomas/lexico_en.yml');
		$mapa = $datos['mapa'];
		$navidad = $datos['aviso']['navidad'];
	?>

	<script type="text/javascript">
		mapa_abierto = '<?= $mapa['abierto']; ?>';
		mapa_abrimos = '<?= $mapa['abrimos']; ?>';
		mapa_en = '<?= $mapa['en']; ?>';
		mapa_hora = '<?= $mapa['hora']; ?>';
		mapa_horas = '<?= $mapa['horas']; ?>';
		mapa_mañana = '<?= $mapa['mañana']; ?>';
		mapa_logo = '<?= $mapa['logo']; ?>';
		mapa_info = '<?= $mapa['info']; ?>';
	</script>

	<link rel="stylesheet" type="text/css" href="../css/dondeestamos.css">
	<script type="text/javascript" src="../js/dondeestamos.js"></script>

	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAokzjV_CnyuUEoa08ljyZpdhE7y3nlRUM&callback=iniciarMapa"></script>
</head>
<body>

	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="index.php" alt="Inicio" title="Inicio">La Tragona</a></li>
			<li><a href="push.php" alt="Para empujar" title="The drinks">To push</a></li>
			<li><a href="swallow.php" alt="Para tragar" title="Tapas and portions">To swallow</a></li>
			<li><a href="whoweare.php" alt="Quienes somos" title="Who we are">Who we are</a></li>
			<li><a href="contactus.php" alt="Contactar" title="Contact us">Contact us</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="../dondeestamos.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Spanish"><span>Castellano</span></a></li>
			<li><a href="#" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English"><span>English</span></a></li>
			<li><a href="../fr/ousommesnous.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="French"><span>Français</span></a></li>
			<li><a href="../it/dovesiamo.php" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Italian"><span>Italiano</span></a></li>
		</ul>
	</section>

	<header>
		La Tragona<span class="desktop"> opens the doors</span><br>
		<img src="../media/logo_red.gif" alt="La Tragona" title="La Tragona">
	</header>

	<div id="leer">
		<p>Find us</p>
	</div>
	
	<div id="contenedor">
		<nav id="superior">
			<ul>
				<li>
					<a href="index.php" alt="Inicio" title="Inicio"><span>La Tragona</span></a>
					<img src="../media/banderas/multi.jpg" alt="multibandera" title="Idiomas" class="movil bandera" id="multi">
					<a href="../dondeestamos.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Web castellano" class="desktop ipad bandera"></a>
					<a href="#" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English web" class="desktop ipad bandera"></a>
					<a href="../fr/ousommesnous.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="../it/dovesiamo.php" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li class="movil ipad" id="logo_superior"><span>Menu</span><img src="../media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="contactus.php" alt="Contactar" title="Contact us">Contact us</a></li>
				<li class="desktop"><a href="whoweare.php" alt="Quienes somos" title="Who we are">Who we are</a></li>
				<li class="desktop"><a href="push.php" alt="Para empujar" title="The drinks">For push</a></li>
				<li class="desktop"><a href="swallow.php" alt="Para tragar" title="Tapas and portions">For swallow</a></li>
			</ul>
		</nav>

		<h1>Around La Tragona</h1>

		<div id="mapa"></div>
		<section>
			<?php include '../php/plantillas/cartel_navidades.php' ?>
			<p>
				We have rescued a neighborhood bar next to the Rastro, between La Latina, Tirso de molina and Lavapies, on Calle Juanelo, 11: an oasis in the center of Madrid, in a neighborhood with a great multicultural tradition.<span class="ocultar_ipad"> We are pleased to be a meeting point for those who enter or leave it.</span><br>
				<br>
				We remain open from Tuesday to Saturday, from 1 to 4 in the afternoon and from 8 to 12 at night. On Sundays we are from 12 in the morning until 4 in the afternoon.<br>
				<br>
				If you are coming to visit <a href="http://www.elrastro.org/" alt="El rastro" title="elrastro.org">el Rastro</a><span class="ocultar_ipad">, attend The <a href="http://www.summummusic.com/" alt="Teatro Nuevo Apolo" title="Web del Nuevo Apolo">Teatro Nuevo Apolo theater</a>, go through <a href="https://www.traficantes.net/" alt="Traficantes de sueños" title="traficantes.net">Traficantes de sueños bookshop</a> or just buy bread at <a href="http://panifiesto.es/" alt="Panifiesto.org" title="Panifiesto.org">Panifiesto</a></span>, in La Tragona you will find a quiet place and a good environment to drink an organic wine or a gluten-free tosta made with fresh products.
			</p>
		</section>

		<section class="movil">
			<p>
				We have rescued a neighborhood bar in Calle Juanelo, 11, next to the Rastro, between La Latina, Tirso de molina and Lavapies.<br>
				<br>
				We remain open from Tuesday to Saturday, from 1 to 4 in the afternoon and from 8 to 12 at night. On Sundays we are from 12 in the morning until 4 in the afternoon.<br>
				<br>
				If you are coming to visit <a href="http://www.elrastro.org/" alt="El rastro" title="elrastro.org">el Rastro</a>, attend The <a href="http://www.summummusic.com/" alt="Teatro Nuevo Apolo" title="Web del Nuevo Apolo">Nuevo Apolo theater</a>, go through <a href="https://www.traficantes.net/" alt="Traficantes de sueños" title="traficantes.net">Traficantes de sueños bookshop</a> or just buy bread at <a href="http://panifiesto.es/" alt="Panifiesto.org" title="Panifiesto.org">Panifiesto</a>, in La Tragona you will find a quiet place and a good atmosphere to drink an acological wine or a toast made with fresh products.
			</p>
		</section>

		<section id="compartir" class="movil">
			<div class="fb-like" data-href="http://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>

		<section id="rrss">
			<ul class="desktop">
				<li><span>Follow us:</span></li>
				<li><a href="https://www.facebook.com/latragonalavapies"><img src="../media/iconos/fb.jpg" alt="Facebook" title="facebook.com/latragonalavapies"><span>@latragonalavapies</span></a></li>
				<li><a href="https://twitter.com/TragonaBar"><img src="../media/iconos/twitter.png" alt="Twitter" title="@TragonaBar"><span>@tragonabar</span></a></li>
			</ul>
		</section>
		<div style="clear: both"></div>
	</div>

	<footer id="legal">
		<p>La Tragona <img src="../media/iconos/copyleft.png" alt="Copyleft" title="Copyleft"> 2017.<span class="desktop"> Authorization to disseminate and copy the content of this website, The authorship of the same.</span><span class = "ipad"> Copy the contents of this web, conserving the authorship.</span></p>
	</footer>

</body>
</html>
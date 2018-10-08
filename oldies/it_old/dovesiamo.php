<!DOCTYPE html>
<html lang="it">
<head>
	<title>Trova la tragona</title>
	
	<?php
		include 'basica_head.php';
		require_once('../php/lib/spyc/spyc.php');
		$datos = Spyc::YAMLLoad('../php/idiomas/lexico_it.yml');
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
			<li><a href="spinta.php" alt="Le bevande" title="Le bevande">Per spinta</a></li>
			<li><a href="deglutire.php" alt="Capsule e porzioni" title="Capsule e porzioni">Per deglutire</a></li>
			<li><a href="chisiamo.php" alt="Chi siamo" title="Chi siamo">Chi siamo</a></li>
			<li><a href="contattaci.php" alt="Contattaci" title="Contattaci">Contattaci</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="../dondeestamos.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Spanish"><span>Castellano</span></a></li>
			<li><a href="../en/whereweare.php" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English"><span>English</span></a></li>
			<li><a href="../fr/ousommesnous.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="French"><span>Français</span></a></li>
			<li><a href="#" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Italian"><span>Italiano</span></a></li>
		</ul>
	</section>

	<header>
		La Tragona<span class="desktop"> apre le porte</span><br>
		<img src="../media/logo_red.gif" alt="La Tragona" title="La Tragona">
	</header>

	<div id="leer">
		<p>Trovaci</p>
	</div>
	
	<div id="contenedor">
		<nav id="superior">
			<ul>
				<li>
					<a href="index.php" alt="Inicio" title="Inicio"><span>La Tragona</span></a>
					<img src="../media/banderas/multi.jpg" alt="multibandera" title="Idiomas" class="movil bandera" id="multi">
					<a href="../dondeestamos.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Web castellano" class="desktop ipad bandera"></a>
					<a href="../en/whereweare.php" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English web" class="desktop ipad bandera"></a>
					<a href="../fr/ousommesnous.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="#" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li class="movil ipad" id="logo_superior"><span>Menu</span><img src="../media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="contattaci.php" alt="Contattaci" title="Contattaci">Contattaci</a></li>
				<li class="desktop"><a href="chisiamo.php" alt="Chi siamo" title="Chi siamo">Chi siamo</a></li>
				<li class="desktop"><a href="spinta.php" alt="Le bevande" title="Le bevande">Per spinta</a></li>
				<li class="desktop"><a href="deglutire.php" alt="Capsule e porzioni" title="Capsule e porzioni">Per deglutire</a></li>
			</ul>
		</nav>

		<h1>Intorno alla Tragona</h1>

		<div id="mapa"></div>

		<section>

			<article id="cartel_navidad">
				<?php include '../php/plantillas/cartel_navidades.php' ?>
			</article>

			<p>
				Abbiamo salvato un bar di quartiere vicino al Rastro, tra La Latina, Tirso de molina e Lavapies, su Calle Juanelo, 11: un'oasi nel centro di Madrid, in un quartiere con una grande tradizione multiculturale.<span class="ocultar_ipad"> Siamo lieti di essere un punto di incontro per chi entra o lo lascia.</span>
				<br>
				<br>
				Rimaniamo aperti da martedì a sabato, dalle 1 alle 4 del pomeriggio e dalle 8 alle 12 di notte. Domenica siamo dalle 12 del mattino alle 4 del pomeriggio.
				<br>
				<br>
				Se stai venendo a visitare <a href="http://www.elrastro.org/" alt="El rastro" title="elrastro.org">el Rastro</a><span class="ocultar_ipad">, partecipare al <a href="http://www.summummusic.com/" alt="Teatro Nuevo Apolo" title="Teatro Nuevo Apolo">teatro Nuevo Apolo</a>, passare attraverso la <a href="https://www.traficantes.net/" alt="Libreria Traficantes de sueños" title="Libreria Traficantes de sueños">Libreria Traficantes de sueños</a> o semplicemente comprate il pane a <a href="http://panifiesto.es/" alt="panetteria Panifiesto" title="panetteria Panifiesto">Panifiesto</a></span>, a La Tragona troverete un posto tranquillo e un buon ambiente per bere un vino biologico o un tostato senza glutine con prodotti freschi.
			</p>
		</section>

<!-- 		<section class="movil">
			<p>
				Abbiamo salvato un bar di quartiere a Calle Juanelo, 11, accanto al Rastro, tra La Latina, Tirso de molina e Lavapies.
				<br>
				<br>
				Rimaniamo aperti da martedì a sabato, dalle 1 alle 4 del pomeriggio e dalle 8 alle 12 di notte. Domenica siamo dalle 12 del mattino alle 4 del pomeriggio.
				<br>
				<br>
				Se stai venendo a visitare <a href="http://www.elrastro.org/" alt="La traccia" title="Elrastro.org">el Rastro</a>, partecipare al <a href="http://www.summummusic.com/" alt="Teatro Nuevo Apolo" title ="Teatro Nuevo Apolo">teatro Nuevo Apolo</a>, visita <a href ="https://www.traficantes.net" alt="panetteria Panifiesto" title="panetteria Panifiesto">Panifiesto</a>, a La Tragona troverete un posto tranquillo e una buona atmosfera per bere un vino o un tostato acologico fatto con prodotti freschi.
			</p>
		</section> -->

		<section id="compartir" class="movil">
			<div class="fb-like" data-href="http://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>

		<section id="rrss">
			<ul class="desktop">
				<li><span>Seguici:</span></li>
				<li><a href="https://www.facebook.com/latragonalavapies"><img src="../media/iconos/fb.jpg" alt="Facebook" title="facebook.com/latragonalavapies"><span>@latragonalavapies</span></a></li>
				<li><a href="https://twitter.com/TragonaBar"><img src="../media/iconos/twitter.png" alt="Twitter" title="@TragonaBar"><span>@tragonabar</span></a></li>
			</ul>
		</section>
		<div style="clear: both"></div>
	</div>

	<footer id="legal">
		<p>La Tragona <img src="../media/iconos/copyleft.png" alt="Copyleft" title="Copyleft">2017.<span class="desktop"> Autorizzazione per diffondere e copiare il contenuto di Questo sito web, la paternità dello stesso.</span><span class="ipad"> Copia il contenuto di questo web, conservando la paternità.</span></p>
	</footer>

</body>
</html>
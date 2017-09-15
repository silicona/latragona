<!DOCTYPE html>
<html>
<head>
	<title>Trouver La Tragona</title>

	<meta charset="utf-8">
	<meta name="author" content="alejoizquierdomartinez@gmail.com">
	<meta name="keywords" content="Tapas, toasts, tapeo, portions, vin, liqueur maison, cañas, Rastro, à côté du Rastro, à deux minutes du Rastro, La Latina, Tirso de Molina, oasis de Madrid, Bar, point de rencontre, près du théâtre, Lavapies , Théâtre, cabaret, bon prix, prix abordable, sans gluten, menu allergène, nourriture décontractée, produits frais, produits frais, produits du marché, marché à proximité, pain écologique, pain artisan, vin bio, presse alternative, wifi gratuit">
	<meta name="description" content ="Bar à tapas où vous pourrez déguster des toasts et des rations sans gluten fabriquées avec des produits du marché et du vin bio, ainsi que des boissons artisanales et combinées qui éliminent le hoquet. Situé à côté du Rastro, au centre de Madrid, entre La Latina et Tirso de Molina.">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="../media/icono.ico" type="image/x-icon">
	<link rel="icon" href="../media/icono.ico" type="image/x-icon">
	
	<link rel="stylesheet" type="text/css" href="../css/tripoli_index.css">
	<link rel="stylesheet" type="text/css" href="../css/dondeestamos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	
	<?php
		require_once('../php/lib/spyc/spyc.php');
		$datos = Spyc::YAMLLoad('../php/idiomas/lexico_fr.yml');
	?>
	<script type="text/javascript">
		mapa_info = '<?= $datos['mapa']['info']; ?>';
		titular = '<?= $datos['aviso']['agosto']['titular']; ?>';
		vuelta = '<?= $datos['aviso']['agosto']['vuelta']; ?>';
	</script>

	<script type="text/javascript" src="../js/dondeestamos.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAokzjV_CnyuUEoa08ljyZpdhE7y3nlRUM&callback=iniciarMapa"></script>
</head>
<body>

	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="index.php" alt="Index" title="Index">La Tragona</a></li>
			<li><a href="pousser.php" alt="Pour pousser" title="Les boissons">Pour pousser</a></li>
			<li><a href="avaler.php" alt="Pour avaler" title="Tapas and portions">Pour avaler</a></li>
			<li><a href="quisommesnous.php" alt="Qui sommes nous" title="Qui sommes nous">Qui sommes nous</a></li>
			<li><a href="contacteznous.php" alt="Contactez-nous" title="Contactez-nous">Contactez-nous</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="../dondeestamos.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Spanish"><span>Castellano</span></a></li>
			<li><a href="../en/whereweare.php" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English"><span>English</span></a></li>
			<li><a href="#" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="French"><span>Français</span></a></li>
			<li><a href="../it/dovesiamo.php" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Italian"><span>Italiano</span></a></li>
		</ul>
	</section>

	<header>
		La Tragona<span class="desktop"> ouvre les portes</span><br>
		<img src="../media/logo_red.gif" alt="La Tragona" title="La Tragona">
	</header>

	<div id="leer">
		<p>Trouve nous</p>
	</div>
	
	<div id="contenedor">
		<nav id="superior">
			<ul>
				<li>
					<a href="index.php" alt="Inicio" title="Inicio"><span>La Tragona</span></a>
					<img src="../media/banderas/multi.jpg" alt="multibandera" title="Idiomas" class="movil bandera" id="multi">
					<a href="../dondeestamos.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Web castellano" class="desktop ipad bandera"></a>
					<a href="../en/whereweare.php" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English web" class="desktop ipad bandera"></a>
					<a href="#" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="../it/dovesiamo.php" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li class="movil ipad" id="logo_superior"><span>Menu</span><img src="../media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="contacteznous.php" alt="Contactez-nous" title="Contactez-nous">Contactez-nous</a></li>
				<li class="desktop"><a href="quisommesnous.php" alt="Qui sommes nous" title="Qui sommes nous">Qui sommes nous</a></li>
				<li class="desktop"><a href="pousser.php" alt="Pour pousser" title="Les boissons">Pour pousser</a></li>
				<li class="desktop"><a href="avaler.php" alt="Avaler" title="Tapas and portions">ÇPour avaler</a></li>
			</ul>
		</nav>

		<h1>Autour de La Tragona</h1>

		<div id="mapa"></div>
		<section class="desktop">
			<p>
				Nous avons sauvé un bar de quartier à côté du Rastro, entre La Latina, Tirso de molina et Lavapies, sur la Calle Juanelo, 11: une oasis au centre de Madrid, dans un quartier avec une grande tradition multiculturelle. <span class = "ocultar_ipad "> Nous sommes heureux d'être un point de rencontre pour ceux qui entrent ou la quittent.</span>
				<br>
				<br>
				Nous restons ouverts du mardi au samedi, du 1 à 4 heures de l'après-midi et de 8 à 12 heures du soir. Le dimanche, nous sommes à partir de 12 heures du matin jusqu'à 4 heures de l'après-midi.
				<br>
				<br>
				Si vous venez de visiter <a href="http://www.elrastro.org/" alt="El rastro" title="elrastro.org">el Rastro</a><span class="ocultar_ipad">, participez à la <a href="http://www.summummusic.com/" alt="Teatro Nuevo Apolo" title="Web del Nuevo Apolo">Théâtre Nuevo Apolo</a>, passez par <a href="https://www.traficantes.net/" alt="Traficantes de sueños" title="traficantes.net">Librairie Traficantes de sueños</a> ou tout simplement acheter du pain à <a href="http://panifiesto.es/" alt="Panifiesto.org" title="Panifiesto.org">Panifiesto</a></span>, à La Tragona, vous trouverez un endroit calme et un bon environnement pour boire un vin organique ou un tosta sans gluten fabriqué avec des produits frais.
			</p>
		</section>

		<section class="movil">
			<p>
				Nous avons sauvé un bar de quartier dans Calle Juanelo, 11, à côté du Rastro, entre La Latina, Tirso de molina et Lavapies.
				<br>
				<br>
				Nous restons ouverts du mardi au samedi, du 1 à 4 heures de l'après-midi et de 8 à 12 heures du soir. Le dimanche, nous sommes à partir de 12 heures du matin jusqu'à 4 heures de l'après-midi.
				<br>
				<br>
				Si vous venez de visiter <a href="http://www.elrastro.org/" alt="El rastro" title="elrastro.org">el Rastro</a>, participez à la <a href="http://www.summummusic.com/" alt="Teatro Nuevo Apolo" title="Web del Nuevo Apolo">Théâtre Nuevo Apolo</a>, passez par <a href="https://www.traficantes.net/" alt="Traficantes de sueños" title="traficantes.net">Librairie Traficantes de sueños</a> ou tout simplement acheter du pain à <a href="http://panifiesto.es/" alt="Panifiesto.org" title="Panifiesto.org">Panifiesto</a>, à La Tragona, vous trouverez un endroit calme et une bonne ambiance pour boire un vin ou un toast préparé avec des produits frais.
			</p>
		</section>

		<section id="compartir" class="movil">
			<div class="fb-like" data-href="http://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>

		<section id="rrss">
			<ul class="desktop">
				<li><span>Suivez nous:</span></li>
				<li><a href="https://www.facebook.com/latragonalavapies"><img src="../media/iconos/fb.jpg" alt="Facebook" title="facebook.com/latragonalavapies"><span>@latragonalavapies</span></a></li>
				<li><a href="https://twitter.com/TragonaBar"><img src="../media/iconos/twitter.png" alt="Twitter" title="@TragonaBar"><span>@tragonabar</span></a></li>
			</ul>
		</section>
		<div style="clear: both"></div>
	</div>

	<footer id="legal">
		<p>La Tragona <img src="../media/iconos/copyleft.png" alt="Copyleft" title="Copyleft"> 2017.<span class="desktop"> Autorisation de diffuser et de copier le contenu de ce site, La paternité de la même.</span><span class = "ipad"> Copiez le contenu de ce site, en conservant la paternité.</span></p>
	</footer>

</body>
</html>
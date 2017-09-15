<!DOCTYPE html>
<html>
<head>
	<title>Bienvenue dans La Tragona</title>

	<meta charset="utf-8">
	<meta name="author" content="alejoizquierdomartinez@gmail.com">
	<meta name="keywords" content="Tapas, toasts, tapeo, portions, vin, liqueur maison, cañas, Rastro, à côté du Rastro, à deux minutes du Rastro, La Latina, Tirso de Molina, oasis de Madrid, Bar, point de rencontre, près du théâtre, Lavapies , Théâtre, cabaret, bon prix, prix abordable, sans gluten, menu allergène, nourriture décontractée, produits frais, produits frais, produits du marché, marché à proximité, pain écologique, pain artisan, vin bio, presse alternative, wifi gratuit">
	<meta name="description" content ="Bar à tapas où vous pourrez déguster des toasts et des rations sans gluten fabriquées avec des produits du marché et du vin bio, ainsi que des boissons artisanales et combinées qui éliminent le hoquet. Situé à côté du Rastro, au centre de Madrid, entre La Latina et Tirso de Molina.">
	
	<meta name="viewport" content="width=device-width; initial-scale=1.0">

	<link rel="shortcut icon" href="../media/icono.ico" type="image/x-icon">
	<link rel="icon" href="../media/icono.ico" type="image/x-icon">
	
	<link rel="stylesheet" type="text/css" href="../css/tripoli_index.css">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	
	<?php
		require_once('../php/lib/spyc/spyc.php');
		$datos = Spyc::YAMLLoad('../php/idiomas/lexico_fr.yml');
	?>
	<script type="text/javascript">
		titular = '<?= $datos['aviso']['agosto']['titular']; ?>';
		vuelta = '<?= $datos['aviso']['agosto']['vuelta']; ?>';
	</script>

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="../js/index.js"></script>
</head>
<body>
	<div id="fb-root"></div>

	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="avaler.php" alt="Pour avaler" title="Tapas and portions">Pour avaler</a></li>
			<li><a href="pousser.php" alt="Pour pousser" title="Les boissons">Pour pousser</a></li>
			<li><a href="ousommesnous.php" alt="Où sommes-nous" title="Où sommes-nous">Où sommes-nous</a></li>
			<li><a href="quisommesnous.php" alt="Qui sommes nous" title="Qui sommes nous">Qui sommes nous</a></li>
			<li><a href="contacteznous.php" alt="Contactez-nous" title="Contactez-nous">Contactez-nous</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="../index.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Spanish"><span>Castellano</span></a></li>
			<li><a href="../en/index.php" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English"><span>English</span></a></li>
			<li><a href="#" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="French"><span>Français</span></a></li>
			<li><a href="../it/index.php" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Italian"><span>Italiano</span></a></li>
		</ul>
	</section>

	<header>
		<span class="desktop">Bienvenue dans </span>La Tragona<br>
		<img src="../media/logo_red.gif" alt="La Tragona" title="La Tragona">
	</header>

	<div id="leer">
		<p>Connais-nous</p>
	</div>
	
	<div id="contenedor">
		<nav id="superior">
			<ul>
				<li>
					<span>La Tragona</span>
					<img src="../media/banderas/multi.jpg" alt="multibandera" title="Idiomas" class="movil bandera" id="multi">
					<a href="../index.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Web castellano" class="desktop ipad bandera"></a>
					<a href="../en/index.php" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English web" class="desktop ipad bandera"></a>
					<a href="#" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="../it/index.php" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li class="movil ipad" id="logo_superior"><span>Menu</span><img src="../media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="contacteznous.php" alt="Contactez-nous" title="Contactez-nous">Contactez-nous</a></li>
				<li class="desktop"><a href="quisommesnous.php" alt="Qui sommes nous" title="Qui sommes nous">Qui sommes nous</a></li>
				<li class="desktop"><a href="ousommesnous.php" alt="Où sommes-nous" title="Où sommes-nous">Où sommes-nous</a></li>
				<li class="desktop"><a href="pousser.php" alt="Pour pousser" title="Les boissons">Pour pousser</a></li>
				<li class="desktop"><a href="avaler.php" alt="Avaler" title="Tapas and portions">ÇPour avaler</a></li>
				<div style="clear: both"></div>
			</ul>
		</nav>

		<h1>Bienvenue dans La Tragona</h1>
			<section class="desktop">
				<p>
					Nous avons reconstruit cet espace pour obtenir un bar de quartier avec une atmosphère agréable. Ici, vous pourrez déguster une <a href="avaler.php" alt="Avaler" title="Tapas and portions">cuisine soignée</a>, fabriquée avec des produits du marché, du pain fait maison et <a href="pousser.php" alt="Pour pousser" title="Les boissons">des vins écologiques</a>.
					<br>
					<br>
					Du mardi au dimanche, nous sommes une oasis à Madrid, <a href="ousommesnous.php" alt="Où sommes-nous" title="Où sommes-nous">un endroit tranquille entre Tirso de molina et La Latina</a> où prendre des cañas et des rations sans gluten à un prix abordable, entouré de librairies et de théâtres, où vous pouvez également trouver la presse alternative.
					<br>
					<br>
					En plus des vins, des liqueurs maison, des toasts et des rations, nous avons un plat de la journée préparé avec des produits frais des marchés voisins, fruit du <a href="quisommesnous.php" alt="Qui sommes nous" title="Qui sommes nous">bon travail de Luis y Pilar</a>.
					<br>
					<br>
					Un point de rencontre des saveurs traditionnelles, une bonne atmosphère et une innovation simple, à côté du Rastro. C'est <a href="contacteznous.php" alt="Contactez-nous" title="Contactez-nous">La Tragona</a>.
				</p>
				<img src="../media/logo_grande.jpg" alt="logo" title="La Tragona" id="fotolateral">
			</section>

			<section class="movil">
				<p>
					Bar de quartier avec une atmosphère agréable. Ici, vous pourrez déguster une <a href="avaler.php" alt="Avaler" title="Tapas and portions">cuisine soignée</a>, fabriquée avec des produits du marché, du pain fait maison et <a href="pousser.php" alt="Pour pousser" title="Les boissons">des vins écologiques</a>.
					<br>
					<br>
					Du mardi au dimanche, nous sommes une oasis à Madrid, <a href="ousommesnous.php" alt="Où sommes-nous" title="Où sommes-nous">un endroit tranquille entre Tirso de molina et La Latina</a> où prendre des cañas et des rations sans gluten à un prix abordable.
					<br>
					<br>
					En semaine, il y a un plat de la journée, avec des produits frais provenant de marchés proches, fruit du <a href="quisommesnous.php" alt="Qui sommes nous" title="Qui sommes nous">bon travail de Luis y Pilar</a>.
					<br>
					<br>
					Un point de rencontre des saveurs traditionnelles, une bonne atmosphère et une innovation simple, à côté du Rastro. C'est <a href="contacteznous.php" alt="Contactez-nous" title="Contactez-nous">La Tragona</a>.
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
			<div style="clear: both;"></div>
	</div>

	<footer id="legal">
		<p>La Tragona <img src="../media/iconos/copyleft.png" alt="Copyleft" title="Copyleft"> 2017.<span class="desktop"> Autorisation de diffuser et de copier le contenu de ce site, La paternité de la même.</span><span class = "ipad"> Copiez le contenu de ce site, en conservant la paternité.</span></p>
	</footer>

</body>
</html>
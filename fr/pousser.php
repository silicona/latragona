<!DOCTYPE html>
<html>
<head>
	<title>Pour pousser dans La Tragona</title>

	<meta charset="utf-8">
	<meta name="author" content="alejoizquierdomartinez@gmail.com">
	<meta name="keywords" content="Tapas, toasts, tapeo, portions, vin, liqueur maison, cañas, Rastro, à côté du Rastro, à deux minutes du Rastro, La Latina, Tirso de Molina, oasis de Madrid, Bar, point de rencontre, près du théâtre, Lavapies , Théâtre, cabaret, bon prix, prix abordable, sans gluten, menu allergène, nourriture décontractée, produits frais, produits frais, produits du marché, marché à proximité, pain écologique, pain artisan, vin bio, presse alternative, wifi gratuit">
	<meta name="description" content ="Bar à tapas où vous pourrez déguster des toasts et des rations sans gluten fabriquées avec des produits du marché et du vin bio, ainsi que des boissons artisanales et combinées qui éliminent le hoquet. Situé à côté du Rastro, au centre de Madrid, entre La Latina et Tirso de Molina.">

	<meta name="viewport" content="width=device-width; initial-scale=1.0">

	<link rel="shortcut icon" href="../media/icono.ico" type="image/x-icon">
	<link rel="icon" href="../media/icono.ico" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="../css/tripoli_index.css">
	<link rel="stylesheet" href="../css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.min.css">
	
	<?php
		require_once('../php/lib/spyc/spyc.php');
		$datos = Spyc::YAMLLoad('../php/idiomas/lexico_fr.yml');
	?>
	<script type="text/javascript">
		titular = '<?= $datos['aviso']['agosto']['titular']; ?>';
		vuelta = '<?= $datos['aviso']['agosto']['vuelta']; ?>';
	</script>

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="../js/lightbox.min.js"></script>
	<script type="text/javascript" src="../js/jquery.fancybox.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="../css/empujar.css">
	<script type="text/javascript" src="../js/empujar.js"></script>
	<style type="text/css">
		header {
			background: url("../media/cabeceras/pousser.png") 50% 8% no-repeat fixed;
		}

		@media screen and (max-width: 650px), screen and (max-device-width: 650px), screen and (min-width: 651px)and (max-width: 1024px), screen and (min-device-width: 651px)	and (max-device-width: 1024px) {
			header {
				background: url("../media/cabeceras/pousser_sin.png") 50% 0% no-repeat fixed;
			}
		}
	</style>

</head>
<body>

	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="index.php" alt="Index" title="Index">La Tragona</a></li>
			<li><a href="avaler.php" alt="Pour avaler" title="Tapas and portions">Pour avaler</a></li>
			<li><a href="ousommesnous.php" alt="Où sommes-nous" title="Où sommes-nous">Où sommes-nous</a></li>
			<li><a href="quisommesnous.php" alt="Qui sommes nous" title="Qui sommes nous">Qui sommes nous</a></li>
			<li><a href="contacteznous.php" alt="Contactez-nous" title="Contactez-nous">Contactez-nous</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="../empujar.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Spanish"><span>Castellano</span></a></li>
			<li><a href="../en/push.php" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English"><span>English</span></a></li>
			<li><a href="#" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="French"><span>Français</span></a></li>
			<li><a href="../it/spinta.php" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Italian"><span>Italiano</span></a></li>
		</ul>
	</section>

	<div id="contenedor">
		<nav id="superior">
			<ul>
				<li>
					<a href="index.php" alt="Inicio" title="Inicio"><span>La Tragona</span></a>
					<img src="../media/banderas/multi.jpg" alt="multibandera" title="Idiomas" class="movil bandera" id="multi">
					<a href="../empujar.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Web castellano" class="desktop ipad bandera"></a>
					<a href="../en/push.php" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English web" class="desktop ipad bandera"></a>
					<a href="#" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="../it/spinta.php" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li class="movil ipad" id="logo_superior"><span>Menu</span><img src="../media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="contacteznous.php" alt="Contactez-nous" title="Contactez-nous">Contactez-nous</a></li>
				<li class="desktop"><a href="quisommesnous.php" alt="Qui sommes nous" title="Qui sommes nous">Qui sommes nous</a></li>
				<li class="desktop"><a href="ousommesnous.php" alt="Où sommes-nous" title="Où sommes-nous">Où sommes-nous</a></li>
				<li class="desktop"><a href="avaler.php" alt="Pour avaler" title="Tapas and portions">Pour avaler</a></li>
			</ul>
		</nav>

		<nav id="lateral">
			<ul>
				<li id="cerve">Bières</li>
				<li id="vin">Vins</li>
				<li id="lic">Liqueurs</li>
				<li id="cuba">Combiné</li>
				<li id="sin">Sans alcool</li>
			</ul>
		</nav>

		<header></header>

		<section id="cerveza">
			<div class="foto">
				<a name="cerveza"><p id="espumoso">La boisson mousseuse</p></a>
			</div>	

			<div class="contenido">	
				<legend>Estrella de Levante <span class="desktop">(Blonde)</span></legend>
				<div id="estrella">
					<a href="../media/imagenes/empujar/rubia.jpg" data-lightbox="example-1" data-title="Estrella Levante">
						<img src="../media/imagenes/empujar/minis/rubia.jpg" class="imagen" alt="Estrella Levante" title="Estrella Levante">
					</a>
					<ul>
						<li>Caña - 1.50&euro;</li>
						<li>Double - 2.50&euro;</li>
						<li>Bouteille 1/3 - 2.50&euro;</li>
						<li>Mini<span class="descrip"> (500ml.) </span>- 3.50&euro;</li>
					</ul>
				</div>

				<legend>Estrella de levante <span class="desktop">(Sans alcool)</span></legend>
				<div id="estrella_sin">
					<a href="../imag_ejemplos/bebidas/estrella_sin.jpg" data-lightbox="example-1" data-title="Estrella Alcohol free">
						<img src="../imag_ejemplos/bebidas/mini_estrella_sin.jpg" class="imagen" alt="Estrella Alcohol free" title="Estrella Alcohol free">
					</a>
					<ul>
						<li>Bouteille 1/4 - 1.50&euro;</li>
					</ul>
				</div>

				<legend>Punta Este <span class="desktop">(Grillée)</span></legend>
				<div>
					<a href="../media/imagenes/empujar/tostada.jpg" data-lightbox="example-1" data-title="Punta Este">
						<img src="../media/imagenes/empujar/minis/tostada.jpg" class="imagen" alt="Punta Este" title="Punta Este">
					</a>
					<ul>
						<li>Caña - 1.70&euro;</li>
						<li>Double - 3.00&euro;</li>
						<li>Mini<span class="descrip"> (500ml.) </span>- 4.00&euro;</li>
					</ul>
				</div>

				<legend>Daura Damm <span class="desktop">(Sans gluten)</span></legend>
				<div>
					<a href="../media/imagenes/empujar/daura.jpg" data-lightbox="example-1" data-title="Daura Damm">
						<img src="../media/imagenes/empujar/minis/daura.jpg" class="imagen" alt="Daura Damm" title="Daura Damm">
					</a>
					<ul>
						<li>Bouteille 1/3 - 2.50&euro;</li>
					</ul>
				</div>
			</div>
		</section>

		<section id="vino">
			<div class="foto">
				<a name="vino"><p id="uva">Le goût du raisin</p></a>
			</div>	

			<div class="contenido">
				<legend>Rouges</legend>
				<div>
					<a href="../media/imagenes/empujar/7puntas.jpg" data-lightbox="example-1" data-title="7 puntas">
						<img src="../media/imagenes/empujar/minis/7puntas.jpg" class="imagen" alt="7 Puntas" title="7 Puntas">
					</a>
					<p>7 puntas (Castilla) (Coupe: 1.50&euro;; Bouteille: 12&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=puntas" data-type="iframe" href="javascript:;">Voir description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/zinio.jpg" data-lightbox="example-1" data-title="Zinio">
						<img src="../media/imagenes/empujar/minis/zinio.jpg" class="imagen" alt="Zinio" title="Zinio">
					</a>
					<p>Zinio (La Rioja) (Coupe: 1.80&euro;; Bouteille: 12&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=zinio" data-type="iframe" href="javascript:;">Voir description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/muriel.jpg" data-lightbox="example-1" data-title="Muriel">
						<img src="../media/imagenes/empujar/minis/muriel.jpg" class="imagen" alt="Muriel" title="Muriel">
					</a>
					<p>Muriel Crianza (La Rioja) (Coupe: 2.40&euro;; Bouteille: 15&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=muriel" data-type="iframe" href="javascript:;">Voir description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/menina.jpg" data-lightbox="example-1" data-title="Menina">
						<img src="../media/imagenes/empujar/minis/menina.jpg" class="imagen" alt="Menina" title="Menina">
					</a>
					<p>Menina Crianza (Madrid) (Coupe: 2.80&euro;; Bouteille: 18&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=menina" data-type="iframe" href="javascript:;">Voir description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/feroes.jpg" data-lightbox="example-1" data-title="Feroes">
					  <img src="../media/imagenes/empujar/minis/feroes.jpg" class="imagen" alt="Feroes" title="Feroes">
					</a>
					<p>Feroes (Ribera) (Coupe: 2.40&euro;; Bouteille: 15&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=feroes" data-type="iframe" href="javascript:;">Voir description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/mureda.jpg" data-lightbox="example-1" data-title="Mureda">
						<img src="../media/imagenes/empujar/minis/mureda.jpg" class="imagen" alt="Mureda" title="Mureda">
					</a>
					<p>Mureda (Syrah) (Coupe: 2.40&euro;; Bouteille: 15&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=mureda" data-type="iframe" href="javascript:;">Voir description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/bierzo.jpg" data-lightbox="example-1" data-title="Cosechero">
						<img src="../media/imagenes/empujar/minis/bierzo.jpg" class="imagen" alt="Cosechero" title="Cosechero">
					</a>
					<p>Bierzo (Mencia) (Coupe: 2.80&euro;; Bouteille: 18&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=bierzo" data-type="iframe" href="javascript:;">Voir description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/nuviana_tinto.jpg" data-lightbox="example-1" data-title="Nuviana">
						<img src="../media/imagenes/empujar/minis/nuviana_tinto.jpg" class="imagen" alt="Nuviana" title="Nuviana">
					</a>
					<p>Nuviana (Coupe: 2.40&euro;; Bouteille: 15&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=nuviana_tinto" data-type="iframe" href="javascript:;">Voir description</a>
				</div>

				<legend>Blancs</legend>
				<div>
					<a href="../media/imagenes/empujar/albarino.jpg" data-lightbox="example-1" data-title="Albariño">
						<img src="../media/imagenes/empujar/minis/albarino.jpg" class="imagen" alt="Albariño" title="Albariño">
					</a>
					<p>Albariño (Cosechero) (Coupe: 2.20&euro;; Bouteille: 12&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=albarino" data-type="iframe" href="javascript:;">Voir description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/bierzo_godello.jpg" data-lightbox="example-1" data-title="Bierzo Godello">
						<img src="../media/imagenes/empujar/minis/bierzo_godello.jpg" class="imagen" alt="Bierzo Godello" title="Bierzo Godello">
					</a>
					<p>Bierzo Godello (Coupe: 2.80&euro;; Bouteille: 18&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=bierzo_god" data-type="iframe" href="javascript:;">Voir description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lagartijo.jpg" data-lightbox="example-1" data-title="Lagartijo">
						<img src="../media/imagenes/empujar/minis/lagartijo.jpg" class="imagen" alt="Lagartijo" title="Lagartijo">
					</a>
					<p>Lagartijo (Verdejo) (Coupe: 2.20&euro;; Bouteille: 12&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=lagartijo" data-type="iframe" href="javascript:;">Voir description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/nuviana_blanco.jpg" data-lightbox="example-1" data-title="Nuviana">
						<img src="../media/imagenes/empujar/minis/nuviana_blanco.jpg" class="imagen" alt="Nuviana" title="Nuviana">
					</a>
					<p>Nuviana (Coupe: 2.20&euro;; Bouteille: 12&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=nuviana_blanco" data-type="iframe" href="javascript:;">Voir description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/vinaldena.jpg" data-lightbox="example-1" data-title="Viñaldena">
						<img src="../media/imagenes/empujar/minis/vinaldena.jpg" class="imagen" alt="Viñaldena" title="Viñaldena">
					</a>
					<p>Viñaldena (Verdejo) (Coupe: 2.20&euro;; Bouteille: 12&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=vinaldena" data-type="iframe" href="javascript:;">Voir description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/sastreria.jpg" data-lightbox="example-1" data-title="La sastreria">
						<img src="../media/imagenes/empujar/minis/sastreria.jpg" class="imagen" alt="La sastreria" title="La sastreria">
					</a>
					<p>La sastreria (Garnacha) (Coupe: 2.20&euro;; Bouteille: 12&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=sastreria" data-type="iframe" href="javascript:;">Voir description</a>
				</div>

				<legend>Vermouth</legend>
				<div>
					<a href="../media/imagenes/empujar/vermouth.jpg" data-lightbox="example-1" data-title="Vermu">
						<img src="../media/imagenes/empujar/minis/vermouth.jpg" class="imagen" alt="Vermu" title="Vermu">
					</a>
					<p>Vermouth (glass: 2&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=vermouth" data-type="iframe" href="javascript:;">Voir description</a>
				</div>
			</div>
		</section>	

		<section id="compartir" class="movil">
			<div class="fb-like" data-href="http://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>

		<section id="licores">
			<div class="foto">
				<a name="licor"><p id="aguardiente">Liqueur artisanale</p></a>
			</div>

			<div class="contenido">
				<legend>Liqueur artisanale</legend>
				<div>
					<a href="../media/imagenes/empujar/lic_hierbas.jpg" data-lightbox="example-1" data-title="Herbal marc">
						<img src="../media/imagenes/empujar/minis/lic_hierbas.jpg" alt="Herbal marc" title="Herbal marc" class="imagen">
					</a>
					<p>Herbal marc.<br>(tir: 2&euro;; Coupe: 4&euro;)</p>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lic_blanco.jpg" data-lightbox="example-1" data-title="Marc blanc">
						<img src="../media/imagenes/empujar/minis/lic_blanco.jpg" alt="Marc blanc" title="Marc blanc" class="imagen">
					</a>
					<p>Marc blanc.<br>(tir: 2&euro;; Coupe: 4&euro;)</p>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lic_tostado.jpg" data-lightbox="example-1" data-title="Biscuit rôti">
						<img src="../media/imagenes/empujar/minis/lic_tostado.jpg" alt="Biscuit rôti" title="Biscuit rôti" class="imagen">
					</a>
					<p>Biscuit rôti.<br>(tir: 2&euro;; Coupe: 4&euro;)</p>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lic_cafe.jpg" data-lightbox="example-1" data-title="Liqueur de café">
						<img src="../media/imagenes/empujar/minis/lic_cafe.jpg" alt="Liqueur de café" title="Liqueur de café" class="imagen">
					</a>
					<p>Liqueur de café.<br>(tir: 2&euro;; Coupe: 4&euro;)</p>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lic_pacharan.jpg" data-lightbox="example-1" data-title="Pacharan">
						<img src="../media/imagenes/empujar/minis/lic_pacharan.jpg" alt="Pacharan" title="Pacharan" class="imagen">
					</a>
					<p>Pacharan.<br>(tir: 2&euro;; Coupe: 4&euro;)</p>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lic_crema_orujo.jpg" data-lightbox="example-1" data-title="Crème Marc">
						<img src="../media/imagenes/empujar/minis/lic_crema_orujo.jpg" alt="Crème Marc" title="Crème Marc" class="imagen">
					</a>
					<p>Crème Marc.<br>(tir: 2&euro;; Coupe: 4&euro;)</p>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lic_choco.jpg" data-lightbox="example-1" data-title="Crème au chocolat">
						<img src="../media/imagenes/empujar/minis/lic_choco.jpg" alt="Crème au chocolat" title="Crème au chocolat" class="imagen">
					</a>
					<p>Crème au chocolat<span class="descrip"> avec des cerises</span>.<br>(tir: 2&euro;; Coupe: 4&euro;)</p>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lic_crem_cafe.jpg" data-lightbox="example-1" data-title="Crème de café">
						<img src="../media/imagenes/empujar/minis/lic_crem_cafe.jpg" alt="Crème de café" title="Crème de café" class="imagen">
					</a>
					<p>Crème de café.<br>(tir: 2&euro;; Coupe: 4&euro;)</p>
				</div>
			</div>
		</section>

		<section id="combinados">
			<div class="foto">
				<a name="cubata"><p id="cuba_libre">Combiné</p></a>
			</div>

			<div class="contenido">
				<legend>Blanc combiné (6&euro;)</legend>
				<div>
					<a href="../media/imagenes/empujar/combi_claro.jpg" data-lightbox="example-1" data-title="Blanc combiné">
						<img src="../media/imagenes/empujar/minis/combi_claro.jpg" alt="Blanc combiné" title="Blanc combiné" class="imagen">
					</a>
					<p class="lista_izquierda">
						Seagram<br>
						Larios<br>
						Beefeater
					</p>
					<p class="lista_derecha">
						Stolichnaya<br>
						Dryzaguirre<br>
						Bacardi
					</p>
				</div>
				<legend>Dark combiné (6&euro;)</legend>
				<div>
					<a href="../media/imagenes/empujar/combi_oscu.jpg" data-lightbox="example-1" data-title="Dark combiné">
						<img src="../media/imagenes/empujar/minis/combi_oscu.jpg" alt="Dark combiné" title="Dark combiné" class="imagen">
					</a>
					<p class="lista_izquierda">
						Brugal<br>
						DYC<br>
						Cacique<br>
					</p>
					<p class="lista_derecha">
						JB<br>
						Ballantines<br>
					</p>
				</div>
			</div>
		</section>

		<section id="sin_alcohol">
			<div class="foto">
				<a name="sin"><p id="sin_alc">Sans alcool</p></a>
			</div>

			<div class="contenido">
				<legend>Jus bio (2.50&euro;)</legend>
				<div>
					<a href="../media/imagenes/empujar/zumos_org.jpg" data-lightbox="example-1" data-title="Jus bio">
						<img src="../media/imagenes/empujar/minis/zumos_org.jpg" alt="Jus bio" title="Jus bio" class="imagen">
					</a>
					<p>
						Mandarin et romarin<br>
						Limonade et gingembre<br>
						Poire et poivre de Sichuan<br>
						Tomate et wasabi
					</p>
				</div>

				<legend>Jus (2&euro;)</legend>
				<div>
					<a href="../media/imagenes/empujar/zumo.jpg" data-lightbox="example-1" data-title="Jus">
						<img src="../media/imagenes/empujar/minis/zumo.jpg" alt="Jus" title="Jus" class="imagen">
					</a>
					<p>
						Pêche<br>
						Orange<br>
						Ananas<br>
						Tomate
					</p>
				</div>
			
				<legend>Refroidir (2&euro;)</legend>
				<div>
					<a href="../media/imagenes/empujar/refresco.jpg" data-lightbox="example-1" data-title="Refroidir">
						<img src="../media/imagenes/empujar/minis/refresco.jpg" alt="Refroidir" title="Refroidir" class="imagen">
					</a>
					<p class="lista_izquierda">
						Frixen cola<br>
						Orange<br>
						Citron<br>
						Tonique						
					</p>
					<p class="lista_derecha">
						Mosto<br>
						Aquarius<br>
						Nestea
					</p>
				</div>
			</div>
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
<!DOCTYPE html>
<html>
<head>
	<title>For push in La Tragona</title>

	<meta charset="utf-8">
	<meta name="author" content="alejoizquierdomartinez@gmail.com">
	<meta name="keywords" content="Tapas, toasts, tapeo, portions, wine, homemade liquor, cañas, Rastro, next to the Rastro, two minutes from the Rastro, La Latina, Tirso de Molina, oasis in Madrid, Bar area, meeting point, near to theater, Lavapies, theater, cabaret, good price, affordable price, gluten free, allergen menu, caring food, fresh food, fresh produce, market products, nearby market, ecological bread, Artisan bread, organic wine, alternative press, free wifi">
	<meta name="description" content ="Tapas bar where you can enjoy toasts and gluten-free rations made with market products and organic wine, as well as artisan and combined liquors that remove hiccups. Located next to the Rastro, in the center of Madrid, between La Latina and Tirso de Molina.">
	
	<meta name="viewport" content="width=device-width; initial-scale=1.0">

	<link rel="shortcut icon" href="../media/icono.ico" type="image/x-icon">
	<link rel="icon" href="../media/icono.ico" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="../css/tripoli_index.css">
	<link rel="stylesheet" href="../css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.min.css">
	
	<?php
		require_once('../php/lib/spyc/spyc.php');
		$datos = Spyc::YAMLLoad('../php/idiomas/lexico_en.yml');
		$vacaciones = $datos['aviso']['agosto']['titular'];
		$vuelta = $datos['aviso']['agosto']['vuelta'];
	?>
	<script type="text/javascript">
		titular = '<?= $vacaciones; ?>';
		vuelta = '<?= $vuelta; ?>';
	</script>

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="../js/lightbox.min.js"></script>
	<script type="text/javascript" src="../js/jquery.fancybox.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="../css/empujar.css">
	<script type="text/javascript" src="../js/empujar.js"></script>
	<style type="text/css">
		header {
			background: url("../media/cabeceras/push.png") 50% 8% no-repeat fixed;
		}

		@media screen and (max-width: 650px), screen and (max-device-width: 650px), screen and (min-width: 651px)and (max-width: 1024px), screen and (min-device-width: 651px)	and (max-device-width: 1024px) {
			header {
				background: url("../media/cabeceras/push_sin.png") 50% 0% no-repeat fixed;
			}
		}
	</style>

</head>
<body>

	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="index.php" alt="Inicio" title="Inicio">La Tragona</a></li>
			<li><a href="swallow.php" alt="Para tragar" title="Tapas and portions">To swallow</a></li>
			<li><a href="whereweare.php" alt="Donde estamos" title="Where we are">Where we are</a></li>
			<li><a href="whoweare.php" alt="Quienes somos" title="Who we are">Who we are</a></li>
			<li><a href="contactus.php" alt="Contactar" title="Contact us">Contact us</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="../empujar.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Spanish"><span>Castellano</span></a></li>
			<li><a href="#" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English"><span>English</span></a></li>
			<li><a href="../fr/pousser.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="French"><span>Français</span></a></li>
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
					<a href="#" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English web" class="desktop ipad bandera"></a>
					<a href="../fr/pousser.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="../it/spinta.php" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li class="movil ipad" id="logo_superior"><span>Menu</span><img src="../media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="contactus.php" alt="Contactar" title="Contact us">Contact us</a></li>
				<li class="desktop"><a href="whoweare.php" alt="Quienes somos" title="Who we are">Who we are</a></li>
				<li class="desktop"><a href="whereweare.php" alt="Donde estamos" title="Where we are">Where we are</a></li>
				<li class="desktop"><a href="swallow.php" alt="Para tragar" title="Tapas and portions">For swallow</a></li>
			</ul>
		</nav>

		<nav id="lateral">
			<ul>
				<li id="cerve">Beers</li>
				<li id="vin">Wines</li>
				<li id="lic">Liqueurs</li>
				<li id="cuba">Combined</li>
				<li id="sin">Alcohol free</li>
			</ul>
		</nav>

		<header></header>

		<section id="cerveza">
			<div class="foto">
				<a name="cerveza"><p id="espumoso">The foamy drink</p></a>
			</div>	

			<div class="contenido">	
				<legend>Estrella de Levante <span class="desktop">(Lager)</span></legend>
				<div id="estrella">
					<a href="../media/imagenes/empujar/rubia.jpg" data-lightbox="example-1" data-title="Estrella Levante">
						<img src="../media/imagenes/empujar/minis/rubia.jpg" class="imagen" alt="Estrella Levante" title="Estrella Levante">
					</a>
					<ul>
						<li>Caña - 1.50&euro;</li>
						<li>Double - 2.50&euro;</li>
						<li>Bottle 1/3 - 2.50&euro;</li>
						<li>Mini<span class="descrip"> (500ml.) </span>- 3.50&euro;</li>
					</ul>
				</div>

				<legend>Estrella de levante <span class="desktop">(Alcohol free)</span></legend>
				<div id="estrella_sin">
					<a href="../imag_ejemplos/bebidas/estrella_sin.jpg" data-lightbox="example-1" data-title="Estrella Alcohol free">
						<img src="../imag_ejemplos/bebidas/mini_estrella_sin.jpg" class="imagen" alt="Estrella Alcohol free" title="Estrella Alcohol free">
					</a>
					<ul>
						<li>Bottle 1/4 - 1.50&euro;</li>
					</ul>
				</div>

				<legend>Punta Este <span class="desktop">(Ale)</span></legend>
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

				<legend>Daura Damm <span class="desktop">(Gluten free)</span></legend>
				<div>
					<a href="../media/imagenes/empujar/daura.jpg" data-lightbox="example-1" data-title="Daura Damm">
						<img src="../media/imagenes/empujar/minis/daura.jpg" class="imagen" alt="Daura Damm" title="Daura Damm">
					</a>
					<ul>
						<li>Bottle 1/3 - 2.50&euro;</li>
					</ul>
				</div>
			</div>
		</section>

		<section id="vino">
			<div class="foto">
				<a name="vino"><p id="uva">The taste of the grape</p></a>
			</div>	

			<div class="contenido">
				<legend>Reds</legend>
				<div>
					<a href="../media/imagenes/empujar/7puntas.jpg" data-lightbox="example-1" data-title="7 puntas">
						<img src="../media/imagenes/empujar/minis/7puntas.jpg" class="imagen" alt="7 Puntas" title="7 Puntas">
					</a>
					<p>7 puntas (Castilla) (Glass: 1.50&euro;; Bottle: 12&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=puntas" data-type="iframe" href="javascript:;">See description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/zinio.jpg" data-lightbox="example-1" data-title="Zinio">
						<img src="../media/imagenes/empujar/minis/zinio.jpg" class="imagen" alt="Zinio" title="Zinio">
					</a>
					<p>Zinio (La Rioja) (Glass: 1.80&euro;; Bottle: 12&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=zinio" data-type="iframe" href="javascript:;">See description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/muriel.jpg" data-lightbox="example-1" data-title="Muriel">
						<img src="../media/imagenes/empujar/minis/muriel.jpg" class="imagen" alt="Muriel" title="Muriel">
					</a>
					<p>Muriel Crianza (La Rioja) (Glass: 2.40&euro;; Bottle: 15&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=muriel" data-type="iframe" href="javascript:;">See description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/menina.jpg" data-lightbox="example-1" data-title="Menina">
						<img src="../media/imagenes/empujar/minis/menina.jpg" class="imagen" alt="Menina" title="Menina">
					</a>
					<p>Menina Crianza (Madrid) (Glass: 2.80&euro;; Bottle: 18&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=menina" data-type="iframe" href="javascript:;">See description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/feroes.jpg" data-lightbox="example-1" data-title="Feroes">
					  <img src="../media/imagenes/empujar/minis/feroes.jpg" class="imagen" alt="Feroes" title="Feroes">
					</a>
					<p>Feroes (Ribera) (Glass: 2.40&euro;; Bottle: 15&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=feroes" data-type="iframe" href="javascript:;">See description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/mureda.jpg" data-lightbox="example-1" data-title="Mureda">
						<img src="../media/imagenes/empujar/minis/mureda.jpg" class="imagen" alt="Mureda" title="Mureda">
					</a>
					<p>Mureda (Syrah) (Glass: 2.40&euro;; Bottle: 15&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=mureda" data-type="iframe" href="javascript:;">See description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/bierzo.jpg" data-lightbox="example-1" data-title="Cosechero">
						<img src="../media/imagenes/empujar/minis/bierzo.jpg" class="imagen" alt="Cosechero" title="Cosechero">
					</a>
					<p>Bierzo (Mencia) (Glass: 2.80&euro;; Bottle: 18&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=bierzo" data-type="iframe" href="javascript:;">See description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/nuviana_tinto.jpg" data-lightbox="example-1" data-title="Nuviana">
						<img src="../media/imagenes/empujar/minis/nuviana_tinto.jpg" class="imagen" alt="Nuviana" title="Nuviana">
					</a>
					<p>Nuviana (Glass: 2.40&euro;; Bottle: 15&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=nuviana_tinto" data-type="iframe" href="javascript:;">See description</a>
				</div>

				<legend>Whites</legend>
				<div>
					<a href="../media/imagenes/empujar/albarino.jpg" data-lightbox="example-1" data-title="Albariño">
						<img src="../media/imagenes/empujar/minis/albarino.jpg" class="imagen" alt="Albariño" title="Albariño">
					</a>
					<p>Albariño (Cosechero) (Glass: 2.20&euro;; Bottle: 12&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=albarino" data-type="iframe" href="javascript:;">See description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/bierzo_godello.jpg" data-lightbox="example-1" data-title="Bierzo Godello">
						<img src="../media/imagenes/empujar/minis/bierzo_godello.jpg" class="imagen" alt="Bierzo Godello" title="Bierzo Godello">
					</a>
					<p>Bierzo Godello (Glass: 2.80&euro;; Bottle: 18&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=bierzo_god" data-type="iframe" href="javascript:;">See description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lagartijo.jpg" data-lightbox="example-1" data-title="Lagartijo">
						<img src="../media/imagenes/empujar/minis/lagartijo.jpg" class="imagen" alt="Lagartijo" title="Lagartijo">
					</a>
					<p>Lagartijo (Verdejo) (Glass: 2.20&euro;; Bottle: 12&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=lagartijo" data-type="iframe" href="javascript:;">See description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/nuviana_blanco.jpg" data-lightbox="example-1" data-title="Nuviana">
						<img src="../media/imagenes/empujar/minis/nuviana_blanco.jpg" class="imagen" alt="Nuviana" title="Nuviana">
					</a>
					<p>Nuviana (Glass: 2.20&euro;; Bottle: 12&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=nuviana_blanco" data-type="iframe" href="javascript:;">See description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/vinaldena.jpg" data-lightbox="example-1" data-title="Viñaldena">
						<img src="../media/imagenes/empujar/minis/vinaldena.jpg" class="imagen" alt="Viñaldena" title="Viñaldena">
					</a>
					<p>Viñaldena (Verdejo) (Glass: 2.20&euro;; Bottle: 12&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=vinaldena" data-type="iframe" href="javascript:;">See description</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/sastreria.jpg" data-lightbox="example-1" data-title="La sastreria">
						<img src="../media/imagenes/empujar/minis/sastreria.jpg" class="imagen" alt="La sastreria" title="La sastreria">
					</a>
					<p>La sastreria (Garnacha) (Glass: 2.20&euro;; Bottle: 12&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=sastreria" data-type="iframe" href="javascript:;">See description</a>
				</div>

				<legend>Vermú</legend>
				<div>
					<a href="../media/imagenes/empujar/vermouth.jpg" data-lightbox="example-1" data-title="Vermu">
						<img src="../media/imagenes/empujar/minis/vermouth.jpg" class="imagen" alt="Vermu" title="Vermu">
					</a>
					<p>Vermú (glass: 2&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=vermouth" data-type="iframe" href="javascript:;">See description</a>
				</div>
			</div>
		</section>	

		<section id="compartir" class="movil">
			<div class="fb-like" data-href="http://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>

		<section id="licores">
			<div class="foto">
				<a name="licor"><p id="aguardiente">Craft liquor</p></a>
			</div>

			<div class="contenido">
				<legend>Craft liquor</legend>
				<div>
					<a href="../media/imagenes/empujar/lic_hierbas.jpg" data-lightbox="example-1" data-title="Herbal marc">
						<img src="../media/imagenes/empujar/minis/lic_hierbas.jpg" alt="Herbal marc" title="Herbal marc" class="imagen">
					</a>
					<p>Herbal marc.<br>(Shot: 2&euro;; Glass: 4&euro;)</p>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lic_blanco.jpg" data-lightbox="example-1" data-title="White marc">
						<img src="../media/imagenes/empujar/minis/lic_blanco.jpg" alt="White marc" title="White marc" class="imagen">
					</a>
					<p>White marc.<br>(Shot: 2&euro;; Glass: 4&euro;)</p>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lic_tostado.jpg" data-lightbox="example-1" data-title="Toast marc">
						<img src="../media/imagenes/empujar/minis/lic_tostado.jpg" alt="Toast marc" title="Toast marc" class="imagen">
					</a>
					<p>Toast marc.<br>(Shot: 2&euro;; Glass: 4&euro;)</p>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lic_cafe.jpg" data-lightbox="example-1" data-title="Coffee liquor">
						<img src="../media/imagenes/empujar/minis/lic_cafe.jpg" alt="Coffee liquor" title="Coffee liquor" class="imagen">
					</a>
					<p>Coffee liquor.<br>(Shot: 2&euro;; Glass: 4&euro;)</p>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lic_pacharan.jpg" data-lightbox="example-1" data-title="Pacharan">
						<img src="../media/imagenes/empujar/minis/lic_pacharan.jpg" alt="Pacharan" title="Pacharan" class="imagen">
					</a>
					<p>Pacharan.<br>(Shot: 2&euro;; Glass: 4&euro;)</p>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lic_crema_orujo.jpg" data-lightbox="example-1" data-title="Marc cream">
						<img src="../media/imagenes/empujar/minis/lic_crema_orujo.jpg" alt="Marc cream" title="Marc cream" class="imagen">
					</a>
					<p>Marc cream.<br>(Shot: 2&euro;; Glass: 4&euro;)</p>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lic_choco.jpg" data-lightbox="example-1" data-title="Chocolate cream">
						<img src="../media/imagenes/empujar/minis/lic_choco.jpg" alt="Chocolate cream" title="Chocolate cream" class="imagen">
					</a>
					<p>Chocolate cream<span class="descrip"> with cherries</span>.<br>(Shot: 2&euro;; Glass: 4&euro;)</p>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lic_crem_cafe.jpg" data-lightbox="example-1" data-title="Coffee cream">
						<img src="../media/imagenes/empujar/minis/lic_crem_cafe.jpg" alt="Coffee cream" title="Coffee cream" class="imagen">
					</a>
					<p>Coffee cream.<br>(Shot: 2&euro;; Glass: 4&euro;)</p>
				</div>
			</div>
		</section>

		<section id="combinados">
			<div class="foto">
				<a name="cubata"><p id="cuba_libre">Combined</p></a>
			</div>

			<div class="contenido">
				<legend>White combined (6&euro;)</legend>
				<div>
					<a href="../media/imagenes/empujar/combi_claro.jpg" data-lightbox="example-1" data-title="White combined">
						<img src="../media/imagenes/empujar/minis/combi_claro.jpg" alt="White combined" title="White combined" class="imagen">
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
				<legend>Dark combined (6&euro;)</legend>
				<div>
					<a href="../media/imagenes/empujar/combi_oscu.jpg" data-lightbox="example-1" data-title="Dark combined">
						<img src="../media/imagenes/empujar/minis/combi_oscu.jpg" alt="Dark combined" title="Dark combined" class="imagen">
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
				<a name="sin"><p id="sin_alc">Alcohol free</p></a>
			</div>

			<div class="contenido">
				<legend>Organic juice (2.50&euro;)</legend>
				<div>
					<a href="../media/imagenes/empujar/zumos_org.jpg" data-lightbox="example-1" data-title="Organic juice">
						<img src="../media/imagenes/empujar/minis/zumos_org.jpg" alt="Organic juice" title="Organic juice" class="imagen">
					</a>
					<p>
						Mandarin and rosemary<br>
						Lemonade and ginger<br>
						Pear and Sichuan pepper<br>
						Tomato and wasabi
					</p>
				</div>

				<legend>Juice (2&euro;)</legend>
				<div>
					<a href="../media/imagenes/empujar/zumo.jpg" data-lightbox="example-1" data-title="Juice">
						<img src="../media/imagenes/empujar/minis/zumo.jpg" alt="Juice" title="Juice" class="imagen">
					</a>
					<p>
						Peach<br>
						Orange<br>
						Pine-apple<br>
						Tomato
					</p>
				</div>
			
				<legend>Freshen (2&euro;)</legend>
				<div>
					<a href="../media/imagenes/empujar/refresco.jpg" data-lightbox="example-1" data-title="Freshen">
						<img src="../media/imagenes/empujar/minis/refresco.jpg" alt="Freshen" title="Freshen" class="imagen">
					</a>
					<p class="lista_izquierda">
						Frixen cola<br>
						Orange<br>
						Lemon<br>
						Tonic						
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
		<p>La Tragona <img src="../media/iconos/copyleft.png" alt="Copyleft" title="Copyleft"> 2017.<span class="desktop"> Authorization to disseminate and copy the content of this website, The authorship of the same.</span><span class = "ipad"> Copy the contents of this web, conserving the authorship.</span></p>
	</footer>
</body>
</html>
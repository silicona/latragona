<!DOCTYPE html>
<html>
<head>
	<title>For push in La Tragona</title>
	
	<?php
		include 'basic_head.php';
		require_once('../php/lib/spyc/spyc.php');
		$datos = Spyc::YAMLLoad('../php/idiomas/lexico_en.yml');

		$producto = $datos['producto'];
		$titulos = $datos['titulos'];
		$bebidas = $datos['bebida'];
		$inter = true;
		include '../php/presentarProductos.php';

		$navidad = $datos['aviso']['navidad'];
	?>

	<link rel="stylesheet" href="../css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="../css/empujar.css">

	<script src="../js/lightbox.min.js"></script>
	<script type="text/javascript" src="../js/empujar.js"></script>
	
	<style type="text/css">
		header {
			background-image: url("../media/cabeceras/push.png");
		}

		@media screen and (max-width: 650px), screen and (max-device-width: 650px), screen and (min-width: 651px)and (max-width: 1024px), screen and (min-device-width: 651px)	and (max-device-width: 1024px) {
			header {
				background-image: url("../media/cabeceras/push_sin.png");
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
			<article class="foto">
				<a name="cerveza"><p id="espumoso">The foamy drink</p></a>
				<?php include '../php/plantillas/cartel_navidades.php' ?>
			</article>	

			<?= mostrarProductos($cervezas) ?>

		</section>

		<section id="vino">
			<article class="foto">
				<a name="vino"><p id="uva">The taste of the grape</p></a>
			</article>	

			<?= mostrarProductos($vinos) ?>

		</section>	

		<section id="compartir" class="movil">
			<div class="fb-like" data-href="http://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>

		<section id="licores">
			<article class="foto">
				<a name="licor"><p id="aguardiente">Craft liquor</p></a>
			</article>

			<?= mostrarProductos($licores); ?>

			<!--
			<article class="contenido">
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
			</article>
			-->
		</section>

		<section id="combinados">
			<article class="foto">
				<a name="cubata"><p id="cuba_libre">Combined</p></a>
			</article>

			<article class="contenido">
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
			</article>
		</section>

		<section id="sin_alcohol">
			<article class="foto">
				<a name="sin"><p id="sin_alc">Alcohol free</p></a>
			</article>

			<article class="contenido">
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
			</article>
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
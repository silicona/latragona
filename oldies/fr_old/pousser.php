<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Pour pousser dans La Tragona</title>

	<?php
		include 'tete_base.php';
		require_once('../php/lib/spyc/spyc.php');
		$datos = Spyc::YAMLLoad('../php/idiomas/lexico_fr.yml');

		$producto = $datos['producto'];
		$titulos = $datos['titulos'];
		$bebidas = $datos['bebida'];
		$inter = true;
		include '../php/presentarProductos.php';

		$navidad = $datos['aviso']['navidad'];
	?>
	
	<link rel="stylesheet" href="../css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="../css/empujar.css">
	
	<script type="text/javascript" src="../js/empujar.js"></script>
	<script src="../js/lightbox.min.js"></script>

	<style type="text/css">
		header {
			background-image: url("../media/cabeceras/pousser.png");
		}

		@media screen and (max-width: 650px), screen and (max-device-width: 650px), screen and (min-width: 651px)and (max-width: 1024px), screen and (min-device-width: 651px)	and (max-device-width: 1024px) {
			header {
				background-image: url("../media/cabeceras/pousser_sin.png");
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
			<article class="foto">
				<a name="cerveza"><p id="espumoso">La boisson mousseuse</p></a>

				<div id="cartel_navidad">
					<?php include '../php/plantillas/cartel_navidades.php' ?>
				</div>
			</article>	

			<?= mostrarProductos($cervezas, $titulos); ?>
		</section>

		<section id="vino">
			<article class="foto">
				<a name="vino"><p id="uva">Le goût du raisin</p></a>
			</article>	

			<?= mostrarProductos($vinos, $titulos); ?>
		</section>	

		<section id="compartir" class="movil">
			<div class="fb-like" data-href="http://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>

		<section id="licores">
			<article class="foto">
				<a name="licor"><p id="aguardiente">Liqueur artisanale</p></a>
			</article>

			<?= mostrarProductos($licores, $titulos); ?>
		</section>

		<section id="combinados">
			<article class="foto">
				<a name="cubata"><p id="cuba_libre">Combiné</p></a>
			</article>

			<article class="contenido">
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
			</article>
		</section>

		<section id="sin_alcohol">
			<article class="foto">
				<a name="sin"><p id="sin_alc">Sans alcool</p></a>
			</article>

			<article class="contenido">
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
			</article>
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
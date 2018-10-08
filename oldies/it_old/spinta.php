<!DOCTYPE html>
<html>
<head>
	<title>Per spinta en La Tragona</title>

	<?php
		include 'basica_head.php';
		require_once('../php/lib/spyc/spyc.php');
		$datos = Spyc::YAMLLoad('../php/idiomas/lexico_it.yml');
		
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
			background-image: url("../media/cabeceras/spinta.png");
		}

		@media screen and (max-width: 650px), screen and (max-device-width: 650px), screen and (min-width: 651px)and (max-width: 1024px), screen and (min-device-width: 651px)	and (max-device-width: 1024px) {
			header {
				background-image: url("../media/cabeceras/spinta_sin.png");
			}
		}
	</style>
	
</head>
<body>

	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="index.php" alt="Inicio" title="Inicio">La Tragona</a></li>
			<li><a href="deglutire.php" alt="Capsule e porzioni" title="Capsule e porzioni">Per deglutire</a></li>
			<li><a href="dovesiamo.php" alt="Dove siamo" title="Dove siamo">Dove siamo</a></li>
			<li><a href="chisiamo.php" alt="Chi siamo" title="Chi siamo">Chi siamo</a></li>
			<li><a href="contattaci.php" alt="Contattaci" title="Contattaci">Contattaci</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="../empujar.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Spanish"><span>Castellano</span></a></li>
			<li><a href="../en/push.php" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English"><span>English</span></a></li>
			<li><a href="../fr/pousser.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="French"><span>Français</span></a></li>
			<li><a href="#" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Italian"><span>Italiano</span></a></li>
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
					<a href="../fr/pousser.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="#" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li class="movil ipad" id="logo_superior"><span>Menu</span><img src="../media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="contattaci.php" alt="Contattaci" title="Contattaci">Contattaci</a></li>
				<li class="desktop"><a href="chisiamo.php" alt="Chi siamo" title="Chi siamo">Chi siamo</a></li>
				<li class="desktop"><a href="dovesiamo.php" alt="Dove siamo" title="Dove siamo">Dove siamo</a></li>
				<li class="desktop"><a href="deglutire.php" alt="Capsule e porzioni" title="Capsule e porzioni">Per deglutire</a></li>
			</ul>
		</nav>

		<nav id="lateral">
			<ul>
				<li id="cerve">Birre</li>
				<li id="vin">Vini</li>
				<li id="lic">Liquori</li>
				<li id="cuba">Combinato</li>
				<li id="sin">Senza alchol</li>
			</ul>
		</nav>

		<header></header>

		<section id="cerveza">
			<article class="foto">
				<a name="cerveza"><p id="espumoso">La bevanda schiumosa</p></a>
				
				<div id="cartel_navidad">
					<?php include '../php/plantillas/cartel_navidades.php' ?>
				</div>
			</article>	

			<?= mostrarProductos($cervezas, $titulos); ?>

		</section>

		<section id="vino">
			<article class="foto">
				<a name="vino"><p id="uva">Il gusto dell'uva</p></a>
			</article>	
			
			<?= mostrarProductos($vinos, $titulos); ?>

		</section>	

		<section id="compartir" class="movil">
			<div class="fb-like" data-href="http://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>

		<section id="licores">

			<article class="foto">

				<a name="licor"><p id="aguardiente">Liquore artigianale</p></a>

			</article>

			<?= mostrarProductos($licore, $titulos); ?>

		</section>

		<section id="combinados">
			<article class="foto">
				<a name="cubata"><p id="cuba_libre">Combinato</p></a>
			</article>

			<article class="contenido">
				<legend>Combinato bianco (6&euro;)</legend>
				<div>
					<a href="../media/imagenes/empujar/combi_claro.jpg" data-lightbox="example-1" data-title="Combinato bianco">
						<img src="../media/imagenes/empujar/minis/combi_claro.jpg" alt="Combinato bianco" title="Combinato bianco" class="imagen">
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
				<legend>Combinato scuro (6&euro;)</legend>
				<div>
					<a href="../media/imagenes/empujar/combi_oscu.jpg" data-lightbox="example-1" data-title="Combinato scuro">
						<img src="../media/imagenes/empujar/minis/combi_oscu.jpg" alt="Combinato scuro" title="Combinato scuro" class="imagen">
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
				<a name="sin"><p id="sin_alc">Senza alchol</p></a>
			</article>

			<article class="contenido">
				<legend>Succo organico (2.50&euro;)</legend>
				<div>
					<a href="../media/imagenes/empujar/zumos_org.jpg" data-lightbox="example-1" data-title="Succo organico">
						<img src="../media/imagenes/empujar/minis/zumos_org.jpg" alt="Succo organico" title="Succo organico" class="imagen">
					</a>
					<p>
						Mandarino e rosmarino<br>
						Limonata e zenzero<br>
						Pera e pepe di Sichuan<br>
						Pomodoro e wasabi
					</p>
				</div>

				<legend>Succo (2&euro;)</legend>
				<div>
					<a href="../media/imagenes/empujar/zumo.jpg" data-lightbox="example-1" data-title="Succo">
						<img src="../media/imagenes/empujar/minis/zumo.jpg" alt="Succo" title="Succo" class="imagen">
					</a>
					<p>
						Pesca<br>
						Arancione<br>
						Ananas<br>
						Pomodoro
					</p>
				</div>
			
				<legend>Rinfresco (2&euro;)</legend>
				<div>
					<a href="../media/imagenes/empujar/refresco.jpg" data-lightbox="example-1" data-title="Rinfresco">
						<img src="../media/imagenes/empujar/minis/refresco.jpg" alt="Rinfresco" title="Rinfresco" class="imagen">
					</a>
					<p class="lista_izquierda">
						Frixen cola<br>
						Arancione<br>
						Limone<br>
						Tonica						
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
		<p>La Tragona <img src="../media/iconos/copyleft.png" alt="Copyleft" title="Copyleft">2017.<span class="desktop"> Autorizzazione per diffondere e copiare il contenuto di Questo sito web, la paternità dello stesso.</span><span class="ipad"> Copia il contenuto di questo web, conservando la paternità.</span></p>
	</footer>
</body>
</html>
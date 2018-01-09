<!DOCTYPE html>
<html>
<head>
	<title>Para empujar en La Tragona</title>

	<?php
		include 'head_basico.php';
		require_once('php/lib/spyc/spyc.php');
		$datos = Spyc::YAMLLoad('php/idiomas/lexico_es.yml');

		$producto = $datos['producto'];
		$titulos = $datos['titulos'];
		$bebidas = $datos['bebida'];
		include 'php/presentarProductos.php';

		$navidad = $datos['aviso']['navidad'];
	?>

	<link rel="stylesheet" href="css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="css/empujar.css">
	
	<script src="js/lightbox.min.js"></script>
	<script type="text/javascript" src="js/empujar.js"></script>
</head>
<body>
	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="index.php" alt="Inicio" title="Inicio">La Tragona</a></li>
			<li><a href="tragar.php" alt="Para tragar" title="Tapas y raciones">Para tragar</a></li>
			<li><a href="dondeestamos.php" alt="Donde estamos" title="Donde estamos">Donde estamos</a></li>
			<li><a href="quienessomos.php" alt="Quienes somos" title="Quienes somos">Quienes somos</a></li>
			<li><a href="contacta.php" alt="Contactar" title="Contacta con nostras">Contacta</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="#" alt="castellano" title="Web castellano"><img src="media/banderas/espana.png" alt="España" title="España"><span>Castellano</span></a></li>
			<li><a href="/en/push.php" alt="english" title="English web"><img src="media/banderas/inglaterra.jpg" alt="Inglaterra" title="Inglaterra"><span>English</span></a></li>
			<li><a href="/fr/pousser.php" alt="français" title="Web français"><img src="media/banderas/francia.png" alt="Francia" title="Francia"><span>Français</span></a></li>
			<li><a href="/it/spinta.php" alt="italiano" title="Web italiana"><img src="media/banderas/italia.jpg" alt="Italia" title="Italia"><span>Italiano</span></a></li>
		</ul>
	</section>

	<div id="contenedor">
		<nav id="superior">
			<ul>
				<li>
					<a href="index.php" alt="Inicio" title="Inicio"><span>La Tragona</span></a>
					<img src="media/banderas/multi.jpg" alt="multibandera" title="Idiomas" class="movil bandera" id="multi">
					<a href="#" alt="castellano" title="Web castellano"><img src="media/banderas/espana.png" alt="España" title="Web castellano" class="desktop ipad bandera"></a>
					<a href="/en/push.php" alt="english" title="English web"><img src="media/banderas/inglaterra.jpg" alt="Inglaterra" title="English web" class="desktop ipad bandera"></a>
					<a href="/fr/pousser.php" alt="français" title="Web français"><img src="media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="/it/spinta.php" alt="italiano" title="Web italiana"><img src="media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li class="movil ipad" id="logo_superior"><span>Menu</span><img src="media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="contacta.php" alt="Contactar" title="Contacta con nosotras">Contacta</a></li>
				<li class="desktop"><a href="quienessomos.php" alt="Quienes somos" title="Quienes somos">Quienes somos</a></li>
				<li class="desktop"><a href="dondeestamos.php" alt="Donde estamos" title="Donde estamos">Donde estamos</a></li>
				<li class="desktop"><a href="tragar.php" alt="Para tragar" title="Tapas y raciones">Para tragar</a></li>
			</ul>
		</nav>

		<nav id="lateral">
			<ul>
				<li id="cerve">Cervezas</li>
				<li id="vin">Vinos</li>
				<li id="lic">Licores</li>
				<li id="cuba">Cuba-libre</li>
				<li id="sin">Sin alcohol</li>
			</ul>
		</nav>

		<header></header>

		<section id="cerveza">
			<article class="foto">
				<a name="cerveza"><p id="espumoso">El trago espumoso</p></a>
				<?php include 'php/plantillas/cartel_navidades.php' ?>
			</article>

			<?= mostrarProductos($cervezas); ?>

		</section>

		<section id="vino">
			<article class="foto">
				<a name="vino"><p id="uva">El sabor de la uva</p></a>
			</article>	

			<?= mostrarProductos($vinos);	?>

		</section>	

		<section id="compartir" class="movil">
			<div class="fb-like" data-href="http://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>

		<section id="licores">
			<article class="foto">
				<a name="licor"><p id="aguardiente">Aguardientes artesanales</p></a>
			</article>

			<?= mostrarProductos($licores) ?>

		</section>

		<section id="combinados">
			<article class="foto">
				<a name="cubata"><p id="cuba_libre">Combinados</p></a>
			</article>

			<article class="contenido">
				<legend>Bebidas claras (6&euro;)</legend>
				<div>
					<a href="media/imagenes/empujar/combi_claro.jpg" data-lightbox="example-1" data-title="Combinado claro">
						<img src="media/imagenes/empujar/minis/combi_claro.jpg" alt="Combinado claro" title="Combinado claro" class="imagen">
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
				<legend>Bebidas oscuras (6&euro;)</legend>
				<div>
					<a href="media/imagenes/empujar/combi_oscu.jpg" data-lightbox="example-1" data-title="Combinado oscuro">
						<img src="media/imagenes/empujar/minis/combi_oscu.jpg" alt="Combinado oscuro" title="Combinado oscuro" class="imagen">
					</a>
					<p class="lista_izquierda">
						Brugal<br>
						Cacique<br>
						DYC
					</p>
					<p class="lista_derecha">
						JB<br>
						Ballantines
					</p>
				</div>
			</article>
		</section>

		<section id="sin_alcohol">
			<article class="foto">
				<a name="sin"><p id="sin_alc">Sin alcohol</p></a>
			</article>

			<article class="contenido">
				<legend>Zumos orgánicos (2.50&euro;)</legend>
				<div>
					<a href="media/imagenes/empujar/zumos_org.jpg" data-lightbox="example-1" data-title="Zumos orgánicos">
						<img src="media/imagenes/empujar/minis/zumos_org.jpg" alt="Zumos orgánicos" title="Zumos orgánicos" class="imagen">
					</a>
					<p>
						Mandarina y romero<br>
						Limonada y jengibre<br>
						Pera y pimienta de Sichuan<br>
						Tomate y wasabi
					</p>
				</div>

				<legend>Zumos (2&euro;)</legend>
				<div>
					<a href="media/imagenes/empujar/zumo.jpg" data-lightbox="example-1" data-title="Zumos">
						<img src="media/imagenes/empujar/minis/zumo.jpg" alt="Zumos" title="Zumos" class="imagen">
					</a>
					<p>
						Melocotón<br>
						Naranja<br>
						Piña<br>
						Tomate
					</p>
				</div>
			
				<legend>Refrescos (2&euro;)</legend>
				<div>
					<a href="media/imagenes/empujar/refresco.jpg" data-lightbox="example-1" data-title="Refrescos">
						<img src="media/imagenes/empujar/minis/refresco.jpg" alt="Refrescos" title="Refrescos" class="imagen">
					</a>
					<p class="lista_izquierda">
						Frixen cola<br>
						Naranja<br>
						Limon<br>
						Tónica
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
		<p>La Tragona <img src="media/iconos/copyleft.png" alt="Copyleft" title="Copyleft"> 2017.<span class="desktop"> Se autoriza la difusión y copia del contenido de este sitio web, manteniendo la autoría del mismo.</span><span class="ipad"> Copia el contenido de esta web, conservando la autoría.</span></p>
	</footer>
</body>
</html>
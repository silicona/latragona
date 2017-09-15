<!DOCTYPE html>
<html>
<head>
	<title>Para empujar en La Tragona</title>

	<meta charset="utf-8">
	<meta name="author" content="alejoizquierdomartinez@gmail.com">
	<meta name="keywords" content="tapas, tapeo, tostas, raciones, vino, licor artesanal, cañas, Rastro, junto al Rastro, a dos minutos del Rastro, La Latina, Tirso de Molina, oasis en Madrid, buen ambiente, sitio tranquilo, trato personal, ambiente agradable, bar de barrio, punto de encuentro, cercania a teatro, Lavapies, teatro, cabaret, buen precio, precio asequible, sin gluten, carta de alergenos, comida cuidada, productos frescos, productos de mercado, mercado cercano, productor cercano, pan ecologico, pan artesanal, voni ecologico, prensa alternativa, wifi gratis">
	<meta name="description" content ="Bar de tapas, donde se sirven tostas y raciones sin gluten elaboradas con productos de mercado y vino ecologico, ademas de licores artesanales y combinados que quitan el hipo. Situado junto al Rastro, en el centro de Madrid, entre La Latina y Tirso de Molina.">
	
	<meta name="viewport" content="width=device-width; initial-scale=1.0">

	<link rel="shortcut icon" href="media/icono.ico" type="image/x-icon">
	<link rel="icon" href="media/icono.ico" type="image/x-icon">

	<?php
		require_once('php/lib/spyc/spyc.php');
		$datos = Spyc::YAMLLoad('php/idiomas/lexico_es.yml');
		$vacaciones = $datos['aviso']['agosto']['titular'];
		$vuelta = $datos['aviso']['agosto']['vuelta'];
	?>
	<script type="text/javascript">
		titular = '<?= $vacaciones; ?>';
		vuelta = '<?= $vuelta; ?>';
	</script>

	<link rel="stylesheet" type="text/css" href="css/tripoli_index.css">
	<link rel="stylesheet" href="css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/lightbox.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/empujar.css">
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
			<div class="foto">
				<a name="cerveza"><p id="espumoso">El trago espumoso</p></a>
			</div>	

			<div class="contenido">	
				<legend>Estrella de Levante <span class="desktop">(Rubia)</span></legend>
				<div id="estrella">
					<a href="media/imagenes/empujar/rubia.jpg" data-lightbox="example-1" data-title="Estrella Levante">
						<img src="media/imagenes/empujar/minis/rubia.jpg" class="imagen" alt="Estrella Levante" title="Estrella Levante">
					</a>
					<ul>
						<li>Caña - 1.50&euro;</li>
						<li>Doble - 2.50&euro;</li>
						<li>Tercio - 2.50&euro;</li>
						<li>Mini<span class="descrip"> (500ml.) </span>- 3.50&euro;</li>
					</ul>
				</div>

				<legend>Estrella de levante <span class="desktop">(Sin alcohol)</span></legend>
				<div id="estrella_sin">
					<a href="imag_ejemplos/bebidas/estrella_sin.jpg" data-lightbox="example-1" data-title="Estrella Sin alcochol">
						<img src="imag_ejemplos/bebidas/mini_estrella_sin.jpg" class="imagen" alt="Estrella Sin alcochol" title="Estrella Sin alcochol">
					</a>
					<ul>
						<li>Botellín - 1.50&euro;</li>
					</ul>
				</div>

				<legend>Punta Este <span class="desktop">(Tostada)</span></legend>
				<div>
					<a href="media/imagenes/empujar/tostada.jpg" data-lightbox="example-1" data-title="Punta Este">
						<img src="media/imagenes/empujar/minis/tostada.jpg" class="imagen" alt="Punta Este" title="Punta Este">
					</a>
					<ul>
						<li>Caña - 1.70&euro;</li>
						<li>Doble - 3.00&euro;</li>
						<li>Mini<span class="descrip"> (500ml.) </span>- 4.00&euro;</li>
					</ul>
				</div>

				<legend>Daura Damm <span class="desktop">(Sin gluten)</span></legend>
				<div>
					<a href="media/imagenes/empujar/daura.jpg" data-lightbox="example-1" data-title="Daura Damm">
						<img src="media/imagenes/empujar/minis/daura.jpg" class="imagen" alt="Daura Damm" title="Daura Damm">
					</a>
					<ul>
						<li>Tercio - 2.50&euro;</li>
					</ul>
				</div>
			</div>
		</section>

		<section id="vino">
			<div class="foto">
				<a name="vino"><p id="uva">El sabor de la uva</p></a>
			</div>	

			<div class="contenido">
				<legend>Tintos</legend>
				<div>
					<a href="media/imagenes/empujar/7puntas.jpg" data-lightbox="example-1" data-title="7 puntas">
						<img src="media/imagenes/empujar/minis/7puntas.jpg" class="imagen" alt="7 Puntas" title="7 Puntas">
					</a>
					<p>7 puntas (Castilla) (Copa: 1.50&euro;; Botella: 12&euro;)</p>
					<a data-fancybox data-src="php/guia.php?vino=puntas" data-type="iframe" href="javascript:;">Ver descripción</a>
				</div>
				<div>
					<a href="media/imagenes/empujar/zinio.jpg" data-lightbox="example-1" data-title="Zinio">
						<img src="media/imagenes/empujar/minis/zinio.jpg" class="imagen" alt="Zinio" title="Zinio">
					</a>
					<p>Zinio (La Rioja) (Copa: 1.80&euro;; Botella: 12&euro;)</p>
					<a data-fancybox data-src="php/guia.php?vino=zinio" data-type="iframe" href="javascript:;">Ver descripción</a>
				</div>
				<div>
					<a href="media/imagenes/empujar/muriel.jpg" data-lightbox="example-1" data-title="Muriel">
						<img src="media/imagenes/empujar/minis/muriel.jpg" class="imagen" alt="Muriel" title="Muriel">
					</a>
					<p>Muriel Crianza (La Rioja) (Copa: 2.40&euro;; Botella: 15&euro;)</p>
					<a data-fancybox data-src="php/guia.php?vino=muriel" data-type="iframe" href="javascript:;">Ver descripción</a>
				</div>
				<div>
					<a href="media/imagenes/empujar/menina.jpg" data-lightbox="example-1" data-title="Menina">
						<img src="media/imagenes/empujar/minis/menina.jpg" class="imagen" alt="Menina" title="Menina">
					</a>
					<p>Menina Crianza (Madrid) (Copa: 2.80&euro;; Botella: 18&euro;)</p>
					<a data-fancybox data-src="php/guia.php?vino=menina" data-type="iframe" href="javascript:;">Ver descripción</a>
				</div>
				<div>
					<a href="media/imagenes/empujar/feroes.jpg" data-lightbox="example-1" data-title="Feroes">
					  <img src="media/imagenes/empujar/minis/feroes.jpg" class="imagen" alt="Feroes" title="Feroes">
					</a>
					<p>Feroes (Ribera) (Copa: 2.40&euro;; Botella: 15&euro;)</p>
					<a data-fancybox data-src="php/guia.php?vino=feroes" data-type="iframe" href="javascript:;">Ver descripción</a>
				</div>
				<div>
					<a href="media/imagenes/empujar/mureda.jpg" data-lightbox="example-1" data-title="Mureda">
						<img src="media/imagenes/empujar/minis/mureda.jpg" class="imagen" alt="Mureda" title="Mureda">
					</a>
					<p>Mureda (Syrah) (Copa: 2.40&euro;; Botella: 15&euro;)</p>
					<a data-fancybox data-src="php/guia.php?vino=mureda" data-type="iframe" href="javascript:;">Ver descripción</a>
				</div>
				<div>
					<a href="media/imagenes/empujar/bierzo.jpg" data-lightbox="example-1" data-title="Cosechero">
						<img src="media/imagenes/empujar/minis/bierzo.jpg" class="imagen" alt="Cosechero" title="Cosechero">
					</a>
					<p>Bierzo (Mencia) (Copa: 2.80&euro;; Botella: 18&euro;)</p>
					<a data-fancybox data-src="php/guia.php?vino=bierzo" data-type="iframe" href="javascript:;">Ver descripción</a>
				</div>
				<div>
					<a href="media/imagenes/empujar/nuviana_tinto.jpg" data-lightbox="example-1" data-title="Nuviana">
						<img src="media/imagenes/empujar/minis/nuviana_tinto.jpg" class="imagen" alt="Nuviana" title="Nuviana">
					</a>
					<p>Nuviana (Copa: 2.40&euro;; Botella: 15&euro;)</p>
					<a data-fancybox data-src="php/guia.php?vino=nuviana_tinto" data-type="iframe" href="javascript:;">Ver descripción</a>
				</div>

				<legend>Blancos</legend>
				<div>
					<a href="media/imagenes/empujar/albarino.jpg" data-lightbox="example-1" data-title="Albariño">
						<img src="media/imagenes/empujar/minis/albarino.jpg" class="imagen" alt="Albariño" title="Albariño">
					</a>
					<p>Albariño (Cosechero) (Copa: 2.20&euro;; Botella: 12&euro;)</p>
					<a data-fancybox data-src="php/guia.php?vino=albarino" data-type="iframe" href="javascript:;">Ver descripción</a>
				</div>
				<div>
					<a href="media/imagenes/empujar/bierzo_godello.jpg" data-lightbox="example-1" data-title="Bierzo Godello">
						<img src="media/imagenes/empujar/minis/bierzo_godello.jpg" class="imagen" alt="Bierzo Godello" title="Bierzo Godello">
					</a>
					<p>Bierzo Godello (Copa: 2.80&euro;; Botella: 18&euro;)</p>
					<a data-fancybox data-src="php/guia.php?vino=bierzo_god" data-type="iframe" href="javascript:;">Ver descripción</a>
				</div>
				<div>
					<a href="media/imagenes/empujar/lagartijo.jpg" data-lightbox="example-1" data-title="Lagartijo">
						<img src="media/imagenes/empujar/minis/lagartijo.jpg" class="imagen" alt="Lagartijo" title="Lagartijo">
					</a>
					<p>Lagartijo (Verdejo) (Copa: 2.20&euro;; Botella: 12&euro;)</p>
					<a data-fancybox data-src="php/guia.php?vino=lagartijo" data-type="iframe" href="javascript:;">Ver descripción</a>
				</div>
				<div>
					<a href="media/imagenes/empujar/nuviana_blanco.jpg" data-lightbox="example-1" data-title="Nuviana">
						<img src="media/imagenes/empujar/minis/nuviana_blanco.jpg" class="imagen" alt="Nuviana" title="Nuviana">
					</a>
					<p>Nuviana (Copa: 2.20&euro;; Botella: 12&euro;)</p>
					<a data-fancybox data-src="php/guia.php?vino=nuviana_blanco" data-type="iframe" href="javascript:;">Ver descripción</a>
				</div>
				<div>
					<a href="media/imagenes/empujar/vinaldena.jpg" data-lightbox="example-1" data-title="Viñaldena">
						<img src="media/imagenes/empujar/minis/vinaldena.jpg" class="imagen" alt="Viñaldena" title="Viñaldena">
					</a>
					<p>Viñaldena (Verdejo) (Copa: 2.20&euro;; Botella: 12&euro;)</p>
					<a data-fancybox data-src="php/guia.php?vino=vinaldena" data-type="iframe" href="javascript:;">Ver descripción</a>
				</div>
				<div>
					<a href="media/imagenes/empujar/sastreria.jpg" data-lightbox="example-1" data-title="La sastreria">
						<img src="media/imagenes/empujar/minis/sastreria.jpg" class="imagen" alt="La sastreria" title="La sastreria">
					</a>
					<p>La sastreria (Garnacha) (Copa: 2.20&euro;; Botella: 12&euro;)</p>
					<a data-fancybox data-src="php/guia.php?vino=sastreria" data-type="iframe" href="javascript:;">Ver descripción</a>
				</div>

				<legend>Vermú</legend>
				<div>
					<a href="media/imagenes/empujar/vermouth.jpg" data-lightbox="example-1" data-title="Vermú">
						<img src="media/imagenes/empujar/minis/vermouth.jpg" class="imagen" alt="Vermú" title="Vermú">
					</a>
					<p>Vermú casero (Copa: 2&euro;)</p>
					<a data-fancybox data-src="php/guia.php?vino=vermouth" data-type="iframe" href="javascript:;">Ver descripción</a>
				</div>
			</div>
		</section>	

		<section id="compartir" class="movil">
			<div class="fb-like" data-href="http://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>

		<section id="licores">
			<div class="foto">
				<a name="licor"><p id="aguardiente">Aguardientes artesanales</p></a>
			</div>

			<div class="contenido">
				<legend>Licores Artesanales</legend>
				<div>
					<a href="media/imagenes/empujar/lic_hierbas.jpg" data-lightbox="example-1" data-title="Orujo de hierbas">
						<img src="media/imagenes/empujar/minis/lic_hierbas.jpg" alt="Orujo de hierbas" title="Orujo de hierbas" class="imagen">
					</a>
					<p>Orujo de hierbas.<br>(Chupito: 2&euro;; Copa: 4&euro;)</p>
				</div>
				<div>
					<a href="media/imagenes/empujar/lic_blanco.jpg" data-lightbox="example-1" data-title="Orujo blanco">
						<img src="media/imagenes/empujar/minis/lic_blanco.jpg" alt="Orujo blanco" title="Orujo blanco" class="imagen">
					</a>
					<p>Orujo blanco.<br>(Chupito: 2&euro;; Copa: 4&euro;)</p>
				</div>
				<div>
					<a href="media/imagenes/empujar/lic_tostado.jpg" data-lightbox="example-1" data-title="Orujo tostado">
						<img src="media/imagenes/empujar/minis/lic_tostado.jpg" alt="Orujo tostado" title="Orujo tostado" class="imagen">
					</a>
					<p>Orujo tostado.<br>(Chupito: 2&euro;; Copa: 4&euro;)</p>
				</div>
				<div>
					<a href="media/imagenes/empujar/lic_cafe.jpg" data-lightbox="example-1" data-title="Licor de cafe">
						<img src="media/imagenes/empujar/minis/lic_cafe.jpg" alt="Licor de cafe" title="Licor de cafe" class="imagen">
					</a>
					<p>Licor de cafe.<br>(Chupito: 2&euro;; Copa: 4&euro;)</p>
				</div>
				<div>
					<a href="media/imagenes/empujar/lic_pacharan.jpg" data-lightbox="example-1" data-title="Pacharán">
						<img src="media/imagenes/empujar/minis/lic_pacharan.jpg" alt="Pacharán" title="Pacharán" class="imagen">
					</a>
					<p>Pacharán.<br>(Chupito: 2&euro;; Copa: 4&euro;)</p>
				</div>
				<div>
					<a href="media/imagenes/empujar/lic_crema_orujo.jpg" data-lightbox="example-1" data-title="Crema de orujo">
						<img src="media/imagenes/empujar/minis/lic_crema_orujo.jpg" alt="Crema de orujo" title="Crema de orujo" class="imagen">
					</a>
					<p>Crema de orujo.<br>(Chupito: 2&euro;; Copa: 4&euro;)</p>
				</div>
				<div>
					<a href="media/imagenes/empujar/lic_choco.jpg" data-lightbox="example-1" data-title="Crema de chocolate">
						<img src="media/imagenes/empujar/minis/lic_choco.jpg" alt="Crema de chocolate" title="Crema de chocolate" class="imagen">
					</a>
					<p>Crema de chocolate<span class="descrip"> con cerezas</span>.<br>(Chupito: 2&euro;; Copa: 4&euro;)</p>
				</div>
				<div>
					<a href="media/imagenes/empujar/lic_crem_cafe.jpg" data-lightbox="example-1" data-title="Crema de cafe">
						<img src="media/imagenes/empujar/minis/lic_crem_cafe.jpg" alt="Crema de cafe" title="Crema de cafe" class="imagen">
					</a>
					<p>Crema de cafe.<br>(Chupito: 2&euro;; Copa: 4&euro;)</p>
				</div>
			</div>
		</section>

		<section id="combinados">
			<div class="foto">
				<a name="cubata"><p id="cuba_libre">Combinados</p></a>
			</div>

			<div class="contenido">
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
			</div>
		</section>

		<section id="sin_alcohol">
			<div class="foto">
				<a name="sin"><p id="sin_alc">Sin alcohol</p></a>
			</div>

			<div class="contenido">
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
			</div>
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
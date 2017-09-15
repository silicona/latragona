<!DOCTYPE html>
<html>
<head>
	<title>Encuentra La Tragona</title>

	<meta charset="utf-8">
	<meta name="author" content="alejoizquierdomartinez@gmail.com">
	<meta name="keywords" content="tapas, tapeo, tostas, raciones, vino, licor artesanal, cañas, Rastro, junto al Rastro, a dos minutos del Rastro, La Latina, Tirso de Molina, oasis en Madrid, buen ambiente, sitio tranquilo, trato personal, ambiente agradable, bar de barrio, punto de encuentro, cercania a teatro, Lavapies, teatro, cabaret, buen precio, precio asequible, sin gluten, carta de alergenos, comida cuidada, productos frescos, productos de mercado, mercado cercano, productor cercano, pan ecologico, pan artesanal, voni ecologico, prensa alternativa, wifi gratis">
	<meta name="description" content ="Bar de tapas, donde se sirven tostas y raciones sin gluten elaboradas con productos de mercado y vino ecologico, ademas de licores artesanales y combinados que quitan el hipo. Situado junto al Rastro, en el centro de Madrid, entre La Latina y Tirso de Molina.">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="./icono.ico" type="image/x-icon">
	<link rel="icon" href="./icono.ico" type="image/x-icon">
	
	<link rel="stylesheet" type="text/css" href="css/tripoli_index.css">
	<link rel="stylesheet" type="text/css" href="css/dondeestamos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	
	<?php
		require_once('php/lib/spyc/spyc.php');
		$datos = Spyc::YAMLLoad('php/idiomas/lexico_es.yml');
		$info = $datos['mapa']['info'];
		$vacaciones = $datos['aviso']['agosto']['titular'];
		$vuelta = $datos['aviso']['agosto']['vuelta'];
	?>
	<script type="text/javascript">
		mapa_info = '<?= $info; ?>';
		titular = '<?= $vacaciones; ?>';
		vuelta = '<?= $vuelta; ?>';
	</script>

	<script type="text/javascript" src="js/dondeestamos.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAokzjV_CnyuUEoa08ljyZpdhE7y3nlRUM&callback=iniciarMapa"></script>
</head>
<body>

	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="index.php" alt="Inicio" title="Inicio">La Tragona</a></li>
			<li><a href="tragar.php" alt="Para tragar" title="Tapas y raciones">Para tragar</a></li>
			<li><a href="empujar.php" alt="Para empujar" title="Las bebidas">Para empujar</a></li>
			<li><a href="quienessomos.php" alt="Quienes somos" title="Quienes somos">Quienes somos</a></li>
			<li><a href="contacta.php" alt="Contactar" title="Contacta con nosotras">Contacta</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="#" alt="castellano" title="Web castellano"><img src="media/banderas/espana.png" alt="España" title="España"><span>Castellano</span></a></li>
			<li><a href="/en/whereweare.php" alt="english" title="English web"><img src="media/banderas/inglaterra.jpg" alt="Inglaterra" title="Inglaterra"><span>English</span></a></li>
			<li><a href="/fr/ind" alt="français" title="Web français"><img src="media/banderas/francia.png" alt="Francia" title="Francia"><span>Français</span></a></li>
			<li><a href="/it/ind" alt="italiano" title="Web italiana"><img src="media/banderas/italia.jpg" alt="Italia" title="Italia"><span>Italiano</span></a></li>
		</ul>
	</section>

	<header>
		La Tragona<span class="desktop"> te abre sus puertas</span><br>
		<img src="media/logo_red.gif" alt="La Tragona" title="La Tragona">
	</header>

	<div id="leer">
		<p>Encuéntranos</p>
	</div>
	
	<div id="contenedor">
		<nav id="superior">
			<ul>
				<li>
					<a href="index.php" alt="Inicio" title="Inicio"><span>La Tragona</span></a>
					<img src="media/banderas/multi.jpg" alt="multibandera" title="Idiomas" class="movil bandera" id="multi">
					<a href="#" alt="castellano" title="Web castellano"><img src="media/banderas/espana.png" alt="España" title="Web castellano" class="desktop ipad bandera"></a>
					<a href="/en/whereweare.php" alt="english" title="English web"><img src="media/banderas/inglaterra.jpg" alt="Inglaterra" title="English web" class="desktop ipad bandera"></a>
					<a href="/fr/ind" alt="français" title="Web français"><img src="media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="/it/ind" alt="italiano" title="Web italiana"><img src="media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li class="movil ipad" id="logo_superior"><span>Menu</span><img src="media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="contacta.php" alt="Contactar" title="Contacta con nostras">Contacta</a></li>
				<li class="desktop"><a href="quienessomos.php" alt="Quienes somos" title="Quienes somos">Quienes somos</a></li>
				<li class="desktop"><a href="empujar.php" alt="Para empujar" title="Las bebidas">Para empujar</a></li>
				<li class="desktop"><a href="tragar.php" alt="Para tragar" title="Tapas y raciones">Para tragar</a></li>
			</ul>
		</nav>

		<h1>Los alrededores de La Tragona</h1>

		<div id="mapa"></div>
		<section class="desktop">
			<p>
				Hemos rescatado un bar de barrio junto al Rastro, entre La Latina, Tirso de molina y Lavapies, en la calle Juanelo, 11: un oasis en el centro de Madrid, en un barrio de gran tradición multicultural.<span class="ocultar_ipad"> Nos complace ser un punto de encuentro para quienes entran o salen de él.</span><br>
				<br>
				Permanecemos abiertos de martes a sabado, de 1 a 4 de la tarde y de 8 a 12 de la noche. Los domingos estamos desde las 12 de la mañana hasta las 4 de la tarde.<br>
				<br>
				Si vienes de visitar <a href="http://www.elrastro.org/" alt="El rastro" title="elrastro.org">el Rastro</a><span class="ocultar_ipad">, asistes al <a href="http://www.summummusic.com/" alt="Teatro Nuevo Apolo" title="Web del Nuevo Apolo">Teatro Nuevo Apolo</a>, pasas por <a href="https://www.traficantes.net/" alt="Traficantes de sueños" title="traficantes.net">libreria Traficantes de sueños</a> o simplemente compras el pan en <a href="http://panifiesto.es/" alt="Panifiesto.org" title="Panifiesto.org">Panifiesto</a></span>, en La Tragona encontrarás un sitio tranquilo y un buen ambiente para tomar un vino ecológico o una tosta sin gluten hecha con productos frescos.
			</p>
		</section>

		<section class="movil">
			<p>
				Hemos rescatado un bar de barrio en la calle Juanelo, 11, junto al Rastro, entre La Latina, Tirso de molina y Lavapies.<br>
				<br>
				Permanecemos abiertos de martes a sabado, de 1 a 4 de la tarde y de 8 a 12 de la noche. Los domingos estamos desde las 12 de la mañana hasta las 4 de la tarde.<br>
				<br>
				Si vienes de visitar <a href="http://www.elrastro.org/" alt="El rastro" title="elrastro.org">el Rastro</a>, asistes al <a href="http://www.summummusic.com/" alt="Teatro Nuevo Apolo" title="Web del Nuevo Apolo">Teatro Nuevo Apolo</a>, pasas por <a href="https://www.traficantes.net/" alt="Traficantes de sueños" title="traficantes.net">libreria Traficantes de sueños</a> o simplemente compras el pan en <a href="http://panifiesto.es/" alt="Panifiesto.org" title="Panifiesto.org">Panifiesto</a>, en La Tragona encontrarás un sitio tranquilo y un buen ambiente para tomar un vino acológico o una tosta hecha con productos frescos.
			</p>
		</section>

		<section id="compartir" class="movil">
			<div class="fb-like" data-href="http://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>

		<section id="rrss">
			<ul class="desktop">
				<li><span>Siguenos en:</span></li>
				<li><a href="https://www.facebook.com/latragonalavapies"><img src="media/iconos/fb.jpg" alt="Facebook" title="facebook.com/latragonalavapies"><span>@latragonalavapies</span></a></li>
				<li><a href="https://twitter.com/TragonaBar"><img src="media/iconos/twitter.png" alt="Twitter" title="@TragonaBar"><span>@tragonabar</span></a></li>
			</ul>
		</section>
		<div style="clear: both"></div>
	</div>

	<footer id="legal">
		<p>La Tragona <img src="media/iconos/copyleft.png" alt="Copyleft" title="Copyleft"> 2017.<span class="desktop"> Se autoriza la difusión y copia del contenido de este sitio web, manteniendo la autoría del mismo.</span><span class="ipad"> Autorizada la copia del contenido de esta web, conservando la autoría.</span></p>
	</footer>

</body>
</html>
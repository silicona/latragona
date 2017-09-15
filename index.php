<!DOCTYPE html>
<html>
<head>
	<title>Bienvenidas a La Tragona</title>

	<meta charset="utf-8">
	<meta name="author" content="alejoizquierdomartinez@gmail.com">
	<meta name="keywords" content="tapas, tapeo, tostas, raciones, vino, licor artesanal, cañas, Rastro, junto al Rastro, a dos minutos del Rastro, La Latina, Tirso de Molina, oasis en Madrid, buen ambiente, sitio tranquilo, trato personal, ambiente agradable, bar de barrio, punto de encuentro, cercania a teatro, Lavapies, teatro, cabaret, buen precio, precio asequible, sin gluten, carta de alergenos, comida cuidada, productos frescos, productos de mercado, mercado cercano, productor cercano, pan ecologico, pan artesanal, vino ecologico, prensa alternativa, wifi gratis">
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
	<link rel="stylesheet" type="text/css" href="css/index.css">
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
</head>
<body>
	<div id="fb-root"></div>

	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="tragar.php" alt="Para tragar" title="Tapas y raciones">Para tragar</a></li>
			<li><a href="empujar.php" alt="Para empujar" title="Las bebidas">Para empujar</a></li>
			<li><a href="dondeestamos.php" alt="Donde estamos" title="Donde estamos">Donde estamos</a></li>
			<li><a href="quienessomos.php" alt="Quienes somos" title="Quienes somos">Quienes somos</a></li>
			<li><a href="contacta.php" alt="Contactar" title="Contacta con nosotras">Contacta</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="#" alt="castellano" title="Web castellano"><img src="media/banderas/espana.png" alt="España" title="España"><span>Castellano</span></a></li>
			<li><a href="en/index.php" alt="english" title="English web"><img src="media/banderas/inglaterra.jpg" alt="Inglaterra" title="Inglaterra"><span>English</span></a></li>
			<li><a href="fr/index.php" alt="français" title="Web français"><img src="media/banderas/francia.png" alt="Francia" title="Francia"><span>Français</span></a></li>
			<li><a href="it/index.php" alt="italiano" title="Web italiana"><img src="media/banderas/italia.jpg" alt="Italia" title="Italia"><span>Italiano</span></a></li>
		</ul>
	</section>

	<header>
		<span class="desktop">Bienvenidas a </span>La Tragona<br>
		<img src="media/logo_red.gif" alt="La Tragona" title="La Tragona">
	</header>

	<div id="leer">
		<p>Conócenos</p>
	</div>
	
	<div id="contenedor">
		<nav id="superior">
			<ul>
				<li>
					<span>La Tragona</span>
					<img src="media/banderas/multi.jpg" alt="multibandera" title="Idiomas" class="movil bandera" id="multi">
					<a href="#" alt="castellano" title="Web castellano"><img src="media/banderas/espana.png" alt="España" title="Web castellano" class="desktop ipad bandera"></a>
					<a href="/en/index.php" alt="english" title="English web"><img src="media/banderas/inglaterra.jpg" alt="Inglaterra" title="English web" class="desktop ipad bandera"></a>
					<a href="/fr/index.php" alt="français" title="Web français"><img src="media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="/it/index.php" alt="italiano" title="Web italiana"><img src="media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li class="movil ipad" id="logo_superior"><span>Menu</span><img src="media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="contacta.php" alt="Contactar" title="Contacta con nostras">Contacta</a></li>
				<li class="desktop"><a href="quienessomos.php" alt="Quienes somos" title="Quienes somos">Quienes somos</a></li>
				<li class="desktop"><a href="dondeestamos.php" alt="Donde estamos" title="Donde estamos">Donde estamos</a></li>
				<li class="desktop"><a href="empujar.php" alt="Para empujar" title="Las bebidas">Para empujar</a></li>
				<li class="desktop"><a href="tragar.php" alt="Para tragar" title="Tapas y raciones">Para tragar</a></li>
				<div style="clear: both"></div>
			</ul>
		</nav>

		<h1>Bienvenidas a La Tragona</h1>
			
			<section class="desktop">
					
				<p>
					Hemos reconstruido este espacio hasta conseguir un bar de barrio con un ambiente agradable. Aquí puedes disfrutar de una <a href="tragar.html" alt="Para tragar" title="La comida de La Tragona">comida cuidada</a>, elaborada con productos de mercado, pan artesanal y <a href="empujar.html" alt="Para empujar" title="La bebida de La Tragona">vinos ecológicos</a>.<br>
					<br>
					De martes a domingo, somos un oasis en Madrid, <a href="dondeestamos.html" alt="Donde Estamos" title="Donde estamos">un sitio tranquilo entre Tirso de molina y La Latina</a> donde tomar cañas y raciones sin gluten a un precio asequible, rodeado de librerias y teatros, donde también puedes encontrar la prensa alternativa.<br>
					<br>
					Además de vinos, licores artesanales, tostas y raciones, los días laborables tenemos un plato del día, preparado con productos frescos de los mercados cercanos, fruto del <a href="quienessomos.html" alt="Quienes somos" title="Quienes somos">buen hacer de Luis y Pilar</a>.<br>
					<br>
					Un punto de encuentro de sabores tradicionales, buen ambiente y sencilla innovación, junto al Rastro. Eso es <a href="contacta.html" alt="Contacta" title="Contacta con nosotras">La Tragona</a>.	
				</p>
				<img src="media/logo_grande.jpg" alt="logo" title="La Tragona" id="fotolateral">
			</section>

			<section class="movil">
				<p>
					Bar de barrio de ambiente agradable. Aquí puedes disfrutar de una <a href="tragar.html" alt="Para tragar" title="La comida de La Tragona">comida cuidada</a>, productos de mercado, pan artesanal y <a href="empujar.html" alt="Para empujar" title="La bebida de La Tragona">vinos ecológicos</a>.<br>
					<br>
					De martes a domingo, somos <a href="dondeestamos.html" alt="Donde Estamos" title="Donde estamos">un sitio tranquilo entre Tirso de Molina y La Latina</a> donde tomar cañas y raciones sin gluten a un precio asequible.<br>
					<br>
					Entresemana, hay un plato del día, con productos frescos de los mercados cercanos, fruto del <a href="quienessomos.html" alt="Quienes somos" title="Quienes somos">buen hacer de Luis y Pilar</a>.<br>
					<br>
					Un punto de encuentro de sabores tradicionales, buen ambiente y sencilla innovación, junto al Rastro. Eso es <a href="contacta.html" alt="Contacta" title="Contacta con nosotras">La Tragona</a>.
				</p>
			</section>

			<section id="compartir" class="movil">
				<div class="fb-like" data-href="http://latragona.esy.es" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
				<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
			</section>

			<section id="rrss">
				<ul class="desktop">
					<li><span>Siguenos en:</span></li>
					<li><a href="https://www.facebook.com/latragonalavapies"><img src="media/iconos/fb.jpg" alt="Facebook" title="facebook.com/latragonalavapies"><span>@latragonalavapies</span></a></li>
					<li><a href="https://twitter.com/TragonaBar"><img src="media/iconos/twitter.png" alt="Twitter" title="@TragonaBar"><span>@tragonabar</span></a></li>
					<!--
					<li><img src="media/iconos/pint.svg" alt="Pinterest" title="Pinterest"></li>
					<li><img src="media/iconos/instagram.jpg" alt="Instagram" title="Instagram"></li>
					-->
				</ul>
			</section>
			<div style="clear: both;"></div>
	</div>

	<footer id="legal">
		<p>La Tragona <img src="media/iconos/copyleft.png" alt="Copyleft" title="Copyleft"> 2017.<span class="desktop"> Se autoriza la difusión y copia del contenido de este sitio web, manteniendo la autoría del mismo.</span><span class="ipad"> Copia el contenido de esta web, conservando la autoría.</span></p>
	</footer>

</body>
</html>
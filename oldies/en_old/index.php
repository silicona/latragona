<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome to La Tragona</title>
	
	<?php
		include 'basic_head.php';
		require_once('../php/lib/spyc/spyc.php');
		$navidad = Spyc::YAMLLoad('../php/idiomas/lexico_en.yml')['aviso']['navidad'];
	?>

	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<script type="text/javascript" src="../js/index.js"></script>
	
</head>
<body>
	<div id="fb-root"></div>

	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="swallow.php" alt="Para tragar" title="Tapas and portions">To swallow</a></li>
			<li><a href="push.php" alt="Para empujar" title="The drinks">To push</a></li>
			<li><a href="whereweare.php" alt="Donde estamos" title="Where we are">Where we are</a></li>
			<li><a href="whoweare.php" alt="Quienes somos" title="Who we are">Who we are</a></li>
			<li><a href="contactus.php" alt="Contactar" title="Contact us">Contact us</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="../index.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Spanish"><span>Castellano</span></a></li>
			<li><a href="#" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English"><span>English</span></a></li>
			<li><a href="../fr/index.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="French"><span>Français</span></a></li>
			<li><a href="../it/index.php" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Italian"><span>Italiano</span></a></li>
		</ul>
	</section>

	<header>
		<span class="desktop">Welcome to </span>La Tragona<br>
		<img src="../media/logo_red.gif" alt="La Tragona" title="La Tragona">
	</header>

	<div id="leer">
		<p>Know us</p>
	</div>
	
	<main id="contenedor">
	
		<nav class="superior">
			<ul>
				<li>
					<span>La Tragona</span>
					<img src="../media/banderas/multi.jpg" alt="multibandera" title="Idiomas" class="movil bandera" id="multi">
					<a href="../index.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Web castellano" class="desktop ipad bandera"></a>
					<a href="#" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English web" class="desktop ipad bandera"></a>
					<a href="../fr/index.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="../it/index.php" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li id="logo_superior"><span>Menu</span><img src="../media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="contactus.php" alt="Contactar" title="Contact us">Contact us</a></li>
				<li class="desktop"><a href="whoweare.php" alt="Quienes somos" title="Who we are">Who we are</a></li>
				<li class="desktop"><a href="whereweare.php" alt="Donde estamos" title="Where we are">Where we are</a></li>
				<li class="desktop"><a href="push.php" alt="Para empujar" title="The drinks">For push</a></li>
				<li class="desktop"><a href="swallow.php" alt="Para tragar" title="Tapas and portions">For swallow</a></li>
				<div style="clear: both"></div>
			</ul>
		</nav>

		<h1>Welcome to La Tragona</h1>

		<section class="izquierda">

			<article class="imagen_lateral">
				<!--<img src="../media/logo_grande.jpg" alt="logo" title="La Tragona" class="planta">-->
				<?php include '../php/plantillas/cartel_navidades.php' ?>
			</article>

			<p>
				We have rebuilt this space to get a neighborhood bar with a pleasant atmosphere. Here you can enjoy a <a href="swallow.php" alt="To swallow" title="The food of La Tragona">caring food</a>, made with market products, homemade bread and <a href="push.php" alt="To push" title="The drinks of La Tragona">ecological wines</a>.<br>
				<br>
				From Tuesday to Sunday, we are an oasis in Madrid, <a href="whereweare.php" alt="Where we are" title="Where we are">a quiet place between Tirso de molina and La Latina</a> where to take cañas and gluten-free rations at an affordable price, surrounded by bookstores and theaters, where you can also find the alternative press.<br>
				<br>
				In addition to wines, homemade liqueurs, toasts and rations, on weekdays we have a dish of the day, prepared with fresh products from the nearby markets, fruit of the <a href="whoweare.php" alt="Who we are" title="Who we are">good work from Luis y Pilar</a>.<br>
				<br>
				A meeting point of traditional flavors, good atmosphere and simple innovation, next to the Rastro. That's <a href="contactus.php" alt="Contact us" title="Contact us">La Tragona</a>.	
			</p>
		</section>

		<section class="compartir movil">
			<div class="fb-like" data-href="http://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>

		<section class="rrss ipad desktop">
			<ul>
				<li><span>Follow us:</span></li>
				<li><a href="https://www.facebook.com/latragonalavapies"><img src="../media/iconos/fb.jpg" alt="Facebook" title="facebook.com/latragonalavapies"><span>@latragonalavapies</span></a></li>
				<li><a href="https://twitter.com/TragonaBar"><img src="../media/iconos/twitter.png" alt="Twitter" title="@TragonaBar"><span>@tragonabar</span></a></li>
			</ul>
		</section>
		
		<div style="clear: both;"></div>
		
		<footer class="legal">
			<p>La Tragona <img src="../media/iconos/copyleft.png" alt="Copyleft" title="Copyleft"> <?php echo date('Y', time() ) ?>.<span class="desktop"> Authorization to disseminate and copy the content of this website, The authorship of the same.</span><span class = "ipad"> Copy the contents of this web, conserving the authorship.</span></p>
		</footer>

	</main>

</body>
</html>
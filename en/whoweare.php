<!DOCTYPE html>
<html>
<head>
	<title>Who is La Tragona</title>

	<meta charset="utf-8">
	<meta name="author" content="alejoizquierdomartinez@gmail.com">
	<meta name="keywords" content="Tapas, toasts, tapeo, portions, wine, homemade liquor, cañas, Rastro, next to the Rastro, two minutes from the Rastro, La Latina, Tirso de Molina, oasis in Madrid, Bar area, meeting point, near to theater, Lavapies, theater, cabaret, good price, affordable price, gluten free, allergen menu, caring food, fresh food, fresh produce, market products, nearby market, ecological bread, Artisan bread, organic wine, alternative press, free wifi">
	<meta name="description" content ="Tapas bar where you can enjoy toasts and gluten-free rations made with market products and organic wine, as well as artisan and combined liquors that remove hiccups. Located next to the Rastro, in the center of Madrid, between La Latina and Tirso de Molina.">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="../media/icono.ico" type="image/x-icon">
	<link rel="icon" href="../media/icono.ico" type="image/x-icon">

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
	
	<link rel="stylesheet" type="text/css" href="../css/tripoli_index.css">
	<link rel="stylesheet" type="text/css" href="../css/quienessomos.css">

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="../js/quienessomos.js"></script>
</head>
<body>
	<div id="fb-root"></div>

	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="index.php" alt="Inicio" title="Index">La Tragona</a></li>
			<li><a href="swallow.php" alt="Para tragar" title="Tapas and portions">To swallow</a></li>
			<li><a href="push.php" alt="Para empujar" title="The drinks">To push</a></li>
			<li><a href="whereweare.php" alt="Donde estamos" title="Where we are">Where we are</a></li>
			<li><a href="contactus.php" alt="Contactar" title="Contact us">Contact us</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="../quienessomos.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="España"><span>Castellano</span></a></li>
			<li><a href="#" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="Inglaterra"><span>English</span></a></li>
			<li><a href="../fr/quisommesnous.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="Francia"><span>Français</span></a></li>
			<li><a href="../it/chisiamo.php" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Italia"><span>Italiano</span></a></li>
		</ul>
	</section>

	<header>
		<!--<span class="desktop">Quien es </span>La Tragona<br>-->
		Who La Tragona is<br>
		<img src="../media/logo_red.gif" alt="La Tragona" title="La Tragona">
	</header>

	<div id="leer">
		<p>Know us</p>
	</div>
	
	<div id="contenedor">
		<nav id="superior">
			<ul>
				<li>
					<a href="index.php" alt="Inicio" title="Inicio"><span>La Tragona</span></a>
					<img src="../media/banderas/multi.jpg" alt="multibandera" title="Idiomas" class="movil bandera" id="multi">
					<a href="../quienessomos.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Web castellano" class="desktop ipad bandera"></a>
					<a href="#" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English web" class="desktop ipad bandera"></a>
					<a href="../fr/quisommesnous.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="../it/chisiamo.php" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li class="movil ipad" id="logo_superior"><span>Menu</span><img src="../media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="contactus.php" alt="Contactar" title="Contact us">Contact us</a></li>
				<li class="desktop"><a href="whereweare.php" alt="Donde estamos" title="Where we are">Where we are</a></li>
				<li class="desktop"><a href="push.php" alt="Para empujar" title="The drinks">For push</a></li>
				<li class="desktop"><a href="swallow.php" alt="Para tragar" title="Tapas and portions">For swallow</a></li>
			</ul>
		</nav>

		<h1>Who La Tragona is</h1>
			<aside id="fotolateral">
				<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:43.425925925925924% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BPYKiZSAyOw/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Bares, qué lugares...</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A shared publication by Maribel Torregrosa (@maribeltorregrosa) at <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-01-17T19:41:00+00:00">January 17, 2017</time></p></div></blockquote>
				<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
			</aside>

			<section>
				<p>
					La Tragona is an oasis in Madrid with a pleasant atmosphere, thanks to the personal treatment that we put in serving our <a href="swallow.php" alt="To swallow" title="Tapas and portions">portions</a>, toasts and <a href="push.php" alt="To push" title="The drinks">wines</a>. :
				</p>

				<ul id="descripcion">
					<li><img src="../imag_ejemplos/moneda2.jpg" alt="Pilar" title="Pilar" class="retrato"><p>Pilar - What Pilar likes most is that the dishes come back empty and that there is a smile on the face of the diner. That is why enjoy in La Tragona giving a friendly and close treatment to anyone who wants to stop here.</p></li>
					<li><img src="../imag_ejemplos/moneda1.jpg" alt="Luis" title="Luis" class="retrato"><p>Luis - An actor who, at a time of unemployment in his profession, started to study cooking. Now he has discovered the emotions that a food with market products can cause.</p></li>
				</ul>

				<p>
					We work with fresh and ecological products, to offer a healthy and healthy food. For this reason, we supply ourselves in the nearby markets that surround us, such as Antón Martín, La Latina or San Fernando.
				</p>
			</section>

			<section id="redes">
				<h2>La Tragona in internet</h2>
				<div id="tw" class="red">
					<a class="twitter-timeline" data-width="360" data-height="500" href="https://twitter.com/tragonabar"></a>
					<span id="cierre_twitter" class="cierre movil">
						<img src="../media/iconos/cerrar.png" alt="x" title="Close">
					</span>
					<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
				<div id="fb" class="red">
					<iframe id="frame_facebook" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Flatragonalavapies%2F&tabs=timeline&width=360&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					<span id="cierre_fb" class="cierre movil">
						<img src="../media/iconos/cerrar.png" alt="x" title="Close">
					</span>
				</div>
				<div id="tragona" class="red">
	        <a class="twitter-timeline" data-width="360" data-height="500" data-dnt="true" href="https://twitter.com/hashtag/LaTragonaLavapies" data-widget-id="868768541452972032"></a>
        	<span id="cierre_tragona" class="cierre movil">
						<img src="../media/iconos/cerrar.png" alt="x" title="Close">
					</span>	
				</div>
				<div id="familia" class="red">
          <a class="twitter-timeline" data-width="360" data-height="500" data-dnt="true" href="https://twitter.com/hashtag/FamiliaTragona" data-widget-id="869841081730576384"></a>
        	<span id="cierre_familia" class="cierre movil">
						<img src="../media/iconos/cerrar.png" alt="x" title="Close">
					</span>
				</div>
          				
				<article id="rrss" class="movil">
					<ul>
						<li id="abrir_twitter"><img src="../media/iconos/twitter.png" alt="Twitter" title="@TragonaBar">@tragonabar</li>
						<li id="abrir_fb"><img src="../media/iconos/fb.jpg" alt="Facebook" title="facebook.com/latragonalavapies">@latragonalavapies</li>
						<li id="abrir_tragona">#LaTragonaLavapies</li>
						<li id="abrir_familia">#familiatragona</li>
					</ul>
				</article>
			</section>
			<div style="clear: both"></div>
	</div>

	<footer id="legal">
		<p>La Tragona <img src="../media/iconos/copyleft.png" alt="Copyleft" title="Copyleft"> 2017.<span class="desktop"> Authorization to disseminate and copy the content of this website, The authorship of the same.</span><span class = "ipad"> Copy the contents of this web, conserving the authorship.</span></p>
	</footer>

</body>
</html>
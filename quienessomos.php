<!DOCTYPE html>
<html>
<head>
	<title>Quien es La Tragona</title>

	<meta charset="utf-8">
	<meta name="author" content="alejoizquierdomartinez@gmail.com">
	<meta name="keywords" content="tapas, tapeo, tostas, raciones, vino, licor artesanal, cañas, Rastro, junto al Rastro, a dos minutos del Rastro, La Latina, Tirso de Molina, oasis en Madrid, buen ambiente, sitio tranquilo, trato personal, ambiente agradable, bar de barrio, punto de encuentro, cercania a teatro, Lavapies, teatro, cabaret, buen precio, precio asequible, sin gluten, carta de alergenos, comida cuidada, productos frescos, productos de mercado, mercado cercano, productor cercano, pan ecologico, pan artesanal, voni ecologico, prensa alternativa, wifi gratis">
	<meta name="description" content ="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
	<link rel="stylesheet" type="text/css" href="css/quienessomos.css">

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="js/quienessomos.js"></script>
</head>
<body>
	<div id="fb-root"></div>

	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="index.php" alt="Inicio" title="Inicio">La Tragona</a></li>
			<li><a href="tragar.php" alt="Para tragar" title="Tapas y raciones">Para tragar</a></li>
			<li><a href="empujar.php" alt="Para empujar" title="Las bebidas">Para empujar</a></li>
			<li><a href="dondeestamos.php" alt="Donde estamos" title="Donde estamos">Donde estamos</a></li>
			<li><a href="contacta.php" alt="Contactar" title="Contacta con nostras">Contacta</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="#" alt="castellano" title="Web castellano"><img src="media/banderas/espana.png" alt="España" title="España"><span>Castellano</span></a></li>
			<li><a href="/en/whoweare.php" alt="english" title="English web"><img src="media/banderas/inglaterra.jpg" alt="Inglaterra" title="Inglaterra"><span>English</span></a></li>
			<li><a href="/fr/index.php" alt="français" title="Web français"><img src="media/banderas/francia.png" alt="Francia" title="Francia"><span>Français</span></a></li>
			<li><a href="/it/index.php" alt="italiano" title="Web italiana"><img src="media/banderas/italia.jpg" alt="Italia" title="Italia"><span>Italiano</span></a></li>
		</ul>
	</section>

	<header>
		<span class="desktop">Quien es </span>La Tragona<br>
		<img src="media/logo_red.gif" alt="La Tragona" title="La Tragona">
	</header>

	<div id="leer">
		<p>Conócenos</p>
	</div>
	
	<div id="contenedor">
		<nav id="superior">
			<ul>
				<li>
					<a href="index.php" alt="Inicio" title="Inicio"><span>La Tragona</span></a>
					<img src="media/banderas/multi.jpg" alt="multibandera" title="Idiomas" class="movil bandera" id="multi">
					<a href="#" alt="castellano" title="Web castellano"><img src="media/banderas/espana.png" alt="España" title="Web castellano" class="desktop ipad bandera"></a>
					<a href="/en/whoweare.php" alt="english" title="English web"><img src="media/banderas/inglaterra.jpg" alt="Inglaterra" title="English web" class="desktop ipad bandera"></a>
					<a href="/fr/index.php" alt="français" title="Web français"><img src="media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="/it/index.php" alt="italiano" title="Web italiana"><img src="media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li class="movil ipad" id="logo_superior"><span>Menu</span><img src="media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="contacta.php" alt="Contactar" title="Contacta con nostras">Contacta</a></li>
				<li class="desktop"><a href="dondeestamos.php" alt="Donde estamos" title="Donde estamos">Donde estamos</a></li>
				<li class="desktop"><a href="empujar.php" alt="Para empujar" title="Las bebidas">Para empujar</a></li>
				<li class="desktop"><a href="tragar.php" alt="Para tragar" title="Tapas y raciones">Para tragar</a></li>
			</ul>
		</nav>

		<h1>Quién es La Tragona</h1>
			<aside id="fotolateral">
				<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:43.425925925925924% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BPYKiZSAyOw/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Bares, qué lugares...</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Una publicación compartida de Maribel Torregrosa (@maribeltorregrosa) el <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-01-17T19:41:00+00:00">17 de Ene de 2017</time></p></div></blockquote>
				<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
			</aside>

			<section>
				<p>
					La Tragona es un oasis en Madrid con un ambiente agradable, gracias al trato personal que ponemos a la hora de servir nuestras <a href="tragar.php" alt="Para tragar" title="La comida de La Tragona">raciones</a>, tostas y <a href="empujar.html" alt="Para empujar" title="La bebida de La Tragona">vinos</a>. :
				</p>

				<ul id="descripcion">
					<li><img src="imag_ejemplos/moneda2.jpg" alt="Pilar" title="Pilar" class="retrato"><p>Pilar - Lo que más le gusta a Pilar es que los platos vuelvan vacios y que quede una sonrisa en la cara del comensal. Por eso disfruta en La Tragona dando un trato amable y cercano a todo el que se quiera pasar por aquí.</p></li>
					<li><img src="imag_ejemplos/moneda1.jpg" alt="Luis" title="Luis" class="retrato"><p>Luis - Un actor que, en un momento de paro en su profesión, se puso a estudiar cocina. Ahora ha descubierto las emociones que una comida cuidada con productos de mercado puede provocar.</p></li>
				</ul>

				<p>
					Trabajamos con productos frescos y ecologicos, para ofrecer una comida cuidada y sana. Por ello, nos abastecemos en los mercados cercanos que nos rodean, como el de Antón Martín, La Latina o San Fernando.
				</p>
			</section>

			<section id="redes">
				<h2>La Tragona en las redes</h2>
				<div id="tw" class="red">
					<a class="twitter-timeline" data-width="360" data-height="500" href="https://twitter.com/tragonabar"></a>
					<span id="cierre_twitter" class="cierre movil">
						<img src="media/iconos/cerrar.png" alt="x" title="cerrar">
					</span>
					<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
				<div id="fb" class="red">
					<iframe id="frame_facebook" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Flatragonalavapies%2F&tabs=timeline&width=360&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					<span id="cierre_fb" class="cierre movil">
						<img src="media/iconos/cerrar.png" alt="x" title="cerrar">
					</span>
				</div>
				<div id="tragona" class="red">
	        <a class="twitter-timeline" data-width="360" data-height="500" data-dnt="true" href="https://twitter.com/hashtag/LaTragonaLavapies" data-widget-id="868768541452972032"></a>
        	<span id="cierre_tragona" class="cierre movil">
						<img src="media/iconos/cerrar.png" alt="x" title="cerrar">
					</span>	
				</div>
				<div id="familia" class="red">
          <a class="twitter-timeline" data-width="360" data-height="500" data-dnt="true" href="https://twitter.com/hashtag/FamiliaTragona" data-widget-id="869841081730576384"></a>
        	<span id="cierre_familia" class="cierre movil">
						<img src="media/iconos/cerrar.png" alt="x" title="cerrar">
					</span>
				</div>
          				
				<article id="rrss" class="movil">
					<ul>
						<li id="abrir_twitter"><img src="media/iconos/twitter.png" alt="Twitter" title="@TragonaBar">@tragonabar</li>
						<li id="abrir_fb"><img src="media/iconos/fb.jpg" alt="Facebook" title="facebook.com/latragonalavapies">@latragonalavapies</li>
						<li id="abrir_tragona">#LaTragonaLavapies</li>
						<li id="abrir_familia">#familiatragona</li>
					</ul>
				</article>
			</section>
			<div style="clear: both"></div>
	</div>

	<footer id="legal">
		<p>La Tragona <img src="media/iconos/copyleft.png" alt="Copyleft" title="Copyleft"> 2017.<span class="desktop"> Se autoriza la difusión y copia del contenido de este sitio web, manteniendo la autoría del mismo.</span><span class="ipad"> Autorizada la copia del contenido de esta web, conservando la autoría.</span></p>
	</footer>

</body>
</html>
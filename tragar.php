<!DOCTYPE html>
<html>
<head>
	<title>Para tragar en La Tragona</title>

	<meta charset="utf-8">
	<meta name="author" content="alejoizquierdomartinez@gmail.com">
	<meta name="keywords" content="tapas, tapeo, tostas, raciones, vino, licor artesanal, cañas, Rastro, junto al Rastro, a dos minutos del Rastro, La Latina, Tirso de Molina, oasis en Madrid, buen ambiente, sitio tranquilo, trato personal, ambiente agradable, bar de barrio, punto de encuentro, cercania a teatro, Lavapies, teatro, cabaret, buen precio, precio asequible, sin gluten, carta de alergenos, comida cuidada, productos frescos, productos de mercado, mercado cercano, productor cercano, pan ecologico, pan artesanal, vino ecologico, prensa alternativa, wifi gratis">
	<meta name="description" content ="Bar de tapas, donde se sirven tostas y raciones sin gluten elaboradas con productos de mercado y vino ecologico, ademas de licores artesanales y combinados que quitan el hipo. Situado junto al Rastro, en el centro de Madrid, entre La Latina y Tirso de Molina.">

	<meta name="viewport" content="width=device-width; initial-scale=1.0">

	<link rel="shortcut icon" href="media/icono.ico" type="image/x-icon">
	<link rel="icon" href="media/icono.ico" type="image/x-icon">

	<?php
		include("php/menu.php");
		$datos = Spyc::YAMLLoad('php/idiomas/lexico_es.yml');
		require("php/formulario.php");
	?>

	<script type="text/javascript">
		titular = '<?php echo $datos["aviso"]["agosto"]["titular"]; ?>';
		vuelta = '<?php echo $datos["aviso"]["agosto"]["vuelta"]; ?>';
		idioma = '<?php echo $idioma ?>';
		plato_dia = <?php echo json_encode($plato_dia); ?>;
		<?php $plato_dia->emplatar(); ?>;
		plato_trad = <?php echo json_encode($plato_dia) ?>;
		menu_texto = <?php echo json_encode($texto_menu) ?>;
	</script>

	<link rel="stylesheet" type="text/css" href="css/tripoli_index.css">
	<link rel="stylesheet" href="css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="css/tcal.css">
	<link rel="stylesheet" type="text/css" href="css/camera.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" type="text/css" href="css/tragar.css">

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/lightbox.min.js"></script>
	<script type="text/javascript" src="js/tcal.js"></script>
	<script type="text/javascript" src="js/camera.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
	
	<script type="text/javascript" src="js/tragar.js"></script>
</head>
<body>
	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="index.php" alt="Inicio" title="Inicio">La Tragona</a></li>
			<li><a href="empujar.php" alt="Para empujar" title="Las bebidas">Para empujar</a></li>
			<li><a href="dondeestamos.php" alt="Donde estamos" title="Donde estamos">Donde estamos</a></li>
			<li><a href="quienessomos.php" alt="Quienes somos" title="Quienes somos">Quienes somos</a></li>
			<li><a href="contacta.php" alt="Contactar" title="Contacta con nosotras">Contacta</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="#" alt="castellano" title="Web castellano"><img src="media/banderas/espana.png" alt="España" title="España"><span>Castellano</span></a></li>
			<li><a href="/en/swallow.php" alt="english" title="English web"><img src="media/banderas/inglaterra.jpg" alt="Inglaterra" title="Inglaterra"><span>English</span></a></li>
			<li><a href="/fr/avaler.php" alt="français" title="Web français"><img src="media/banderas/francia.png" alt="Francia" title="Francia"><span>Français</span></a></li>
			<li><a href="/it/deglutire.php" alt="italiano" title="Web italiana"><img src="media/banderas/italia.jpg" alt="Italia" title="Italia"><span>Italiano</span></a></li>
		</ul>
	</section>

	<div id="contenedor">
		<nav id="superior">
			<ul>
				<li>
					<a href="index.php" alt="Inicio" title="Inicio"><span>La Tragona</span></a>
					<img src="media/banderas/multi.jpg" alt="multibandera" title="Idiomas" class="movil bandera" id="multi">
					<a href="#" alt="castellano" title="Web castellano"><img src="media/banderas/espana.png" alt="España" title="Web castellano" class="desktop ipad bandera"></a>
					<a href="/en/swallow.php" alt="english" title="English web"><img src="media/banderas/inglaterra.jpg" alt="Inglaterra" title="English web" class="desktop ipad bandera"></a>
					<a href="/fr/avaler.php" alt="français" title="Web français"><img src="media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="/it/deglutire.php" alt="italiano" title="Web italiana"><img src="media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li class="movil ipad" id="logo_superior"><span>Menu</span><img src="media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="contacta.php" alt="Contactar" title="Contacta con nosotras">Contacta</a></li>
				<li class="desktop"><a href="quienessomos.php" alt="Quienes somos" title="Quienes somos">Quienes somos</a></li>
				<li class="desktop"><a href="dondeestamos.php" alt="Donde estamos" title="Donde estamos">Donde estamos</a></li>
				<li class="desktop"><a href="empujar.php" alt="Para empujar" title="Las bebidas">Para empujar</a></li>
			</ul>
		</nav>

		<nav id="lateral">
			<ul>
				<li><a href="#tosta" id="tos">Tostas</a></li>
				<li><a href="#racion" id="rac">Raciones</a></li>
				<li><a href="#plato" id="pla">Plato del dia</a></li>
				<li><a href="#reservas" id="res">Reservas</a></li>
			</ul>
		</nav>

		<header></header>

		<section id="tosta">
			<div class="foto">
				<a name="tosta"><p id="tos">Tostas</p></a>
			</div>	

			<div class="contenido">	
				<legend class="movil">Tostas</legend>
				<span id="aviso_pan">Tenemos pan sin gluten. Pídenoslo!!</span>
				<div id="hummus">
					<a href="media/imagenes/tragar/tosta_hummus.JPG" data-lightbox="tostas" data-title="Tosta de hummus">
						<img src="media/imagenes/tragar/minis/tosta_hummus.jpg" class="imagen" alt="Tosta de hummus" title="Tosta de hummus">
					</a>
					<p>
						Hummus (3,50&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="php/ingredientes.php?comida=hummus" data-type="iframe" href="javascript:;">Ver ingredientes</a><br>
						</span>						
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Alérgenos:</span>
						<img src="media/alergeno/gluten.png" alt="gluten" title="gluten">
					</span>	
				</div>

				<div>
					<a href="media/imagenes/tragar/tosta_brandada.JPG" data-lightbox="tostas" data-title="Tosta de brandada de bacalao">
						<img src="media/imagenes/tragar/minis/tosta_brandada.jpg" class="imagen" alt="Tosta de brandada de bacalao" title="Tosta de brandada de bacalao">
					</a>
					<p>
						Brandada de bacalao (4,50&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="php/ingredientes.php?comida=brandada" data-type="iframe" href="javascript:;">Ver ingredientes</a><br>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Alérgenos:</span>
						<img src="media/alergeno/pescado.png" alt="pescado" title="pescado">
						<img src="media/alergeno/lacteo.png" alt="lacteo" title="lacteo">
						<img src="media/alergeno/gluten.png" alt="gluten" title="gluten" class="gluten">
					</span>			
				</div>

				<div>
					<a href="media/imagenes/tragar/tosta_salmon.JPG" data-lightbox="tostas" data-title="Tosta de salmón con crema de queso">
						<img src="media/imagenes/tragar/minis/tosta_salmon.jpg" class="imagen" alt="Tosta de salmón con crema de queso" title="Tosta de salmón con crema de queso">
					</a>
					<p>
						Salmón con crema de queso (4,50&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="php/ingredientes.php?comida=salmon" data-type="iframe" href="javascript:;">Ver ingredientes</a><br>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Alérgenos:</span>
						<img src="media/alergeno/pescado.png" alt="pescado" title="pescado">
						<img src="media/alergeno/lacteo.png" alt="lacteo" title="lacteo">
						<img src="media/alergeno/gluten.png" alt="gluten" title="gluten">
					</span>
				</div>

				<div>
					<a href="media/imagenes/tragar/tosta_cecina.JPG" data-lightbox="tostas" data-title="Tosta de cecina de León">
						<img src="media/imagenes/tragar/minis/tosta_cecina.jpg" class="imagen" alt="Tosta de cecina de León" title="Tosta de cecina de León">
					</a>
					<p>
						Cecina de León (4,50&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="php/ingredientes.php?comida=cecina" data-type="iframe" href="javascript:;">Ver ingredientes</a><br>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Alérgenos:</span>
						<img src="media/alergeno/lacteo.png" alt="lacteo" title="lacteo">
						<img src="media/alergeno/gluten.png" alt="gluten" title="gluten">
					</span>
				</div>

				<div>
					<a href="media/imagenes/tragar/tosta_ventresca.JPG" data-lightbox="tostas" data-title="Tosta de ventresca de pimientos">
						<img src="media/imagenes/tragar/minis/tosta_ventresca.jpg" class="imagen" alt="Tosta de ventresca con pimientos" title="Tosta de ventresca con pimientos">
					</a>
					<p>
						Ventresca con pimientos de piquillo (4,50&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="php/ingredientes.php?comida=tosta_ventresca" data-type="iframe" href="javascript:;">Ver ingredientes</a><br>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Alérgenos:</span>
						<img src="media/alergeno/gluten.png" alt="gluten" title="gluten">
						<img src="media/alergeno/pescado.png" alt="pescado" title="pescado">
					</span>
				</div>

				<div>
					<a href="media/imagenes/tragar/tosta_roastbeef.JPG" data-lightbox="tostas" data-title="Tosta de roastbeef con salsa de queso">
						<img src="media/imagenes/tragar/minis/tosta_roastbeef.jpg" class="imagen" alt="Tosta de roastbeef con salsa de queso" title="Tosta de roastbeef con salsa de queso">
					</a>
					<p>
						Roastbeef con salsa de mostaza (5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="php/ingredientes.php?comida=roastbeef" data-type="iframe" href="javascript:;">Ver ingredientes</a><br>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Alérgenos:</span>
						<img src="media/alergeno/gluten.png" alt="gluten" title="gluten">
						<img src="media/alergeno/mostaza.png" alt="mostaza" title="mostaza">							
					</span>
				</div>
			</div>
		</section>

		<section id="compartir" class="movil">
			<div class="fb-like" data-href="http://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>

		<section id="racion">
			<div class="foto">
				<a name="racion"><p id="rac">Raciones</p></a>
			</div>	

			<div class="contenido">
				<legend class="movil">Raciones</legend>
				<div>
					<a href="media/imagenes/tragar/racion_hummus.JPG" data-lightbox="raciones" data-title="Hummus">
						<img src="media/imagenes/tragar/minis/racion_hummus.jpg" class="imagen" alt="Hummus" title="Hummus">
					</a>
					<p>
						Hummus (6&euro; - ½: 3&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="php/ingredientes.php?comida=hummus" data-type="iframe" href="javascript:;">Ver ingredientes</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre" style="width: 200px">Alérgenos: Sin alérgenos</span>						
					</span>
				</div>

				<div>
					<a href="media/imagenes/tragar/babaganoush.jpg" data-lightbox="raciones" data-title="Babaganoush">
						<img src="media/imagenes/tragar/minis/babaganoush.jpg" class="imagen" alt="Babaganoush" title="Babaganoush">
					</a>
					<p>
						Babaganoush (6&euro; - ½: 3&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="php/ingredientes.php?comida=babaganoush" data-type="iframe" href="javascript:;">Ver ingredientes</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Alérgenos:</span>
						<img src="media/alergeno/sesamo.png" alt="sésamo" title="sésamo">
					</span>
				</div>

				<div>
					<a href="media/imagenes/tragar/ensalada_ventresca.jpg" data-lightbox="raciones" data-title="Ventresca con pimientos del piquillo">
						<img src="media/imagenes/tragar/minis/ensalada_ventresca.jpg" class="imagen" alt="Ventresca con pimientos del piquillo" title="Ventresca con pimientos del piquillo">
					</a>
					<p>
						Ensalada de ventresca con p. del piquillo (9&euro; - ½: 4.5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="php/ingredientes.php?comida=ventresca" data-type="iframe" href="javascript:;">Ver ingredientes</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Alérgenos:</span>
						<img src="media/alergeno/pescado.png" alt="pescado" title="pescado">
					</span>
				</div>

				<div>
					<a href="media/imagenes/tragar/racion_patata_rellena.JPG" data-lightbox="raciones" data-title="Patatas rellenas">
						<img src="media/imagenes/tragar/minis/racion_patata_rellena.jpg" class="imagen" alt="Patatas rellenas" title="Patatas rellenas">
					</a>
					<p>
						Patatas rellenas de pisto o cabrales(5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="php/ingredientes.php?comida=patatas_rellenas" data-type="iframe" href="javascript:;">Ver ingredientes</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Alérgenos:</span>
						<img src="media/alergeno/lacteo.png" alt="lacteo" title="Lacteo">							
					</span>
				</div>

				<div>
					<a href="media/imagenes/tragar/racion_papa_mojo.JPG" data-lightbox="raciones" data-title="'Papas arrugás' con 2 mojos">
						<img src="media/imagenes/tragar/minis/racion_papa_mojo.jpg" class="imagen" alt="'Papas arrugás' con 2 mojos" title="'Papas arrugás' con 2 mojos">
					</a>
					<p>
						'Papas arrugás' con 2 mojos (6&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="php/ingredientes.php?comida=papas_2mojos" data-type="iframe" href="javascript:;">Ver ingredientes</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre" style="width: 200px">Alérgenos: Sin alérgenos</span>							
					</span>
				</div>

				<div>
					<a href="media/imagenes/tragar/ragout.jpg" data-lightbox="raciones" data-title="Ragout de ternera">
						<img src="media/imagenes/tragar/minis/ragout.jpg" class="imagen" alt="ragout" title="Ragout de ternera">
					</a>
					<p>
						Ragout de ternera (7&euro; - ½: 3.5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="php/ingredientes.php?comida=ragout" data-type="iframe" href="javascript:;">Ver ingredientes</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Alérgenos:</span>
						<img src="media/alergeno/gluten.png" alt="gluten" title="gluten">
					</span>
				</div>

				<div>
					<a href="imag_ejemplos/comida/lomo.jpg" data-lightbox="raciones" data-title="Lomo embuchado">
						<img src="imag_ejemplos/comida/lomo.jpg" class="imagen" alt="Lomo embuchado" title="Lomo embuchado">
					</a>
					<p>
						Lomo embuchado (7&euro; - ½: 3.5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="php/ingredientes.php?comida=lomo" data-type="iframe" href="javascript:;">Ver ingredientes</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre" style="width: 200px">Alérgenos: Sin alérgenos</span>						
					</span>
				</div>

				<div>
					<a href="media/imagenes/tragar/racion_cecina.jpg" data-lightbox="raciones" data-title="Cecina de León">
						<img src="media/imagenes/tragar/minis/racion_cecina.jpg" class="imagen" alt="Cecina de León" title="Cecina de León">
					</a>
					<p>
						Cecina de Léon (9&euro; - ½: 4.5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="php/ingredientes.php?comida=racion_cecina" data-type="iframe" href="javascript:;">Ver ingredientes</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Alérgenos:</span>
						<img src="media/alergeno/lacteo.png" alt="lacteo" title="lacteo">
					</span>
				</div>
				<!--
				<div>
					<a href="imag_ejemplos/comida/tortilla.jpg" data-lightbox="raciones" data-title="Tortilla de patatas">
						<img src="imag_ejemplos/comida/tortilla.jpg" class="imagen" alt="tortilla" title="Tortilla de patatas">
					</a>
					<p>
						Tortilla de patatas (2&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="php/ingredientes.php?comida=tortilla" data-type="iframe" href="javascript:;">Ver ingredientes</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Alérgenos:</span>
						<img src="media/alergeno/huevos.png" alt="huevos" title="huevos">
					</span>
				</div>
				-->
				<div>
					<a href="media/imagenes/tragar/solomillo.JPG" data-lightbox="raciones" data-title="Solomillo con salsa de cerveza y manzana">
						<img src="media/imagenes/tragar/minis/solomillo.jpg" class="imagen" alt="Solomillo con salsa de cerveza y manzana" title="Solomillo con salsa de cerveza y manzana">
					</a>
					<p>
						Solomillo con 2 salsas (cerveza y manzana) (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="php/ingredientes.php?comida=solomillo" data-type="iframe" href="javascript:;">Ver ingredientes</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Alérgenos:</span>
						<img src="media/alergeno/mostaza.png" alt="mostaza" title="mostaza">
					</span>
				</div>

				<div>
					<a href="media/imagenes/tragar/pastel_salmon.JPG" data-lightbox="raciones" data-title="Pastel de salmón">
						<img src="media/imagenes/tragar/minis/pastel_salmon.jpg" class="imagen" alt="Pastel de salmón" title="Pastel de salmón">
					</a>
					<p>
						Pastel de salmón (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="php/ingredientes.php?comida=pastel_salmon" data-type="iframe" href="javascript:;">Ver ingredientes</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Alérgenos:</span>
						<img src="media/alergeno/pescado.png" alt="pescado" title="pescado">
						<img src="media/alergeno/lacteo.png" alt="lacteo" title="lacteo">
						<img src="media/alergeno/gluten.png" alt="gluten" title="gluten">
					</span>
				</div>

				<div>
					<a href="media/imagenes/tragar/carpaccio_calabacin.JPG" data-lightbox="raciones" data-title="Carpaccio de calabacín">
						<img src="media/imagenes/tragar/minis/carpaccio_calabacin.jpg" class="imagen" alt="Carpaccio de calabacín" title="Carpaccio de calabacín">
					</a>
					<p>
						Carpaccio de calabacín (5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="php/ingredientes.php?comida=carpaccio" data-type="iframe" href="javascript:;">Ver ingredientes</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Alérgenos:</span>
						<img src="media/alergeno/lacteo.png" alt="lacteo" title="lacteo">
						<img src="media/alergeno/soja.png" alt="soja" title="soja">
					</span>
				</div>

				<div>
					<a href="media/imagenes/tragar/lasagna_setas.JPG" data-lightbox="raciones" data-title="Lasagna de setas">
						<img src="media/imagenes/tragar/minis/lasagna_setas.jpg" class="imagen" alt="Lasagna de setas" title="Lasagna de setas">
					</a>
					<p>
						Lasagna de setas (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="php/ingredientes.php?comida=lasagna" data-type="iframe" href="javascript:;">Ver ingredientes</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Alérgenos:</span>
						<img src="media/alergeno/lacteo.png" alt="lacteo" title="lacteo">
						<img src="media/alergeno/gluten.png" alt="gluten" title="gluten">
					</span>
				</div>	

				<div>
					<a href="media/imagenes/tragar/atun.JPG" data-lightbox="raciones" data-title="Atún en salazón">
						<img src="media/imagenes/tragar/minis/atun.jpg" class="imagen" alt="Atún en salazón" title="Atún en salazón">
					</a>
					<p>
						Atún en salazón (8&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="php/ingredientes.php?comida=atun" data-type="iframe" href="javascript:;">Ver ingredientes</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Alérgenos:</span>
						<img src="media/alergeno/pescado.png" alt="pescado" title="pescado">
					</span>
				</div>

				<div>
					<a href="media/imagenes/tragar/berenjena.JPG" data-lightbox="raciones" data-title="Berenjenas rellenas">
						<img src="media/imagenes/tragar/minis/berenjena.jpg" class="imagen" alt="Berenjenas rellenas" title="Berenjenas rellenas">
					</a>
					<p>
						Berenjenas rellenas (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="php/ingredientes.php?comida=berenjena" data-type="iframe" href="javascript:;">Ver ingredientes</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Alérgenos:</span>
						<img src="media/alergeno/lacteo.png" alt="lacteo" title="Lacteo">
						<img src="media/alergeno/gluten.png" alt="gluten" title="Gluten">
					</span>
				</div>

				<div>
					<a href="media/imagenes/tragar/rusos.jpg" data-lightbox="raciones" data-title="Filetes rusos">
						<img src="media/imagenes/tragar/minis/rusos.jpg" class="imagen" alt="Filetes rusos" title="Filetes rusos">
					</a>
					<p>
						Filetes rusos con salsa de tomate (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="php/ingredientes.php?comida=rusos" data-type="iframe" href="javascript:;">Ver ingredientes</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Alérgenos:</span>
						<img src="media/alergeno/lacteo.png" alt="lacteo" title="Lacteo">
						<img src="media/alergeno/gluten.png" alt="gluten" title="Gluten">
						<img src="media/alergeno/huevo.png" alt="huevo" title="Huevo">
					</span>
				</div>

				<div>
					<a href="imag_ejemplos/comida/ensalada_remo.jpg" data-lightbox="raciones" data-title="Ensalada de remolacha, rúcula y queso de cabra eco">
						<img src="imag_ejemplos/comida/mini_ensalada_remo.jpg" class="imagen" alt="Ensalada de remolacha, rúcula y queso de cabra eco" title="Ensalada de remolacha, rúcula y queso de cabra eco">
					</a>
					<p>
						Ensalada de remolacha, rúcula y queso de cabra eco (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="php/ingredientes.php?comida=ensalada_remo" data-type="iframe" href="javascript:;">Ver ingredientes</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Alérgenos:</span>
						<img src="media/alergeno/lacteo.png" alt="lacteo" title="lacteo">
						<img src="media/alergeno/soja.png" alt="soja" title="soja">
					</span>
				</div>
			</div>
		</section>	
		
		<section id="plato">
			<div id="foto_plato">
				<a name="plato"><p id="pla">Plato del día</p></a>
			</div>
			
			<div id="contenido_plato">
				<div id="diario"><span id="dia"></span></div>
				<?php require "php/carta.php"; ?>
			</div>
		</section>
		
		<section id="compartir" class="movil">
			<div class="fb-like" data-href="http://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>
		
		<section id="reservas">
			<div class="foto">
				<a name="reservas"><p id="reser">Reserva tu mesa</p></a>
			</div>

			<div class="contenido">
				<p class="mitad">
					Para reservas de 4 o más personas, contacta con nosotras en el teléfono 91-148-43-76 o 685-954-545 <img src="media/iconos/wasap.png" alt="wasap" title="Envianos un wasap" id="wasap">
				</p>

				<p class="mitad">
					Si quieres que te preparemos comida para llevar, utiliza el formulario.
				</p>

				<form action="#reservas" method="post">
					<input type="hidden" name="tipo" value="Reserva en La Tragona">
					<input type="text" name="nombre" id="nombre" size="25" onkeypress="return permite(event, 'car');">
					<span class="error_form">Escribe tu nombre, por favor</span>
					<label for="nombre" class="impar">Nombre (requerido)</label>

					<input type="text" name="telefono" id="telefono" value="(+34)" size="25" onkeypress="return permite(event, 'num');">
					<span class="error_form">Escribe tu telefono, por favor</span>
					<label for="telefono">Telefono (requerido)</label>
					<input type="text" name="fecha" id="fecha" class="tcal" placeholder="dia/mes/año">
					<label for="fecha" class="impar">Fecha del evento</label>

					<label for="mensaje" id="etiquetaTexto">Dinos qué necesitas:</label>
					<span class="error_form">No has pedido nada.</span>
					<textarea id="mensaje" name="mensaje" columns="50" rows="8"></textarea>
					<input type="submit" name="enviar" id="enviar" value="Enviar" onclick="return validarForm();">
					
					<?php if($confirmacion == "Error de envio"){ ?>
						<span id="confirmacion" style="color: #f00; border: 1px solid #f00; background-color: #fdd"><?= $confirmacion ?></span>
					<?php } else if($confirmacion == "Reserva enviada") { ?>
						<span id="confirmacion" style="background-color: #dfd; color: #0f0;	border: 1px solid #0f0;"><?= $confirmacion ?></span>
					<?php } else { ?>
						<span id="confirmacion"><?= $confirmacion ?></span>
					<?php } ?>
				</form>
				
			</div>
		</section>
		<div style="clear: both"></div>
	</div>

	<footer id="legal">
		<p>La Tragona <img src="media/iconos/copyleft.png" alt="Copyleft" title="Copyleft"> 2017.<span class="desktop"> Se autoriza la difusión y copia del contenido de este sitio web, manteniendo la autoría del mismo.</span><span class="ipad"> Copia el contenido de esta web, conservando la autoría.</span></p>
	</footer>
</body>
</html>
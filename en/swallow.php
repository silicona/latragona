<!DOCTYPE html>
<html>
<head>
	<title>For swallow in La Tragona</title>

	<meta charset="utf-8">
	<meta name="author" content="alejoizquierdomartinez@gmail.com">
	<meta name="keywords" content="Tapas, toasts, tapeo, portions, wine, homemade liquor, cañas, Rastro, next to the Rastro, two minutes from the Rastro, La Latina, Tirso de Molina, oasis in Madrid, Bar area, meeting point, near to theater, Lavapies, theater, cabaret, good price, affordable price, gluten free, allergen menu, caring food, fresh food, fresh produce, market products, nearby market, ecological bread, Artisan bread, organic wine, alternative press, free wifi">
	<meta name="description" content ="Tapas bar where you can enjoy toasts and gluten-free rations made with market products and organic wine, as well as artisan and combined liquors that remove hiccups. Located next to the Rastro, in the center of Madrid, between La Latina and Tirso de Molina.">

	<meta name="viewport" content="width=device-width; initial-scale=1.0">

	<link rel="shortcut icon" href="../media/icono.ico" type="image/x-icon">
	<link rel="icon" href="../media/icono.ico" type="image/x-icon">

	<?php
		require "../php/menu.php";
		$datos = Spyc::YAMLLoad('../php/idiomas/lexico_en.yml');
		$alergeno = $datos['alergenos'];
		require "../php/formulario.php";
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

	<link rel="stylesheet" type="text/css" href="../css/tripoli_index.css">
	<link rel="stylesheet" href="../css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="../css/tcal.css">
	<link rel="stylesheet" type="text/css" href="../css/camera.css">
	<link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.min.css">
	<link rel="stylesheet" type="text/css" href="../css/tragar.css">

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="../js/lightbox.min.js"></script>
	<script type="text/javascript" src="../js/tcal.js"></script>
	<script type="text/javascript" src="../js/camera.min.js"></script>
	<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="../js/jquery.mobile.customized.min.js"></script>
	<script type="text/javascript" src="../js/jquery.fancybox.min.js"></script>
	
	<script type="text/javascript" src="../js/tragar.js"></script>
	<style type="text/css">
		header {
			background: url("../media/cabeceras/swallow.png") 50% 8% no-repeat fixed;
		}

		@media screen and (max-width: 650px), screen and (max-device-width: 650px), screen and (min-width: 651px)and (max-width: 1024px), screen and (min-device-width: 651px)	and (max-device-width: 1024px) {
			header {
				background: url("../media/cabeceras/swallow_sin.png") 50% 0% no-repeat fixed;
			}
		}
	</style>
</head>
<body>
	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="index.php" alt="Inicio" title="Index">La Tragona</a></li>
			<li><a href="push.php" alt="Para empujar" title="The drinks">To push</a></li>
			<li><a href="whereweare.php" alt="Donde estamos" title="Where we are">Where we are</a></li>
			<li><a href="whoweare.php" alt="Quienes somos" title="Who we are">Who we are</a></li>
			<li><a href="contactus.php" alt="Contactar" title="Contact us">Contact us</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="../tragar.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Spanish"><span>Castellano</span></a></li>
			<li><a href="#" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English"><span>English</span></a></li>
			<li><a href="../fr/avaler.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="French"><span>Français</span></a></li>
			<li><a href="../it/deglutire.php" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Italian"><span>Italiano</span></a></li>
		</ul>
	</section>

	<div id="contenedor">
		<nav id="superior">
			<ul>
				<li>
					<a href="index.php" alt="Inicio" title="Inicio"><span>La Tragona</span></a>
					<img src="../media/banderas/multi.jpg" alt="multibandera" title="Idiomas" class="movil bandera" id="multi">
					<a href="../tragar.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Web castellano" class="desktop ipad bandera"></a>
					<a href="#" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English web" class="desktop ipad bandera"></a>
					<a href="../fr/avaler.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="../it/deglutire.php" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li class="movil ipad" id="logo_superior"><span>Menu</span><img src="../media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="contactus.php" alt="Contactar" title="Contact us">Contact us</a></li>
				<li class="desktop"><a href="whoweare.php" alt="Quienes somos" title="Who we are">Who we are</a></li>
				<li class="desktop"><a href="whereweare.php" alt="Donde estamos" title="Where we are">Where we are</a></li>
				<li class="desktop"><a href="push.php" alt="Para empujar" title="The drinks">For push</a></li>
			</ul>
		</nav>

		<nav id="lateral">
			<ul>
				<li><a href="#tosta" id="tos">Toasts</a></li>
				<li><a href="#racion" id="rac">Portions</a></li>
				<li><a href="#plato" id="pla">Dish of the day</a></li>
				<li><a href="#reservas" id="res">Booking</a></li>
			</ul>
		</nav>

		<header></header>

		<section id="tosta">
			<div class="foto">
				<a name="tosta"><p id="tos">Toasts</p></a>
			</div>	

			<div class="contenido">	
				<legend class="movil">Toasts</legend>
				<span id="aviso_pan">We have gluten-free bread. Ask us!!</span>
				<div id="hummus">
					<a href="../media/imagenes/tragar/tosta_hummus.JPG" data-lightbox="tostas" data-title="Hummus toast">
						<img src="../media/imagenes/tragar/minis/tosta_hummus.jpg" class="imagen" alt="Hummus toast" title="Hummus toast">
					</a>
					<p>
						Hummus (3,50&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=hummus" data-type="iframe" href="javascript:;">See ingredients</a><br>
						</span>						
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergens:</span>
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
					</span>	
				</div>

				<div>
					<a href="../media/imagenes/tragar/tosta_brandada.JPG" data-lightbox="tostas" data-title="Brandy of cod toast">
						<img src="../media/imagenes/tragar/minis/tosta_brandada.jpg" class="imagen" alt="Brandy of cod toast" title="Brandy of cod toast">
					</a>
					<p>
						Brandy of cod (4,50&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=brandada" data-type="iframe" href="javascript:;">See ingredients</a><br>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergens:</span>
						<img src="../media/alergeno/pescado.png" alt="<?= $alergeno['pescado'] ?>" title="<?= $alergeno['pescado'] ?>">
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
					</span>			
				</div>

				<div>
					<a href="../media/imagenes/tragar/tosta_salmon.JPG" data-lightbox="tostas" data-title="Salmon with cream cheese toast">
						<img src="../media/imagenes/tragar/minis/tosta_salmon.jpg" class="imagen" alt="Salmon with cream cheese toast" title="Salmon with cream cheese toast">
					</a>
					<p>
						Salmon with cream cheese (4,50&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=salmon" data-type="iframe" href="javascript:;">See ingredients</a><br>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergens:</span>
						<img src="../media/alergeno/pescado.png" alt="<?= $alergeno['pescado'] ?>" title="<?= $alergeno['pescado'] ?>">
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/tosta_cecina.JPG" data-lightbox="tostas" data-title="Smoked beef from León toast">
						<img src="../media/imagenes/tragar/minis/tosta_cecina.jpg" class="imagen" alt="Smoked beef from León toast" title="Smoked beef from León toast">
					</a>
					<p>
						Smoked beef from León (4,50&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=cecina" data-type="iframe" href="javascript:;">See ingredients</a><br>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergens:</span>
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/tosta_ventresca.JPG" data-lightbox="tostas" data-title="Ventress with Piquillo peppers toast">
						<img src="../media/imagenes/tragar/minis/tosta_ventresca.jpg" class="imagen" alt="Ventress with Piquillo peppers toast" title="Ventress with Piquillo peppers toast">
					</a>
					<p>
						Ventress with Piquillo peppers (4,50&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=tosta_ventresca" data-type="iframe" href="javascript:;">See ingredients</a><br>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergens:</span>
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
						<img src="../media/alergeno/pescado.png" alt="<?= $alergeno['pescado'] ?>" title="<?= $alergeno['pescado'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/tosta_roastbeef.JPG" data-lightbox="tostas" data-title="Roastbeef with mustard sauce toast">
						<img src="../media/imagenes/tragar/minis/tosta_roastbeef.jpg" class="imagen" alt="Roastbeef with mustard sauce toast" title="Roastbeef with mustard sauce toast">
					</a>
					<p>
						Roastbeef with mustard sauce (5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=roastbeef" data-type="iframe" href="javascript:;">See ingredients</a><br>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergens:</span>
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
						<img src="../media/alergeno/mostaza.png" alt="<?= $alergeno['mostaza'] ?>" title="<?= $alergeno['mostaza'] ?>">							
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
				<a name="racion"><p id="rac">Portions</p></a>
			</div>	

			<div class="contenido">
				<legend class="movil">Portions</legend>
				<div>
					<a href="../media/imagenes/tragar/racion_hummus.JPG" data-lightbox="raciones" data-title="Hummus">
						<img src="../media/imagenes/tragar/minis/racion_hummus.jpg" class="imagen" alt="Hummus" title="Hummus">
					</a>
					<p>
						Hummus (6&euro; - ½: 3&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=hummus" data-type="iframe" href="javascript:;">See ingredients</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre" style="width: 200px">Allergens: No allergens</span>						
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/babaganoush.JPG" data-lightbox="raciones" data-title="Babaganoush">
						<img src="../media/imagenes/tragar/minis/babaganoush.jpg" class="imagen" alt="Babaganoush" title="Babaganoush">
					</a>
					<p>
						Babaganoush (6&euro; - ½: 3&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=babaganoush" data-type="iframe" href="javascript:;">See ingredients</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergens:</span>
						<img src="../media/alergeno/sesamo.png" alt="<?= $alergeno['sesamo'] ?>" title="<?= $alergeno['sesamo'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/ensalada_ventresca.JPG" data-lightbox="raciones" data-title="Ventress with Piquillo peppers">
						<img src="../media/imagenes/tragar/minis/ensalada_ventresca.jpg" class="imagen" alt="Ventress with Piquillo peppers" title="Ventress with Piquillo peppers">
					</a>
					<p>
						Salad ventress with Piquillo peppers (9&euro; - ½: 4.5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=ventresca" data-type="iframe" href="javascript:;">See ingredients</a>
						</span></a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergens:</span>
						<img src="../media/alergeno/pescado.png" alt="<?= $alergeno['pescado'] ?>" title="<?= $alergeno['pescado'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/racion_patata_rellena.JPG" data-lightbox="raciones" data-title="Stuffed potatoes">
						<img src="../media/imagenes/tragar/minis/racion_patata_rellena.jpg" class="imagen" alt="Stuffed potatoes" title="Stuffed potatoes">
					</a>
					<p>
						Stuffed potatoes (5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=patatas_rellenas" data-type="iframe" href="javascript:;">See ingredients</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergens:</span>
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">							
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/racion_papa_mojo.JPG" data-lightbox="raciones" data-title="'Papas arrugas' with two mojos">
						<img src="../media/imagenes/tragar/minis/racion_papa_mojo.jpg" class="imagen" alt="'Papas arrugas' with two mojos" title="'Papas arrugas' with two mojos">
					</a>
					<p>
						'Papas arrugás' with two mojos (6&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=papas_2mojos" data-type="iframe" href="javascript:;">See ingredients</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre" style="width: 200px">Allergens: No allergens</span>							
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/ragout.jpg" data-lightbox="raciones" data-title="Veal ragout">
						<img src="../media/imagenes/tragar/minis/ragout.jpg" class="imagen" alt="Veal ragout" title="Veal ragout">
					</a>
					<p>
						Veal ragout (7&euro; - ½: 3.5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=ragout" data-type="iframe" href="javascript:;">See ingredients</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergens:</span>
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
					</span>
				</div>

				<div>
					<a href="../imag_ejemplos/comida/lomo.jpg" data-lightbox="raciones" data-title="Pork loin">
						<img src="../imag_ejemplos/comida/lomo.jpg" class="imagen" alt="Pork loin" title="Pork loin">
					</a>
					<p>
						Pork loin (7&euro; - ½: 3.5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=lomo" data-type="iframe" href="javascript:;">See ingredients</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre" style="width: 200px">Allergens: No allergens</span>						
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/racion_cecina.jpg" data-lightbox="raciones" data-title="Smoked beef from León">
						<img src="../media/imagenes/tragar/minis/racion_cecina.jpg" class="imagen" alt="Smoked beef from León" title="Smoked beef from León">
					</a>
					<p>
						Smoked beef from León (9&euro; - ½: 4.5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=racion_cecina" data-type="iframe" href="javascript:;">See ingredients</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergens:</span>
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
					</span>
				</div>
				<!--
				<div>
					<a href="../imag_ejemplos/comida/tortilla.jpg" data-lightbox="raciones" data-title="Tortilla de patatas">
						<img src="../imag_ejemplos/comida/tortilla.jpg" class="imagen" alt="tortilla" title="Tortilla de patatas">
					</a>
					<p>
						Tortilla de patatas (2&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=tortilla" data-type="iframe" href="javascript:;">See ingredients</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergens:</span>
						<img src="../media/alergeno/huevos.png" alt="huevos" title="egg">
					</span>
				</div>
				-->
				<div>
					<a href="../media/imagenes/tragar/solomillo.JPG" data-lightbox="raciones" data-title="Sirloin with beer and apple sauce">
						<img src="../media/imagenes/tragar/minis/solomillo.jpg" class="imagen" alt="Sirloin with beer and apple sauce" title="Sirloin with beer and apple sauce">
					</a>
					<p>
						Sirloin with beer and apple sauce (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=solomillo" data-type="iframe" href="javascript:;">See ingredients</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergens:</span>
						<img src="../media/alergeno/mostaza.png" alt="<?= $alergeno['mostaza'] ?>" title="<?= $alergeno['mostaza'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/pastel_salmon.JPG" data-lightbox="raciones" data-title="Salmon Cake">
						<img src="../media/imagenes/tragar/minis/pastel_salmon.jpg" class="imagen" alt="Salmon Cake" title="Salmon Cake">
					</a>
					<p>
						Salmon Cake (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=pastel_salmon" data-type="iframe" href="javascript:;">See ingredients</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergens:</span>
						<img src="../media/alergeno/pescado.png" alt="<?= $alergeno['pescado'] ?>" title="<?= $alergeno['pescado'] ?>">
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/carpaccio_calabacin.JPG" data-lightbox="raciones" data-title="Zucchini carpaccio">
						<img src="../media/imagenes/tragar/minis/carpaccio_calabacin.jpg" class="imagen" alt="Zucchini carpaccio" title="Zucchini carpaccio">
					</a>
					<p>
						Zucchini carpaccio (5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=carpaccio" data-type="iframe" href="javascript:;">See ingredients</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergens:</span>
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/soja.png" alt="<?= $alergeno['soja'] ?>" title="<?= $alergeno['soja'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/lasagna_setas.JPG" data-lightbox="raciones" data-title="Mushroom lasagna">
						<img src="../media/imagenes/tragar/minis/lasagna_setas.jpg" class="imagen" alt="Mushroom lasagna" title="Mushroom lasagna">
					</a>
					<p>
						Mushroom lasagna (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=lasagna" data-type="iframe" href="javascript:;">See ingredients</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergens:</span>
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
					</span>
				</div>
			
				<div>
					<a href="../media/imagenes/tragar/atun.JPG" data-lightbox="raciones" data-title="Tuna in salted">
						<img src="../media/imagenes/tragar/minis/atun.jpg" class="imagen" alt="Tuna in salted" title="Tuna in salted">
					</a>
					<p>
						Tuna in salted (8&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=atun" data-type="iframe" href="javascript:;">See ingredients</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergens:</span>
						<img src="../media/alergeno/pescado.png" alt="<?= $alergeno['pescado'] ?>" title="<?= $alergeno['pescado'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/berenjena.JPG" data-lightbox="raciones" data-title="Stuffed Eggplant">
						<img src="../media/imagenes/tragar/minis/berenjena.jpg" class="imagen" alt="Stuffed Eggplant" title="Stuffed Eggplant">
					</a>
					<p>
						Stuffed Eggplant (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=berenjena" data-type="iframe" href="javascript:;">See ingredients</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergens:</span>
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/rusos.jpg" data-lightbox="raciones" data-title="Russian steaks with tomato sauce">
						<img src="../media/imagenes/tragar/minis/rusos.jpg" class="imagen" alt="Russian steaks with tomato sauce" title="Russian steaks with tomato sauce">
					</a>
					<p>
						Russian steaks with tomato sauce (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=rusos" data-type="iframe" href="javascript:;">See ingredients</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergens:</span>
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
						<img src="../media/alergeno/huevo.png" alt="<?= $alergeno['huevo'] ?>" title="<?= $alergeno['huevo'] ?>">
					</span>
				</div>

				<div>
					<a href="../imag_ejemplos/comida/ensalada_remo.jpg" data-lightbox="raciones" data-title="Beet salad, arugula and goat cheese eco">
						<img src="../imag_ejemplos/comida/mini_ensalada_remo.jpg" class="imagen" alt="Beet salad, arugula and goat cheese eco" title="Beet salad, arugula and goat cheese eco">
					</a>
					<p>
						Beet salad, arugula and goat cheese eco (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=ensalada_remo" data-type="iframe" href="javascript:;">See ingredients</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergens:</span>
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/soja.png" alt="<?= $alergeno['soja'] ?>" title="<?= $alergeno['soja'] ?>">
					</span>
				</div>
			</div>
		</section>	
		
		<section id="plato">
			<div id="foto_plato">
				<a name="plato"><p id="pla">Dish of the day</p></a>
			</div>
			
			<div id="contenido_plato">
				<div id="diario"><span id="dia"></span></div>
				<?php require "../php/carta_multi.php"; ?>
			</div>
			
		</section>
		
		<section id="compartir" class="movil">
			<div class="fb-like" data-href="http://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>
		
		<section id="reservas">
			<div class="foto">
				<a name="reservas"><p id="reser">Book your place</p></a>
			</div>

			<div class="contenido">
				<p class="mitad">
					For bookings of 4 or more people, contact us on the phone 91-148-43-76 o 685-954-545 <img src="../media/iconos/wasap.png" alt="wasap" title="Send us a wasap" id="wasap">
				</p>

				<p class="mitad">
					If you want us to prepare takeaway food, use the form.
				</p>

				<form action="#reservas" method="post">
					<input type="hidden" name="tipo" value="Reserva en La Tragona">
					<input type="text" name="nombre" id="nombre" size="25" onkeypress="return permite(event, 'car');">
					<span class="error_form">Write your name, please</span>
					<label for="nombre" class="impar">Name (required)</label>

					<input type="text" name="telefono" id="telefono" value="(+34)" size="25" onkeypress="return permite(event, 'num');">
					<span class="error_form">write your phone number, please</span>
					<label for="telefono">Phone (required)</label>
					<input type="text" name="fecha" id="fecha" class="tcal" placeholder="day/month/year">
					<label for="fecha" class="impar">Date of the event</label>

					<label for="mensaje" id="etiquetaTexto">Tell us what you need:</label>
					<span class="error_form">You haven´t asked anything.</span>
					<textarea id="mensaje" name="mensaje" columns="50" rows="8"></textarea>
					<input type="submit" name="enviar" id="enviar" value="Submit" onclick="return validarForm();">
					
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
		<p>La Tragona <img src="../media/iconos/copyleft.png" alt="Copyleft" title="Copyleft"> 2017.<span class="desktop"> Authorization to disseminate and copy the content of this website, The authorship of the same.</span><span class="ipad"> Copy the contents of this web, conserving the authorship.</span></p>
	</footer>
</body>
</html>
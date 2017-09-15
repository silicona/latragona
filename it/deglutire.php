<!DOCTYPE html>
<html>
<head>
	<title>Per deglutire en La Tragona</title>

	<meta charset="utf-8">
	<meta name="author" content="alejoizquierdomartinez@gmail.com">
	<meta name="keywords" content="Tapas, pane tostato, nastro, porzioni, vino, liquore casalingo, cañas, Rastro, vicino al Rastro, a due minuti dal Rastro, La Latina, Tirso de Molina, oasi a Madrid, zona bar, punto di incontro, vicino al teatro, Lavapies , Teatro, cabaret, buon prezzo, prezzo a prezzi accessibili, senza glutine, menu allergenico, cibo curato, prodotti freschi, prodotti freschi, prodotti di mercato, mercato nelle vicinanze, pane ecologico, pane artigiano, vino biologico, stampa alternativa, wifi gratuito">
	<meta name="description" content ="Tapas bar dove potrete gustare brindisi e razioni senza glutine realizzate con prodotti di mercato e vini biologici, nonché liquori artigianali e combinati che rimuovono singhiozzi. Situato vicino al Rastro, nel centro di Madrid, tra La Latina e Tirso de Molina.">
	
	<meta name="viewport" content="width=device-width; initial-scale=1.0">

	<link rel="shortcut icon" href="../media/icono.ico" type="image/x-icon">
	<link rel="icon" href="../media/icono.ico" type="image/x-icon">

	<?php
		require "../php/menu.php";
		$datos = Spyc::YAMLLoad('../php/idiomas/lexico_it.yml');
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
			background: url("../media/cabeceras/deglutire.png") 50% 8% no-repeat fixed;
		}

		@media screen and (max-width: 650px), screen and (max-device-width: 650px), screen and (min-width: 651px)and (max-width: 1024px), screen and (min-device-width: 651px)	and (max-device-width: 1024px) {
			header {
				background: url("../media/cabeceras/deglutire_sin.png") 50% 0% no-repeat fixed;
			}
		}
	</style>
</head>
<body>
	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="index.php" alt="Inicio" title="Index">La Tragona</a></li>
			<li><a href="spinta.php" alt="Le bevande" title="Le bevande">Per spinta</a></li>
			<li><a href="dovesiamo.php" alt="Dove siamo" title="Dove siamo">Dove siamo</a></li>
			<li><a href="chisiamo.php" alt="Chi siamo" title="Chi siamo">Chi siamo</a></li>
			<li><a href="contattaci.php" alt="Contattaci" title="Contattaci">Contattaci</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="../tragar.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Spanish"><span>Castellano</span></a></li>
			<li><a href="../en/swallow.php" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English"><span>English</span></a></li>
			<li><a href="../fr/avaler.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="French"><span>Français</span></a></li>
			<li><a href="#" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Italian"><span>Italiano</span></a></li>
		</ul>
	</section>

	<div id="contenedor">
		<nav id="superior">
			<ul>
				<li>
					<a href="index.php" alt="Inicio" title="Inicio"><span>La Tragona</span></a>
					<img src="../media/banderas/multi.jpg" alt="multibandera" title="Idiomas" class="movil bandera" id="multi">
					<a href="../tragar.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Web castellano" class="desktop ipad bandera"></a>
					<a href="../en/swallow.php" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English web" class="desktop ipad bandera"></a>
					<a href="../fr/avaler.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="#" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li class="movil ipad" id="logo_superior"><span>Menu</span><img src="../media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="contattaci.php" alt="Contattaci" title="Contattaci">Contattaci</a></li>
				<li class="desktop"><a href="chisiamo.php" alt="Chi siamo" title="Chi siamo">Chi siamo</a></li>
				<li class="desktop"><a href="dovesiamo.php" alt="Dove siamo" title="Dove siamo">Dove siamo</a></li>
				<li class="desktop"><a href="spinta.php" alt="Le bevande" title="Le bevande">Per spinta</a></li>
			</ul>
		</nav>

		<nav id="lateral">
			<ul>
				<li><a href="#tosta" id="tos">Tostas</a></li>
				<li><a href="#racion" id="rac">Porzioni</a></li>
				<li><a href="#plato" id="pla">Piatto della giornata</a></li>
				<li><a href="#reservas" id="res">Riserva</a></li>
			</ul>
		</nav>

		<header></header>

		<section id="tosta">
			<div class="foto">
				<a name="tosta"><p id="tos">Tostas</p></a>
			</div>	

			<div class="contenido">	
				<legend class="movil">Tostas</legend>
				<span id="aviso_pan">Abbiamo pane senza glutine. Chiedeteci!!</span>
				<div id="hummus">
					<a href="../media/imagenes/tragar/tosta_hummus.JPG" data-lightbox="tostas" data-title="Hummus">
						<img src="../media/imagenes/tragar/minis/tosta_hummus.jpg" class="imagen" alt="Hummus" title="Hummus">
					</a>
					<p>
						Hummus (3,50&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=hummus" data-type="iframe" href="javascript:;">Vedi gli ingredienti</a><br>
						</span>						
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergeni:</span>
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
					</span>	
				</div>

				<div>
					<a href="../media/imagenes/tragar/tosta_brandada.JPG" data-lightbox="tostas" data-title="Brandada de cod">
						<img src="../media/imagenes/tragar/minis/tosta_brandada.jpg" class="imagen" alt="Brandada de cod" title="Brandada de cod">
					</a>
					<p>
						Brandada de cod (4,50&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=brandada" data-type="iframe" href="javascript:;">Vedi gli ingredienti</a><br>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergeni:</span>
						<img src="../media/alergeno/pescado.png" alt="<?= $alergeno['pescado'] ?>" title="<?= $alergeno['pescado'] ?>">
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
					</span>			
				</div>

				<div>
					<a href="../media/imagenes/tragar/tosta_salmon.JPG" data-lightbox="tostas" data-title="Salmone con crema di formaggio">
						<img src="../media/imagenes/tragar/minis/tosta_salmon.jpg" class="imagen" alt="Salmone con crema di formaggio" title="Salmone con crema di formaggio">
					</a>
					<p>
						Salmone con crema di formaggio (4,50&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=salmon" data-type="iframe" href="javascript:;">Vedi gli ingredienti</a><br>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergeni:</span>
						<img src="../media/alergeno/pescado.png" alt="<?= $alergeno['pescado'] ?>" title="<?= $alergeno['pescado'] ?>">
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/tosta_cecina.JPG" data-lightbox="tostas" data-title="Carne di manzo affumicata da León">
						<img src="../media/imagenes/tragar/minis/tosta_cecina.jpg" class="imagen" alt="Carne di manzo affumicata da León" title="Carne di manzo affumicata da León">
					</a>
					<p>
						Carne di manzo affumicata da León (4,50&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=cecina" data-type="iframe" href="javascript:;">Vedi gli ingredienti</a><br>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergeni:</span>
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/tosta_ventresca.JPG" data-lightbox="tostas" data-title="Ventress con peperoni di Piquillo">
						<img src="../media/imagenes/tragar/minis/tosta_ventresca.jpg" class="imagen" alt="Ventress con peperoni di Piquillo" title="Ventress con peperoni di Piquillo">
					</a>
					<p>
						Ventress con peperoni di Piquillo (4,50&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=tosta_ventresca" data-type="iframe" href="javascript:;">Vedi gli ingredienti</a><br>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergeni:</span>
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
						<img src="../media/alergeno/pescado.png" alt="<?= $alergeno['pescado'] ?>" title="<?= $alergeno['pescado'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/tosta_roastbeef.JPG" data-lightbox="tostas" data-title="Roastbeef con salsa di senape">
						<img src="../media/imagenes/tragar/minis/tosta_roastbeef.jpg" class="imagen" alt="Roastbeef con salsa di senape" title="Roastbeef con salsa di senape">
					</a>
					<p>
						Roastbeef con salsa di senape (5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=roastbeef" data-type="iframe" href="javascript:;">Vedi gli ingredienti</a><br>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergeni:</span>
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
				<a name="racion"><p id="rac">Porzioni</p></a>
			</div>	

			<div class="contenido">
				<legend class="movil">Porzioni</legend>
				<div>
					<a href="../media/imagenes/tragar/racion_hummus.JPG" data-lightbox="raciones" data-title="Hummus">
						<img src="../media/imagenes/tragar/minis/racion_hummus.jpg" class="imagen" alt="Hummus" title="Hummus">
					</a>
					<p>
						Hummus (6&euro; - ½: 3&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=hummus" data-type="iframe" href="javascript:;">Vedi gli ingredienti</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre" style="width: 200px">Allergeni: nessun allergeni</span>						
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/babaganoush.jpg" data-lightbox="raciones" data-title="Babaganoush">
						<img src="../media/imagenes/tragar/minis/babaganoush.jpg" class="imagen" alt="Babaganoush" title="Babaganoush">
					</a>
					<p>
						Babaganoush (6&euro; - ½: 3&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=babaganoush" data-type="iframe" href="javascript:;">Vedi gli ingredienti</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergeni:</span>
						<img src="../media/alergeno/sesamo.png" alt="<?= $alergeno['sesamo'] ?>" title="<?= $alergeno['sesamo'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/ensalada_ventresca.JPG" data-lightbox="raciones" data-title="Insalata con peperoni di Piquillo">
						<img src="../media/imagenes/tragar/minis/ensalada_ventresca.jpg" class="imagen" alt="Insalata con peperoni di Piquillo" title="Insalata con peperoni di Piquillo">
					</a>
					<p>
						Insalata con peperoni di Piquillo (9&euro; - ½: 4.5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=ventresca" data-type="iframe" href="javascript:;">Vedi gli ingredienti</a>
						</span></a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergeni:</span>
						<img src="../media/alergeno/pescado.png" alt="<?= $alergeno['pescado'] ?>" title="<?= $alergeno['pescado'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/racion_patata_rellena.JPG" data-lightbox="raciones" data-title="Patate ripiene">
						<img src="../media/imagenes/tragar/minis/racion_patata_rellena.jpg" class="imagen" alt="Patate ripiene" title="Patate ripiene">
					</a>
					<p>
						Patate ripiene (5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=patatas_rellenas" data-type="iframe" href="javascript:;">Vedi gli ingredienti</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergeni:</span>
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">							
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/racion_papa_mojo.JPG" data-lightbox="raciones" data-title="'Papas arrugás' con due mojos">
						<img src="../media/imagenes/tragar/minis/racion_papa_mojo.jpg" class="imagen" alt="'Papas arrugás' con due mojos" title="'Papas arrugás' con due mojos">
					</a>
					<p>
						'Papas arrugás' con due mojos (6&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=papas_2mojos" data-type="iframe" href="javascript:;">Vedi gli ingredienti</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre" style="width: 200px">Allergeni: nessun allergeni</span>							
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/ragout.jpg" data-lightbox="raciones" data-title="Ragu di vitello">
						<img src="../media/imagenes/tragar/minis/ragout.jpg" class="imagen" alt="Ragu di vitello" title="Ragu di vitello">
					</a>
					<p>
						Ragu di vitello (7&euro; - ½: 3.5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=ragout" data-type="iframe" href="javascript:;">Vedi gli ingredienti</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergeni:</span>
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
					</span>
				</div>

				<div>
					<a href="../imag_ejemplos/comida/lomo.jpg" data-lightbox="raciones" data-title="Lonza di maiale">
						<img src="../imag_ejemplos/comida/lomo.jpg" class="imagen" alt="Lonza di maiale" title="Lonza di maiale">
					</a>
					<p>
						Lonza di maiale (7&euro; - ½: 3.5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=lomo" data-type="iframe" href="javascript:;">Vedi gli ingredienti</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre" style="width: 200px">Allergeni: nessun allergeni</span>						
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/racion_cecina.jpg" data-lightbox="raciones" data-title="Carne di manzo affumicata da León">
						<img src="../media/imagenes/tragar/minis/racion_cecina.jpg" class="imagen" alt="Carne di manzo affumicata da León" title="Carne di manzo affumicata da León">
					</a>
					<p>
						Carne di manzo affumicata da León (9&euro; - ½: 4.5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=racion_cecina" data-type="iframe" href="javascript:;">Vedi gli ingredienti</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergeni:</span>
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
					<a href="../media/imagenes/tragar/solomillo.JPG" data-lightbox="raciones" data-title="Controfiletto con salsa di birra e mela">
						<img src="../media/imagenes/tragar/minis/solomillo.jpg" class="imagen" alt="Controfiletto con salsa di birra e mela" title="Controfiletto con salsa di birra e mela">
					</a>
					<p>
						Controfiletto con salsa di birra e mela (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=solomillo" data-type="iframe" href="javascript:;">Vedi gli ingredienti</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergeni:</span>
						<img src="../media/alergeno/mostaza.png" alt="<?= $alergeno['mostaza'] ?>" title="<?= $alergeno['mostaza'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/pastel_salmon.JPG" data-lightbox="raciones" data-title="Torta di salmone">
						<img src="../media/imagenes/tragar/minis/pastel_salmon.jpg" class="imagen" alt="Torta di salmone" title="Torta di salmone">
					</a>
					<p>
						Torta di salmone (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=pastel_salmon" data-type="iframe" href="javascript:;">Vedi gli ingredienti</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergeni:</span>
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
							<a data-fancybox data-src="../php/ingredientes.php?comida=carpaccio" data-type="iframe" href="javascript:;">Vedi gli ingredienti</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergeni:</span>
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/soja.png" alt="<?= $alergeno['soja'] ?>" title="<?= $alergeno['soja'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/lasagna_setas.JPG" data-lightbox="raciones" data-title="Lasagna di funghi">
						<img src="../media/imagenes/tragar/minis/lasagna_setas.jpg" class="imagen" alt="Lasagna di funghi" title="Lasagna di funghi">
					</a>
					<p>
						Lasagna di funghi (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=lasagna" data-type="iframe" href="javascript:;">Vedi gli ingredienti</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergeni:</span>
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
					</span>
				</div>
			
				<div>
					<a href="../media/imagenes/tragar/atun.JPG" data-lightbox="raciones" data-title="Tonno in salamoia">
						<img src="../media/imagenes/tragar/minis/atun.jpg" class="imagen" alt="Tonno in salamoia" title="Tonno in salamoia">
					</a>
					<p>
						Tonno in salamoia (8&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=atun" data-type="iframe" href="javascript:;">Vedi gli ingredienti</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergeni:</span>
						<img src="../media/alergeno/pescado.png" alt="<?= $alergeno['pescado'] ?>" title="<?= $alergeno['pescado'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/berenjena.JPG" data-lightbox="raciones" data-title="Melanzane ripiene">
						<img src="../media/imagenes/tragar/minis/berenjena.jpg" class="imagen" alt="Melanzane ripiene" title="Melanzane ripiene">
					</a>
					<p>
						Melanzane ripiene (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=berenjena" data-type="iframe" href="javascript:;">Vedi gli ingredienti</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergeni:</span>
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/rusos.jpg" data-lightbox="raciones" data-title="Bistecche russe con salsa di pomodoro">
						<img src="../media/imagenes/tragar/minis/rusos.jpg" class="imagen" alt="Bistecche russe con salsa di pomodoro" title="Bistecche russe con salsa di pomodoro">
					</a>
					<p>
						Bistecche russe con salsa di pomodoro (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=rusos" data-type="iframe" href="javascript:;">Vedi gli ingredienti</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergeni:</span>
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
						<img src="../media/alergeno/huevo.png" alt="<?= $alergeno['huevo'] ?>" title="<?= $alergeno['huevo'] ?>">
					</span>
				</div>

				<div>
					<a href="../imag_ejemplos/comida/ensalada_remo.jpg" data-lightbox="raciones" data-title="Insalata di barbabietole, rucola e formaggio di capra eco">
						<img src="../imag_ejemplos/comida/mini_ensalada_remo.jpg" class="imagen" alt="Insalata di barbabietole, rucola e formaggio di capra eco" title="Insalata di barbabietole, rucola e formaggio di capra eco">
					</a>
					<p>
						Insalata di barbabietole, rucola e formaggio di capra eco (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=ensalada_remo" data-type="iframe" href="javascript:;">Vedi gli ingredienti</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergeni:</span>
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/soja.png" alt="<?= $alergeno['soja'] ?>" title="<?= $alergeno['soja'] ?>">
					</span>
				</div>
			</div>
		</section>	
		
		<section id="plato">
			<div id="foto_plato">
				<a name="plato"><p id="pla">Piatto della giornata</p></a>
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
				<a name="reservas"><p id="reser">Prenota il tuo posto</p></a>
			</div>

			<div class="contenido">
				<p class="mitad">
					Per prenotazioni di 4 o più persone, contattateci al telefono 91-148-43-76 o 685-954-545 <img src="../media/iconos/wasap.png" alt="wasap" title="Inviaci una vaschetta" id="wasap">
				</p>

				<p class="mitad">
					Se vuoi che prepariamo il cibo da asporto, usiamo il modulo.
				</p>

				<form action="#reservas" method="post">
					<input type="hidden" name="tipo" value="Reserva en La Tragona">
					<input type="text" name="nombre" id="nombre" size="25" onkeypress="return permite(event, 'car');">
					<span class="error_form">Scrivi il tuo nome, per favore</span>
					<label for="nombre" class="impar">Nome (obbligatorio)</label>

					<input type="text" name="telefono" id="telefono" value="(+34)" size="25" onkeypress="return permite(event, 'num');">
					<span class="error_form">Scrivi il tuo numero di telefono, per favore</span>
					<label for="telefono">Telefono (obbligatorio)</label>
					<input type="text" name="fecha" id="fecha" class="tcal" placeholder="giorno/mese/anno">
					<label for="fecha" class="impar">Data dell'evento</label>

					<label for="mensaje" id="etiquetaTexto">Dimmi cosa hai bisogno:</label>
					<span class="error_form">Non hai chiesto niente.</span>
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
		<p>La Tragona <img src="../media/iconos/copyleft.png" alt="Copyleft" title="Copyleft">2017.<span class="desktop"> Autorizzazione per diffondere e copiare il contenuto di Questo sito web, la paternità dello stesso.</span><span class="ipad"> Copia il contenuto di questo web, conservando la paternità.</span></p>
	</footer>
</body>
</html>
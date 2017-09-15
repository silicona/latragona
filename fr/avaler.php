<!DOCTYPE html>
<html>
<head>
	<title>Pour avaler dans La Tragona</title>

	<meta charset="utf-8">
	<meta name="author" content="alejoizquierdomartinez@gmail.com">
	<meta name="keywords" content="Tapas, toasts, tapeo, portions, vin, liqueur maison, cañas, Rastro, à côté du Rastro, à deux minutes du Rastro, La Latina, Tirso de Molina, oasis de Madrid, Bar, point de rencontre, près du théâtre, Lavapies , Théâtre, cabaret, bon prix, prix abordable, sans gluten, menu allergène, nourriture décontractée, produits frais, produits frais, produits du marché, marché à proximité, pain écologique, pain artisan, vin bio, presse alternative, wifi gratuit">
	<meta name="description" content ="Bar à tapas où vous pourrez déguster des toasts et des rations sans gluten fabriquées avec des produits du marché et du vin bio, ainsi que des boissons artisanales et combinées qui éliminent le hoquet. Situé à côté du Rastro, au centre de Madrid, entre La Latina et Tirso de Molina.">

	<meta name="viewport" content="width=device-width; initial-scale=1.0">

	<link rel="shortcut icon" href="../media/icono.ico" type="image/x-icon">
	<link rel="icon" href="../media/icono.ico" type="image/x-icon">

	<?php
		require "../php/menu.php";
		$datos = Spyc::YAMLLoad('../php/idiomas/lexico_fr.yml');
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
			background: url("../media/cabeceras/avaler.png") 50% 8% no-repeat fixed;
		}

		@media screen and (max-width: 650px), screen and (max-device-width: 650px), screen and (min-width: 651px)and (max-width: 1024px), screen and (min-device-width: 651px)	and (max-device-width: 1024px) {
			header {
				background: url("../media/cabeceras/avaler_sin.png") 50% 0% no-repeat fixed;
			}
		}
	</style>
</head>
<body>
	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="index.php" alt="Index" title="Index">La Tragona</a></li>
			<li><a href="pousser.php" alt="Pour pousser" title="Les boissons">Pour pousser</a></li>
			<li><a href="ousommesnous.php" alt="Où sommes-nous" title="Où sommes-nous">Où sommes-nous</a></li>
			<li><a href="quisommesnous.php" alt="Qui sommes nous" title="Qui sommes nous">Qui sommes nous</a></li>
			<li><a href="contacteznous.php" alt="Contactez-nous" title="Contactez-nous">Contactez-nous</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="../tragar.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Spanish"><span>Castellano</span></a></li>
			<li><a href="../en/swallow.php" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English"><span>English</span></a></li>
			<li><a href="#" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="French"><span>Français</span></a></li>
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
					<a href="../en/swallow.php" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English web" class="desktop ipad bandera"></a>
					<a href="#" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="../it/deglutire.php" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li class="movil ipad" id="logo_superior"><span>Menu</span><img src="../media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="contacteznous.php" alt="Contactez-nous" title="Contactez-nous">Contactez-nous</a></li>
				<li class="desktop"><a href="quisommesnous.php" alt="Qui sommes nous" title="Qui sommes nous">Qui sommes nous</a></li>
				<li class="desktop"><a href="ousommesnous.php" alt="Où sommes-nous" title="Où sommes-nous">Où sommes-nous</a></li>
				<li class="desktop"><a href="pousser.php" alt="Pour pousser" title="Les boissons">Pour pousser</a></li>
			</ul>
		</nav>

		<nav id="lateral">
			<ul>
				<li><a href="#tosta" id="tos">Toasties</a></li>
				<li><a href="#racion" id="rac">Portions</a></li>
				<li><a href="#plato" id="pla">Plat du jour</a></li>
				<li><a href="#reservas" id="res">Réserve</a></li>
			</ul>
		</nav>

		<header></header>

		<section id="tosta">
			<div class="foto">
				<a name="tosta"><p id="tos">Toasties</p></a>
			</div>	

			<div class="contenido">	
				<legend class="movil">Toasties</legend>
				<span id="aviso_pan">Nous avons du pain sans gluten. Demandez-nous!!</span>
				<div id="hummus">
					<a href="../media/imagenes/tragar/tosta_hummus.JPG" data-lightbox="tostas" data-title="Toast Hummus">
						<img src="../media/imagenes/tragar/minis/tosta_hummus.jpg" class="imagen" alt="Toast Hummus" title="Toast Hummus">
					</a>
					<p>
						Hummus (3,50&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=hummus" data-type="iframe" href="javascript:;">Voir les ingrédients</a><br>
						</span>						
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergènes:</span>
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
					</span>	
				</div>

				<div>
					<a href="../media/imagenes/tragar/tosta_brandada.JPG" data-lightbox="tostas" data-title="Toast Brandada de la morue">
						<img src="../media/imagenes/tragar/minis/tosta_brandada.jpg" class="imagen" alt="Toast Brandada de la morue" title="Toast Brandada de la morue">
					</a>
					<p>
						Brandada de la morue (4,50&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=brandada" data-type="iframe" href="javascript:;">Voir les ingrédients</a><br>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergènes:</span>
						<img src="../media/alergeno/pescado.png" alt="<?= $alergeno['pescado'] ?>" title="<?= $alergeno['pescado'] ?>">
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
					</span>			
				</div>

				<div>
					<a href="../media/imagenes/tragar/tosta_salmon.JPG" data-lightbox="tostas" data-title="Toast Saumon au fromage à la crème">
						<img src="../media/imagenes/tragar/minis/tosta_salmon.jpg" class="imagen" alt="Toast Saumon au fromage à la crème" title="Toast Saumon au fromage à la crème">
					</a>
					<p>
						Saumon au fromage à la crème (4,50&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=salmon" data-type="iframe" href="javascript:;">Voir les ingrédients</a><br>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergènes:</span>
						<img src="../media/alergeno/pescado.png" alt="<?= $alergeno['pescado'] ?>" title="<?= $alergeno['pescado'] ?>">
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/tosta_cecina.JPG" data-lightbox="tostas" data-title="Toast Bœuf fumé de León">
						<img src="../media/imagenes/tragar/minis/tosta_cecina.jpg" class="imagen" alt="Toast Bœuf fumé de León" title="Toast Bœuf fumé de León">
					</a>
					<p>
						Bœuf fumé de León (4,50&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=cecina" data-type="iframe" href="javascript:;">Voir les ingrédients</a><br>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergènes:</span>
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/tosta_ventresca.JPG" data-lightbox="tostas" data-title="Toast Ventress avec des piments de piquillo">
						<img src="../media/imagenes/tragar/minis/tosta_ventresca.jpg" class="imagen" alt="Toast Ventress avec des piments de piquillo" title="Toast Ventress avec des piments de piquillo">
					</a>
					<p>
						Ventress avec des piments de piquillo (4,50&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=tosta_ventresca" data-type="iframe" href="javascript:;">Voir les ingrédients</a><br>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergènes:</span>
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
						<img src="../media/alergeno/pescado.png" alt="<?= $alergeno['pescado'] ?>" title="<?= $alergeno['pescado'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/tosta_roastbeef.JPG" data-lightbox="tostas" data-title="Toast Rôti à la sauce moutarde">
						<img src="../media/imagenes/tragar/minis/tosta_roastbeef.jpg" class="imagen" alt="Toast Rôti à la sauce moutarde" title="Toast Rôti à la sauce moutarde">
					</a>
					<p>
						Rôti à la sauce moutarde (5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=roastbeef" data-type="iframe" href="javascript:;">Voir les ingrédients</a><br>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergènes:</span>
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
							<a data-fancybox data-src="../php/ingredientes.php?comida=hummus" data-type="iframe" href="javascript:;">Voir les ingrédients</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre" style="width: 200px">Allergènes: pas d'allergènes</span>						
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/babaganoush.JPG" data-lightbox="raciones" data-title="Babaganoush">
						<img src="../media/imagenes/tragar/minis/babaganoush.jpg" class="imagen" alt="Babaganoush" title="Babaganoush">
					</a>
					<p>
						Babaganoush (6&euro; - ½: 3&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=babaganoush" data-type="iframe" href="javascript:;">Voir les ingrédients</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergènes:</span>
						<img src="../media/alergeno/sesamo.png" alt="<?= $alergeno['sesamo'] ?>" title="<?= $alergeno['sesamo'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/ensalada_ventresca.JPG" data-lightbox="raciones" data-title="Salétier aux poivrons au piquillo">
						<img src="../media/imagenes/tragar/minis/ensalada_ventresca.jpg" class="imagen" alt="Salétier aux poivrons au piquillo" title="Salétier aux poivrons au piquillo">
					</a>
					<p>
						Salétier aux poivrons au piquillo (9&euro; - ½: 4.5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=ventresca" data-type="iframe" href="javascript:;">Voir les ingrédients</a>
						</span></a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergènes:</span>
						<img src="../media/alergeno/pescado.png" alt="<?= $alergeno['pescado'] ?>" title="<?= $alergeno['pescado'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/racion_patata_rellena.JPG" data-lightbox="raciones" data-title="Pommes de terre farcies">
						<img src="../media/imagenes/tragar/minis/racion_patata_rellena.jpg" class="imagen" alt="Pommes de terre farcies" title="Pommes de terre farcies">
					</a>
					<p>
						Pommes de terre farcies (5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=patatas_rellenas" data-type="iframe" href="javascript:;">Voir les ingrédients</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergènes:</span>
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">							
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/racion_papa_mojo.JPG" data-lightbox="raciones" data-title="'Papas arrugás' avec deux mojos">
						<img src="../media/imagenes/tragar/minis/racion_papa_mojo.jpg" class="imagen" alt="'Papas arrugás' avec deux mojos" title="'Papas arrugás' avec deux mojos">
					</a>
					<p>
						'Papas arrugás' avec deux mojos (6&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=papas_2mojos" data-type="iframe" href="javascript:;">Voir les ingrédients</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre" style="width: 200px">Allergènes: pas d'allergènes</span>							
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/ragout.jpg" data-lightbox="raciones" data-title="Ragoût de veau">
						<img src="../media/imagenes/tragar/minis/ragout.jpg" class="imagen" alt="Ragoût de veau" title="Ragoût de veau">
					</a>
					<p>
						Ragoût de veau (7&euro; - ½: 3.5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=ragout" data-type="iframe" href="javascript:;">Voir les ingrédients</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergènes:</span>
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
					</span>
				</div>

				<div>
					<a href="../imag_ejemplos/comida/lomo.jpg" data-lightbox="raciones" data-title="Longe de porc">
						<img src="../imag_ejemplos/comida/lomo.jpg" class="imagen" alt="Longe de porc" title="Longe de porc">
					</a>
					<p>
						Longe de porc (7&euro; - ½: 3.5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=lomo" data-type="iframe" href="javascript:;">Voir les ingrédients</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre" style="width: 200px">Allergènes: pas d'allergènes</span>						
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/racion_cecina.jpg" data-lightbox="raciones" data-title="Bœuf fumé de León">
						<img src="../media/imagenes/tragar/minis/racion_cecina.jpg" class="imagen" alt="Bœuf fumé de León" title="Bœuf fumé de León">
					</a>
					<p>
						Bœuf fumé de León (9&euro; - ½: 4.5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=racion_cecina" data-type="iframe" href="javascript:;">Voir les ingrédients</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergènes:</span>
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
					<a href="../media/imagenes/tragar/solomillo.JPG" data-lightbox="raciones" data-title="Le saumon à la bière et à la sauce aux pommes">
						<img src="../media/imagenes/tragar/minis/solomillo.jpg" class="imagen" alt="Le saumon à la bière et à la sauce aux pommes" title="Le saumon à la bière et à la sauce aux pommes">
					</a>
					<p>
						Le saumon à la bière et à la sauce aux pommes (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=solomillo" data-type="iframe" href="javascript:;">Voir les ingrédients</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergènes:</span>
						<img src="../media/alergeno/mostaza.png" alt="<?= $alergeno['mostaza'] ?>" title="<?= $alergeno['mostaza'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/pastel_salmon.JPG" data-lightbox="raciones" data-title="Gâteau au saumon">
						<img src="../media/imagenes/tragar/minis/pastel_salmon.jpg" class="imagen" alt="Gâteau au saumon" title="Gâteau au saumon">
					</a>
					<p>
						Gâteau au saumon (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=pastel_salmon" data-type="iframe" href="javascript:;">Voir les ingrédients</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergènes:</span>
						<img src="../media/alergeno/pescado.png" alt="<?= $alergeno['pescado'] ?>" title="<?= $alergeno['pescado'] ?>">
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/carpaccio_calabacin.JPG" data-lightbox="raciones" data-title="Carpaccio de courgettes">
						<img src="../media/imagenes/tragar/minis/carpaccio_calabacin.jpg" class="imagen" alt="Carpaccio de courgettes" title="Carpaccio de courgettes">
					</a>
					<p>
						Carpaccio de courgettes (5&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=carpaccio" data-type="iframe" href="javascript:;">Voir les ingrédients</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergènes:</span>
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/soja.png" alt="<?= $alergeno['soja'] ?>" title="<?= $alergeno['soja'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/lasagna_setas.JPG" data-lightbox="raciones" data-title="Lasagnes aux champignons">
						<img src="../media/imagenes/tragar/minis/lasagna_setas.jpg" class="imagen" alt="Lasagnes aux champignons" title="Lasagnes aux champignons">
					</a>
					<p>
						Lasagnes aux champignons (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=lasagna" data-type="iframe" href="javascript:;">Voir les ingrédients</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergènes:</span>
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
					</span>
				</div>
			
				<div>
					<a href="../media/imagenes/tragar/atun.JPG" data-lightbox="raciones" data-title="Thon salé">
						<img src="../media/imagenes/tragar/minis/atun.jpg" class="imagen" alt="Thon salé" title="Thon salé">
					</a>
					<p>
						Thon salé (8&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=atun" data-type="iframe" href="javascript:;">Voir les ingrédients</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergènes:</span>
						<img src="../media/alergeno/pescado.png" alt="<?= $alergeno['pescado'] ?>" title="<?= $alergeno['pescado'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/berenjena.JPG" data-lightbox="raciones" data-title="Aubergines Farcies">
						<img src="../media/imagenes/tragar/minis/berenjena.jpg" class="imagen" alt="Aubergines Farcies" title="Aubergines Farcies">
					</a>
					<p>
						Aubergines Farcies (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=berenjena" data-type="iframe" href="javascript:;">Voir les ingrédients</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergènes:</span>
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
					</span>
				</div>

				<div>
					<a href="../media/imagenes/tragar/rusos.jpg" data-lightbox="raciones" data-title="Steak de Russie avec sauce tomate">
						<img src="../media/imagenes/tragar/minis/rusos.jpg" class="imagen" alt="Steak de Russie avec sauce tomate" title="Steak de Russie avec sauce tomate">
					</a>
					<p>
						Steak de Russie avec sauce tomate (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=rusos" data-type="iframe" href="javascript:;">Voir les ingrédients</a>
						</span>
					</p>
					<span class="alergeno">
						<span class="nombre">Allergènes:</span>
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/gluten.png" alt="<?= $alergeno['gluten'] ?>" title="<?= $alergeno['gluten'] ?>">
						<img src="../media/alergeno/huevo.png" alt="<?= $alergeno['huevo'] ?>" title="<?= $alergeno['huevo'] ?>">
					</span>
				</div>

				<div>
					<a href="../imag_ejemplos/comida/ensalada_remo.jpg" data-lightbox="raciones" data-title="Salade de betteraves, roquette et fromage de chèvre eco">
						<img src="../imag_ejemplos/comida/mini_ensalada_remo.jpg" class="imagen" alt="Salade de betteraves, roquette et fromage de chèvre eco" title="Salade de betteraves, roquette et fromage de chèvre eco">
					</a>
					<p>
						Salade de betteraves, roquette et fromage de chèvre eco (7&euro;)<br>
						<span class="ingredientes">
							<a data-fancybox data-src="../php/ingredientes.php?comida=ensalada_remo" data-type="iframe" href="javascript:;">Voir les ingrédients</a>
						</span>
					</p>
					<span class="alergeno alerizquierda">
						<span class="nombre">Allergènes:</span>
						<img src="../media/alergeno/lacteo.png" alt="<?= $alergeno['lacteo'] ?>" title="<?= $alergeno['lacteo'] ?>">
						<img src="../media/alergeno/soja.png" alt="<?= $alergeno['soja'] ?>" title="<?= $alergeno['soja'] ?>">
					</span>
				</div>
			</div>
		</section>	
		
		<section id="plato">
			<div id="foto_plato">
				<a name="plato"><p id="pla">Plat du jour</p></a>
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
				<a name="reservas"><p id="reser">Réserver votre place</p></a>
			</div>

			<div class="contenido">
				<p class="mitad">
					Pour les réservations de 4 personnes ou plus, contactez-nous au téléphone 91-148-43-76 o 685-954-545 <img src="../media/iconos/wasap.png" alt="wasap" title="Envoyez-nous un wasap" id="wasap">
				</p>

				<p class="mitad">
					Si vous souhaitez que nous préparions des plats à emporter, utilisez le formulaire.
				</p>

				<form action="#reservas" method="post">
					<input type="hidden" name="tipo" value="Reserva en La Tragona">
					<input type="text" name="nombre" id="nombre" size="25" onkeypress="return permite(event, 'car');">
					<span class="error_form">Écrivez votre nom, s'il vous plaît</span>
					<label for="nombre" class="impar">Nom (obligatoire)</label>

					<input type="text" name="telefono" id="telefono" value="(+34)" size="25" onkeypress="return permite(event, 'num');">
					<span class="error_form">Écrivez votre numéro de téléphone, s'il vous plaît</span>
					<label for="telefono">Téléphone (obligatoire)</label>
					<input type="text" name="fecha" id="fecha" class="tcal" placeholder="jour/mois/année">
					<label for="fecha" class="impar">Date de l'événement</label>

					<label for="mensaje" id="etiquetaTexto">Dites-nous ce dont vous avez besoin:</label>
					<span class="error_form">Vous n'avez rien demandé.</span>
					<textarea id="mensaje" name="mensaje" columns="50" rows="8"></textarea>
					<input type="submit" name="enviar" id="enviar" value="Soumettre" onclick="return validarForm();">
					
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
		<p>La Tragona <img src="../media/iconos/copyleft.png" alt="Copyleft" title="Copyleft"> 2017.<span class="desktop"> Autorisation de diffuser et de copier le contenu de ce site, La paternité de la même.</span><span class = "ipad"> Copiez le contenu de ce site, en conservant la paternité.</span></p>
	</footer>
</body>
</html>
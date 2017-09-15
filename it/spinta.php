<!DOCTYPE html>
<html>
<head>
	<title>Per spinta en La Tragona</title>

	<meta charset="utf-8">
	<meta name="author" content="alejoizquierdomartinez@gmail.com">
	<meta name="keywords" content="Tapas, pane tostato, nastro, porzioni, vino, liquore casalingo, cañas, Rastro, vicino al Rastro, a due minuti dal Rastro, La Latina, Tirso de Molina, oasi a Madrid, zona bar, punto di incontro, vicino al teatro, Lavapies , Teatro, cabaret, buon prezzo, prezzo a prezzi accessibili, senza glutine, menu allergenico, cibo curato, prodotti freschi, prodotti freschi, prodotti di mercato, mercato nelle vicinanze, pane ecologico, pane artigiano, vino biologico, stampa alternativa, wifi gratuito">
	<meta name="description" content ="Tapas bar dove potrete gustare brindisi e razioni senza glutine realizzate con prodotti di mercato e vini biologici, nonché liquori artigianali e combinati che rimuovono singhiozzi. Situato vicino al Rastro, nel centro di Madrid, tra La Latina e Tirso de Molina.">
	
	<meta name="viewport" content="width=device-width; initial-scale=1.0">

	<link rel="shortcut icon" href="../media/icono.ico" type="image/x-icon">
	<link rel="icon" href="../media/icono.ico" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="../css/tripoli_index.css">
	<link rel="stylesheet" href="../css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.min.css">
	
	<?php
		require_once('../php/lib/spyc/spyc.php');
		$datos = Spyc::YAMLLoad('../php/idiomas/lexico_it.yml');
		$vacaciones = $datos['aviso']['agosto']['titular'];
		$vuelta = $datos['aviso']['agosto']['vuelta'];
	?>
	<script type="text/javascript">
		titular = '<?= $vacaciones; ?>';
		vuelta = '<?= $vuelta; ?>';
	</script>

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="../js/lightbox.min.js"></script>
	<script type="text/javascript" src="../js/jquery.fancybox.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="../css/empujar.css">
	<script type="text/javascript" src="../js/empujar.js"></script>
	<style type="text/css">
		header {
			background: url("../media/cabeceras/spinta.png") 50% 8% no-repeat fixed;
		}

		@media screen and (max-width: 650px), screen and (max-device-width: 650px), screen and (min-width: 651px)and (max-width: 1024px), screen and (min-device-width: 651px)	and (max-device-width: 1024px) {
			header {
				background: url("../media/cabeceras/spinta_sin.png") 50% 0% no-repeat fixed;
			}
		}
	</style>
</head>
<body>

	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="index.php" alt="Inicio" title="Inicio">La Tragona</a></li>
			<li><a href="deglutire.php" alt="Capsule e porzioni" title="Capsule e porzioni">Per deglutire</a></li>
			<li><a href="dovesiamo.php" alt="Dove siamo" title="Dove siamo">Dove siamo</a></li>
			<li><a href="chisiamo.php" alt="Chi siamo" title="Chi siamo">Chi siamo</a></li>
			<li><a href="contattaci.php" alt="Contattaci" title="Contattaci">Contattaci</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="../empujar.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Spanish"><span>Castellano</span></a></li>
			<li><a href="../en/push.php" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English"><span>English</span></a></li>
			<li><a href="../fr/pousser.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="French"><span>Français</span></a></li>
			<li><a href="#" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Italian"><span>Italiano</span></a></li>
		</ul>
	</section>

	<div id="contenedor">
		<nav id="superior">
			<ul>
				<li>
					<a href="index.php" alt="Inicio" title="Inicio"><span>La Tragona</span></a>
					<img src="../media/banderas/multi.jpg" alt="multibandera" title="Idiomas" class="movil bandera" id="multi">
					<a href="../empujar.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Web castellano" class="desktop ipad bandera"></a>
					<a href="../en/push.php" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English web" class="desktop ipad bandera"></a>
					<a href="../fr/pousser.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="#" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li class="movil ipad" id="logo_superior"><span>Menu</span><img src="../media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="contattaci.php" alt="Contattaci" title="Contattaci">Contattaci</a></li>
				<li class="desktop"><a href="chisiamo.php" alt="Chi siamo" title="Chi siamo">Chi siamo</a></li>
				<li class="desktop"><a href="dovesiamo.php" alt="Dove siamo" title="Dove siamo">Dove siamo</a></li>
				<li class="desktop"><a href="deglutire.php" alt="Capsule e porzioni" title="Capsule e porzioni">Per deglutire</a></li>
			</ul>
		</nav>

		<nav id="lateral">
			<ul>
				<li id="cerve">Birre</li>
				<li id="vin">Vini</li>
				<li id="lic">Liquori</li>
				<li id="cuba">Combinato</li>
				<li id="sin">Senza alchol</li>
			</ul>
		</nav>

		<header></header>

		<section id="cerveza">
			<div class="foto">
				<a name="cerveza"><p id="espumoso">La bevanda schiumosa</p></a>
			</div>	

			<div class="contenido">	
				<legend>Estrella de Levante <span class="desktop">(Bionda)</span></legend>
				<div id="estrella">
					<a href="../media/imagenes/empujar/rubia.jpg" data-lightbox="example-1" data-title="Estrella Levante">
						<img src="../media/imagenes/empujar/minis/rubia.jpg" class="imagen" alt="Estrella Levante" title="Estrella Levante">
					</a>
					<ul>
						<li>Caña - 1.50&euro;</li>
						<li>Doppio - 2.50&euro;</li>
						<li>Bottiglia 1/3 - 2.50&euro;</li>
						<li>Mini<span class="descrip"> (500ml.) </span>- 3.50&euro;</li>
					</ul>
				</div>

				<legend>Estrella de levante <span class="desktop">(Senza alchol)</span></legend>
				<div id="estrella_sin">
					<a href="../imag_ejemplos/bebidas/estrella_sin.jpg" data-lightbox="example-1" data-title="Estrella Alcohol free">
						<img src="../imag_ejemplos/bebidas/mini_estrella_sin.jpg" class="imagen" alt="Estrella Alcohol free" title="Estrella Alcohol free">
					</a>
					<ul>
						<li>Bottiglia 1/4 - 1.50&euro;</li>
					</ul>
				</div>

				<legend>Punta Este <span class="desktop">(Tostata)</span></legend>
				<div>
					<a href="../media/imagenes/empujar/tostada.jpg" data-lightbox="example-1" data-title="Punta Este">
						<img src="../media/imagenes/empujar/minis/tostada.jpg" class="imagen" alt="Punta Este" title="Punta Este">
					</a>
					<ul>
						<li>Caña - 1.70&euro;</li>
						<li>Doppio - 3.00&euro;</li>
						<li>Mini<span class="descrip"> (500ml.) </span>- 4.00&euro;</li>
					</ul>
				</div>

				<legend>Daura Damm <span class="desktop">(Senza glutine)</span></legend>
				<div>
					<a href="../media/imagenes/empujar/daura.jpg" data-lightbox="example-1" data-title="Daura Damm">
						<img src="../media/imagenes/empujar/minis/daura.jpg" class="imagen" alt="Daura Damm" title="Daura Damm">
					</a>
					<ul>
						<li>Bottiglia 1/3 - 2.50&euro;</li>
					</ul>
				</div>
			</div>
		</section>

		<section id="vino">
			<div class="foto">
				<a name="vino"><p id="uva">Il gusto dell'uva</p></a>
			</div>	

			<div class="contenido">
				<legend>Rosso</legend>
				<div>
					<a href="../media/imagenes/empujar/7puntas.jpg" data-lightbox="example-1" data-title="7 puntas">
						<img src="../media/imagenes/empujar/minis/7puntas.jpg" class="imagen" alt="7 Puntas" title="7 Puntas">
					</a>
					<p>7 puntas (Castilla) (Tazza: 1.50&euro;; Bottiglia: 12&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=puntas" data-type="iframe" href="javascript:;">Vedi descrizione</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/zinio.jpg" data-lightbox="example-1" data-title="Zinio">
						<img src="../media/imagenes/empujar/minis/zinio.jpg" class="imagen" alt="Zinio" title="Zinio">
					</a>
					<p>Zinio (La Rioja) (Tazza: 1.80&euro;; Bottiglia: 12&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=zinio" data-type="iframe" href="javascript:;">Vedi descrizione</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/muriel.jpg" data-lightbox="example-1" data-title="Muriel">
						<img src="../media/imagenes/empujar/minis/muriel.jpg" class="imagen" alt="Muriel" title="Muriel">
					</a>
					<p>Muriel Crianza (La Rioja) (Tazza: 2.40&euro;; Bottiglia: 15&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=muriel" data-type="iframe" href="javascript:;">Vedi descrizione</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/menina.jpg" data-lightbox="example-1" data-title="Menina">
						<img src="../media/imagenes/empujar/minis/menina.jpg" class="imagen" alt="Menina" title="Menina">
					</a>
					<p>Menina Crianza (Madrid) (Tazza: 2.80&euro;; Bottiglia: 18&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=menina" data-type="iframe" href="javascript:;">Vedi descrizione</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/feroes.jpg" data-lightbox="example-1" data-title="Feroes">
					  <img src="../media/imagenes/empujar/minis/feroes.jpg" class="imagen" alt="Feroes" title="Feroes">
					</a>
					<p>Feroes (Ribera) (Tazza: 2.40&euro;; Bottiglia: 15&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=feroes" data-type="iframe" href="javascript:;">Vedi descrizione</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/mureda.jpg" data-lightbox="example-1" data-title="Mureda">
						<img src="../media/imagenes/empujar/minis/mureda.jpg" class="imagen" alt="Mureda" title="Mureda">
					</a>
					<p>Mureda (Syrah) (Tazza: 2.40&euro;; Bottiglia: 15&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=mureda" data-type="iframe" href="javascript:;">Vedi descrizione</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/bierzo.jpg" data-lightbox="example-1" data-title="Cosechero">
						<img src="../media/imagenes/empujar/minis/bierzo.jpg" class="imagen" alt="Cosechero" title="Cosechero">
					</a>
					<p>Bierzo (Mencia) (Tazza: 2.80&euro;; Bottiglia: 18&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=bierzo" data-type="iframe" href="javascript:;">Vedi descrizione</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/nuviana_tinto.jpg" data-lightbox="example-1" data-title="Nuviana">
						<img src="../media/imagenes/empujar/minis/nuviana_tinto.jpg" class="imagen" alt="Nuviana" title="Nuviana">
					</a>
					<p>Nuviana (Tazza: 2.40&euro;; Bottiglia: 15&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=nuviana_tinto" data-type="iframe" href="javascript:;">Vedi descrizione</a>
				</div>

				<legend>Bianchi</legend>
				<div>
					<a href="../media/imagenes/empujar/albarino.jpg" data-lightbox="example-1" data-title="Albariño">
						<img src="../media/imagenes/empujar/minis/albarino.jpg" class="imagen" alt="Albariño" title="Albariño">
					</a>
					<p>Albariño (Cosechero) (Tazza: 2.20&euro;; Bottiglia: 12&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=albarino" data-type="iframe" href="javascript:;">Vedi descrizione</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/bierzo_godello.jpg" data-lightbox="example-1" data-title="Bierzo Godello">
						<img src="../media/imagenes/empujar/minis/bierzo_godello.jpg" class="imagen" alt="Bierzo Godello" title="Bierzo Godello">
					</a>
					<p>Bierzo Godello (Tazza: 2.80&euro;; Bottiglia: 18&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=bierzo_god" data-type="iframe" href="javascript:;">Vedi descrizione</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lagartijo.jpg" data-lightbox="example-1" data-title="Lagartijo">
						<img src="../media/imagenes/empujar/minis/lagartijo.jpg" class="imagen" alt="Lagartijo" title="Lagartijo">
					</a>
					<p>Lagartijo (Verdejo) (Tazza: 2.20&euro;; Bottiglia: 12&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=lagartijo" data-type="iframe" href="javascript:;">Vedi descrizione</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/nuviana_blanco.jpg" data-lightbox="example-1" data-title="Nuviana">
						<img src="../media/imagenes/empujar/minis/nuviana_blanco.jpg" class="imagen" alt="Nuviana" title="Nuviana">
					</a>
					<p>Nuviana (Tazza: 2.20&euro;; Bottiglia: 12&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=nuviana_blanco" data-type="iframe" href="javascript:;">Vedi descrizione</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/vinaldena.jpg" data-lightbox="example-1" data-title="Viñaldena">
						<img src="../media/imagenes/empujar/minis/vinaldena.jpg" class="imagen" alt="Viñaldena" title="Viñaldena">
					</a>
					<p>Viñaldena (Verdejo) (Tazza: 2.20&euro;; Bottiglia: 12&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=vinaldena" data-type="iframe" href="javascript:;">Vedi descrizione</a>
				</div>
				<div>
					<a href="../media/imagenes/empujar/sastreria.jpg" data-lightbox="example-1" data-title="La sastreria">
						<img src="../media/imagenes/empujar/minis/sastreria.jpg" class="imagen" alt="La sastreria" title="La sastreria">
					</a>
					<p>La sastreria (Garnacha) (Tazza: 2.20&euro;; Bottiglia: 12&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=sastreria" data-type="iframe" href="javascript:;">Vedi descrizione</a>
				</div>

				<legend>Vermú</legend>
				<div>
					<a href="../media/imagenes/empujar/vermouth.jpg" data-lightbox="example-1" data-title="Vermu">
						<img src="../media/imagenes/empujar/minis/vermouth.jpg" class="imagen" alt="Vermu" title="Vermu">
					</a>
					<p>Vermú (Tazza: 2&euro;)</p>
					<a data-fancybox data-src="../php/guia.php?vino=vermouth" data-type="iframe" href="javascript:;">Vedi descrizione</a>
				</div>
			</div>
		</section>	

		<section id="compartir" class="movil">
			<div class="fb-like" data-href="http://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>

		<section id="licores">
			<div class="foto">
				<a name="licor"><p id="aguardiente">Liquore artigianale</p></a>
			</div>

			<div class="contenido">
				<legend>Liquore artigianale</legend>
				<div>
					<a href="../media/imagenes/empujar/lic_hierbas.jpg" data-lightbox="example-1" data-title="Marc a base di erbe">
						<img src="../media/imagenes/empujar/minis/lic_hierbas.jpg" alt="Marc a base di erbe" title="Marc a base di erbe" class="imagen">
					</a>
					<p>Marc a base di erbe.<br>(Chupito: 2&euro;; Tazza: 4&euro;)</p>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lic_blanco.jpg" data-lightbox="example-1" data-title="Marcatura bianca">
						<img src="../media/imagenes/empujar/minis/lic_blanco.jpg" alt="Marcatura bianca" title="Marcatura bianca" class="imagen">
					</a>
					<p>Marcatura bianca.<br>(Chupito: 2&euro;; Tazza: 4&euro;)</p>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lic_tostado.jpg" data-lightbox="example-1" data-title="Marc arrosto">
						<img src="../media/imagenes/empujar/minis/lic_tostado.jpg" alt="Marc arrosto" title="Marc arrosto" class="imagen">
					</a>
					<p>Marc arrosto.<br>(Chupito: 2&euro;; Tazza: 4&euro;)</p>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lic_cafe.jpg" data-lightbox="example-1" data-title="Liquore di caffè">
						<img src="../media/imagenes/empujar/minis/lic_cafe.jpg" alt="Liquore di caffè" title="Liquore di caffè" class="imagen">
					</a>
					<p>Liquore di caffè.<br>(Chupito: 2&euro;; Tazza: 4&euro;)</p>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lic_pacharan.jpg" data-lightbox="example-1" data-title="Pacharan">
						<img src="../media/imagenes/empujar/minis/lic_pacharan.jpg" alt="Pacharan" title="Pacharan" class="imagen">
					</a>
					<p>Pacharan.<br>(Chupito: 2&euro;; Tazza: 4&euro;)</p>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lic_crema_orujo.jpg" data-lightbox="example-1" data-title="Crema di Marc">
						<img src="../media/imagenes/empujar/minis/lic_crema_orujo.jpg" alt="Crema di Marc" title="Crema di Marc" class="imagen">
					</a>
					<p>Crema di Marc.<br>(Chupito: 2&euro;; Tazza: 4&euro;)</p>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lic_choco.jpg" data-lightbox="example-1" data-title="Crema al cioccolato">
						<img src="../media/imagenes/empujar/minis/lic_choco.jpg" alt="Crema al cioccolato" title="Crema al cioccolato" class="imagen">
					</a>
					<p>Crema al cioccolato<span class="descrip"> with cherries</span>.<br>(Chupito: 2&euro;; Tazza: 4&euro;)</p>
				</div>
				<div>
					<a href="../media/imagenes/empujar/lic_crem_cafe.jpg" data-lightbox="example-1" data-title="Crema di caffè">
						<img src="../media/imagenes/empujar/minis/lic_crem_cafe.jpg" alt="Crema di caffè" title="Crema di caffè" class="imagen">
					</a>
					<p>Crema di caffè.<br>(Chupito: 2&euro;; Tazza: 4&euro;)</p>
				</div>
			</div>
		</section>

		<section id="combinados">
			<div class="foto">
				<a name="cubata"><p id="cuba_libre">Combinato</p></a>
			</div>

			<div class="contenido">
				<legend>Combinato bianco (6&euro;)</legend>
				<div>
					<a href="../media/imagenes/empujar/combi_claro.jpg" data-lightbox="example-1" data-title="Combinato bianco">
						<img src="../media/imagenes/empujar/minis/combi_claro.jpg" alt="Combinato bianco" title="Combinato bianco" class="imagen">
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
				<legend>Combinato scuro (6&euro;)</legend>
				<div>
					<a href="../media/imagenes/empujar/combi_oscu.jpg" data-lightbox="example-1" data-title="Combinato scuro">
						<img src="../media/imagenes/empujar/minis/combi_oscu.jpg" alt="Combinato scuro" title="Combinato scuro" class="imagen">
					</a>
					<p class="lista_izquierda">
						Brugal<br>
						DYC<br>
						Cacique<br>
					</p>
					<p class="lista_derecha">
						JB<br>
						Ballantines<br>
					</p>
				</div>
			</div>
		</section>

		<section id="sin_alcohol">
			<div class="foto">
				<a name="sin"><p id="sin_alc">Senza alchol</p></a>
			</div>

			<div class="contenido">
				<legend>Succo organico (2.50&euro;)</legend>
				<div>
					<a href="../media/imagenes/empujar/zumos_org.jpg" data-lightbox="example-1" data-title="Succo organico">
						<img src="../media/imagenes/empujar/minis/zumos_org.jpg" alt="Succo organico" title="Succo organico" class="imagen">
					</a>
					<p>
						Mandarino e rosmarino<br>
						Limonata e zenzero<br>
						Pera e pepe di Sichuan<br>
						Pomodoro e wasabi
					</p>
				</div>

				<legend>Succo (2&euro;)</legend>
				<div>
					<a href="../media/imagenes/empujar/zumo.jpg" data-lightbox="example-1" data-title="Succo">
						<img src="../media/imagenes/empujar/minis/zumo.jpg" alt="Succo" title="Succo" class="imagen">
					</a>
					<p>
						Pesca<br>
						Arancione<br>
						Ananas<br>
						Pomodoro
					</p>
				</div>
			
				<legend>Rinfresco (2&euro;)</legend>
				<div>
					<a href="../media/imagenes/empujar/refresco.jpg" data-lightbox="example-1" data-title="Rinfresco">
						<img src="../media/imagenes/empujar/minis/refresco.jpg" alt="Rinfresco" title="Rinfresco" class="imagen">
					</a>
					<p class="lista_izquierda">
						Frixen cola<br>
						Arancione<br>
						Limone<br>
						Tonica						
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
		<p>La Tragona <img src="../media/iconos/copyleft.png" alt="Copyleft" title="Copyleft">2017.<span class="desktop"> Autorizzazione per diffondere e copiare il contenuto di Questo sito web, la paternità dello stesso.</span><span class="ipad"> Copia il contenuto di questo web, conservando la paternità.</span></p>
	</footer>
</body>
</html>
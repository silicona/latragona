<!DOCTYPE html>
<html>
<head>
	<title>Benvenuto a La Tragona</title>

	<?php
		include 'basica_head.php';
		require_once '../php/lib/spyc/spyc.php';
		$navidad = Spyc::YAMLLoad('../php/idiomas/lexico_it.yml')['aviso']['navidad'];
	?>

	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<script type="text/javascript" src="../js/index.js"></script>
	
</head>
<body>
	<div id="fb-root"></div>

	<section id="menumovil" class="movil ipad">
		<ul>
			<li><a href="deglutire.php" alt="Capsule e porzioni" title="Capsule e porzioni">Per deglutire</a></li>
			<li><a href="spinta.php" alt="Le bevande" title="Le bevande">Per spinta</a></li>
			<li><a href="dovesiamo.php" alt="Dove siamo" title="Dove siamo">Dove siamo</a></li>
			<li><a href="chisiamo.php" alt="Chi siamo" title="Chi siamo">Chi siamo</a></li>
			<li><a href="contattaci.php" alt="Contattaci" title="Contattaci">Contattaci</a></li>
		</ul>
	</section>

	<section id="menuidiomas" class="movil">
		<ul>
			<li><a href="../index.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Spanish"><span>Castellano</span></a></li>
			<li><a href="../en/index.php" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English"><span>English</span></a></li>
			<li><a href="../fr/index.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="French"><span>Français</span></a></li>
			<li><a href="#" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Italian"><span>Italiano</span></a></li>
		</ul>
	</section>

	<header>
		<span class="desktop">Benvenuto a </span>La Tragona<br>
		<img src="../media/logo_red.gif" alt="La Tragona" title="La Tragona">
	</header>

	<div id="leer">
		<p>Conoscici</p>
	</div>
	
	<main id="contenedor">
		<nav id="superior">
			<ul>
				<li>
					<span>La Tragona</span>
					<img src="../media/banderas/multi.jpg" alt="multibandera" title="Idiomas" class="movil bandera" id="multi">
					<a href="../index.php" alt="castellano" title="Web castellano"><img src="../media/banderas/espana.png" alt="España" title="Web castellano" class="desktop ipad bandera"></a>
					<a href="../en/index.php" alt="english" title="English web"><img src="../media/banderas/inglaterra.jpg" alt="Inglaterra" title="English web" class="desktop ipad bandera"></a>
					<a href="../fr/index.php" alt="français" title="Web français"><img src="../media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera"></a>
					<a href="#" alt="italiano" title="Web italiana"><img src="../media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera"></a>
				</li>
				<li class="movil ipad" id="logo_superior"><span>Menu</span><img src="../media/logo_red.gif" alt="logo" title="La Tragona"></li>
				<li class="desktop"><a href="contattaci.php" alt="Contattaci" title="Contattaci">Contattaci</a></li>
				<li class="desktop"><a href="chisiamo.php" alt="Chi siamo" title="Chi siamo">Chi siamo</a></li>
				<li class="desktop"><a href="dovesiamo.php" alt="Dove siamo" title="Dove siamo">Dove siamo</a></li>
				<li class="desktop"><a href="spinta.php" alt="Le bevande" title="Le bevande">Per spinta</a></li>
				<li class="desktop"><a href="deglutire.php" alt="Capsule e porzioni" title="Capsule e porzioni">Per deglutire</a></li>
				<div style="clear: both"></div>
			</ul>
		</nav>

		<h1>Benvenuti a La Tragona</h1>

		<section class="derecha">
			<!--<img src="../media/logo_grande.jpg" alt="logo" title="La Tragona" id="fotolateral">-->
			<?php include '../php/plantillas/cartel_navidades.php' ?>
		</section>

		<section class="izquierda">
			<p>
				Abbiamo ricostruito questo spazio per ottenere un bar di quartiere con un'atmosfera piacevole. Qui potete godere di gustare <a href="deglutire.php" alt="Capsule e porzioni" title="Lo cibo di La Tragona">cibi preparati con cura</a>, realizzati con prodotti del mercato, pane casereccio e <a href="spinta.php" alt="Le bevande" title="Le bevande di La Tragona">vini ecologici</a>.
				<br>
				<br>
				Da martedì a domenica, siamo una vera e propria oasi di a Madrid, <a href="dovesiamo.php" alt="Dove siamo" title="Dove siamo">un posto tranquillo tra Tirso de molina e La Latina</a> dove prendere cañas e razioni piatti senza glutine a un prezzo accessibile, circondato da librerie e teatri, dove è anche possibile trovare la stampa alternativa.
				<br>
				<br>
				Oltre ai vini, ai liquori fatti in casa, ai brindisi e alle razioni crostini (tostas) e ai patti del nostro menu, nei giorni feriali abbiamo un piatto del giorno preparato con prodotti freschi dai mercati vicini, frutto del <a href="whoweare.php" alt="chi siamo" title="Chi siamo">buon lavoro della maestria di Luis e Pilar</a>.
				<br>
				<br>
				Un punto d'incontro di sapori tradizionali, una buona atmosfera e una semplice innovazione, accanto al Rastro. Questo è <a href="contattaci.php" alt="Contattaci" title="Contattaci">La Tragona</a>.
			</p>
		</section>

		<section id="compartir" class="movil">
			<div class="fb-like" data-href="http://latragona.com" data-width="50px" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			<div><a href="https://twitter.com/intent/tweet?button_hashtag=latragonalavapies" class="twitter-hashtag-button" data-show-count="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>	
		</section>

		<section id="rrss" class="desktop">
			<ul>
				<li><span>Seguici:</span></li>
				<li><a href="https://www.facebook.com/latragonalavapies"><img src="../media/iconos/fb.jpg" alt="Facebook" title="facebook.com/latragonalavapies"><span>@latragonalavapies</span></a></li>
				<li><a href="https://twitter.com/TragonaBar"><img src="../media/iconos/twitter.png" alt="Twitter" title="@TragonaBar"><span>@tragonabar</span></a></li>
			</ul>
		</section>
		<div style="clear: both;"></div>
	</main>

	<footer id="legal">
		<p>La Tragona <img src="../media/iconos/copyleft.png" alt="Copyleft" title="Copyleft">2017.<span class="desktop"> Autorizzazione per diffondere e copiare il contenuto di Questo sito web, la paternità dello stesso.</span><span class="ipad"> Copia il contenuto di questo web, conservando la paternità.</span></p>
	</footer>

</body>
</html>
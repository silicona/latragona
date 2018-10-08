<a data-fancybox data-src="<?= $cartel['url'] ?>" data-type="iframe" href="javascript:;" title="Hay vida fuera del Tapapies" id="enlace_evento">
 	<p>¡¡<?= $cartel['titular'] ?>!!</p>
 	<p class="desktop ipad"><?= $cartel['en'] ?></p>
 	<img src="<?= $cartel['logo'] ?>" alt="logo" id="logo_cartel" class="desktop">
 	<p class="desktop">
 		<span style="color: orange;"><?= $cartel['fecha'] ?></span><br>
 		<span style="color: green"><?= $cartel['calle'] ?></span><br>
 		<span style="color: navy">Metro: Tirso de Molina / La Latina</span>
 	</p>
 	<p class="movil ipad">
 		<span style="color: orange;"><?= $cartel['fecha'] ?></span><br>
 		<span><?= $cartel['tapas'] ?></span>
 	</p>
 	<p class="escalera desktop">
 		<span><?= $cartel['productos'] ?></span><br>
 		<span><?= $cartel['nuevas'] ?></span><br>
 		<span><?= $cartel['sin_gluten'] ?>!!</span>
 	</p>
</a>
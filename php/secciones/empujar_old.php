
<?php
/*
	$nav_ir   = $lexico['nav']['ir'];
	$producto = $lexico['producto'];
	$titulos  = $lexico['titulos'];
	$bebidas  = $lexico['bebida'];
	$navidad  = $lexico['aviso']['navidad'];
*/
?>

<?php require_once BASE_FILE . 'php/inc/menu_movil.php'; ?>

<div id="contenedor">

	<?php require_once BASE_FILE . 'php/inc/nav_superior_global.php' ?>

	<nav id="lateral">
		<ul>
			<li class="boton" data_seccion="#cerveza"><?php echo $lexico['lateral']['cervezas']; ?></li>
			<li class="boton" data_seccion="#vino"><?php echo $lexico['lateral']['vinos']; ?></li>
			<li class="boton" data_seccion="#licores"><?php echo $lexico['lateral']['licores']; ?></li>
			<li class="boton" data_seccion="#combinados"><?php echo $lexico['lateral']['combis']; ?></li>
			<li class="boton" data_seccion="#sin_alcohol"><?php echo $lexico['lateral']['sin_alcohol']; ?></li>
		</ul>
	</nav>

	<header></header>

	<section id="cerveza">
		<article class="foto">
			<a name="cerveza">
				<p id="espumoso"><?php echo $lexico['foto']['cerveza'] ?></p>
			</a>
			<!--
			<div class="cartel_lateral">			
				<?php //require_once BASE_FILE . 'php/plantillas/cartel_navidades.php' ?>
			</div>
			-->
		</article>

		<?php echo Tragona::mostrar_productos($cervezas, $lexico); ?>

	</section>

	<section id="vino">

		<article class="foto">
			<a name="vino"><p id="uva"><?php echo $lexico['foto']['vino'] ?></p></a>
		</article>	

		<?php echo Tragona::mostrar_productos($vinos, $lexico);	?>

	</section>	

	<section id="licores">

		<article class="foto">
			<a name="licor"><p id="aguardiente"><?php echo $lexico['foto']['licor'] ?></p></a>
		</article>

		<?php echo Tragona::mostrar_productos($licores, $lexico) ?>

	</section>

	<section id="combinados">

		<article class="foto">
			<a name="cubata"><p id="cuba_libre"><?php echo $lexico['foto']['combi'] ?></p></a>
		</article>

		<article class="contenido">

			<legend><?php echo $lexico[$seccion]['combi_claro'] ?> <sub>(6&euro;)</sub></legend>
			<div>
				<a href="<?php echo BASE_URL ?>media/imagenes/empujar/combi_claro.jpg" data-lightbox="example-1" data-title="<?php echo $lexico[$seccion]['combi_claro'] ?>">
					<img src="<?php echo BASE_URL ?>media/imagenes/empujar/minis/combi_claro.jpg" 
						 alt="<?php echo $lexico[$seccion]['combi_claro'] ?>" 
						 title="<?php echo $lexico[$seccion]['combi_claro'] ?>" 
						 class="imagen">
				</a>
				<p class="lista_izquierda">
					Seagram<br>
					Larios<br>
					Bacardi<br>
					Beefeater
				</p>
				<p class="lista_derecha">
					Stolichnaya<br>
					Dryzaguirre<br>
				</p>
			</div>

			<legend><?php echo $lexico[$seccion]['combi_oscuro'] ?> <sub>(6&euro;)</sub></legend>
			<div>
				<a href="<?php echo BASE_URL ?>media/imagenes/empujar/combi_oscu.jpg" data-lightbox="example-1" data-title="<?php echo $lexico[$seccion]['combi_oscuro'] ?>">
					<img src="<?php echo BASE_URL ?>media/imagenes/empujar/minis/combi_oscu.jpg" 
						 alt="<?php echo $lexico[$seccion]['combi_oscuro'] ?>" 
						 title="<?php echo $lexico[$seccion]['combi_oscuro'] ?>" 
						 class="imagen">
				</a>
				<p class="lista_izquierda">
					Brugal<br>
					Cacique<br>
					DYC
				</p>
				<p class="lista_derecha">
					JB<br>
					Ballantines
				</p>
			</div>

		</article>

	</section>

	<section id="sin_alcohol">

		<article class="foto">
			<a name="sin"><p id="sin_alc"><?php echo $lexico['foto']['sin'] ?></p></a>
		</article>

		<article class="contenido">

			<legend><?php echo $lexico[$seccion]['zum_org'] ?> <sub>(2.5&euro;)</sub></legend>
			<div>
				<a href="<?php echo BASE_URL ?>media/imagenes/empujar/zumos_org.jpg" data-lightbox="example-1" data-title="<?php echo $lexico[$seccion]['zum_org'] ?>">
					<img src="<?php echo BASE_URL ?>media/imagenes/empujar/minis/zumos_org.jpg" alt="<?php echo $lexico[$seccion]['zum_org'] ?>" title="<?php echo $lexico[$seccion]['zum_org'] ?>" class="imagen">
				</a>
				<p>
					<?php echo $lexico[$seccion]['mandarina'] ?><br>
					<?php echo $lexico[$seccion]['limonada'] ?><br>
					<?php echo $lexico[$seccion]['pera_pim'] ?><br>
					<?php echo $lexico[$seccion]['tom_was'] ?><br>
				</p>
			</div>

			<legend><?php echo $lexico[$seccion]['zum'] ?> <sub>(2&euro;)</sub></legend>
			<div>
				<a href="<?php echo BASE_URL ?>media/imagenes/empujar/zumo.jpg" data-lightbox="example-1" data-title="<?php echo $lexico[$seccion]['zum'] ?>">
					<img src="<?php echo BASE_URL ?>media/imagenes/empujar/minis/zumo.jpg" alt="<?php echo $lexico[$seccion]['zum'] ?>" title="<?php echo $lexico[$seccion]['zum'] ?>" class="imagen">
				</a>
				<p>
					<?php echo $lexico[$seccion]['melocoton'] ?><br>
					<?php echo $lexico[$seccion]['naranja'] ?><br>
					<?php echo $lexico[$seccion]['pina'] ?><br>
					<?php echo $lexico[$seccion]['tomate'] ?><br>
				</p>
			</div>
		
			<legend><?php echo $lexico[$seccion]['refresco'] ?> <sub>(2&euro;)</sub></legend>
			<div>
				<a href="<?php echo BASE_URL ?>media/imagenes/empujar/refresco.jpg" data-lightbox="example-1" data-title="<?php echo $lexico[$seccion]['refresco'] ?>">
					<img src="<?php echo BASE_URL ?>media/imagenes/empujar/minis/refresco.jpg" alt="<?php echo $lexico[$seccion]['refresco'] ?>" title="<?php echo $lexico[$seccion]['refresco'] ?>" class="imagen">
				</a>
				<p class="lista_izquierda">
					<?php echo $lexico[$seccion]['frixen'] ?><br>
					<?php echo $lexico[$seccion]['naranja'] ?><br>
					<?php echo $lexico[$seccion]['limon'] ?><br>
					<?php echo $lexico[$seccion]['tonica'] ?><br>
				</p>
				<p class="lista_derecha">
					<?php echo $lexico[$seccion]['mosto'] ?><br>
					<?php echo $lexico[$seccion]['aquarius'] ?><br>
					<?php echo $lexico[$seccion]['nestea'] ?><br>
				</p>
			</div>

		</article>

	</section>

	<?php require_once BASE_FILE . 'php/inc/footer.php' ?>

</div>
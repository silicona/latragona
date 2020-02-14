
<?php require_once BASE_FILE . 'php/inc/menu_movil.php'; ?>

<div id="contenedor" class="carta">

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
			<!--
		<article class="foto">
			<a name="cerveza">
				<p id="espumoso"><?php echo $lexico['foto']['cerveza'] ?></p>
			</a>
			<div class="cartel_lateral">			
				<?php //require_once BASE_FILE . 'php/plantillas/cartel_navidades.php' ?>
			</div>
		</article>
			-->

		<?php //echo Tragona::mostrar_productos($cervezas, $lexico); ?>
		<?php echo Tragona::devuelve_html_productos($cervezas, $lexico); ?>

	</section>

	<section id="vino">
		<!--
		<article class="foto">
			<a name="vino"><p id="uva"><?php //echo $lexico['foto']['vino'] ?></p></a>
		</article>	
		-->
		<?php //echo Tragona::mostrar_productos($vinos, $lexico);	?>
		<?php echo Tragona::devuelve_html_productos($vinos, $lexico);	?>

	</section>	

	<section id="licores">

		<!-- <article class="foto">
			<a name="licor"><p id="aguardiente"><?php //echo $lexico['foto']['licor'] ?></p></a>
		</article> -->

		<?php //echo Tragona::mostrar_productos($licores, $lexico) ?>
		<?php echo Tragona::devuelve_html_productos($licores, $lexico) ?>

	</section>

	<section id="combinados">

		<!-- <article class="foto">
			<a name="cubata"><p id="cuba_libre"><?php echo $lexico['foto']['combi'] ?></p></a>
		</article> -->

		<article class="contenido">

			<div class="mitad">

				<legend><?php echo $lexico[$seccion]['combi_claro'] ?></legend>

				<div class="articulo final">

					<div class="interior">

						<a class="img_lightbox" href="<?php echo BASE_URL ?>media/imagenes/empujar/combi_claro.jpg" data-lightbox="combinados" data-title="<?php echo $lexico[$seccion]['combi_claro'] ?>">
							<div class="div_imagen">
								<img src="<?php echo BASE_URL ?>media/imagenes/empujar/combi_claro.jpg"  alt="<?php echo $lexico[$seccion]['combi_claro'] ?>" title="<?php echo $lexico[$seccion]['combi_claro'] ?>" class="imagen">
							</div>
						</a>

						<p class="lista_izquierda">
							Seagram<br>
							Larios<br>
							Bacardi<br>
							Beefeater<br>
						<!-- </p>
						<p class="lista_derecha"> -->
							Stolichnaya<br>
							Dryzaguirre<br>
						</p>

					</div>

				</div>

			</div>

			<div class="mitad">

				<!-- <legend><?php echo $lexico[$seccion]['combi_oscuro'] ?> <sub>(6&euro;)</sub></legend> -->
				<legend><?php echo $lexico[$seccion]['combi_oscuro'] ?></legend>
				<div class="articulo final">

					<div class="interior">

						<a class="img_lightbox" href="<?php echo BASE_URL ?>media/imagenes/empujar/combi_oscu.jpg" data-lightbox="combinados" data-title="<?php echo $lexico[$seccion]['combi_oscuro'] ?>">

							<div class="div_imagen">
								<img src="<?php echo BASE_URL ?>media/imagenes/empujar/combi_oscu.jpg" alt="<?php echo $lexico[$seccion]['combi_oscuro'] ?>" title="<?php echo $lexico[$seccion]['combi_oscuro'] ?>" class="imagen">
							</div>

						</a>

						<p class="lista_izquierda">
							Brugal<br>
							Cacique<br>
							DYC<br>
						<!-- </p>
						<p class="lista_derecha"> -->
							JB<br>
							Ballantines
						</p>

					</div>

				</div>

			</div>

		</article>

	</section>

	<section id="sin_alcohol">

		<!-- <article class="foto">
			<a name="sin"><p id="sin_alc"><?php echo $lexico['foto']['sin'] ?></p></a>
		</article> -->

		<article class="contenido">
			
			<div class="mitad">

				<legend><?php echo $lexico[$seccion]['zum_org'] ?></legend>
				<!-- <legend><?php echo $lexico[$seccion]['zum_org'] ?> <sub>(2.5&euro;)</sub></legend> -->
				<div class="articulo final">

					<div class="interior">

						<a class="img_lightbox" href="<?php echo BASE_URL ?>media/imagenes/empujar/zumos_org.jpg" data-lightbox="sin" data-title="<?php echo $lexico[$seccion]['zum_org'] ?>">

							<div class="div_imagen zumos">
								<img src="<?php echo BASE_URL ?>media/imagenes/empujar/zumos_org.jpg" alt="<?php echo $lexico[$seccion]['zum_org'] ?>" title="<?php echo $lexico[$seccion]['zum_org'] ?>" class="imagen">
							</div>

						</a>

						<p>
							<?php echo $lexico[$seccion]['mandarina'] ?><br>
							<?php echo $lexico[$seccion]['limonada'] ?><br>
							<?php echo $lexico[$seccion]['pera_pim'] ?><br>
							<?php echo $lexico[$seccion]['tom_was'] ?><br>
						</p>

					</div>

				</div>

			</div>

			<div class="mitad">

				<legend><?php echo $lexico[$seccion]['zum'] ?></legend>
				<!-- <legend><?php echo $lexico[$seccion]['zum'] ?> <sub>(2&euro;)</sub></legend> -->
				<div class="articulo final">

					<div class="interior">

						<a class="img_lightbox" href="<?php echo BASE_URL ?>media/imagenes/empujar/zumo.jpg" data-lightbox="sin" data-title="<?php echo $lexico[$seccion]['zum'] ?>">

							<div class="div_imagen">
								<img src="<?php echo BASE_URL ?>media/imagenes/empujar/zumo.jpg" alt="<?php echo $lexico[$seccion]['zum'] ?>" title="<?php echo $lexico[$seccion]['zum'] ?>" class="imagen">
							</div>

						</a>

						<p>
							<?php echo $lexico[$seccion]['melocoton'] ?><br>
							<?php echo $lexico[$seccion]['naranja'] ?><br>
							<?php echo $lexico[$seccion]['pina'] ?><br>
							<?php echo $lexico[$seccion]['tomate'] ?><br>
						</p>

					</div>

				</div>

			</div>
		
			<legend><?php echo $lexico[$seccion]['refresco'] ?></legend>
			<!-- <legend><?php echo $lexico[$seccion]['refresco'] ?> <sub>(2&euro;)</sub></legend> -->
			<div class="articulo final">

				<div class="interior">

					<a class="img_lightbox" href="<?php echo BASE_URL ?>media/imagenes/empujar/refresco.jpg" data-lightbox="sin" data-title="<?php echo $lexico[$seccion]['refresco'] ?>">

						<div class="div_imagen">
							<img src="<?php echo BASE_URL ?>media/imagenes/empujar/refresco.jpg" alt="<?php echo $lexico[$seccion]['refresco'] ?>" title="<?php echo $lexico[$seccion]['refresco'] ?>" class="imagen">
						</div>
					</a>

					<p class="lista_doble">

						<span class="mitad">
							<?php echo $lexico[$seccion]['frixen'] ?><br>
							<?php echo $lexico[$seccion]['naranja'] ?><br>
							<?php echo $lexico[$seccion]['limon'] ?><br>
							<?php echo $lexico[$seccion]['tonica'] ?>
						</span>
					<!--</p>
					<p class="lista_derecha">-->
						<span class="mitad">
							<?php echo $lexico[$seccion]['mosto'] ?><br>
							<?php echo $lexico[$seccion]['aquarius'] ?><br>
							<?php echo $lexico[$seccion]['nestea'] ?><br>
						</span>

					</p>

				</div>
				
			</div>

		</article>

	</section>

	<?php require_once BASE_FILE . 'php/inc/footer.php' ?>

</div>
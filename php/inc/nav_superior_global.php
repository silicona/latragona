
<?php $nav_ir = $lexico['nav']['ir']; ?>

<nav class="superior">

	<ul>

		<li class="imagenes">
			<a href="<?php  echo BASE_URL . $idioma[0] ?>" alt="<?php echo $nav_ir . $lexico['nav']['inicio']; ?>" title="<?php echo $nav_ir . $lexico['nav']['inicio']; ?>">
				<img src="<?php  echo BASE_URL ?>media/logo_red.gif" alt="logo" title="La Tragona" class="logo">
			</a>

			<img src="<?php  echo BASE_URL ?>media/banderas/multi.jpg" alt="multibandera" title="Idiomas" class="movil bandera" id="multi">

			<a href="<?php  echo BASE_URL . $pagina ?>" alt="castellano" title="Web castellano">
				<img src="<?php  echo BASE_URL ?>media/banderas/espana.png" alt="España" title="Web castellano" class="desktop ipad bandera">
			</a>

			<a href="<?php  echo BASE_URL . 'en/' . $pagina ?>" alt="english" title="English web">
				<img src="<?php  echo BASE_URL ?>media/banderas/inglaterra.jpg" alt="Inglaterra" title="English web" class="desktop ipad bandera">
			</a>

			<a href="<?php  echo BASE_URL . 'fr/' . $pagina ?>" alt="français" title="Web français">
				<img src="<?php  echo BASE_URL ?>media/banderas/francia.png" alt="Francia" title="Web français" class="desktop ipad bandera">
			</a>

			<a href="<?php  echo BASE_URL . 'it/' . $pagina ?>" alt="italiano" title="Web italiana">
				<img src="<?php  echo BASE_URL ?>media/banderas/italia.jpg" alt="Italia" title="Web italiana" class="desktop ipad bandera">
			</a>
		</li>

		<li class='menu'>Menu <span class="ipad">La Tragona</span></li>

		<li class="desktop">
			<a href="<?php echo BASE_URL . $idioma[0] ?>contacta" alt="<?php echo $nav_ir . $lexico['nav']['contacto']; ?>" title="<?php echo $nav_ir . $lexico['nav']['contacto']; ?>">
				<?php echo $lexico['nav']['contacto']; ?>
			</a>
		</li>

		<li class="desktop">
			<a href="<?php echo BASE_URL . $idioma[0] ?>quienessomos" alt="<?php echo $nav_ir . $lexico['nav']['quienes']; ?>" title="<?php echo $nav_ir . $lexico['nav']['quienes']; ?>">
				<?php echo $lexico['nav']['quienes']; ?>
			</a>
		</li>

		<li class="desktop">
			<a href="<?php echo BASE_URL . $idioma[0] ?>dondeestamos" alt="<?php echo $nav_ir . $lexico['nav']['donde']; ?>" title="<?php echo $nav_ir . $lexico['nav']['donde']; ?>">
				<?php echo $lexico['nav']['donde']; ?>
			</a>
		</li>

		<li class="desktop">
			<a href="<?php echo BASE_URL . $idioma[0] ?>empujar" alt="<?php echo $nav_ir . $lexico['nav']['empujar']; ?>" title="<?php echo $nav_ir . $lexico['nav']['empujar']; ?>">
				<?php echo $lexico['nav']['empujar']; ?>
			</a>
		</li>
		
		<li class="desktop">
			<a href="<?php echo BASE_URL . $idioma[0] ?>tragar" alt="<?php echo $nav_ir . $lexico['nav']['tragar']; ?>" title="<?php echo $nav_ir . $lexico['nav']['tragar']; ?>">
				<?php echo $lexico['nav']['tragar']; ?>
			</a>
		</li>

	</ul>
</nav>
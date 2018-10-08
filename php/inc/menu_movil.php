
<?php $nav_ir = $lexico['nav']['ir']; ?>

<section id="menumovil" class="movil ipad">

	<ul>

		<!-- 			
		<li>
			<a href="<?php  echo BASE_URL . $idioma[0] ?>index" alt="<?php echo $nav_ir . $datos['nav']['inicio']; ?>" title="<?php echo $nav_ir . $datos['nav']['inicio']; ?>">
				<?php echo $datos['nav']['inicio']; ?>
			</a>
		</li>
		-->

		<li>
			<a href="<?php  echo BASE_URL . $idioma[0] ?>tragar" alt="<?php echo $nav_ir . $datos['nav']['tragar']; ?>" title="<?php echo $nav_ir . $datos['nav']['tragar']; ?>">
				<?php echo $lexico['nav']['tragar']; ?>
			</a>
		</li>

		<li>
			<a href="<?php  echo BASE_URL . $idioma[0] ?>empujar" alt="<?php echo $nav_ir . $datos['nav']['empujar']; ?>" title="<?php echo $nav_ir . $datos['nav']['empujar']; ?>">
				<?php echo $lexico['nav']['empujar']; ?>
			</a>
		</li>

		<li>
			<a href="<?php  echo BASE_URL . $idioma[0] ?>dondeestamos" alt="<?php echo $nav_ir . $datos['nav']['donde']; ?>" title="<?php echo $nav_ir . $datos['nav']['donde']; ?>">
				<?php echo $lexico['nav']['donde']; ?>
			</a>
		</li>

		<li>
			<a href="<?php  echo BASE_URL . $idioma[0] ?>quienessomos" alt="<?php echo $nav_ir . $datos['nav']['quienes']; ?>" title="<?php echo $nav_ir . $datos['nav']['quienes']; ?>">
				<?php echo $lexico['nav']['quienes']; ?>
			</a>
		</li>

		<li>
			<a href="<?php  echo BASE_URL . $idioma[0] ?>contacta" alt="<?php echo $nav_ir . $datos['nav']['contacto']; ?>" title="<?php echo $nav_ir . $datos['nav']['contacto']; ?>">
				<?php echo $lexico['nav']['contacto']; ?>
			</a>
		</li>

	</ul>

</section>

<section id="menuidiomas" class="movil">

	<ul>

		<li>
			<a href="<?php  echo BASE_URL . $pagina ?>" alt="castellano" title="Web castellano">
				<img src="<?php  echo BASE_URL ?>media/banderas/espana.png" alt="España" title="España"><span>Castellano</span>
			</a>
		</li>
		
		<li>
			<a href="<?php  echo BASE_URL . 'en/' . $pagina ?>" alt="english" title="English web">
				<img src="<?php  echo BASE_URL ?>media/banderas/inglaterra.jpg" alt="Inglaterra" title="Inglaterra"><span>English</span>
			</a>
		</li>

		<li>
			<a href="<?php  echo BASE_URL . 'fr/' . $pagina ?>" alt="français" title="Web français">
				<img src="<?php  echo BASE_URL ?>media/banderas/francia.png" alt="Francia" title="Francia"><span>Français</span>
			</a>
		</li>

		<li>
			<a href="<?php  echo BASE_URL . 'it/' . $pagina ?>" alt="italiano" title="Web italiana">
				<img src="<?php  echo BASE_URL ?>media/banderas/italia.jpg" alt="Italia" title="Italia"><span>Italiano</span>
			</a>
		</li>

	</ul>

</section>
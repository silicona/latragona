

<?php require_once BASE_FILE . 'php/inc/menu_movil.php' ?>

<div id="contenedor" class="carta">

	<?php require_once BASE_FILE . 'php/inc/nav_superior_global.php' ?>

	<nav id="lateral">
		<ul>
			<li><a data_seccion="#aviso_pan" class="boton"><?php echo $lexico['lateral']['tostas']; ?></a></li>
			<li><a data_seccion="#aviso_rac" class="boton"><?php echo $lexico['lateral']['raciones']; ?></a></li>
			<li><a data_seccion="#reservas" class="boton"><?php echo $lexico['lateral']['reservas']; ?></a></li>
		</ul>
	</nav>

	<header></header>

	<section id="tosta">
		<!--
		<article class="foto">
			<a name="tosta"><p id="tos"><?php echo $lexico['lateral']['tostas']; ?></p></a>
			
			<div class="cartel_lateral"><?php //require_once BASE_FILE . 'php/plantillas/cartel_navidades.php' ?></div>
		</article>	
		-->

		<?php echo Tragona::mostrar_productos($tostas, $lexico); ?>

	</section>

	<section id="racion">

		<!-- <article class="foto">
			<a name="racion"><p id="rac"><?php echo $lexico['lateral']['raciones']; ?></p></a>
		</article> -->	

		<?php echo Tragona::mostrar_productos($raciones, $lexico); ?>

	</section>	
	
	<section id="reservas">

		<!-- <article class="foto">
			<a name="reservas"><p id="reser"><?php echo $lexico['foto']['reservas']; ?></p></a>
		</article> -->

		<article class="contenido">

			<legend class="movil"><?php echo $lexico['lateral']['reservas']; ?></legend>
			
			<p class="texto_reserva mitad">
				<?php echo $lexico['form']['reservas']; ?> <img src="<?php echo BASE_URL ?>media/iconos/wasap.png" alt="wasap" title="Envianos un wasap" id="wasap">
			<!--</p>

			<p class="mitad">-->
				<br>
				<?php echo $lexico['form']['llevar']; ?>
			</p>

			<form id="form" class="form_reserva mitad">

				<input type="hidden" name="tipo" value="Reserva en La Tragona">

				<input type="text" data_error="<?php echo $lexico['form']['error_nombre']; ?>" name="nombre" id="nombre" size="25" onkeypress="return permite(event, 'car');">
				<label for="nombre" class="impar"><?php echo $lexico['form']['nombre']; ?></label>

				<input type="text" name="telefono" id="telefono" data_error="<?php echo $lexico['form']['error_telefono']; ?>" value="(+34)" size="25" onkeypress="return permite(event, 'num');">
				<label for="telefono" class="impar"><?php echo $lexico['form']['telefono']; ?></label>

				<input type="text" name="fecha" id="fecha" class="tcal" placeholder="<?php echo $lexico['form']['fecha_place']; ?>">
				<label for="fecha"><?php echo $lexico['form']['fecha']; ?></label>

				<label for="mensaje" id="etiquetaTexto"><?php echo $lexico['form']['mensaje']; ?></label>
				<textarea id="mensaje" name="mensaje" columns="50" rows="8" data_error="<?php echo $lexico['form']['error_mensaje']; ?>"></textarea>

				<input type="button" class="boton" name="enviar" id="enviar" value="<?php echo $lexico['form']['boton']; ?>">
				
				<div id="respuesta_form"></div>						

			</form>

		</article>

	</section>

	<?php require_once BASE_FILE . 'php/inc/footer.php' ?>

</div>

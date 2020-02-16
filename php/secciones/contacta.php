
<?php 

	require_once BASE_FILE . 'php/inc/menu_movil.php';

	require_once BASE_FILE . 'php/inc/portada_imagen.php';

?>

<div id="contenedor">

	<?php require_once BASE_FILE . 'php/inc/nav_superior_global.php'; ?>

	<h1><?php echo $lexico[$seccion]['h1']; ?></h1>

	<section class="contenido">

		<article class="imagen_lateral">

			<img src="<?php echo BASE_URL ?>media/imagenes/venus.jpg" alt="Dionaea Muscipula" title="Venus atrapamosca, Dionaea Muscipula">		
		
		</article>

		<article class="texto">

			<p>
				<?php echo $lexico[$seccion]['p1']; ?>
				<img src="<?php echo BASE_URL ?>media/iconos/wasap.png" alt="wasap" title="Envianos un wasap" class="wasap">.
				<br><br>
				<span class="texto_planta"><?php echo $lexico[$seccion]['p12']; ?></span>
			</p>

		</article>

	</section>

	<section class="seccion_formulario">

		<article class="formulario">

			<a name="formulario"></a>

			<form id="form" class="form_contacto">

				<input type="hidden" name="tipo" value="Comentarios para La Tragona">

				<input type="text" data_error="<?php echo $lexico['form']['error_nombre']; ?>" name="nombre" id="nombre" size="25" onkeypress="return permite(event, 'char');">

				<label for="nombre"><?php echo $lexico['form']['nombre']; ?></label>

				<input type="email" name="email" id="email" data_error="<?php echo $lexico['form']['error_email']; ?>" placeholder="<?php echo $lexico['form']['email_place']; ?>" size="25" onkeypress="return permite(event, 'num_char');">

				<label for="email"><?php echo $lexico['form']['email']; ?></label>

				
				<label for="mensaje" class="etiqueta_texto"><?php echo $lexico['form']['comentario']; ?></label>

				<textarea id="mensaje" name="mensaje" columns="50" rows="8" data_error="<?php echo $lexico['form']['error_mensaje']; ?>" onkeypress="return permite(event, 'num_char');"></textarea>

				<input type="button" class="boton" name="enviar" id="enviar" value="<?php echo $lexico['form']['boton']; ?>">
				
				<div id="respuesta_form" class="res_form"></div>						

			</form>

		</article>

	</section>

	<?php 
		require_once BASE_FILE . 'php/inc/rrss.php';

		require_once BASE_FILE . 'php/inc/footer.php'
	?>

</div>


<?php
	if( $idioma != 'es' ){ header('inicio'); }

	$despensa = array(
		'cervezas' => $cervezas,
		'vinos'	   => $vinos,
		'licores'  => $licores,
		'tostas'   => $tostas,
		'raciones' => $raciones
	);
?>

<?php require_once BASE_FILE . 'php/inc/menu_movil.php'; ?>

<div id="contenedor" class="carta">

	<?php require_once BASE_FILE . 'php/inc/nav_superior_global.php' ?>
	<?php /*
	<nav id="lateral">
		<ul>
			<li class="boton" data_seccion="#cerveza"><?php echo $lexico['lateral']['cervezas']; ?></li>
			<li class="boton" data_seccion="#vino"><?php echo $lexico['lateral']['vinos']; ?></li>
			<li class="boton" data_seccion="#licores"><?php echo $lexico['lateral']['licores']; ?></li>
			<li class="boton" data_seccion="#combinados"><?php echo $lexico['lateral']['combis']; ?></li>
			<li class="boton" data_seccion="#sin_alcohol"><?php echo $lexico['lateral']['sin_alcohol']; ?></li>
		</ul>
	</nav>
	*/ ?>
	<header>
		
	</header>

	<h1>Despensa</h1>

	<section id="">
		
		<?php echo Tragona::mostrar_despensa($despensa); ?>

	</section>

	<?php require_once BASE_FILE . 'php/inc/footer.php' ?>

</div>
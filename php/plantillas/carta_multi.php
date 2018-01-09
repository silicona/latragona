<div class="camera-wrap pasarela" id="semana">
	<div data-src=<?php echo "\"../media/imagenes/tragar/menu/".$martes->imagen."\"" ?> data-thumb=<?php echo "\"../media/imagenes/tragar/menu/minis/".$martes->imagen."\"" ?>>
		<div class="camera_caption">
			<?= $datos["dia"]['martes'] ?>: <?= $martes->nombre ?>
		</div>
	</div>
	<div data-src=<?php echo "\"../media/imagenes/tragar/menu/".$miercoles->imagen."\"" ?> data-thumb=<?php echo "\"../media/imagenes/tragar/menu/minis/".$miercoles->imagen."\"" ?>>
		<div class="camera_caption">
			<?= $datos["dia"]['miercoles'] ?>: <?= $miercoles->nombre ?>
		</div>
	</div>
	<div data-src=<?php echo "\"../media/imagenes/tragar/menu/".$jueves->imagen."\"" ?> data-thumb=<?php echo "\"../media/imagenes/tragar/menu/minis/".$jueves->imagen."\"" ?>>
		<div class="camera_caption">
			<?= $datos["dia"]['jueves'] ?>: <?= $jueves->nombre ?>
		</div>
	</div>
	<div data-src=<?php echo "\"../media/imagenes/tragar/menu/".$viernes->imagen."\"" ?> data-thumb=<?php echo "\"../media/imagenes/tragar/menu/minis/".$viernes->imagen."\"" ?>>
		<div class="camera_caption">
			<?= $datos["dia"]['viernes'] ?>: <?= $viernes->nombre ?>
		</div>
	</div>
</div>

<div class="camera-wrap pasarela" id="proxima_semana">
	<div data-src=<?php echo "\"../media/imagenes/tragar/menu/".$prox_martes->imagen."\"" ?> data-thumb=<?php echo "\"../media/imagenes/tragar/menu/minis/".$prox_martes->imagen."\"" ?>>
		<div class="camera_caption">
			<?= $datos["dia"]['martes'] ?>: <?= $prox_martes->nombre ?>
		</div>
	</div>
	<div data-src=<?php echo "\"../media/imagenes/tragar/menu/".$prox_miercoles->imagen."\"" ?> data-thumb=<?php echo "\"../media/imagenes/tragar/menu/minis/".$prox_miercoles->imagen."\"" ?>>
		<div class="camera_caption">
			<?= $datos["dia"]['miercoles'] ?>: <?= $prox_miercoles->nombre ?>
		</div>						
	</div>
	<div data-src=<?php echo "\"../media/imagenes/tragar/menu/".$prox_jueves->imagen."\"" ?> data-thumb=<?php echo "\"../media/imagenes/tragar/menu/minis/".$prox_jueves->imagen."\"" ?>>
		<div class="camera_caption">
			<?= $datos["dia"]['jueves'] ?>: <?= $prox_jueves->nombre ?>
		</div>						
	</div>
	<div data-src=<?php echo "\"../media/imagenes/tragar/menu/".$prox_viernes->imagen."\"" ?> data-thumb=<?php echo "\"../media/imagenes/tragar/menu/minis/".$prox_viernes->imagen."\"" ?>>
		<div class="camera_caption">
			<?= $datos["dia"]['viernes'] ?>: <?= $prox_viernes->nombre ?>
		</div>						
	</div>
</div>
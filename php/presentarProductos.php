<?php
	$i18 = isset($inter) ? $i18 = "../" : $i18 = "";

	include $i18.'php/bodega.php';
	include $i18.'php/despensa.php';
	
	function formateartitulo($nombre, $objeto = ['nombre' => 'nil', "tipo" => 'nil']){
		switch($nombre){
			case "Cervezas":
				return "<legend>".$objeto['nombre']." <span class='desktop'>(".$GLOBALS['titulos'][$objeto['tipo']].")</span></legend>";
				break;
			// Vinos
			case "7 Puntas":
				return "<legend>".$GLOBALS['titulos']['tinto']."</legend>";
				break;
			case "Albariño":
				return "<legend>".$GLOBALS['titulos']['blanco']."</legend>";
				break;
			case "Vermouth Miro":
				return "<legend>".$GLOBALS['titulos']['vermut']."</legend>";
				break;
			// Licores
			case "Orujo de hierbas":
			  return "<legend>".$GLOBALS['titulos']['licor']."</legend>";
			  break;
			// Comida
			case "Tostas":
				return "<legend class='movil'>".$GLOBALS['titulos']['tostas']."</legend><h4 id='aviso_pan'>".$GLOBALS['titulos']['pan_sin']."</h4>";
				break;
			case "Raciones":
				return "<legend class='movil'>".$GLOBALS['titulos']['raciones']."</legend>";
				break;
			default:
				return "";
				break;
		}
	}

	function formatearPrecio($datos, $material = ''){
		$resultado = "";
		foreach($datos as $envase => $precio){
			if($material == "Cerveza"){	$resultado .= "<li>".$GLOBALS['producto'][$envase]." - ".$precio."<sub>&euro;</sub></li>"; }

			elseif($material == "Comida"){ $resultado .= $precio."<sub>&euro;</sub>";	}
			
			else { $resultado .= $GLOBALS['producto'][$envase].": ".$precio."<sub>&euro;</sub> ";	}
		}
		return $resultado;
	}

	function formatearCerveza($producto){
		$prod = "<a href='".$GLOBALS['i18']."media/imagenes/empujar/".$producto['imagen']."' data-lightbox='example-1' data-title='".$producto['nombre']."'>";
		$prod .= "<img src='".$GLOBALS['i18']."media/imagenes/empujar/minis/".$producto['imagen']."' class='imagen' alt='".$producto['nombre']."' title='".$producto['nombre']."'>";
		$prod .= "</a><ul>".formatearPrecio($producto['precio'], 'Cerveza')."</ul></div>";
		return $prod;
	}

	function formatearVino($producto){
		$nombre = $producto['nombre'];
			$prod = "<a href='".$GLOBALS['i18']."media/imagenes/empujar/".$producto['imagen']."' data-lightbox='example-1' data-title='$nombre'>";
			$prod .= "<img src='".$GLOBALS['i18']."media/imagenes/empujar/minis/".$producto['imagen']."' class='imagen' alt='$nombre' title='$nombre'>";
			$prod .= "</a>";

			$prod .= "<p>$nombre - ".formatearPrecio($producto['precio'])."<br>";

			$prod .= "<a data-fancybox data-src='".$GLOBALS['i18']."php/guia.php?vino=".$producto['descripcion']."' data-type='iframe' href='javascript:;'>".$GLOBALS['producto']['descripcion']."</a>";
			$prod .= "</p></div>";
			return $prod;
	}

	function formatearLicor($producto){
		$licor = $GLOBALS['bebidas'][$producto['nombre']];
		$prod = "<a href='".$GLOBALS['i18']."media/imagenes/empujar/".$producto['imagen']."' data-lightbox='example-1' data-title='$licor'>";
		$prod .= "<img src='".$GLOBALS['i18']."media/imagenes/empujar/minis/".$producto['imagen']."' alt='$licor' title='$licor' class='imagen'>";

		$prod .= "</a>";
		$prod .= "<p>$licor<br>&emsp;( ".formatearPrecio($producto['precio']).")</p></div>";
		return $prod;
	}

	function formatearComida($producto, $tosta){
		if($tosta){
		  $light = "tostas";
		  $title= $GLOBALS['tosta'];
		}
		else {
			$light = 'raciones';	
			$title = "";
		}

		$nombre = $GLOBALS['nombres'][$producto['descripcion']];

		$prod = "<a href='".$GLOBALS['i18']."media/imagenes/tragar/".$producto['imagen']."' data-lightbox='$light' data-title='$title$nombre'>";
		$prod .= "<img src='".$GLOBALS['i18']."media/imagenes/tragar/minis/".$producto['imagen']."' class='imagen' alt='$title$nombre' title='$title$nombre'>";
		$prod .= "</a>";
		$prod .= "<p>$nombre (".formatearPrecio($producto['precio'], 'Comida').")<br>";
		$prod .= "<span class='ingredientes'>";
		$prod .= "&emsp;<a data-fancybox data-src='".$GLOBALS['i18']."php/ingredientes.php?comida=".$producto['descripcion']."' data-type='iframe' href='javascript:;'>".$GLOBALS['producto']['ver']."</a><br></span>";
		$prod .= "</p>";
		$prod .= asignarAlergenos($producto['alergenos'])."</div>";
		return $prod;
	}

	function asignarAlergenos($lista){
		$titulo = $GLOBALS['producto']['alergeno'];
		$aler = "<span class='alergeno'>";
		if(!empty($lista)){
			$aler .= "<span class='nombre'>$titulo:</span>";
			foreach($lista as $alergeno){
				$aler .= "<img src='".$GLOBALS['i18']."media/alergeno/".$alergeno.".png' alt='".$alergeno."' title='".$GLOBALS['alergeno'][$alergeno]."'>";
			}
		} 
		else {
			$aler .= "<span class='nombre sin_alergeno'>$titulo: ".$GLOBALS['producto']['sin_aler']."</span>";
		}
		$aler .= "</span>";
		return $aler;
	}

	function mostrarNovedad($producto){
		if(isset($producto['novedad'])){
			return "<div class='articulo_novedad'><div class='novedad'><div class='cinta_verde'>Novedad</div></div>";
		}
		return "<div>";
	}

	function mostrarProductos($listado){

		$lista = "<article class='contenido'>";
		$material = get_class($listado);

			if($material == "Tostas"){ $lista .= formatearTitulo('Tostas');	}
			
			elseif($material == "Raciones") {	$lista .= formatearTitulo('Raciones'); }

		foreach($listado as $producto){
			if($material == "Cervezas") {	$lista .= formatearTitulo('Cervezas', $producto);	}
			
			else { $lista .= formatearTitulo($producto['nombre']); }

			$lista .= mostrarNovedad($producto);

 			switch($material){
				case "Cervezas":
					$lista .= formatearCerveza($producto);
					break;
				case "Vinos":	
					$lista .= formatearVino($producto);
					break;
				case "Licores":
					$lista .= formatearLicor($producto);
					break;
				case "Tostas":
					$lista .= formatearComida($producto, true);
					break;
				case "Raciones":
					$lista .= formatearComida($producto);
					break;
 				default:
					break;
			}
		}

		$lista .= "</article>";	
		return $lista;
	}

?>
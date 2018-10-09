<?php

require_once('../php/lib/spyc/spyc.php');

function nombrarIdioma($iniciales){

	switch($iniciales){
		case "es":
			return "Castellano";
		case "fr":
			return "Frances";
		case "it":
			return "Italiano";
		case "en":
		  return "Ingles";
		case "de":
		 	return "Aleman";
	}
}


function extraerNombres($idioma){

	$datos = Spyc::YAMLLoad('../php/idiomas/lexico_'.$idioma.'.yml');
	$idioma_items = array_keys($datos);
	$resultado = [];

	foreach( $datos as $llave => $valor ){

		$seccion = [];

		foreach( $valor as $nombre => $traduccion ){

			array_push($seccion, $nombre);
		}

		array_push($resultado, $seccion);
	}
	
	// $resultado es un array numerico unidimensional con los nombres/propiedades del objeto
	return array($resultado, $idioma_items);
}


function compararYaml($inicial_idioma, $inicial_otro_idioma){

	$idioma_inicial = extraerNombres($inicial_idioma);
	$otro_idioma = extraerNombres($inicial_otro_idioma)[0];
	
	$idioma = $idioma_inicial[0];
	$objetos = $idioma_inicial[1];


	$respuesta_yaml = [];
	for( $x = 0; $x < count($idioma); $x++ ){

		if( $idioma[$x] == $otro_idioma[$x] ){

			$checkeo = "{$objetos[$x]}: Iguales";
			array_push($respuesta_yaml, $checkeo);

		} else {

			//if(count($idioma) >= count($otro_idioma)){
			$texto = ["Error en $objetos[$x]: "];
			$comparacion = array_diff_assoc($idioma[$x],$otro_idioma[$x]);

			foreach( $comparacion as $index => $valor ){

				array_push($texto, "Linea $index: $valor");
			}

			$texto = implode("<br>&nbsp;&nbsp;", $texto);
			//}
			//else {
			//	$nombre = nombrarIdioma($inicial_idioma);
			//	$texto = "Al $nombre le falta {$objetos[$x]}";
			//}

			array_push($respuesta_yaml, $texto);
		}
	}

	$respuesta_yaml = implode('<br>', $respuesta_yaml);

	return $respuesta_yaml;
}

$test = "0";

if( isset($_POST['comprobar']) ){

 	$idioma1 = $_POST['idioma1'];
 	$idioma2 = $_POST['idioma2'];
 	$idio1 = nombrarIdioma($idioma1);
 	$idio2 = nombrarIdioma($idioma2);

 	$titulo = "Haciendo comprobacion entre $idio1 y $idio2";

 	if( $resultado = compararYaml($idioma1, $idioma2) ){

 		$test = "OK";
 	}
}


?>



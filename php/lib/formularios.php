<?php

// Elementos de Formulario

function devuelve_icono($nombre){
	
	$icono = false;
	$ico = '';

	if( $nombre != '' ){

		if( $nombre == 'aceptar' ){	$ico = 'far fa-thumbs-up'; /*$ico = 'far fa-thumbs-up';*/ }

		if( $nombre == 'aviso' ){	$ico = 'fas fa-exclamation-circle'; /*$ico = 'fa fa-exclamation-circle';*/ }

		if( $nombre == 'anadir' ){ 	$ico = 'fas fa-pencil-alt'; /*$ico = 'fa fa-pencil';*/ }

		if( $nombre == 'bano' ){ $ico = 'fas fa-bath'; /*$ico = 'fa fa-bath';*/ }

		if( $nombre == 'bloqueado' ){ $ico = 'fas fa-lock'; /*$ico = 'fa fa-lock';*/ }

		if( $nombre == 'calculadora' ){ $ico = 'fas fa-calculator'; /*$ico = 'fa fa-calculator';*/ }

		if( $nombre == 'cerrar' ){ 	$ico = 'fas fa-times'; /*$ico = 'fa fa-times';*/ }

		if( $nombre == 'cp' ){ 		$ico = 'far fa-envelope'; /*$ico = 'fa fa-envelope';*/ }

		if( $nombre == 'desbloqueado' ){ $ico = 'fas fa-unlock-alt'; /*$ico = 'fa fa-unlock';*/ }

		if( $nombre == 'descargar' ){ $ico = 'fas fa-download'; /*$ico = 'fa fa-download';*/ }

		if( $nombre == 'direccion' ){ $ico = 'fas fa-home'; /*$ico = 'fa fa-home';*/ }
		
		if( $nombre == 'dni' ){ 	$ico = 'far fa-address-card'; /*$ico = 'fa fa-address-card';*/ }

		if( $nombre == 'elegir' ){ 	$ico = 'fas fa-plus'; /*$ico = 'fa fa-plus';*/ }

		if( $nombre == 'eliminar' ){ $ico = 'far fa-trash-alt'; /*$ico = 'fa fa-trash-o';*/ }

		if( $nombre == 'email' ){ 	$ico = 'fas fa-at'; /*$ico = 'fa fa-envelope';*/ }

		if( $nombre == 'enlace' ){ 	$ico = 'fas fa-external-link-alt'; /*$ico = 'fa fa-external-link-alt';*/ }
		
		if( $nombre == 'exito' ){ 	$ico = 'fas fa-check'; /*$ico = 'fa fa-check';*/ }

		if( $nombre == 'fecha' ){ 	$ico = 'far fa-calendar-alt'; /*$ico = 'fa fa-calendar';*/ }

		if( $nombre == 'guardar' ){ $ico = 'far fa-save'; /*$ico = 'fa fa-save';*/ }

		if( $nombre == 'garage' ){ $ico = 'fas fa-car'; /*$ico = 'fa fa-car';*/ }

		if( $nombre == 'grafico' ){ $ico = 'far fa-chart-bar'; /*$ico = 'fa fa-bar-chart';*/ }

		if( $nombre == 'habitacion' ){ $ico = 'fas fa-bed'; /*$ico = 'fa fa-hotel';*/ }

		if( $nombre == 'hora' ){ 	$ico = 'far fa-clock'; /*$ico = 'fa fa-clock-o';*/ }

		if( $nombre == 'importe' ){ $ico = 'fas fa-euro-sign'; /*$ico = 'fa fa-euro';*/ }

		if( $nombre == 'localidad' ){ $ico = 'fas fa-city'; /*$ico = 'fa fa-building-o';*/ }

		if( $nombre == 'llamada' ){ $ico = 'fas fa-phone-volumne'; /*$ico = 'fa fa-phone';*/}

		if( $nombre == 'mapa' ){ 	$ico = 'far fa-map'; /*$ico = 'fa fa-map-o';*/ }

		if( $nombre == 'oferta' ){ 	$ico = 'fas fa-money-bill-wave'; /*$ico = 'fa fa-money';*/ }

		if( $nombre == 'operacion' ){ $ico = 'far fa-handshake'; /*$ico = 'farfa-handshake-o';*/ }

		if( $nombre == 'password' ){ 	$ico = 'fas fa-key'; /*$ico = 'fa fa-key';*/ }

		if( $nombre == 'porcentaje' ){ $ico = 'fas fa-percent'; /*$ico = 'fa fa-percent';*/ }

		if( $nombre == 'propiedad' ){ $ico = 'fas fa-home'; /*$ico = 'fa fa-home';*/ }

		if( $nombre == 'rechazar' ){ $ico = 'far fa-thumbs-down'; /*$ico = 'fa fa-thumbs-down';*/ }

		if( $nombre == 'refrescar' ){ $ico = 'fa fa-sync'; /*ico = 'fa fa-refresh';*/ }

		if( $nombre == 'soporte' ){ $ico = 'fas fa-weixin'; /*$ico = 'fa fa-wechat';*/ }

		if( $nombre == 'telefono' ){ $ico = 'fas fa-phone-alt'; /*$ico = 'fa fa-phone';*/ }

		if( $nombre == 'todos' ){ 	$ico = 'fas fa-globe-europe'; /*$ico = 'fa fa-global';*/ }

		if( $nombre == 'usuario' ){ $ico = 'fas fa-user'; /*$ico = 'fa fa-user';*/ }

		if( $nombre == 'ver' ){ 	$ico = 'far fa-eye'; /*$ico = 'fa fa-eye';*/ }

		if( $nombre == 'visita' ){ 	$ico = 'fas fa-key'; /*$ico = 'fa fa-key';*/ }

		if( $nombre == 'volver' ){ 	$ico = 'fas fa-arrow-left'; /*$ico = 'fa fa-arrow-left';*/ }

		//icono = '<i class="fa fa-' + ico +'"></i> ';
		//$icono = '<i class="fa fa-' . $ico . ' fa-lg"></i> ';

	}

	return $ico;
}

/* Test */
function form_boton($arr_dat){

	$id           = isset($arr_dat['id']) ? $arr_dat['id'] 			: '';
	$label        = isset($arr_dat['label']) ? $arr_dat['label'] 	: '';
	//$valor        = isset($arr_dat['valor']) ? $arr_dat['valor'] 	: '';
	//$placeholder  = isset($arr_dat['placeholder']) ? $arr_dat['placeholder'] : '';
	$ayuda        = isset($arr_dat['ayuda']) ? $arr_dat['ayuda'] 	: '';
	$disabled     = isset($arr_dat['disabled']) ? $arr_dat['disabled'] : '';
	$clase        = isset($arr_dat['clase']) ? $arr_dat['clase'] 	: '';
	$icono        = isset($arr_dat['icono']) ? $arr_dat['icono'] 	: '';
	$title        = isset($arr_dat['title']) ? $arr_dat['title'] 	: '';
	$href         = isset($arr_dat['href']) ? $arr_dat['href'] 	: '';
	$target 	  = isset($arr_dat['target']) ? $arr_dat['target'] 	: '';
	$input_group  = isset($arr_dat['input_group']) ? $arr_dat['input_group'] : '';
	$atributos    = isset($arr_dat['atributos']) ? $arr_dat['atributos'] : array();
	$col_bs_group = isset($arr_dat['col_bs_group']) ? $arr_dat['col_bs_group'] : '';
	$col_bs_label = isset($arr_dat['col_bs_label']) ? $arr_dat['col_bs_label'] : '';
	$col_bs_input = isset($arr_dat['col_bs_input']) ? $arr_dat['col_bs_input'] : '';
	$boton_info   = '';
	$html_boton   = '';
	$tag_name     = 'button';
		
	if( $ayuda !== '' ){

		$boton_info = '<span class="badge badge-info ayuda"><i class="i_ayuda fa fa-question" data-toggle="tooltip" title="' . $ayuda . '"></i></span> ';
	}

	if( $disabled !== ''){

		$disabled = ' disabled ';
	}

	if( $href !== '' ){

		$tag_name = 'a';
		$href = ' href="' . $href . '" target="' . $target . '" ';
	}

	if( $icono !== '' ){

		$ico = devuelve_icono($icono);

		$icono = '<i class="' . $ico . ' fa-lg"></i> ';
		/*
		$ico = '';

		if( $icono == 'aceptar' ){	$ico = 'thumbs-up'; }

		if( $icono == 'aviso' ){	$ico = 'exclamation-circle'; }

		if( $icono == 'anadir' ){ 	$ico = 'pencil'; }

		if( $icono == 'bloqueado' ){ 	$ico = 'lock'; }

		if( $icono == 'calculadora' ){ 	$ico = 'calculator'; }

		if( $icono == 'cerrar' ){ 	$ico = 'times'; }

		if( $icono == 'desbloqueado' ){ $ico = 'unlock'; }

		if( $icono == 'descargar' ){ 	$ico = 'download'; }

		if( $icono == 'elegir' ){ 	$ico = 'plus'; }

		if( $icono == 'eliminar' ){ $ico = 'trash-o'; }

		if( $icono == 'enlace' ){ 	$ico = 'external-link'; }

		if( $icono == 'guardar' ){ 	$ico = 'save'; }

		if( $icono == 'grafico' ){ 	$ico = 'bar-chart'; }

		if( $icono == 'llamada' ){ 	$ico = 'phone'; }

		if( $icono == 'oferta' ){ 	$ico = 'money'; }

		if( $icono == 'operacion' ){ 	$ico = 'handshake-o'; }

		if( $icono == 'propiedad' ){ 	$ico = 'home'; }

		if( $icono == 'rechazar' ){ $ico = 'thumbs-down'; }

		if( $icono == 'refrescar' ){ 	$ico = 'refresh'; }

		if( $icono == 'soporte' ){  $ico = 'wechat'; }

		if( $icono == 'todos' ){ 	$ico = 'global'; }

		if( $icono == 'usuario' ){ 	$ico = 'user'; }

		if( $icono == 'ver' ){ 		$ico = 'eye'; }

		if( $icono == 'visita' ){ 	$ico = 'key'; }

		if( $icono == 'volver' ){ 	$ico = 'arrow-left'; }
		
		icono = '<i class="fa fa-' + ico +'"></i> ';
		*/
	}

	if( $title !== '' ){

		$title = ' title="' . $title . '" ';
	}

	$str_atributos = ' ' . array_a_string($atributos) . ' ';

	$html_boton = '<' . $tag_name . $href . $title . $str_atributos . $disabled . 'class="btn ' . $clase . '" id="' . $id . '">';
	$html_boton .= $icono . $label;
	$html_boton .= '</' . $tag_name . '>';

	$html = '';
	if( $input_group === '' || $input_group === 'true' ){

		$html = implode('', array(
			'<div class="form-group div_' . $id . ' ' . $col_bs_group . '">',
				'<div class="input-group ' . $col_bs_input . '">' . $html_boton . '</div>',
			'</div>'
		) );
	
	} else {

		$html = $html_boton;
	}

	return $html;
}

/* Test */
function form_check($arr_dat){

	$label        = isset($arr_dat['label']) ? $arr_dat['label'] : '';
	$id           = isset($arr_dat['id']) ? $arr_dat['id'] 		: '';
	$checked      = isset($arr_dat['checked']) ? $arr_dat['checked'] : '';
	/* ayuda          = obj_datos.ayuda || '', */
	$disabled     = isset($arr_dat['disabled']) ? $arr_dat['disabled'] : '';
	$atributos    = isset($arr_dat['atributos']) ? $arr_dat['atributos'] : array();
	$clase_grupo  = isset($arr_dat['clase_grupo']) ? $arr_dat['clase_grupo'] : '';
	$clase        = isset($arr_dat['clase']) ? $arr_dat['clase'] : '';
	$col_bs_label = isset($arr_dat['col_bs_label']) ? $arr_dat['col_bs_label'] : '';
	$col_bs_input = isset($arr_dat['col_bs_input']) ? $arr_dat['col_bs_input'] : '';	// col-xx / pestana / circulo?
	$col_bs_group = isset($arr_dat['col_bs_group']) ? $arr_dat['col_bs_group'] : '';
	$tipo 		  = isset($arr_dat['tipo']) ? $arr_dat['tipo'] : '';					// "" / circulo / pestana?
	$title        = isset($arr_dat['title']) ? $arr_dat['title'] : '';
	$valor 		  = isset($arr_dat['valor']) ? $arr_dat['valor'] : '';
	$str_checked  = '';
	$boton_info   = '';

	//console.log(check);
	if( $disabled != '' ){ $disabled .=  ' '; }

	//if( $checked != '' ){ $checked = 'checked="checked" '; }
	if( $checked == 1 || $checked == "checked" ){ $str_checked = 'checked="checked" '; }

	if( $tipo != '' ){ $col_bs_input .= ' form_check_' . $tipo; }

	$arr_html = [
		'<div class="form-group div_' . $id . ' form-check ' . $col_bs_group . '">',

			'<div class="input-group ' . $col_bs_input . '">',

			// '<div class="input-group ' + clase_grupo + '" ' + this.objeto_a_string(atributos) + '>',
				
				'<label for="' . $id . '" title="' . $title . '" class="'. $col_bs_label . ' control-label">' . $label,
				
				// '<input id="' + id + '" class="' + clase + '" type="checkbox" name="' + id + '" ' + checked + ' value="' + valor + '" ' + disabled + '>',
				'<input id="' . $id . '" ',
					'class="' . $clase . '" ',
					'type="checkbox" ',
					'name="' . $id . '" ',
					$str_checked,
					$disabled,
					array_a_string($atributos),
					'value="' . $valor . '">',

				'<i></i>',
				
				'</label>',

			'</div>',
			
		'</div>',
	];

	return implode('', $arr_html);
}

/* Test */
function form_input($arr_dat){

	$label 		= isset($arr_dat['label']) ? $arr_dat['label'] : '';
	$id 		= isset($arr_dat['id']) ? $arr_dat['id'] : '';
	$valor 		= isset($arr_dat['valor']) ? $arr_dat['valor'] : '';
	$tipo 		= isset($arr_dat['tipo']) ? $arr_dat['tipo'] : 'text';
	$placeholder = isset($arr_dat['placeholder']) ? $arr_dat['placeholder'] : '';
	$ayuda 		= isset($arr_dat['ayuda']) ? $arr_dat['ayuda'] : '';
	$min_char 	= isset($arr_dat['min_char']) ? $arr_dat['min_char'] : 0 ;
	$disabled 	= isset($arr_dat['disabled']) ? $arr_dat['disabled'] : '';
	$atributos 	= isset($arr_dat['atributos']) ? $arr_dat['atributos'] : array();
	$clase 		= isset($arr_dat['clase']) ? $arr_dat['clase'] : '';
	$add_on		= isset($arr_dat['add_on']) ? $arr_dat['add_on'] : '';
	$col_bs_label = isset($arr_dat['col_bs_label']) ? $arr_dat['col_bs_label'] : '';
	$col_bs_input = isset($arr_dat['col_bs_input']) ? $arr_dat['col_bs_input'] : '';
	$col_bs_group = isset($arr_dat['col_bs_group']) ? $arr_dat['col_bs_group'] : '';
	$boton_info = '';
	$title 		= '';

	if( $ayuda != '' ){

		$boton_info = '<span class="badge ayuda"><i class="i_ayuda fa fa-question" data-toggle="tooltip" title="' . $ayuda . '"></i></span> ';
	}

	$str_min_char = '';
	if( $min_char > 0 ){ $str_min_char = 'data-num_char="' . $min_char . '" '; }
	
	//title = ayuda;
	if( $disabled == 'disabled' ){

		$disabled .= ' ';
		//title = 'Pulse en desbloquear para modificar';
	}

	if( $add_on != '' ){

		$ico = devuelve_icono($add_on);

		$add_on = '<span class="input-group-addon"><i class="' . $ico . '"></i></span>';

		/*
		switch( $add_on ){

			case 'bano':
				$add_on = '<span class="input-group-addon"><i class="fa fa-bath"></i></span>';
				break;

			case 'dni':
				$add_on = '<span class="input-group-addon"><i class="fa fa-address-card"></i></span>';
				break;

			case 'email':
				$add_on = '<span class="input-group-addon"><i class="fa fa-envelope"></i></span>';
				break;

			case 'fecha':
				$add_on = '<span class="input-group-addon"><i class="fa fa-calendar"></i></span>';
				break;

			case 'garage':
				$add_on = '<span class="input-group-addon"><i class="fa fa-car"></i></span>';
				break;

			case 'cp':
				$add_on = '<span class="input-group-addon"><i class="fa fa-envelope"></i></span>';
				break;

			case 'direccion':
				$add_on = '<span class="input-group-addon"><i class="fa fa-home"></i></span>';
				break;

			case 'localidad':
				$add_on = '<span class="input-group-addon"><i class="fa fa-building-o"></i></span>';
				break;

			case 'habitacion':
				$add_on = '<span class="input-group-addon"><i class="fa fa-hotel"></i></span>';
				break;

			case 'hora':
				$add_on = '<span class="input-group-addon"><i class="fa fa-clock-o"></i></span>';
				break;

			case 'importe':
				//add_on = '<span class="input-group-addon"><i class="fa fa-euro-sign"></i></span>';
				$add_on = '<span class="input-group-addon"><i class="fa fa-euro"></i></span>';
				break;

			case 'mapa':
				$add_on = '<span class="input-group-addon"><i class="fa fa-map-o"></i></span>';
				break;

			case 'porcentaje':
				$add_on = '<span class="input-group-addon"><i class="fa fa-percent"></i></span>';
				break;

			case 'telefono':
				$add_on = '<span class="input-group-addon"><i class="fa fa-phone"></i></span>';
				break;

			case 'usuario':
				$add_on = '<span class="input-group-addon"><i class="fa fa-user"></i></span>';
				break;

			default:
				$add_on = '';
		}
		*/
	}


	$str_atributos = array_a_string($atributos) . ' ';

	$arr_html = array(
		'<div class="form-group div_' . $id . ' ' . $col_bs_group . '">',

			'<label class="' . $col_bs_label . ' control-label" for="' . $id . '" title="' . $title . '">' . $boton_info . $label . '</label>',

			'<div class="input-group ' . $col_bs_input . '">',

				$add_on,
				'<input title="' . $title . '" ',
					$str_atributos,
					$disabled,
					'type="' . $tipo . '" ',
					'value="' . $valor . '" ',
					$str_min_char,
					'class="form-control ' . $clase . '" ',
					'id="' . $id . '" ',
					'placeholder="' . $placeholder . '">',

			'</div>',

		'</div>'
	);

	return implode('', $arr_html);
}

// Limpieza de variables

function comprobar_dato($dato){
	
	$dato = trim($dato);

	$dato = stripslashes($dato);

	$dato = htmlspecialchars($dato);

	return $dato;
}

//http://www.phpro.org/tutorials/Filtering-Data-with-PHP.html#12

// Test
function limpia_array($arr){

	if( !is_array($arr) ){ return array(); }

	foreach ($arr as $key => $valor) {
		
		$tipo = gettype($valor);

		if( $tipo == 'string' ){

			if( $valor == 'undefined' || $valor == 'null' ){

				$arr[$key] = '';

			} else {

				$arr[$key] = limpia_text($valor);
			}
		
		} elseif( $tipo == 'integer' ){
			
			$arr[$key] = $valor;

		} else {

			$arr[$key] = '';
		}
	}

	return $arr;
}


function limpia_email($email){

	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	return $email;
}


function limpia_nombre_archivo($nombre_archivo) {
	
	//$nombre_archivo = strtolower($nombre_archivo);
	$nombre_archivo = str_replace("#","-",$nombre_archivo);
	$nombre_archivo = str_replace(" ","-",$nombre_archivo);
	$nombre_archivo = str_replace("'","",$nombre_archivo);
	$nombre_archivo = str_replace('"',"",$nombre_archivo);
	$nombre_archivo = str_replace("__","_",$nombre_archivo);
	$nombre_archivo = str_replace("&","and",$nombre_archivo);
	$nombre_archivo = str_replace("/","-",$nombre_archivo);
	$nombre_archivo = str_replace("?","",$nombre_archivo);
	$nombre_archivo = str_replace("¿","",$nombre_archivo);
	$nombre_archivo = str_replace("!","",$nombre_archivo);
	$nombre_archivo = str_replace("¡","",$nombre_archivo);
	$nombre_archivo = str_replace(")","",$nombre_archivo);
	$nombre_archivo = str_replace("(","",$nombre_archivo);
	$nombre_archivo = str_replace("]","",$nombre_archivo);
	$nombre_archivo = str_replace("[","",$nombre_archivo);
	$nombre_archivo = str_replace("}","",$nombre_archivo);
	$nombre_archivo = str_replace("{","",$nombre_archivo);
	$nombre_archivo = str_replace("`","",$nombre_archivo);
	$nombre_archivo = str_replace("^","",$nombre_archivo);
	$nombre_archivo = str_replace("+","",$nombre_archivo);
	$nombre_archivo = str_replace("*","",$nombre_archivo);
	$nombre_archivo = str_replace("@","",$nombre_archivo);
	$nombre_archivo = str_replace("=","",$nombre_archivo);
	$nombre_archivo = str_replace("%","",$nombre_archivo);
	$nombre_archivo = str_replace("ñ","ny",$nombre_archivo);
	$nombre_archivo = str_replace("Ñ","Ny",$nombre_archivo);
	
	$nombre_archivo = str_replace("á","a",$nombre_archivo);
	$nombre_archivo = str_replace("é","e",$nombre_archivo);
	$nombre_archivo = str_replace("í","i",$nombre_archivo);
	$nombre_archivo = str_replace("ó","o",$nombre_archivo);
	$nombre_archivo = str_replace("ú","u",$nombre_archivo);
	$nombre_archivo = str_replace("Á","A",$nombre_archivo);
	$nombre_archivo = str_replace("É","E",$nombre_archivo);
	$nombre_archivo = str_replace("Í","I",$nombre_archivo);
	$nombre_archivo = str_replace("Ó","O",$nombre_archivo);
	$nombre_archivo = str_replace("Ú","U",$nombre_archivo);
	
	return $nombre_archivo;
}


function limpia_text($string){
	
	//quitar múltiples espacios
	$string = str_replace('&nbsp;',' ',$string);
	$string = preg_replace('/(?:\s\s+|\n|\t)/', ' ', $string);
	
	//cambiar comillas dobles por sencillas
	$string = str_replace('"',"'",$string);
	$string = filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS);
		
	//$string = htmlspecialchars($string,ENT_QUOTES);
	
	return $string;
}


function limpia_url($url){

	$url = filter_var($url, FILTER_SANITIZE_URL);
	return $url;
}


function limpia_varchar($string){

	$resultado = filter_var($string, FILTER_SANITIZE_STRING);
	return $resultado;
}

// Test
function limpia_video_youtube($video){
	
	/* Coge una url de youtube y devuelve el id del video limpito */

	if( preg_match('/www\.youtube\.com\/watch\?v=([^&]+)/', $video, $id_video) ){

		return limpia_nombre_archivo($id_video[1]);
	}

	if( preg_match('/youtu\.be\/(.*)$/', $video, $id_video) ){

		return limpia_nombre_archivo($id_video[1]);
	}

	if( preg_match( '/www\.youtube\.com\/embed\/([^"]+)"/', $video, $id_video) ){

		return limpia_nombre_archivo($id_video[1]);
	}
}


function valida_email($email){

	if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
		/*** if it fails validation ***/
		return false;
	} else {
		/*** if the address passes validation ***/
		return true;
	}
}


function valida_url($url){

	if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_SCHEME_REQUIRED) === FALSE){
		/*** if it fails validation ***/
		return false;

	} else {
		/*** if the address passes validation ***/
		return true;
	}
}


function valida_ip($ip){

	if(filter_var($ip, FILTER_VALIDATE_IP) === FALSE){

		return false;

	} else {
	
		return true;
	}
}

?>
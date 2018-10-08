/* GENERAL */
function mostrarIdiomas(){

	if( !semaforo ){ mostrarMenu(); }
	
	if( lengua ){

		$('#menuidiomas').css('display', "block");
		$('#menuidiomas').animate({opacity: 1}, 1000);

		lengua = false;
	
	} else {

		$('#menuidiomas').animate({opacity: 0}, 1000, function (){

			$('#menuidiomas').css('display', "none");
		});

		lengua = true				
	}	
}


function mostrarMenu(){

	if( !lengua ){ mostrarIdiomas(); }

	var ancho = $(window).width();

	var pag_global = JSON.stringify( $('#lateral') ) == '{}';
	//console.log('ancho', ancho);

	if( (ancho >= 576 && ancho <= 1024) && pag_global ){

		var top_contenedor = $('#contenedor').offset().top;
		$('#menumovil').css( 'top', top_contenedor - $('#menumovil').height() + 5);

		if(semaforo){

			$('#menumovil').css('display', "block");

			$(function(){ $('html, body').animate({ scrollTop: $('#menumovil').offset().top + 3 }, 1000) });

			$('#menumovil').animate({ opacity: 1 }, 1000);

			semaforo = false;

		}	else {

			$(function(){ $('html, body').animate({ scrollTop: top_contenedor + 3 }, 1000) });

			$('#menumovil').animate({opacity: 0}, 1000, function(){

				$('#menumovil').css('display', "none");
			});

			semaforo = true;
		}

	} else {

		if(semaforo){

			$('#menumovil').css('display', "block");
			$('#menumovil').animate({opacity: 1}, 1000);

			semaforo = false;

		} else {

			$('#menumovil').animate({opacity: 0}, 1000, function(){

				$('#menumovil').css('display', "none");
			});

			semaforo = true	
		}
	}
}


function desvanecerLeer(){

	var tope = document.documentElement.scrollTop || document.body.scrollTop;
	var altura = $(window).height();

	switch(true) {

		case (tope > altura/2 && tope < altura * 0.6):
			$('#leer').css('opacity', '0');
			break;

		case (tope > altura * 0.4 && tope < altura/2):
			$('#leer').css('opacity', '0.4');
			break;

		case (tope > altura * 0.2 && tope < altura * 0.4):
			$('#leer').css('opacity', '0.8');
			break;

		case (tope < altura * 0.2):
			$('#leer').css('opacity', '1');
			break;
	}
}

// Script RRSS
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];

  	if(d.getElementById(id) ){ return };

	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.9";
 	fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));


!function(d,s,id){

	var js,fjs=d.getElementsByTagName(s)[0], p=/^http:/.test(d.location) ? 'http' : 'https';

	if(!d.getElementById(id)){
		js=d.createElement(s);
		js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
		fjs.parentNode.insertBefore(js,fjs);
	}
}(document,"script","twitter-wjs");


/* TRAGAR - EMPUJAR */
function encender_comidas(){

	if(ancho_ventana >= 576){

		altura_aviso_rac = $('#aviso_rac').offset().top - 44;
		altura_reservas = $('#reservas').offset().top - 44;

	}	else {

		altura_aviso_rac = $('#aviso_rac').offset().top - ( 44 + altura_lateral );
		altura_reservas = $('#reservas').offset().top - ( 44 + altura_lateral );

	}

	switch(true){

		case ( scroll_top >= altura_reservas ) || ( scroll_top + $(window).height() == $(document).height() ):
		marcadores[2].style.backgroundColor = "#000000";
		marcadores[2].style.color = "#FFFFFF";
		break;

		case ( scroll_top >= altura_aviso_rac ) && ( scroll_top < altura_reservas ):
		marcadores[1].style.backgroundColor = "#000000";
		marcadores[1].style.color = "#FFFFFF";
		break;

		case scroll_top < altura_aviso_rac:
		marcadores[0].style.backgroundColor = "#000000";
		marcadores[0].style.color = "#FFFFFF";				
		break;

	}
}


function encender_bebidas(){

	if(ancho_ventana >= 576){

		altura_cerveza = $('#cerveza').offset().top - 44;
		altura_vino    = $('#vino').offset().top - 44;
		altura_licor   = $('#licores').offset().top - 44;
		altura_combi   = $('#combinados').offset().top - 44;
		altura_sin     = $('#sin_alcohol').offset().top - 44;

	} else {

		altura_cerveza = $('#cerveza').offset().top - ( 44 + altura_lateral );
		altura_vino    = $('#vino').offset().top - ( 44 + altura_lateral );
		altura_licor   = $('#licores').offset().top - ( 44 + altura_lateral );
		altura_combi   = $('#combinados').offset().top - ( 44 + altura_lateral );
		altura_sin     = $('#sin_alcohol').offset().top - ( 44 + altura_lateral );
	}

	switch(true){

		case ( scroll_top >= altura_sin ) || ( scroll_top + $(window).height() == $(document).height() ):
			marcadores[4].style.backgroundColor = "#000000";
			marcadores[4].style.color = "#FFFFFF";
			break;

		case ( scroll_top >= altura_combi ) && ( scroll_top < altura_sin ):
			marcadores[3].style.backgroundColor = "#000000";
			marcadores[3].style.color = "#FFFFFF";
			break;

		case ( scroll_top >= altura_licor ) && ( scroll_top < altura_combi ):
			marcadores[2].style.backgroundColor = "#000000";
			marcadores[2].style.color = "#FFFFFF";
			break;

		case ( scroll_top >= altura_vino ) && ( scroll_top < altura_licor ):
			marcadores[1].style.backgroundColor = "#000000";
			marcadores[1].style.color = "#FFFFFF";
			break;

		case scroll_top < altura_vino:
			marcadores[0].style.backgroundColor = "#000000";
			marcadores[0].style.color = "#FFFFFF";				
			break;
	}
}


function iluminarLateral( scroll_top, raciones ){

	raciones = raciones || '';
	marcadores = document.getElementById('lateral').getElementsByTagName('li');

	for(a=0; a < marcadores.length; a++){

		marcadores[a].style.backgroundColor = "initial";
		marcadores[a].style.color = "#000";

	}

	raciones ? encender_comidas() :	encender_bebidas();
}


function mostrarLateral(){

	ancho_ventana = window.innerWidth || document.body.offsetWidth;
	scroll_top = $(window).scrollTop();
	altura_lateral = $('#lateral').height();

	if( !(JSON.stringify( $('#aviso_pan') ) == '{}') ){

		var $primero = $('#aviso_pan');
		raciones = true;

	} else {

		var $primero = $('#cerveza');
		raciones = false;
	}

	if(ancho_ventana >= 576){

		if( scroll_top > $primero.offset().top - 44 ){

			$('#lateral').show();

		} else {

			$('#lateral').hide();
		}

	} else {

		if( scroll_top > $primero.offset().top - ( 44 + altura_lateral ) ){

			$('#lateral').show();

		} else {

			$('#lateral').hide();
		}
	}

	iluminarLateral(scroll_top, raciones);
}


function animarFancy(pagina){

	//if( !( JSON.stringify( $('#aviso_pan') ) == '{}' ) ){
	if( pagina == 'tragar' ){

		$('[data-fancybox]').fancybox({
			toolbar  : false,
			smallBtn : true,
			iframe : {
				preload : false,
				css: { 
					width : "400px",
					height: "430px" 
				}
			}
		});

	} else {
		// Empujar
		$('[data-fancybox]').fancybox({
			toolbar  : false,
			smallBtn : true,
			iframe : {
				preload : false,
				css: { 
					width : "400px",
					height: "550px" 
				}
			}
		});

	}
}


// // if( !(JSON.stringify( $('#lateral') ) == '{}') ){
// if( pagina == 'tragar' || pagina == 'empujar' ){

// 	animarFancy(pagina);

// 	window.onscroll = mostrarLateral;
// }


/* DONDE ESTAMOS */
function calcularHorario(){

	var fecha = new Date();
	var dia = fecha.getDay();
	var hora = fecha.getHours();

	preposicion = mapa_en + " ";
	apertura = false;

		// M - S
	if(dia > 1){

			// M y J Cerrados por la mañana
		if( dia == 2 || dia == 4){

			if( hora > 19 && hora < 24 ){

				apertura = true;

				return apertura;
			
			} else {

				tiempo = 20 - hora;

				tiempo > 1 ? tiempo += " " + mapa_horas + "." : tiempo += " " + mapa_hora + ".";
				tiempo = preposicion + tiempo;

				return apertura, tiempo;
			}

		}
			// ABIERTO
			// 13 - 16 // 20 - 24
		if((hora > 12 && hora < 16) || (hora > 19 && hora < 24)){

			apertura = true;

			return apertura;

		} else {

			// CERRADO
			if(hora < 13){

				tiempo =  13 - hora;

			} else {

				tiempo = 20 - hora;
			}

			tiempo > 1 ? tiempo += " " + mapa_horas + "." : tiempo += " " + mapa_hora + ".";
			tiempo = preposicion + tiempo;

			return apertura, tiempo;
		}

		// D
	} else if(dia == 0){

			// Abierto 12-17
		if(hora > 11 && hora < 17){

			apertura = true;

			return apertura;

		} else {

			if(hora < 12){

				tiempo =  12 - hora;

			}	else {

				tiempo = 36;
			}

			tiempo > 1 ? tiempo += " " + mapa_horas + "." : tiempo += " " + mapa_hora + ".";
			tiempo = preposicion + tiempo;

			return apertura, tiempo;
		}

		// L
	} else {

		tiempo = mapa_mañana;

		return apertura, tiempo;
	}
}

function iniciarMapa(){

	ancho_ventana = window.innerWidth || document.body.offsetWidth;
	var ancho = $('#mapa').css('width').slice(0, 3);

	calcularHorario();

	var tragona = { lat: 40.41121079, lng: -3.70549053 };
	var centro_desktop = { lat: 40.41121079, lng: -3.7063};

	if(ancho >= 500){

		centro_mapa = centro_desktop;

	} else {

		centro_mapa = tragona;
	}

	var mapa = new google.maps.Map(document.getElementById('mapa'), {
		zoom: 17,
		center: tragona
		// center: centro_mapa
	});

	apertura ? aviso = mapa_abierto : aviso = mapa_abrimos + " " + tiempo;
	
	// Mostrar Aviso fijo
	//aviso = "Volvemos el 2 de Abril";

	var descripcion = '<div id="mapa_info">' +

		'<div id="aviso">' + aviso + '</div>' +

		'<h1 id="info_cabecera">La Tragona<img src="' + mapa_logo + '" id="imagen_mapa"></h1>' +

		'<div id="info_contenido">' +

			'<p><strong>La Tragona</strong> ' + mapa_info + '</p>' +

		'</div>' +

	'</div>';

	var informacion = new google.maps.InfoWindow({ content: descripcion });

	var logo_tragona = {
		url: 'http://localhost/tragona/media/icono.gif',
		scaledSize: new google.maps.Size(50, 50)
	};

	//var logo_tragona = 'https://tragona.com/media/icono.ico';

	//var marcador = new google.maps.Marker({
	var marcador = new MarkerWithLabel({

		position: tragona,
		map: mapa,
		title: 'La Tragona (Madrid)',
		//icon: logo_tragona,
		//animation: google.maps.Animation.DROP,
		// label: {
		// 	text: 'Aquí estamos!!',
		// 	fontSize: '50px',
		// 	backgroundColor: '#00FF00',
		// 	position: 'relative',
		// 	top: '-20px'
			
		// }
		labelContent: '¡Aquí está La Tragona!',
		labelClass: 'mapa_marcador',
		labelAnchor: new google.maps.Point(125, 100),

	});

	marcador.addListener('click', function(){ informacion.open(mapa, marcador);	});
}


/* CONTACTAR - Formulario*/
function permite(elEvento, permitidos) {

	var numeros = "0123456789";
	var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ_.@";
	var numeros_caracteres = numeros + caracteres;

	switch(permitidos) {

		case 'num':
			permitidos = numeros;
			break;

		case 'car':
			permitidos = caracteres;
			break;

		case 'num_car':
			permitidos = numeros_caracteres;
			break;
	}		 

	// Obtener la tecla pulsada 
	var evento = elEvento || window.event;
	var codigoCaracter = evento.charCode || evento.keyCode;
	var caracter = String.fromCharCode(codigoCaracter);

	// Comprobar si la tecla pulsada es alguna de las teclas especiales
	var tecla_especial = false;
	var teclas_especiales = [8, 37, 39, 40, 41, 43, 46];

	/* 
		8 = BackSpace
		46 = Supr
		37 = flecha izquierda
		39 = flecha derecha
		40 = (
		41 = )
		43 = +
		*/	 

	for( var i in teclas_especiales ){

		if(codigoCaracter == teclas_especiales[i]) {

			tecla_especial = true;
			break;
		}
	}	
		 
	// Comprobar si la tecla pulsada se encuentra en los caracteres permitidos o si es una tecla especial
	return permitidos.indexOf(caracter) != -1 || tecla_especial;
}

	
(function($) {

	$.sanear = function(valor){

		var salida = valor.replace( /<script[^>]*?>.*?<\/script>/gi, '' ).
							replace( /<[\/\!]*?[^<>]*?>/gi, '' ).
							replace( /<style[^>]*?>.*?<\/style>/gi, '' ).
							replace( /<![\s\S]*?--[ \t\n\r]*>/gi, '' );
		return salida;
	};
})(jQuery);


function limpiarFormulario(formulario){

	$.each( $formulario[0], function(index, value){

		if( value.name == 'enviar' ){ return true };

		value.value = '';

		if( value.name == 'telefono' ){ value.value = '(+34)' }

	});
}


function enviar_mensaje(datos){

	imagen = '<img class="spinner" src="' + BASE_FILE + 'media/la_tragona_logo.png" width="50">';
	$respuesta_form.html( imagen );

	datos['idioma'] = idioma;

	var ajax = $.ajax({

		dataType: 'json',
		type: 'POST',
		url: BASE_URL + '/php/formulario.php',
		data: datos,
		context: $formulario,

	});

	ajax.done(function(mi_json){

		if( mi_json != '' ){

			setTimeout( function(){

				var respuesta = '<p class="respuesta_' + mi_json.status + '">' + mi_json.mensaje + '</p>';
				$respuesta_form.html( respuesta );

				limpiarFormulario($formulario);

			}, 2000);
		}
	});
}


function validarForm(e){

	e.preventDefault();

	$formulario = $(e.target).parent();

	$respuesta_form = $('#respuesta_form', $formulario);

	datos = {};
	var error = {};
	
	$.each( $formulario[0], function(index, input){

		input.value = $.sanear($(this).val());

		switch( input.name ){

			case 'nombre':

				if( input.value == '' ){

					error.status = true;
					error.mensaje = $(this).attr('data_error');
					this.focus();
					return false;

				}
				break;

			case 'email':

				if( !( /[\d\w\._]+@(?:[\d\w\.]+)?[\d\w]+\.\w{2,4}/.test(input.value) ) ){

					error.status = true;
					error.mensaje = $(this).attr('data_error');
					this.focus();
					return false;

				}
				break;

			case 'telefono':

				input.value = input.value.replace( /\s/g, '');

				if( !( /^\(\+\d{2}\)\d{9}$/.test(input.value) ) ){

					error.status = true;
					error.mensaje = $(this).attr('data_error');
					input.value = '(+34)';
					this.focus();
					return false;
				}
				break;

			case 'mensaje':

				if( ( input.value == '' ) || /^\s+$/.test( input.value ) ){

					error.status = true;
					error.mensaje = $(this).attr('data_error');
					this.focus();
					return false;
				}
				break;
		}

		datos[input.name] = input.value;
	});

	if( error.status ){

		$respuesta_form.html('<p class="respuesta_error">' + error.mensaje + '</p>');
		return false;
	}

	enviar_mensaje(datos);
}



function activarClicks(){

	$('#leer').click( function(){

		$('html, body').animate({ scrollTop: $('#contenedor').offset().top + 3 }, 1500)
	});

	$('.menu').click( function(){	mostrarMenu(); });

	$('#multi').click( function(){	mostrarIdiomas(); });
	
	$('.boton', '#lateral').click(function(e){

		e.preventDefault();

		var posicion = $($(this).attr('data_seccion')).offset().top - 43;
	  $(document).width() < 576 ? posicion -= $('#lateral').height() : '';

	  $("html, body").animate({	scrollTop: posicion	}, 2000);

	});

	$('.boton', '#form').click( function(e){

		e.preventDefault();

		validarForm(e);

	});	
}


function detectar_pagina(){

	$arr_url = window.location.href.split('/');

	return $arr_url.pop();
}


function iniciar(){
	
	semaforo = true;
	lengua = true;
	pagina = detectar_pagina();
	activarClicks();

	// if( !(JSON.stringify( $('#lateral') ) == '{}') ){
	if( pagina == 'tragar' || pagina == 'empujar' ){

		animarFancy(pagina);

		window.onscroll = mostrarLateral;
	}

}

window.onscroll = desvanecerLeer;
window.onload = iniciar;



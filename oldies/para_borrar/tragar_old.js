// Menu lateral
	function mostrarLateral(){
		ancho_ventana = window.innerWidth || document.body.offsetWidth;
		scroll_top = $(window).scrollTop();
		altura_lateral = $('#lateral').height();


		if(ancho_ventana >= 576){

			if( scroll_top > $('#aviso_pan').offset().top - 44 ){

				$('#lateral').show();

			} else {

				$('#lateral').hide();

			}

		} else {

			if( scroll_top > $('#aviso_pan').offset().top - ( 44 + altura_lateral ) ){

				$('#lateral').show();

			} else {

				$('#lateral').hide();

			}
		}

		iluminarLateral(scroll_top);
	}

	function iluminarLateral(scroll_top){

		marcadores = document.getElementById('lateral').getElementsByTagName('li');
		
		for(a=0; a < marcadores.length; a++){

			marcadores[a].style.backgroundColor = "initial";
			marcadores[a].style.color = "#000";

		}

		encender();

		function encender(){

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
	}

// Animaciones de desplazamiento
	$(function() {

		$('.boton', '#lateral').click(function(e){

			e.preventDefault();

			var posicion = $($(this).attr('data_seccion')).offset().top - 43;
		  $(document).width() < 576 ? posicion -= $('#lateral').height() : '';

		  $("html, body").animate({	scrollTop: posicion	}, 2000);

		});

		$('.boton', '#form').click( function(e){

			e.preventDefault();

			validarForm(e);

		})

	});

// Menus movil
	function mostrarMenuMovil(){
		logo = document.getElementById('logo_superior');
		logo.onclick = mostrarMenu;

		bandera = document.getElementById('multi');
		bandera.onclick = mostrarIdiomas;
	}

	function mostrarMenu(){
		if(!lengua){ mostrarIdiomas(); }

		if(semaforo){
			$('#menumovil').css('display', "block");
			$('#menumovil').animate({opacity: 1}, 1000);
			semaforo = false;
		}
		else {
			$('#menumovil').animate({opacity: 0}, 1000, function(){
				$('#menumovil').css('display', "none");
			});
			semaforo = true				
		}
	}

	function mostrarIdiomas(){
		if(!semaforo){ mostrarMenu(); }
		
		if(lengua){
			$('#menuidiomas').css('display', "block");
			$('#menuidiomas').animate({opacity: 1}, 1000);
			lengua = false;
		}
		else {
			$('#menuidiomas').animate({opacity: 0}, 1000, function (){
				$('#menuidiomas').css('display', "none");
			});
			lengua = true				
		}	
	}

// Script de icono FB
	$(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.9";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

// Validacion formulario
	function permite(elEvento, permitidos) {

	  // Variables que definen los caracteres permitidos
	  var numeros = "0123456789";
	  var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
	  	//var numeros_caracteres = numeros + caracteres;
	  var teclas_especiales = [8, 37, 39, 40, 41, 43, 46];
	  	// 8 = BackSpace, 46 = Supr, 37 = flecha izquierda, 39 = flecha derecha, 40 = (, 41 = ), 43 = +	 
	  
	  	// Seleccionar los caracteres a partir del parámetro de la función
	  switch(permitidos) {
	    case 'num':
	      permitidos = numeros;
	      break;
	    case 'car':
	      permitidos = caracteres;
	      break;
	   // case 'num_car':
	      //permitidos = numeros_caracteres;
	      //break;
	  }		 
	  	// Obtener la tecla pulsada 
	  var evento = elEvento || window.event;
	  var codigoCaracter = evento.charCode || evento.keyCode;
	  var caracter = String.fromCharCode(codigoCaracter);
	  	// Comprobar si la tecla pulsada es alguna de las teclas especiales (teclas de borrado y flechas horizontales)
	  var tecla_especial = false;
	  for(var i in teclas_especiales) {
	    if(codigoCaracter == teclas_especiales[i]) {
	      tecla_especial = true;
	      break;
	    }
    }		 
	  	// Comprobar si la tecla pulsada se encuentra en los caracteres permitidos o si es una tecla especial
	  return permitidos.indexOf(caracter) != -1 || tecla_especial;
	}

	(function($) {
		$.sanear = function(valor) {

			var salida = valor.replace(/<script[^>]*?>.*?<\/script>/gi, '').
												 replace(/<[\/\!]*?[^<>]*?>/gi, '').
												 replace(/<style[^>]*?>.*?<\/style>/gi, '').
												 replace(/<![\s\S]*?--[ \t\n\r]*>/gi, '');
		  return salida;

		};

	})(jQuery);

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
					
					if(input.value == ''){
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

		if(error.status){

			$respuesta_form.html('<p class="respuesta_error">' + error.mensaje + '</p>');
			return false;

		}

		enviar_mensaje(datos);

	}

	function enviar_mensaje(datos){

		imagen = '<img class="spinner" src="media/la_tragona_logo.png" width="50">';
		$respuesta_form.html( imagen );

		var ajax = $.ajax({

			dataType: 'json',
			type: 'POST',
			url: 'php/formulario.php',
			data: datos,
			context: $formulario,

		});

		ajax.done(function(mi_json){

			if( mi_json != '' ){

				setTimeout( function(){

					var respuesta = '<p class="respuesta_' + mi_json.status + '">' + mi_json.mensaje + '</p>';
					$respuesta_form.html( respuesta );

					limpiarFormulario($formulario);

				}, 500);

			}

		});

	}

	function limpiarFormulario(formulario){

		$.each( $formulario[0], function(index, value){

			if( value.name == 'enviar' ){ return true };

			value.value = '';

			if( value.name == 'telefono' ){ value.value = '(+34)' }

		});

	}

// Fancybox
	function animarFancy(){
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

		$('#enlace_evento').fancybox({
			toolbar  : false,
			smallBtn : true,
			iframe : {
				preload : false,
				css: { 
					width : "80%",
					height: "75%"
				}
			}
		});	
	}

// Mensaje de vacaciones
	function mostrarAlerta() {
			// shortcut reference to the document object
		d = document;

			// create the modalContainer div as a child of the BODY element
		contenedor = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
		contenedor.id = "contenedor_alerta";

		alerta = contenedor.appendChild(d.createElement("div"));
		alerta.id = "caja_alerta";

			// MSIE doesnt treat position:fixed correctly, so this compensates for positioning the alert
		if(d.all && !window.opera) alerta.style.top = document.documentElement.scrollTop + "px";
		
		titulo = alerta.appendChild(d.createElement("p"));
		titulo.appendChild(d.createTextNode(titular));
		titulo.id = "titulo_alerta";

			// create a paragraph element to contain the txt argument
		msg = alerta.appendChild(d.createElement("p"));
		msg.id = "mensaje_alerta";
		msg.innerHTML = vuelta;
	}

function iniciar(){
	semaforo = true;
	lengua = true;

	mostrarMenuMovil();
	animarFancy();
}

window.onload = iniciar;
window.onscroll = mostrarLateral;
/*window.onresize = establecerVentana;*/
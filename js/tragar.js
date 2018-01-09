// Menu lateral
	function mostrarLateral(){
		ancho_ventana = window.innerWidth || document.body.offsetWidth;
		scroll_top = $(window).scrollTop();
		lateral = document.getElementById('lateral');
		
		if(ancho_ventana > 1024){
			if(scroll_top > 200){
				lateral.style.opacity = 1;
			} else {
				lateral.style.opacity = 0;
			}
		}
		else if(ancho_ventana > 650){
			if(scroll_top > 140){
				lateral.style.opacity = 1;
			} else {
				lateral.style.opacity = 0;
			}
		} else {
			if(scroll_top > 69){
				lateral.style.opacity = 1;
			} else {
				lateral.style.opacity = 0;
			}
		}

		iluminarLateral(scroll_top);
	}

	function iluminarLateral(scroll){
		function encender(){
			if(ancho_ventana > 1024){
				switch(true){
					case (scroll > 200 && scroll < 1240):
						marcadores[0].style.backgroundColor = "#000";
						marcadores[0].style.color = "#fff";				
						break;
					case (scroll > 1239 && scroll < 3751 ):
						marcadores[1].style.backgroundColor = "#000";
						marcadores[1].style.color = "#fff";
						break;
					case (scroll > 3750) :
						marcadores[2].style.backgroundColor = "#000";
						marcadores[2].style.color = "#fff";
						break;
				}
			}
			else if(ancho_ventana > 650){
				switch(true){
					case (scroll > 155 && scroll < 1216):
						marcadores[0].style.backgroundColor = "#000";
						marcadores[0].style.color = "#fff";			
						break;
					case (scroll > 1215 && scroll < 3751):
						marcadores[1].style.backgroundColor = "#000";
						marcadores[1].style.color = "#fff";
						break;
					case (scroll > 3750):
						marcadores[2].style.backgroundColor = "#000";
						marcadores[2].style.color = "#fff";
						break;
				}
			}
			else {
				switch(true){
					case (scroll > 78 && scroll < 1046 ):
						marcadores[0].style.backgroundColor = "#000";
						marcadores[0].style.color = "#fff";				
						break;
					case (scroll > 1045 && scroll < 2910):
						marcadores[1].style.backgroundColor = "#000";
						marcadores[1].style.color = "#fff";
						break;
					case (scroll > 3810) :
						marcadores[2].style.backgroundColor = "#000";
						marcadores[2].style.color = "#fff";
						break;
				}
			}
		}

		marcadores = document.getElementById('lateral').getElementsByTagName('li');
		for(a=0; a < marcadores.length; a++){
			marcadores[a].style.backgroundColor = "initial";
			marcadores[a].style.color = "#000";					
		}

		encender();
	}

// Animaciones de desplazamiento
	$(function() {
		altura = $(document).height();
		$("#tos").click(function(){ 
		  var posicion = $("#tosta").offset().top - 40;
		  altura < 651 ? posicion -= 47 : posicion;
		  $("html, body").animate({	scrollTop: posicion	}, 2000);
		});
		$("#rac").click(function(){ 
		  var posicion = $("#racion").offset().top - 40;
		  altura < 651 ? posicion -= 47 : posicion;
		  $("html, body").animate({	scrollTop: posicion	}, 2000);
		});
		$("#res").click(function(){ 
		  var posicion = $("#reservas").offset().top - 40;
		  altura < 651 ? posicion -= 47 : posicion;
		  $("html, body").animate({	scrollTop: posicion	}, 2000);
		});
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

	function validarForm(){
		confirmacion = document.getElementById('confirmacion');
		confirmacion.style.display = "none";

		error = document.getElementsByClassName('error_form');
		for(i = 0; i < error.length; i++){
			error[i].style.visibility = "hidden";
		}

		nombre = document.getElementById('nombre');
		telefono = document.getElementById("telefono");
		mensaje = document.getElementById('mensaje');

		if( nombre.value == null || nombre.value.length == 0 || /^\s+$/.test(nombre.value) ) {
			error[0].style.visibility = "visible";
			nombre.focus();
			return false;
		}
		else if( !(/^\(\+\d{2}\)\d{9}$/.test(telefono.value)) ) {
			error[1].style.visibility = "visible";
			telefono.focus();
			return false;
		}
		else if( mensaje.value == null || mensaje.value.length == 0 || /^\s+$/.test(mensaje.value) ) {
			error[2].style.visibility = "visible";
			mensaje.focus();
			return false;
		}
		else {
			confirmacion.style.display = "inline";
			return true;
		}
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
window.onresize = establecerVentana;
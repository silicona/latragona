function establecerVentana(){
	ancho_ventana = window.innerWidth || document.body.offsetWidth;
	altura_ventana = window.innerHeight || document.body.offsetHeight;

	contenedor = document.getElementById('contenedor');
	//footer = document.getElementsByTagName('footer')[0];
	legal = document.getElementById('legal');
	legal.style.top = contenedor.style.top = altura_ventana + "px";

	// Ajuste menu superior		
		menu_superior = document.getElementById('superior').getElementsByTagName('ul')[0];
		ancho_menu = menu_superior.getBoundingClientRect().width;
		text = document.getElementById('logo_superior').getElementsByTagName('span')[0];
		if(ancho_menu < 651 && ancho_menu > 315){
			text.style.display = "inline";
		}
		else if(ancho_menu < 316){
			text.style.display = "none";
		}
}

//Movimiento de Leer
	$(function(){
		$('#leer').on("click", function(){
			var posicion = $('#contenedor').offset().top;
			$('html, body').animate({ scrollTop: posicion }, 1500)
		});
	});

	function desvanecerLeer(){
		var tope = document.documentElement.scrollTop || document.body.scrollTop;
		switch(true) {
			case (tope > altura_ventana/2 && tope < altura_ventana * 0.6):
				$('#leer').css('opacity', '0');
				break;
			case (tope > altura_ventana * 0.4 && tope < altura_ventana/2):
				$('#leer').css('opacity', '0.4');
				break;
			case (tope > altura_ventana * 0.2 && tope < altura_ventana * 0.4):
				$('#leer').css('opacity', '0.8');
				break;
			case (tope < altura_ventana * 0.2):
				$('#leer').css('opacity', '1');
				break;
		}
	}

// Menus Movil
	function mostrarMenuMovil(){
		logo = document.getElementById('logo_superior');
		logo.onclick = mostrarMenu;

		bandera = document.getElementById('multi');
		bandera.onclick = mostrarIdiomas;
	}

	function mostrarMenu(){
		if(!lengua){ mostrarIdiomas(); }

		menu = document.getElementById('menumovil');

		if(ancho_ventana > 650 && ancho_ventana < 1025){
			
			var num = contenedor.style.top.slice(0, contenedor.style.top.length-2);
			var posicion = menu.style.top = (num - 261) + "px";
			
			if(semaforo){
				$('#menumovil').css('display', "block");
				$(function(){	$('html, body').animate({ scrollTop: posicion}, 1000) });
				$('#menumovil').animate({opacity: 1}, 1000);
				semaforo = false;
			}
			else {
				$(function(){	$('html, body').animate({ scrollTop: $('#contenedor').offset().top}, 1000) });
				$('#menumovil').animate({opacity: 0}, 1000, function(){
					$('#menumovil').css('display', "none");
				});
				semaforo = true				
			}
		}
		else {
			menu.style.top = "45px";

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
	}

	function mostrarIdiomas(){
		if(!semaforo){ mostrarMenu();	}
		
		if(lengua){
			$('#menuidiomas').css('display', "block");
			$('#menuidiomas').animate({opacity: 1}, 1000);
			lengua = false;
		}
		else {
			$('#menuidiomas').animate({opacity: 0}, 1000, function(){
				$('#menuidiomas').css('display', "none");
			});
			lengua = true				
		}	
	}

function mostrarElementos(){
	contenedor.style.visibility = "visible";
	document.getElementById('legal').style.visibility = "visible";
}

// Script de FB
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.9";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

// Validacion Formulario
	function permite(elEvento, permitidos) {
	  var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
	  var teclas_especiales = [8, 37, 39, 46];
	  switch(permitidos) {
	    case 'car':
	      permitidos = caracteres;
	      break;
	  }	 
	  // Obtener la tecla pulsada 
	  var evento = elEvento || window.event;
	  var codigoCaracter = evento.charCode || evento.keyCode;
	  var caracter = String.fromCharCode(codigoCaracter);
	  var tecla_especial = false;

	  for(var i in teclas_especiales) {
	    if(codigoCaracter == teclas_especiales[i]) {
	      tecla_especial = true;
	      break;
	    }
    }		 

	  return permitidos.indexOf(caracter) != -1 || tecla_especial;
	}

	function validarForm(){
		//event.preventDefault();
		confirmacion = document.getElementById('confirmacion');
		confirmacion.style.display = "none";

		error = document.getElementsByClassName('error_form');
		for(i = 0; i < error.length; i++){
			error[i].style.display = "none";
		}

		nombre = document.getElementById('nombre').value;
		if( nombre == null || nombre.length == 0 || /^\s+$/.test(nombre) ) {
			error[0].style.display = "inline";
			return false;
		}

		email = document.getElementById("email");
			if( email.value == null || email.value == 0){
				error[1].style.display = "inline";
				return false;
			}
			else if(!(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/.test(email.value))) {
				error[2].style.display = "inline";			
			return false;
		}

		mensaje = document.getElementById('mensaje');
		if( mensaje.value == null || mensaje.value.length == 0 || /^\s+$/.test(mensaje.value) ) {
			error[3].style.display = "inline";
			return false;
		}

		confirmacion.style.display = "inline";
		return true;
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
	//mostrarAlerta();
	semaforo = true;
	lengua = true;
	establecerVentana();
	mostrarMenuMovil();
	mostrarElementos();
	window.onscroll = desvanecerLeer;
}

window.onload = iniciar;
window.onresize = establecerVentana;
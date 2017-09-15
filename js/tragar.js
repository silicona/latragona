// Establecer ventana
	function establecerVentana(){
		ancho_ventana = window.innerWidth || document.body.offsetWidth;
		altura_ventana = window.innerHeight || document.body.offsetHeight;
		contenedor = document.getElementById('contenedor');
		contenedor.style.width = ancho_ventana + "px";

		// Ajuste menu superior		
			menu_superior = document.getElementById('superior').getElementsByTagName('ul')[0];
			ancho_menu = menu_superior.getBoundingClientRect().width;

			var text = document.getElementById('logo_superior').getElementsByTagName('span')[0];
			
			if(ancho_menu < 651 && ancho_menu > 315){
			 	text.style.display = "inline";
			}
			else if(ancho_menu < 316){
			 	text.style.display = "none";
			}
	
		establecerAlturaFoto();
		establecerLateral();
	}

	function establecerAlturaFoto(){
		foto = document.getElementsByClassName('foto');
		contenido = document.getElementsByClassName('contenido');

		for(x=0; x<contenido.length;x++){
			foto[x].style.height = contenido[x].offsetHeight + "px" || contenido[x].style.pixelHeight + "px";
		}

		igualarFoto();
	}

	function igualarFoto(){
		foto_plato = document.getElementById('foto_plato');
		contenido_plato = document.getElementById('contenido_plato');
		foto_plato.style.height = (contenido_plato.offsetHeight - 1) + "px" || (contenido_plato.style.pixelHeight -1) + "px";
	}

// Menu lateral
	function establecerLateral(){
		lateral = document.getElementById('lateral');
		superior = document.getElementById('superior');
		hummus = document.getElementById('hummus');
		//izq_lateral = lateral.getBoundingClientRect().left;
		ancho_lateral = lateral.getBoundingClientRect().width;
		derecha = hummus.getBoundingClientRect().right;

		if(ancho_ventana > 650){
			lateral.style.margin = "0";
			izquierda = (derecha - izq_lateral) + "px";
			lateral.style.transform = "translateX(" + izquierda + ") rotate(90deg)";

			tope = superior.getBoundingClientRect().bottom;
			lateral.style.top = (tope + lateral.getBoundingClientRect().height/2) + "px";
		}
		else {
			lateral.style.top = superior.getBoundingClientRect().bottom + "px";
			lateral.style.transform = "unset";
			if(ancho_ventana > altura_ventana){
				var padd = ancho_ventana - ancho_lateral;
				lateral.style.margin = "0 " + padd/2 + "px";
			} else {
				lateral.style.margin = "0";
			}
		}
	}

	function mostrarLateral(){
		establecerVentana();
		scroll_top = document.body.scrollTop || document.documentElement.scrollTop;
		lateral = document.getElementById('lateral');
		
		if(ancho_ventana > 1024){
			if(scroll_top > 255){
				lateral.style.visibility = "visible";
			} else {
				lateral.style.visibility = "hidden";
			}
		}
		else if(ancho_ventana > 650){
			if(scroll_top > 155){
				lateral.style.visibility = "visible";
			} else {
				lateral.style.visibility = "hidden";
			}
		} else {
			if(scroll_top > 69){
				lateral.style.visibility = "visible";
			} else {
				lateral.style.visibility = "hidden";
			}
		}
		iluminarLateral(scroll_top);
	}

	function iluminarLateral(scroll){
		marcadores = document.getElementById('lateral').getElementsByTagName('li');
		if(ancho_ventana > 1024){
			switch(true){
				case (scroll > 225 && scroll < 587):
					marcadores[0].style.backgroundColor = "#000";
					marcadores[0].style.color = "#fff";
					marcadores[1].style.backgroundColor = "#fff";
					marcadores[1].style.color = "#000";					
					break;
				case (scroll > 588 && scroll < 2691):
					marcadores[0].style.backgroundColor = "#fff";
					marcadores[0].style.color = "#000";
					marcadores[1].style.backgroundColor = "#000";
					marcadores[1].style.color = "#fff";
					marcadores[2].style.backgroundColor = "#fff";
					marcadores[2].style.color = "#000";
					break;
				case (scroll > 2692 && scroll < 3432) :
					marcadores[1].style.backgroundColor = "#fff";
					marcadores[1].style.color = "#000";
					marcadores[2].style.backgroundColor = "#000";
					marcadores[2].style.color = "#fff";
					marcadores[3].style.backgroundColor = "#fff";
					marcadores[3].style.color = "#000";
					break;
				case (scroll > 3431):
					marcadores[2].style.backgroundColor = "#fff";
					marcadores[2].style.color = "#000";
					marcadores[3].style.backgroundColor = "#000";
					marcadores[3].style.color = "#fff";
					break;
			}
		}
		if(ancho_ventana > 650){
			switch(true){
				case (scroll > 155 && scroll < 1006):
					marcadores[0].style.backgroundColor = "#000";
					marcadores[0].style.color = "#fff";
					marcadores[1].style.backgroundColor = "#fff";
					marcadores[1].style.color = "#000";					
					break;
				case (scroll > 1005 && scroll < 2836):
					marcadores[0].style.backgroundColor = "#fff";
					marcadores[0].style.color = "#000";
					marcadores[1].style.backgroundColor = "#000";
					marcadores[1].style.color = "#fff";
					marcadores[2].style.backgroundColor = "#fff";
					marcadores[2].style.color = "#000";
					break;
				case (scroll > 2835 && scroll < 3268) :
					marcadores[1].style.backgroundColor = "#fff";
					marcadores[1].style.color = "#000";
					marcadores[2].style.backgroundColor = "#000";
					marcadores[2].style.color = "#fff";
					marcadores[3].style.backgroundColor = "#fff";
					marcadores[3].style.color = "#000";
					break;
				case (scroll > 3267):
					marcadores[2].style.backgroundColor = "#fff";
					marcadores[2].style.color = "#000";
					marcadores[3].style.backgroundColor = "#000";
					marcadores[3].style.color = "#fff";
					break;
			}
		}
		else {
			switch(true){
				case (scroll > 78 && scroll < 1046 ):
					marcadores[0].style.backgroundColor = "#000";
					marcadores[0].style.color = "#fff";
					marcadores[1].style.backgroundColor = "#fff";
					marcadores[1].style.color = "#000";					
					break;
				case (scroll > 1045 && scroll < 2910):
					marcadores[0].style.backgroundColor = "#fff";
					marcadores[0].style.color = "#000";
					marcadores[1].style.backgroundColor = "#000";
					marcadores[1].style.color = "#fff";
					marcadores[2].style.backgroundColor = "#fff";
					marcadores[2].style.color = "#000";
					break;
				case (scroll > 2909 && scroll < 3561) :
					marcadores[1].style.backgroundColor = "#fff";
					marcadores[1].style.color = "#000";
					marcadores[2].style.backgroundColor = "#000";
					marcadores[2].style.color = "#fff";
					marcadores[3].style.backgroundColor = "#fff";
					marcadores[3].style.color = "#000";
					break;
				case (scroll > 3560):
					marcadores[2].style.backgroundColor = "#fff";
					marcadores[2].style.color = "#000";
					marcadores[3].style.backgroundColor = "#000";
					marcadores[3].style.color = "#fff";
					break;
			}
		}
	}

// Plato del dia
	function establecerPlato(){
		dia = new Date().getDay();
		//dia = 2;
		//dia = 0;
		diario = document.getElementById('diario');
		pasarela = document.getElementsByClassName('pasarela');
		var alergenos = "";

		if((dia > 1) && (dia < 6)){
			if(idioma == "lexico_es.yml"){
				if(plato_trad.alergenos.length != 0){
					for(x = 0; x < plato_trad.alergenos.length; x++){
						alergenos += "<img src='media/alergeno/" + plato_trad.aler_imag[x] + ".png' alt='" + plato_trad.alergenos[x] + "' title='" + plato_trad.alergenos[x] + "'>";
					}
				}

				entresemana = "<div id='entresemana'><legend>" + menu_texto.legend + "</legend>" +
					"<a href=\"media/imagenes/tragar/menu/" + plato_trad.imagen + "\" data-lightbox='example-20' data-title=\"" + plato_trad.nombre + "\">" +
					"<img src=\"media/imagenes/tragar/menu/minis/" + plato_trad.imagen + "\" class='imagen_plato' alt=\"" + plato_trad.nombre + "\" title=\"" + plato_trad.nombre + "\" class=\"imagen\"></a>" +
					"<p>" + menu_texto.hoy + " <span id='dia'></span> " + menu_texto.tenemos + " <span id='comida'>" + plato_trad.nombre + "</span>(7&euro;)<br>" +
					"<span class='ingredientes'>" +
					"<a data-fancybox data-src=\"php/ingredientes.php?menu=true&imagen=media/imagenes/tragar/menu/" + plato_dia.imagen + "&nombre=" + plato_dia.nombre + "&ingredientes=" + plato_dia.ingredientes.join("+") + "\" data-type='iframe' href='javascript:;'>" + menu_texto.enlace + "</a>" +
					"</span></p>" +
					"<span class='alergeno'><span class='nombre' style='font-size:0.65em'>" + menu_texto.alergeno + ":</span>" + alergenos + "</span></div>" +
					"<legend>" + menu_texto.entresemana + "</legend>";
			}
			else {
				if(plato_trad.alergenos.length != 0){
					for(x = 0; x < plato_trad.alergenos.length; x++){
						alergenos += "<img src='../media/alergeno/" + plato_trad.aler_imag[x] + ".png' alt='" + plato_trad.alergenos[x] + "' title='" + plato_trad.alergenos[x] + "'>";
					}
				}

				entresemana = "<div id='entresemana'><legend>" + menu_texto.legend + "</legend>" +
					"<a href=\"../media/imagenes/tragar/menu/" + plato_trad.imagen + "\" data-lightbox='example-20' data-title=\"" + plato_trad.nombre + "\">" +
					"<img src=\"../media/imagenes/tragar/menu/minis/" + plato_trad.imagen + "\" class='imagen_plato' alt=\"" + plato_trad.nombre + "\" title=\"" + plato_trad.nombre + "\" class=\"imagen\"></a>" +
					"<p>" + menu_texto.hoy + " <span id='dia'></span> " + menu_texto.tenemos + " <span id='comida'>" + plato_trad.nombre + "</span>(7&euro;)<br>" +
					"<span class='ingredientes'>" +
					"<a data-fancybox data-src=\"../php/ingredientes.php?menu=true&imagen=../media/imagenes/tragar/menu/" + plato_dia.imagen + "&nombre=" + plato_dia.nombre + "&ingredientes=" + plato_dia.ingredientes.join("+") + "\" data-type='iframe' href='javascript:;'>" + menu_texto.enlace + "</a>" +
					"</span></p>" +
					"<span class='alergeno'><span class='nombre' style='font-size:0.65em'>" + menu_texto.alergeno + ":</span>" + alergenos + "</span></div>" +
					"<legend>" + menu_texto.entresemana + "</legend>";
			}

			if(alergenos == ""){
				alergenos = menu_texto.sin_alerg;
			}

		  diario.innerHTML = entresemana;
		  $('#semana').css('display', 'block');
 			jQuery('#semana').camera();
		}
		else {
			if(dia == 1){
				leyenda = "<legend>" + menu_texto.leyenda1 + "</legend>";
			}
			else {
				leyenda = "<legend>" + menu_texto.leyenda2 + "</legend>";
			}
			
			finde = "<div id='finde'><legend>" + menu_texto.legend + "</legend>" +
			"<p>" + menu_texto.finde + "</p></div>" + leyenda;

			diario.innerHTML = finde;
			$('#proxima_semana').css('display', 'block');
			jQuery('#proxima_semana').camera();
		}

		hoy = document.getElementById('dia');
		hoy.innerHTML = menu_texto.dia;
		//setTimeout(igualarFoto, 2000);

		for( x = 0; x < pasarela.length; x++){
			pasarela[x].style.width = (diario.offsetWidth -50) + "px" || (diario.pixelWidth - 50) + "px";
		}
	}

// Animaciones de scroll
	$(function() {
		$("#tos").click(function(){ 
		  var posicion = $("#tosta").offset().top - 40;
		  altura_ventana < 651 ? posicion -= 47 : posicion;
		  $("html, body").animate({	scrollTop: posicion	}, 2000);
		});
		$("#rac").click(function(){ 
		  var posicion = $("#racion").offset().top - 40;
		  altura_ventana < 651 ? posicion -= 47 : posicion;
		  $("html, body").animate({	scrollTop: posicion	}, 2000);
		});
		$("#pla").click(function(){ 
		  var posicion = $("#plato").offset().top - 40;
		  altura_ventana < 651 ? posicion -= 47 : posicion;
		  $("html, body").animate({	scrollTop: posicion	}, 2000);
		});
			$("#res").click(function(){ 
		  var posicion = $("#reservas").offset().top - 40;
		  altura_ventana < 651 ? posicion -= 47 : posicion;
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
	(function(d, s, id) {
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

function animarFancy(){
	$('[data-fancybox]').fancybox({
		toolbar  : false,
		smallBtn : true,
		iframe : {
			preload : false,
			css: { 
				width : "400px",
				//width: "100%",
				height: "430px" 
				//height: "100%" 
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
	//mostrarAlerta();
	semaforo = true;
	lengua = true;
	izq_lateral = lateral.getBoundingClientRect().left;

	establecerVentana();
	establecerPlato();
	mostrarMenuMovil();
	animarFancy();
}

window.onload = iniciar;
window.onscroll = mostrarLateral;
window.onresize = establecerVentana;
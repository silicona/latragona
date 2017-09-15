function establecerVentana(){
	ancho_ventana = window.innerWidth || document.body.offsetWidth;
	altura_ventana = window.innerHeight || document.body.offsetHeight;

	contenedor = document.getElementById('contenedor');
	pie = document.getElementById('legal');
	pie.style.top = contenedor.style.top = altura_ventana + "px";

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

// Mapa
	function calcularHorario(){
		var fecha = new Date();
		var dia = fecha.getDay();
		var hora = fecha.getHours();
		preposicion = "en ";
		apertura = false;
		if(dia > 1){
			if((hora > 12 && hora < 16) || (hora > 19 && hora < 24)){
				apertura = true;
				return apertura;
			}
			else {
				if(hora < 13){
					tiempo =  13 - hora;
				} else {
					tiempo = 20 - hora;
				}
				tiempo > 1 ? tiempo += " horas." : tiempo += " hora.";
				tiempo = preposicion + tiempo;
				return apertura, tiempo;
			}
		} else if(dia == 0){
			if(hora > 11 && hora < 16){
				apertura = true;
				return apertura;
			}
			else {
				if(hora < 12){
					tiempo =  12 - hora;
				}
				else {
					tiempo = 36;
				}
				tiempo > 1 ? tiempo += " horas." : tiempo += " hora.";
				tiempo = preposicion + tiempo;
				return apertura, tiempo;
			}
		} else {
			tiempo = "mañana.";
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
		}
		else {
			centro_mapa = tragona;
		}

		var mapa = new google.maps.Map(document.getElementById('mapa'), {
			zoom: 17,
			center: centro_mapa
		});

		apertura ? aviso = "Estamos abiertos." : aviso = "Abrimos " + tiempo;
		//aviso = "Volvemos el 1 de Septiembre";

		var cadena_descripcion = '<div id="mapa_info">' +
			'<div id="aviso">' + aviso + '</div>' +
			'<h1 id="info_cabecera">La Tragona<img src="media/logo_red.gif" id="imagen_mapa"></h1>' +
			'<div id="info_contenido">' +
			'<p><strong>La Tragona</strong> ' + mapa_info + '</p>' +
			'</div></div>';
		var informacion = new google.maps.InfoWindow({
			content: cadena_descripcion
		});

		var marcador = new google.maps.Marker({
			position: tragona,
			map: mapa,
			title: 'La Tragona (Madrid)'
		});
		marcador.addListener('click', function(){
			informacion.open(mapa, marcador);
		})
	}

// Menus Movil
	function mostrarMenuMovil(){
		logo = document.getElementById('logo_superior');
		logo.onclick = mostrarMenu;

		bandera = document.getElementById('multi');
		bandera.onclick = mostrarIdiomas;
	}

	function mostrarMenu(){
		if(!lengua){
			mostrarIdiomas();
		}

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
			$('#menuidiomas').animate({ opacity: 1 }, 1000);
			lengua = false;
		}
		else {
			$('#menuidiomas').animate({ opacity: 0 }, 1000, function(){
				$('#menuidiomas').css('display', "none");
			});
			lengua = true				
		}	
	}

function mostrarElementos(){
	contenedor.style.visibility = "visible";
	document.getElementById('legal').style.visibility = "visible";
}

// Script de icono FB
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.9";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

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
		txt = vuelta;
		msg = alerta.appendChild(d.createElement("p"));
		msg.id = "mensaje_alerta";
		msg.innerHTML = txt;
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
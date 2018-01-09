//Movimiento de Leer
	$(function(){
		$('#leer').on("click", function(){
			var posicion = $('#contenedor').offset().top;
			$('html, body').animate({ scrollTop: posicion }, 1500)
		});
	});

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

// Mapa
	function calcularHorario(){
		var fecha = new Date();
		var dia = fecha.getDay();
		var hora = fecha.getHours();
		preposicion = mapa_en + " ";
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
				tiempo > 1 ? tiempo += " " + mapa_horas + "." : tiempo += " " + mapa_hora + ".";
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
				tiempo > 1 ? tiempo += " " + mapa_horas + "." : tiempo += " " + mapa_hora + ".";
				tiempo = preposicion + tiempo;
				return apertura, tiempo;
			}
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
		}
		else {
			centro_mapa = tragona;
		}

		var mapa = new google.maps.Map(document.getElementById('mapa'), {
			zoom: 17,
			center: centro_mapa
		});

		apertura ? aviso = mapa_abierto : aviso = mapa_abrimos + " " + tiempo;
		//aviso = "Volvemos el 1 de Septiembre";

		var cadena_descripcion = '<div id="mapa_info">' +
			'<div id="aviso">' + aviso + '</div>' +
			'<h1 id="info_cabecera">La Tragona<img src="' + mapa_logo + '" id="imagen_mapa"></h1>' +
			'<div id="info_contenido">' +
			'<p><strong>La Tragona</strong> ' + mapa_info + '</p>' +
			'</div></div>';

		var informacion = new google.maps.InfoWindow({ content: cadena_descripcion });

		var marcador = new google.maps.Marker({
			position: tragona,
			map: mapa,
			title: 'La Tragona (Madrid)'
		});

		marcador.addListener('click', function(){	informacion.open(mapa, marcador);	})
	}

// Menus movil
	function mostrarMenuMovil(){
		logo = document.getElementById('logo_superior');
		logo.onclick = mostrarMenu;

		bandera = document.getElementById('multi');
		bandera.onclick = mostrarIdiomas;
	}

	function mostrarMenu(){
		
		if(!lengua){ mostrarIdiomas(); }

		var menu = document.getElementById('menumovil');
		var	ancho_ventana = window.innerWidth || document.body.offsetWidth;

		if(ancho_ventana > 650 && ancho_ventana < 1025){
			
			var num = parseInt($('#contenedor').css('top').slice(0, $('#contenedor').css('top').length-2));
			$('#menumovil').css('top', num - 261);

			if(semaforo){
				$('#menumovil').css('display', "block");
				$(function(){	$('html, body').animate({ scrollTop: $('#menumovil').css('top') }, 1000) });
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
			$('#menumovil').css('top', "45px");
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
			lengua = true;	
		}	
	}

function mostrarElementos(){
	contenedor.style.visibility = "visible";
	$('#legal').css('visibility', "visible");
}

// Script de icono FB
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.9";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

// Fancybox
function animarFancy(){
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

function iniciar(){
	semaforo = true;
	lengua = true;
	mostrarMenuMovil();
	mostrarElementos();
	animarFancy();
	window.onscroll = desvanecerLeer;
}

window.onload = iniciar;
//window.onresize = establecerVentana;
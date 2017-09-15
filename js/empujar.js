// Control de ventana
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
	}

// Menu lateral
	function establecerLateral(){
		lateral = document.getElementById('lateral');
		superior = document.getElementById('superior');
		estrella = document.getElementById('estrella');

		ancho_lateral = lateral.getBoundingClientRect().width;
		derecha = estrella.getBoundingClientRect().right

		if(ancho_ventana > 650){
			lateral.style.margin = "0";
			izquierda = derecha - izq_lateral + "px";
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
		if(altura_ventana > 650){
			if(scroll_top > 225){
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
		if(ancho_ventana > 651){
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
				case (scroll > 2692 && scroll < 3837) :
					marcadores[1].style.backgroundColor = "#fff";
					marcadores[1].style.color = "#000";
					marcadores[2].style.backgroundColor = "#000";
					marcadores[2].style.color = "#fff";
					marcadores[3].style.backgroundColor = "#fff";
					marcadores[3].style.color = "#000";
					break;
				case (scroll > 3838 && scroll < 3942):
					marcadores[2].style.backgroundColor = "#fff";
					marcadores[2].style.color = "#000";
					marcadores[3].style.backgroundColor = "#000";
					marcadores[3].style.color = "#fff";
					marcadores[4].style.backgroundColor = "#fff";
					marcadores[4].style.color = "#000";
					break;
				case (scroll > 3942):
					marcadores[3].style.backgroundColor = "#fff";
					marcadores[3].style.color = "#000";
					marcadores[4].style.backgroundColor = "#000";
					marcadores[4].style.color = "#fff";
					break;
			}
		}
		else {
			switch(true){
				case (scroll > 69 && scroll < 385 ):
					marcadores[0].style.backgroundColor = "#000";
					marcadores[0].style.color = "#fff";
					marcadores[1].style.backgroundColor = "#fff";
					marcadores[1].style.color = "#000";					
					break;
				case (scroll > 384 && scroll < 1863):
					marcadores[0].style.backgroundColor = "#fff";
					marcadores[0].style.color = "#000";
					marcadores[1].style.backgroundColor = "#000";
					marcadores[1].style.color = "#fff";
					marcadores[2].style.backgroundColor = "#fff";
					marcadores[2].style.color = "#000";
					break;
				case (scroll > 1862 && scroll < 2496) :
					marcadores[1].style.backgroundColor = "#fff";
					marcadores[1].style.color = "#000";
					marcadores[2].style.backgroundColor = "#000";
					marcadores[2].style.color = "#fff";
					marcadores[3].style.backgroundColor = "#fff";
					marcadores[3].style.color = "#000";
					break;
				case (scroll > 2495 && scroll < 2863):
					marcadores[2].style.backgroundColor = "#fff";
					marcadores[2].style.color = "#000";
					marcadores[3].style.backgroundColor = "#000";
					marcadores[3].style.color = "#fff";
					marcadores[4].style.backgroundColor = "#fff";
					marcadores[4].style.color = "#000";
					break;
				case (scroll > 2862):
					marcadores[3].style.backgroundColor = "#fff";
					marcadores[3].style.color = "#000";
					marcadores[4].style.backgroundColor = "#000";
					marcadores[4].style.color = "#fff";
					break;
			}
		}
	}

// Animaciones de scroll
	$(function() {
		$("#cerve").click(function(){ 
		  var posicion = $("#cerveza").offset().top - 40;
		  altura_ventana < 651 ? posicion -= 47 : posicion;
		  $("html, body").animate({	scrollTop: posicion	}, 2000);
		});
		$("#vin").click(function(){ 
		  var posicion = $("#vino").offset().top - 40;
		  altura_ventana < 651 ? posicion -= 47 : posicion;
		  $("html, body").animate({	scrollTop: posicion	}, 2000);
		});
		$("#lic").click(function(){ 
		  var posicion = $("#licores").offset().top - 40;
		  altura_ventana < 651 ? posicion -= 47 : posicion;
		  $("html, body").animate({	scrollTop: posicion	}, 2000);
		});
			$("#cuba").click(function(){ 
		  var posicion = $("#combinados").offset().top - 40;
		  altura_ventana < 651 ? posicion -= 47 : posicion;
		  $("html, body").animate({	scrollTop: posicion	}, 2000);
		});
		$("#sin").click(function(){ 
		  var posicion = $("#sin_alcohol").offset().top - 40;
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

function animarFancy(){
	$('[data-fancybox]').fancybox({
		toolbar  : false,
		smallBtn : true,
		iframe : {
			preload : false,
			css: { 
				width : "400px",
				height: "600px" 
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
		alerta.style.margin = "3ex";
		alerta.style.background = "rgba(255, 255, 255, 0.8)";
		alerta.style.height = "calc(100% - 6ex)";
		alerta.style.borderRadius = "5pt";

		// MSIE doesnt treat position:fixed correctly, so this compensates for positioning the alert
		if(d.all && !window.opera) alerta.style.top = document.documentElement.scrollTop + "px";

		titulo = alerta.appendChild(d.createElement("p"));
		titulo.appendChild(d.createTextNode(titular));
		titulo.id = "titulo_alerta";

		// create a paragraph element to contain the txt argument
		msg = alerta.appendChild(d.createElement("p"));
		msg.innerHTML = vuelta;
		msg.id= "mensaje_alerta";
	}

function iniciar(){
	//mostrarAlerta();
	lengua = true;
	semaforo = true;
	izq_lateral = lateral.getBoundingClientRect().left;
	establecerVentana();
	mostrarMenuMovil();
	animarFancy();
}

window.onresize = establecerVentana;
window.onload = iniciar;
window.onscroll = mostrarLateral;
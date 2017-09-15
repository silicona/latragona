function establecerVentana(){
	ancho_ventana = window.innerWidth || document.body.offsetWidth;
	altura_ventana = window.innerHeight || document.body.offsetHeight;

	contenedor = document.getElementById('contenedor');
	footer = document.getElementsByTagName('footer')[0];
	footer.style.top = contenedor.style.top = altura_ventana + "px";

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

	redes_divs = document.getElementById('redes').getElementsByTagName('div');

	if(ancho_ventana < 651){
		for(x = 0; x < redes_divs.length; x++){
			redes_divs[x].style.left = ancho_ventana + "px";
		}
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

// Menus movil
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

// Movimiento redes
	function moverRedes(){

		$('#abrir_twitter').on('click', function(){
			console.log("dentro twitter");
			$('#tw').css('display', 'block');
			var pos_izq = $('#tw').offset().left;
			$('html, body').animate({scrollLeft: pos_izq}, 1000);
		});

		$('#abrir_fb').on('click', function(){
			$('#fb').css('display', 'block');
			var fb_pos_izq = $('#fb').offset().left;
			$('html, body').animate({scrollLeft: fb_pos_izq}, 1000);
		});

		$('#abrir_tragona').on('click', function(){
			$('#tragona').css('display', 'block');
			var posi = $('#tragona').offset().left;
			$('html, body').animate({scrollLeft: posi}, 1000);
		});

		$('#abrir_familia').on('click', function(){
			$('#familia').css('display', 'block');
			var posi = $('#familia').offset().left;
			$('html, body').animate({scrollLeft: posi}, 1000)
		});

		//$('#cierre_twitter').on('click', function(){
		$('.cierre').on('click', function(){
			$('html, body').animate({scrollLeft: 0}, 1000, function(){
				$('.red').css('display', 'none');
			});
		});
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

// Script de hashtag twitter
  !function(d,s,id){
  	var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
  	if(!d.getElementById(id)){
  		js=d.createElement(s);
  		js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
  		fjs.parentNode.insertBefore(js,fjs);
  	}
  }(document,"script","twitter-wjs");

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
		msg.innerHTML = vuelta;
		msg.id= "mensaje_alerta";
	}

function iniciar(){
	//mostrarAlerta();
	semaforo = true;
	lengua = true;
	establecerVentana();
	mostrarMenuMovil();
	mostrarElementos();
	moverRedes();
	window.onscroll = desvanecerLeer;
}

window.onload = iniciar;
window.onresize = establecerVentana;
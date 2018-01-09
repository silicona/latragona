// Menu lateral
	function mostrarLateral(){
 		ancho_ventana = window.innerWidth || document.body.offsetWidth;
		scroll_top = document.body.scrollTop || document.documentElement.scrollTop;
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
			if(ancho_ventana > 651){
				switch(true){
					case (scroll > 200 && scroll < 1093):
						marcadores[0].style.backgroundColor = "#000";
						marcadores[0].style.color = "#fff";				
						break;
					case (scroll > 1092 && scroll < 3735):
						marcadores[1].style.backgroundColor = "#000";
						marcadores[1].style.color = "#fff";
						break;
					case (scroll > 3734 && scroll < 5118) :
						marcadores[2].style.backgroundColor = "#000";
						marcadores[2].style.color = "#fff";
						break;
					case (scroll > 5117 && scroll < 5478):
						marcadores[3].style.backgroundColor = "#000";
						marcadores[3].style.color = "#fff";
						break;
					case (scroll > 5477):
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
						break;
					case (scroll > 384 && scroll < 1863):
						marcadores[1].style.backgroundColor = "#000";
						marcadores[1].style.color = "#fff";
						break;
					case (scroll > 1862 && scroll < 2496) :
						marcadores[2].style.backgroundColor = "#000";
						marcadores[2].style.color = "#fff";
						break;
					case (scroll > 2495 && scroll < 2863):
						marcadores[3].style.backgroundColor = "#000";
						marcadores[3].style.color = "#fff";
						break;
					case (scroll > 2862):
						marcadores[4].style.backgroundColor = "#000";
						marcadores[4].style.color = "#fff";
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

// Animaciones de desplazamineto
	$(function() {
		altura = $(document).height();
		$("#cerve").click(function(){ 
		  var posicion = $("#cerveza").offset().top - 40;
		  altura < 651 ? posicion -= 47 : posicion;
		  $("html, body").animate({	scrollTop: posicion	}, 2000);
		});
		$("#vin").click(function(){ 
		  var posicion = $("#vino").offset().top - 40;
		  altura < 651 ? posicion -= 47 : posicion;
		  $("html, body").animate({	scrollTop: posicion	}, 2000);
		});
		$("#lic").click(function(){ 
		  var posicion = $("#licores").offset().top - 40;
		  altura < 651 ? posicion -= 47 : posicion;
		  $("html, body").animate({	scrollTop: posicion	}, 2000);
		});
			$("#cuba").click(function(){ 
		  var posicion = $("#combinados").offset().top - 40;
		  altura < 651 ? posicion -= 47 : posicion;
		  $("html, body").animate({	scrollTop: posicion	}, 2000);
		});
		$("#sin").click(function(){ 
		  var posicion = $("#sin_alcohol").offset().top - 40;
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
	lengua = true;
	semaforo = true;
	mostrarMenuMovil();
	animarFancy();
}

window.onload = iniciar;
window.onscroll = mostrarLateral;
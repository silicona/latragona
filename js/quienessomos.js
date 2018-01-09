//Movimiento de Leer
	$(function(){
		$('#leer').on("click", function(){
			$('html, body').animate({ scrollTop: $('#contenedor').offset().top }, 1500)
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
	$('#contenedor').css('visibility', "visible");
	$('#legal').css('visibility',"visible");
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
	moverRedes();
	animarFancy();
	window.onscroll = desvanecerLeer;
}

window.onload = iniciar;

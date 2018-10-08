// Menu lateral
	function mostrarLateral(){
 		
 		ancho_ventana = window.innerWidth || document.body.offsetWidth;
		scroll_top = document.body.scrollTop || document.documentElement.scrollTop;
		altura_lateral = $('#lateral').height();

		if(ancho_ventana >= 576){

			if( scroll_top > $('#cerveza').offset().top - 44 ){

				$('#lateral').show();

			} else {

				$('#lateral').hide();

			}

		} else {

			if( scroll_top > $('#cerveza').offset().top - ( 44 + altura_lateral ) ){

				$('#lateral').show();

			} else {

				$('#lateral').hide();

			}
		}		

		iluminarLateral(scroll_top);
		
	}

	function iluminarLateral(scroll){

		marcadores = document.getElementById('lateral').getElementsByTagName('li');
		for(a=0; a < marcadores.length; a++){
			marcadores[a].style.backgroundColor = "initial";
			marcadores[a].style.color = "#000";					
		}

		encender();

		function encender(){

			if(ancho_ventana >= 576){

				altura_cerveza = $('#cerveza').offset().top - 44;
				altura_vino    = $('#vino').offset().top - 44;
				altura_licor   = $('#licores').offset().top - 44;
				altura_combi   = $('#combinados').offset().top - 44;
				altura_sin     = $('#sin_alcohol').offset().top - 44;

			}	else {

				altura_cerveza = $('#cerveza').offset().top - ( 44 + altura_lateral );
				altura_vino    = $('#vino').offset().top - ( 44 + altura_lateral );
				altura_licor   = $('#licores').offset().top - ( 44 + altura_lateral );
				altura_combi   = $('#combinados').offset().top - ( 44 + altura_lateral );
				altura_sin     = $('#sin_alcohol').offset().top - ( 44 + altura_lateral );

			}

			switch(true){

				case ( scroll_top >= altura_sin ) || ( scroll_top + $(window).height() == $(document).height() ):
					marcadores[4].style.backgroundColor = "#000000";
					marcadores[4].style.color = "#FFFFFF";
					break;

				case ( scroll_top >= altura_combi ) && ( scroll_top < altura_sin ):
					marcadores[3].style.backgroundColor = "#000000";
					marcadores[3].style.color = "#FFFFFF";
					break;

				case ( scroll_top >= altura_licor ) && ( scroll_top < altura_combi ):
					marcadores[2].style.backgroundColor = "#000000";
					marcadores[2].style.color = "#FFFFFF";
					break;

				case ( scroll_top >= altura_vino ) && ( scroll_top < altura_licor ):
					marcadores[1].style.backgroundColor = "#000000";
					marcadores[1].style.color = "#FFFFFF";
					break;

				case scroll_top < altura_vino:
					marcadores[0].style.backgroundColor = "#000000";
					marcadores[0].style.color = "#FFFFFF";				
					break;

			}
		}
	}

// Animaciones de desplazamineto
	$(function() {

		$('.boton', '#lateral').click(function(e){

			e.preventDefault();

			var posicion = $($(this).attr('data_seccion')).offset().top - 43;
		  $(document).width() < 576 ? posicion -= $('#lateral').height() : '';

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

		}	else {

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

		}	else {

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
//Desde tragar
	function establecerVentana(){
		ancho_ventana = window.innerWidth || document.body.offsetWidth;
		altura_ventana = window.innerHeight || document.body.offsetHeight;
		//contenedor = document.getElementById('contenedor');
		//contenedor.style.width = ancho_ventana + "px";

		// Ajuste menu superior		
			// menu_superior = document.getElementById('superior').getElementsByTagName('ul')[0];
			// ancho_menu = menu_superior.getBoundingClientRect().width;

			// var text = document.getElementById('logo_superior').getElementsByTagName('span')[0];
			
			// if(ancho_menu < 651 && ancho_menu > 315){
			//  	//text.style.display = "inline";
			// }
			// else if(ancho_menu < 316){
			//  	//text.style.display = "none";
			// }
	
		//establecerAlturaFoto();
		establecerLateral();
	}

	function establecerLateral(){
		console.log(izq_lateral);
		lateral = document.getElementById('lateral');
		superior = document.getElementById('superior');
		hummus = document.getElementById('hummus');
		//izq_lateral = lateral.getBoundingClientRect().left;
		ancho_lateral = lateral.getBoundingClientRect().width;
		derecha = hummus.getBoundingClientRect().right;

		if(ancho_ventana > 650){
			//lateral.style.margin = "0";
			izquierda = (derecha - izq_lateral) + "px";
			//lateral.style.transform = "translateX(" + izquierda + ") rotate(90deg)";

			//tope = superior.getBoundingClientRect().bottom;
			//lateral.style.top = (tope + lateral.getBoundingClientRect().height/2) + "px";
		}
		else {
			//lateral.style.top = superior.getBoundingClientRect().bottom + "px";
			//lateral.style.transform = "unset";
			if(ancho_ventana > altura_ventana){
				var padd = ancho_ventana - ancho_lateral;
				//lateral.style.margin = "0 " + padd/2 + "px";
			} else {
				//lateral.style.margin = "0";
			}
		}
	}

	/*
	function establecerAlturaFoto(){
			foto = document.getElementsByClassName('foto');
			contenido = document.getElementsByClassName('contenido');

			for(x=0; x<contenido.length;x++){
				foto[x].style.height = contenido[x].offsetHeight + "px" || contenido[x].style.pixelHeight + "px";
			}

			//igualarFoto();
		}

		function igualarFoto(){
			foto_plato = document.getElementById('foto_plato');
			contenido_plato = document.getElementById('contenido_plato');
			foto_plato.style.height = (contenido_plato.offsetHeight - 1) + "px" || (contenido_plato.style.pixelHeight -1) + "px";
	}
	*/
	/*
	Plato del dia - 
		function establecerPlato(){
			dia = new Date().getDay();
			//dia = 1;
			diario = document.getElementById('diario');
			pasarela = document.getElementsByClassName('pasarela');
			
			function crear(div){
				return document.createElement(div);
			}

			function hacerCarta(){
				function detectarIdioma(archivo_idioma){
					return archivo_idioma.substr(7, 2);
				}

				function enrutar(ruta){
					var prefijo = "../";
					var abreviado = detectarIdioma(idioma);
					console.log(abreviado);
					abreviado == "es" ? ruta : ruta = prefijo + ruta;
					return ruta
				}

				function hacerAlergenos(espacio, nombres, imagenes){
					if (!(nombres.length == 0)){
						for(x=0; x < nombres.length; x++){
							var alergeno = crear('img');
							alergeno.src = enrutar("media/alergeno/" + imagenes[x] + ".png");
							alergeno.alt = alergeno.title = nombres[x];
							espacio.appendChild(alergeno);
						}
					} else {
						var alergeno = crear('span');
						alergeno.id = "sin_alergenos";
						alergeno.innerHTML = menu_texto.sin_alerg;
						espacio.appendChild(alergeno);
					}
				}

				var texto = crear('div');
				texto.id = "entresemana";
				var titulo = crear('legend');
				titulo.innerHTML = menu_texto.legend;
				texto.appendChild(titulo);

				var enlace = crear('a');
			  enlace.href = enrutar('media/imagenes/tragar/menu/' + plato_trad.imagen);
				enlace.setAttribute('data-title', plato_trad.nombre);
				enlace.setAttribute('data-lightbox', 'example-20');
				var imagen = crear('img');
				imagen.src = enrutar('media/imagenes/tragar/menu/minis/' + plato_trad.imagen);
				imagen.setAttribute('class', 'imagen_plato');
				imagen.alt = imagen.title = plato_trad.nombre;
				enlace.appendChild(imagen);
				texto.appendChild(enlace);

				var parrafo = crear('p');
				parrafo.innerHTML = menu_texto.hoy + " ";
				var dia = crear('span');
				dia.id = "dia";
				parrafo.appendChild(dia);
				parrafo.innerHTML += " " + menu_texto.tenemos + " ";
				comida = crear('span');
				comida.id = "comida";
				comida.innerHTML = "<b>" + plato_trad.nombre + "</b>";
				parrafo.appendChild(comida);
				parrafo.innerHTML += " (7&euro;)<br>";
				var ingredientes = crear('span');
				ingredientes.id = "ingredientes";
				var enlace_ing = crear('a');
				enlace_ing.innerHTML = menu_texto.enlace;
				enlace_ing.href = 'javascript:;';
				enlace_ing.setAttribute('data-fancybox', true);
				enlace_ing.setAttribute('data-type', 'iframe');
				var ruta_1 = enrutar('php/ingredientes.php?menu=true&imagen=');
				var ruta_2 = enrutar("media/imagenes/tragar/menu/" + plato_dia.imagen + "&nombre=" + plato_dia.nombre + "&ingredientes=" + plato_dia.ingredientes.join("+"));
				enlace_ing.setAttribute('data-src', ruta_1 += ruta_2);
				ingredientes.appendChild(enlace_ing);
				parrafo.appendChild(ingredientes);
				texto.appendChild(parrafo);

				var alergeno = crear('span');
				alergeno.setAttribute('class', "alergeno");
				alergeno_nombre = crear('span');
				alergeno_nombre.setAttribute('class', 'nombre');
				alergeno_nombre.style.fontSize = '0.65em';
				alergeno_nombre.innerHTML = menu_texto.alergeno + ":";
				alergeno.appendChild(alergeno_nombre);
				hacerAlergenos(alergeno, plato_trad.alergenos, plato_dia.aler_imag);
				texto.appendChild(alergeno);
				diario.appendChild(texto);

				var subtitulo = crear('legend');
				subtitulo.innerHTML = menu_texto.legend;
				diario.appendChild(subtitulo);
			}

			function hacerFinde(texto){
				var finde = crear('div');
				finde.id = "finde";
				titulo = crear('legend');
				titulo.innerHTML = menu_texto.legend;
				finde.appendChild(titulo);

				var parrafo = crear('p');
				parrafo.innerHTML = menu_texto.finde;
				finde.appendChild(parrafo);
				diario.appendChild(finde);

				var subtitulo = crear('legend');
				subtitulo.innerHTML = eval("menu_texto.leyenda" + String(texto));
				diario.appendChild(subtitulo);
				
				switch(texto){
					case 1:
						$('#semana').css('display', 'block');
	 					jQuery('#semana').camera();
	 					break;
	 				case 2:
	 					$('#proxima_semana').css('display', 'block');
						jQuery('#proxima_semana').camera();
						break;
				}
			}

			var puente = new Date();
			jueves12 = /Thu Oct 12/;
			viernes13 = /Fri Oct 13/;
			if(jueves12.test(puente) || viernes13.test(puente)){
				hacerFinde(2);
			}
			else{
				if((dia > 1) && (dia < 6)){
				  hacerCarta();
				  $('#semana').css('display', 'block');
		 			jQuery('#semana').camera();
				}
				else {
					(dia == 1) ? hacerFinde(1) : hacerFinde(2);
				}
			}

			hoy = document.getElementById('dia');
			hoy.innerHTML = menu_texto.dia;
			//setTimeout(igualarFoto, 2000);

			for( x = 0; x < pasarela.length; x++){
				pasarela[x].style.width = (diario.offsetWidth -50) + "px" || (diario.pixelWidth - 50) + "px";
			}
		}
*/

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
// Otros


// Menus movil

	// function mostrarMenuMovil(){
	// 	logo = document.getElementById('logo_superior');
	// 	logo.onclick = mostrarMenu;

	// 	bandera = document.getElementById('multi');
	// 	bandera.onclick = mostrarIdiomas;
	// }

	// function mostrarMenuMovil(){
	// 	//logo = document.getElementById('logo_superior');
	// 	//logo.onclick = mostrarMenu;
	// 	$('.menu').click( function(){	mostrarMenu(); });

	// 	bandera = document.getElementById('multi');
	// 	bandera.onclick = mostrarIdiomas;
	// }

	// function mostrarMenu(){
		
	// 	if(!lengua){ mostrarIdiomas(); }

	// 	var menu = document.getElementById('menumovil');
	// 	var	ancho_ventana = window.innerWidth || document.body.offsetWidth;

	// 	if(ancho_ventana > 650 && ancho_ventana < 1025){
			
	// 		var num = parseInt($('#contenedor').css('top').slice(0, $('#contenedor').css('top').length-2));
	// 		$('#menumovil').css('top', num - 261);

	// 		if(semaforo){
	// 			$('#menumovil').css('display', "block");
	// 			$(function(){	$('html, body').animate({ scrollTop: $('#menumovil').css('top') }, 1000) });
	// 			$('#menumovil').animate({opacity: 1}, 1000);
	// 			semaforo = false;
	// 		}
	// 		else {
	// 			$(function(){	$('html, body').animate({ scrollTop: $('#contenedor').offset().top}, 1000) });
	// 			$('#menumovil').animate({opacity: 0}, 1000, function(){
	// 				$('#menumovil').css('display', "none");
	// 			});
	// 			semaforo = true				
	// 		}
	// 	}
	// 	else {
	// 		$('#menumovil').css('top', "45px");
	// 		if(semaforo){
	// 			$('#menumovil').css('display', "block");
	// 			$('#menumovil').animate({opacity: 1}, 1000);
	// 			semaforo = false;
	// 		}
	// 		else {
	// 			$('#menumovil').animate({opacity: 0}, 1000, function(){
	// 				$('#menumovil').css('display', "none");
	// 			});
	// 			semaforo = true				
	// 		}
	// 	}
	// }

	// function mostrarIdiomas(){
	// 	if(!semaforo){ mostrarMenu();	}
		
	// 	if(lengua){
	// 		$('#menuidiomas').css('display', "block");
	// 		$('#menuidiomas').animate({opacity: 1}, 1000);
	// 		lengua = false;
	// 	}
	// 	else {
	// 		$('#menuidiomas').animate({opacity: 0}, 1000, function(){
	// 			$('#menuidiomas').css('display', "none");
	// 		});
	// 		lengua = true				
	// 	}	
	// }

// Movimiento redes
	// function moverRedes(){

	// 	$('#abrir_twitter').on('click', function(){
	// 		console.log("dentro twitter");
	// 		$('#tw').css('display', 'block');
	// 		var pos_izq = $('#tw').offset().left;
	// 		$('html, body').animate({scrollLeft: pos_izq}, 1000);
	// 	});

	// 	$('#abrir_fb').on('click', function(){
	// 		$('#fb').css('display', 'block');
	// 		var fb_pos_izq = $('#fb').offset().left;
	// 		$('html, body').animate({scrollLeft: fb_pos_izq}, 1000);
	// 	});

	// 	$('#abrir_tragona').on('click', function(){
	// 		$('#tragona').css('display', 'block');
	// 		var posi = $('#tragona').offset().left;
	// 		$('html, body').animate({scrollLeft: posi}, 1000);
	// 	});

	// 	$('#abrir_familia').on('click', function(){
	// 		$('#familia').css('display', 'block');
	// 		var posi = $('#familia').offset().left;
	// 		$('html, body').animate({scrollLeft: posi}, 1000)
	// 	});

	// 	//$('#cierre_twitter').on('click', function(){
	// 	$('.cierre').on('click', function(){
	// 		$('html, body').animate({scrollLeft: 0}, 1000, function(){
	// 			$('.red').css('display', 'none');
	// 		});
	// 	});
	// }

	/* Fancybox
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
	}*/

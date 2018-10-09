
function enviarAjax(idioma){

	function imprimir(datos){

  		var campo = document.getElementById('respuesta');
		campo.innerHTML = datos
	}

	var envio = new XMLHttpRequest();
	envio.open("get", "../php/idiomas/lexico_" + idioma + ".yml", true);
	envio.send(null);


	envio.onerror = function(evento){

		imprimir('Error al ejecutar Ajax');
		//console.log(evento);
	}

	envio.onreadystatechange = function(){
		
		if( this.status == 200 && this.readyState == 4 ){

			var arr_respuesta = this.responseText.split("\r");

			//imprimir(arr_respuesta.join('<br>'));

			var arr_titulos = [
				'alergenos',
				'bebida',
				'ingrediente',
				'nombre',
				'producto',
				'titulos',
				'mapa',
				'aviso',
				'menu',
				'dia',
				'nav',
				'lateral',
				'foto',
				'form',
				'legal',
				'rrss',
				'meta',
				'index',
				'tragar',
				'empujar',
				'dondeestamos',
				'quienessomos',
				'contacta'
			];

			var salida = [];

			for( indice in arr_respuesta ){

				var elemento = arr_respuesta[indice].replace(':', '').replace("\n", '');
				var apartado = arr_titulos.indexOf(elemento);

				if(  apartado !== -1 ){

					var nombre = arr_titulos[apartado].charAt(0).toUpperCase() + arr_titulos[apartado].slice(1);
					salida.push(' Recibo el apartado ' + nombre + '.' );
				}
			}

			if( salida.length < 22 ){

				salida.unshift('Faltan ' + (salida.length - 22) + ' elementos.');

			} else {

				salida.unshift('Todos los elementos recibidos.');
			}

			imprimir( salida.join('<br>') );
		}
	}
}


function hacerIdioma2(evento){

	//console.log(evento);
	idioma1 = Array.from(document.getElementById('idioma1').options);
	idioma2 = document.getElementById('idioma2');
	boton = document.getElementById('comprobar');
	boton.style.opacity = 1;

	for( a in idioma1 ){

		if( idioma1[a].selected || idioma1[a].value == "false" ){
			//idioma1.splice(a, 1);
			continue;
		}

		idioma2.appendChild(idioma1[a]);
	}
}


function comprobar_idiomas(){

	var idioma1 = document.getElementsByName('idioma1')[0].value;
	var idioma2 = document.getElementById('idioma2').value;
	var test = document.getElementById('test_hecho').value;
	var check = (idioma1 != "false") && (idioma2 != "false");
	
	//console.log(test);

	return test == 'OK' ? true : check;
}


function prepararInversion(){

	function abreviarIdioma(idioma){

		switch(idioma){
			case "Castellano":
				return "es";
			case "Frances":
				return "fr";
			case "Ingles":
				return "en"
			case "Taliano":
				return "it";
		}
	}

	var test = document.getElementById('test_hecho').value;

	if( test == 'OK' ){

		var comprobar = document.getElementById('comprobar');
		var invertir = document.getElementById('invertir');

		comprobar.style.opacity = 0;
		invertir.style.opacity = 1;

		var idioma1 = document.getElementById('idioma1');
		var idioma2 = document.getElementById('idioma2');
		var titulo = document.getElementById('titulo_test').innerHTML;

		console.log(titulo);
		var regex = /(\w+)\sy\s(\w+)$/;

		var idio1 = titulo.match(regex)[1];
		var idio2 = titulo.match(regex)[2];

		idioma1.value = abreviarIdioma(idio1);
		idioma2.value = abreviarIdioma(idio2);
	}
}

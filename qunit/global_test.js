
const { test, skip, todo } = QUnit;

QUnit.module('Global', hooks => {

	/* Variables globales desde php/secciones/dondeestamos.php */
	mapa_abierto = 'Hemos abierto las puertas.';
	mapa_abrimos = 'Abrimos';
	mapa_en      = 'en';
	mapa_hora    = 'hora';
	mapa_horas   = 'horas';
	mapa_mañana  = 'mañana.';
	mapa_logo    = 'media/logo_red.gif';
	mapa_info    = 'es un bar de tapeo y vinos junto al <strong>Rastro de Madrid</strong> entre las paradas de metro de La Latina y Tirso de Molina';
	
	var e_test = {};

	hooks.before( t => {

	});

	hooks.beforeEach( t => {

		//console.log('en before');
		this.fix = $('#qunit-fixture');
	});

	hooks.afterEach( t => {});

	test( 'Calcular horario', t => {

		// Lunes 12:30
		fecha = new Date( '2019-03-18T11:30:00Z' );
		hora = fecha.getHours() + ':' + fecha.getMinutes();

		var res = calcularHorario(fecha);

		t.strictEqual( res, 'mañana.', 'Lunes ' + hora + ' Cerrado - Mañana.' );

		// Lunes 17:30
		fecha = new Date( '2019-03-18T16:30:00Z' );
		hora = fecha.getHours() + ':' + fecha.getMinutes();

		res = calcularHorario(fecha);

		t.strictEqual( res, 'mañana.', 'Lunes ' + hora + ' Cerrado - Mañana.' );

		// Martes 12:30
		fecha = new Date( '2019-03-19T11:30:00Z' );
		hora = fecha.getHours() + ':' + fecha.getMinutes();

		res = calcularHorario(fecha);

		t.strictEqual( res, 'en 7 horas.', 'Martes ' + hora + ' Cerrado - en 7 horas.' );

		// Martes 19:30
		fecha = new Date( '2019-03-19T18:30:00Z' );
		hora = fecha.getHours() + ':' + fecha.getMinutes();

		res = calcularHorario(fecha);

		t.strictEqual( res, true, 'Martes ' + hora + ' Abierto.' );

		// Miercoles 12:30
		fecha = new Date( '2019-03-20T11:30:00Z' );
		hora = fecha.getHours() + ':' + fecha.getMinutes();

		res = calcularHorario(fecha);

		t.strictEqual( res, 'en 7 horas.', 'Miércoles ' + hora + ' Cerrado - en 7 horas.' );

		// Miercoles 16:30
		fecha = new Date( '2019-03-20T15:30:00Z' );
		hora = fecha.getHours() + ':' + fecha.getMinutes();

		res = calcularHorario(fecha);

		t.strictEqual( res, 'en 3 horas.', 'Miércoles ' + hora + ' Cerrado - en 3 horas.' );

		// Miercoles 19:30
		fecha = new Date( '2019-03-20T18:30:00Z' );
		hora = fecha.getHours() + ':' + fecha.getMinutes();

		res = calcularHorario(fecha);

		t.strictEqual( res, true, 'Miércoles ' + hora + ' Abierto.' );

		// Jueves 12:30
		fecha = new Date( '2019-03-21T11:30:00Z' );
		hora = fecha.getHours() + ':' + fecha.getMinutes();

		res = calcularHorario(fecha);

		t.strictEqual( res, 'en 7 horas.', 'Jueves ' + hora + ' Cerrado - en 7 horas.' );

		// Viernes 12:30
		fecha = new Date( '2019-03-22T11:30:00Z' );
		hora = fecha.getHours() + ':' + fecha.getMinutes();

		res = calcularHorario(fecha);

		t.strictEqual( res, 'en 7 horas.', 'Viernes ' + hora + ' Cerrado - en 7 horas.' );

		// Sabado 12:30
		fecha = new Date( '2019-03-23T11:30:00Z' );
		hora = fecha.getHours() + ':' + fecha.getMinutes();

		res = calcularHorario(fecha);

		t.strictEqual( res, 'en 1 hora.', 'Sabado ' + hora + ' Cerrado - en 1 hora.' );

		// Sabado 13:30
		fecha = new Date( '2019-03-23T12:30:00Z' );
		hora = fecha.getHours() + ':' + fecha.getMinutes();

		res = calcularHorario(fecha);

		t.strictEqual( res, true, 'Sabado ' + hora + ' Abierto.' );

		// Sabado 17:30
		fecha = new Date( '2019-03-23T16:30:00Z' );
		hora = fecha.getHours() + ':' + fecha.getMinutes();

		res = calcularHorario(fecha);

		t.strictEqual( res, 'en 2 horas.', 'Sabado ' + hora + ' Cerrado - en 2 horas.' );

		// Domingo 11:30
		fecha = new Date( '2019-03-24T10:30:00Z' );
		hora = fecha.getHours() + ':' + fecha.getMinutes();

		res = calcularHorario(fecha);

		t.strictEqual( res, 'en 2 horas.', 'Domingo ' + hora + ' Cerrado - en 2 horas.' );

		// Domingo 17:30
		fecha = new Date( '2019-03-24T16:30:00Z' );
		hora = fecha.getHours() + ':' + fecha.getMinutes();

		res = calcularHorario(fecha);

		t.strictEqual( 'en 36 horas.', res, 'Domingo ' + hora + ' Cerrado - en 36 horas.' );
	});

	test( 'Detectar página', t => {

		var res = detectar_pagina(),
			sufijo = '.';
		
		if( /qunit/.test(window.location.href) && res === '' ){

			res = 'index.html';
			sufijo = ' en directorio de test.';
		}

		t.strictEqual( res, 'index.html', 'La página de test detectada' + sufijo );
	});

	test( 'Iniciar mapa - Solo inicio', t => {

		var hecho = t.async();

		$('#qunit-fixture').append('<div id="mapa"></div>');

		$('#mapa').css('width', '300px');

		$.when( iniciarMapa() )

		.then( function(res){
		
			children = $('#mapa').children();

			t.ok( children.length == 1, 'Mapa tiene hijo de Google Maps.' );

			hecho();

			/*
			map = $('#mapa').html();
			map = $('#mapa').find('.gm-style');
			
			console.log(map);
			console.log($('.mapa_marcador'));

			//$('#mapa .mapa_marcador').click();

			setTimeout( function(){


				t.ok( $('#mapa_info').length > 0, 'Deberia haber un mapa: ' + $('#mapa').css('width') );

				hecho();
			}, 1000);
			*/
		});
	});

	test('Permite OK', t => {

		e_test.charCode = 50;	// "2"

		t.ok( permite(e_test), 'Permite escribir "2" sin tipo.' );

		t.ok( permite(e_test, 'invalido'), 'Permite escribir "2" con tipo inválido.' );
		
		t.ok( permite(e_test, 'num_char'), 'Permite escribir "2" con tipo num_char.' );

		e_test.charCode = 41;	// ")"

		t.ok( permite(e_test), 'Permite escribir ")" sin tipo.' );

		t.ok( permite(e_test, 'invalido'), 'Permite escribir ")" con tipo inválido.' );
		
		t.ok( permite(e_test, 'char'), 'Permite escribir ")" con tipo char.' );

		t.ok( permite(e_test, 'num_char'), 'Permite escribir ")" con tipo num_char.' );

		e_test.charCode = 108;	// "l"

		t.ok( permite(e_test, 'char'), 'Permite escribir "l".' );
	});

	test('Permite KO', t => {

		e_test.charCode = 50;	// "2"

		t.notOk( permite(e_test, 'char'), 'No permite escribir "2" con tipo char.' );

		e_test.charCode = 108;	// "l"

		t.notOk( permite(e_test), 'No permite escribir "l" sin tipo.' );

		t.notOk( permite(e_test, 'invalido'), 'No permite escribir "l" con tipo inválido.' );

		e_test.charCode = 36;	// "$"

		t.notOk( permite(e_test), 'No permite escribir "$" sin tipo.' );

		t.notOk( permite(e_test), 'No permite escribir "$" con tipo char.' );
	});




});














const { test } = QUnit;

QUnit.module('Funciones de global', hooks => {

	mapa_abierto = 'Hemos abierto las puertas.';
	mapa_abrimos = 'Abrimos';
	mapa_en      = 'en';
	mapa_hora    = 'hora';
	mapa_horas   = 'horas';
	mapa_mañana  = 'mañana.';
	mapa_logo    = 'media/logo_red.gif';
	mapa_info    = 'es un bar de tapeo y vinos junto al <strong>Rastro de Madrid</strong> entre las paradas de metro de La Latina y Tirso de Molina';

	hooks.beforeEach( t => {

		console.log('en before');
		this.fix = $('#qunit-fixture');
	});

	hooks.afterEach( t => {

		//fixture.empty();

	});

	test( 'Función Calcular horario', t => {

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


	test( 'Funcion iniciar_mapa', t => {

		// $('#qunit-fixture').append('<div id="mapa"><p>mapa</p></div>');
		var hecho = t.async();
		this.fix.append('<div id="mapa"></div>');
		$('#mapa').css('width', '300px');
		// var etiquetas = '<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAokzjV_CnyuUEoa08ljyZpdhE7y3nlRUM"&callback=iniciarMapa>';
		// var etiquetas = '<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAokzjV_CnyuUEoa08ljyZpdhE7y3nlRUM"></script><script type="text/javascript" src="<?php echo BASE_URL ?>js/libs/markerwithlabel.js"></script>';
		// $('head').append(etiquetas);

		$.when( iniciarMapa() )
		.then( function(res){
		// console.log($('#mapa').html())
			chil = $('#mapa').children();
			console.log(res);
			t.ok( $('#mapa_info').length > 0, 'Deberia haber un mapa: ' + $('#mapa').css('width') );
			hecho();
		});
		// t.ok( $('#mapa').css('width') == '300px', 'Deberia haber un mapa: ' + $('#mapa').css('width'));
	});


	test( 'Función Detectar página', t => {

		var res = detectar_pagina(),
			sufijo = '.';
		console.log($('#mapa').html())

		if( /test_js/.test(window.location.href) && res === '' ){

			res = 'index.html';
			sufijo = ' en directorio de test.';
		}

		t.strictEqual( res, 'index.html', 'La página de test detectada' + sufijo );
	});


});













//define([

	//'funciones',

//], function(/*Fx*/){
	
	const { test } = QUnit;
	QUnit.module('Modulo QUnit Principal', hooks => {

		hooks.before( t => {

			t.notOk( false, 'Todo bien al principio del módulo' );
		});

		hooks.beforeEach( t => {

			t.notOk( false, 'Todo bien antes de cada test' );
		});


		test( 'Test de módulo pricipal', t => {

			t.ok( true, 'Todo bien en el test');
		});

		test( 'Segundo Test de módulo pricipal', t => {

			t.ok( true, 'Todo bien en el segundo test');
		});

		test( 'Helper llega al módulo principal', t => {

			var llegada = Helper.suministra_variable();

			t.strictEqual( 'hola', llegada, 'La variable llega desde el Helper.');
		});

		QUnit.module('Submodulo', hooks => {

			hooks.beforeEach( t => {

				t.notOk( '', 'Todo bien al principio del submodulo' );
			});

			test('Test de submódulo', t => {

				t.ok(true, 'Todo bien dentro del submódulo');
			});

		});

	});

//});
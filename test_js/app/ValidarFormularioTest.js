define(
	[
		'qunit',
		'validar_formulario',
		'iban'

	], function(QUnit, MiForm, IBAN){

		const { test, skip, todo } = QUnit;

		QUnit.module('Módulo de Validar Formulario', hooks => {

			var vista, 
				contenedor = $('<div id="vista" class="vista-general"></div>'),
				fixture = $('#qunit-fixture');

			fixture.append( contenedor );


			hooks.before( t => {});


			hooks.beforeEach( t => {});


			test( 'Función is_integer', t=> {

				t.ok( MiForm.is_integer(5), 'La función devuelve True con 5 como entero.' );

				t.ok( MiForm.is_integer('23'), 'La función devuelve True con 23 como string.' );

				t.ok( MiForm.is_integer(0), 'La función devuelve True con 0 como entero.' );

				t.ok( MiForm.is_integer(-3), 'La función devuelve True con -3 como entero.' );

				t.ok( MiForm.is_integer('-3'), 'La función devuelve True con -3 como string.' );

				t.ok( MiForm.is_integer(1.2), 'La función devuelve True con 1.2 como entero.' );

				t.notOk( MiForm.is_integer('hola'), 'La función devuelve False con hola.' );
			});


			test( 'Función is_numeric', t=> {

				t.ok( MiForm.is_numeric(5), 'La función devuelve True con 5 como entero.' );

				t.ok( MiForm.is_numeric('7'), 'La función devuelve True con 7 como string.' );

				t.ok( MiForm.is_numeric(-3), 'La función devuelve True con -3 como entero.' );

				t.ok( MiForm.is_numeric('-3'), 'La función devuelve True con -3 como string.' );

				t.notOk( MiForm.is_numeric('hola'), 'La función devuelve False con string no numérico.' );

				t.notOk( MiForm.is_numeric('2018-03-02'), 'La función devuelve False con string con guiones.' );
			});


			test( 'Función obtener_digito', t => {

				t.strictEqual( MiForm.obtener_digito('0000491500'), 0, 'Devuelve 0.' );

				t.strictEqual( MiForm.obtener_digito('1234567892'), 5, 'Devuelve 5.' );
			});


			test( 'Función numerico', t => {

				t.ok( MiForm.numerico(1234), 'Devuelve True con 1234 como entero.' );

				t.ok( MiForm.numerico('1234'), 'Devuelve True con 1234 como string.' );

				t.notOk( MiForm.numerico('hola'), 'Devuelve False con hola.' );
			});


			test( 'Función valida_ano', t => {

				t.ok( MiForm.valida_ano(2018), 'Devuelve True con 2018 como entero.' );

				t.ok( MiForm.valida_ano('2018'), 'Devuelve True con 2018 como string.' );

				t.ok( MiForm.valida_ano('0'), 'Devuelve True con 0.' );

				t.notOk( MiForm.valida_ano(''), 'Devuelve False con String vacio.' );

				t.notOk( MiForm.valida_ano('hola'), 'Devuelve False con hola.' );

				t.notOk( MiForm.valida_ano('1799'), 'Devuelve False por debajo de 1800.' );

				t.notOk( MiForm.valida_ano('2031'), 'Devuelve False por encima de 2030.' );
			});


			test( 'Función valida_cp', t => {

				t.ok( MiForm.valida_cp('28005'), 'Devuelve True con 28005 como string.' );

				t.notOk( MiForm.valida_cp(28005), 'Devuelve False con 28005 como entero.' );

				t.notOk( MiForm.valida_cp('2800'), 'Devuelve False con cp menor que 5.' );

				t.notOk( MiForm.valida_cp('28hol'), 'Devuelve False con cp no numérico.' );

				t.notOk( MiForm.valida_cp('280034'), 'Devuelve False con cp mayor que 5.' );
			});


			test( 'Función valida_contrasena', t => {

				t.ok( MiForm.valida_contrasena('password', 'password'), 'Devuelve True con contraseñas iguales.' );

				t.notOk( MiForm.valida_contrasena('password', 'invalida'), 'Devuelve False con contraseñas distintas.' );
			});


			test( 'Funcion valida_cuenta', t => {
				// ES6000491500051234567892

				t.ok( MiForm.valida_cuenta('0049', '1500', '05', '1234567892'), 'Devuelve True con num. de cuenta como string.' );

				t.notOk( MiForm.valida_cuenta('004', '150', '0', '123456789'), 'Devuelve false con num. de cuenta inválido.' );

				t.notOk( MiForm.valida_cuenta(0049, 1500, 05, 1234567892), 'Devuelve False con num. de cuenta como entero.' );

				t.notOk( MiForm.valida_cuenta('0049', 'hola', '05', '1234567892'), 'Devuelve False si un grupo no es numérico.' );
				
				t.notOk( MiForm.valida_cuenta('0049', '1500', '12', '1234567892'), 'Devuelve False si los dígitos de control no coinciden.' );
			});


			test( 'Función valida_email', t => {

				t.ok( MiForm.valida_email('email_de_test@dominio.com'), 'Devuelve True con email_de_test@dominio.com' );

				t.notOk( MiForm.valida_email('email_de_test@dominio'), 'Devuelve False con email_de_test@dominio' );

				t.notOk( MiForm.valida_email('email_de_testdominio.com'), 'Devuelve False con email_de_testdominio.com' );
			});


			test( 'Función valida_iban', t=> {

				t.ok( MiForm.valida_iban(''), 'Devuelve True con String Vacio.' );

				t.ok( MiForm.valida_iban(undefined), 'Devuelve True con undefined.' );

				var iban = 'ES6000491500051234567892';
				t.ok( MiForm.valida_iban(iban), 'Devuelve True con iban válido.' );

				var iban_invalido = 'iban_invalido';
				t.notOk( MiForm.valida_iban(iban_invalido), 'Devuelve False con iban inválido.' );
			});


			test( 'Función valida_entero', t => {

				t.ok( MiForm.valida_entero(5), 'Devuelve True con 5 como entero.' );

				t.notOk( MiForm.valida_entero(), 'Devuelve False sin parametro.' );

				t.notOk( MiForm.valida_entero(''), 'Devuelve False con String vacio.' );
			});


			test( 'Función valida_fecha', t => {

				t.ok( MiForm.valida_fecha('02/03/2018'), 'Devuelve True con 02/03/2018.' );

				t.ok( MiForm.valida_fecha('00/00/0000'), 'Devuelve True con 00/00/0000.' );

				t.ok( MiForm.valida_fecha('29/02/2020'), 'Devuelve True con fecha bisiesta - 29/02/2020.' );
				
				t.notOk( MiForm.valida_fecha('2018/03/02'), 'Devuelve False con 2018/03/02.' );

				t.notOk( MiForm.valida_fecha('02-03-2018'), 'Devuelve False con 02-03-2018.' );

				t.notOk( MiForm.valida_fecha('02/03/1899'), 'Devuelve False con fecha anterior a 1900.' );

				t.notOk( MiForm.valida_fecha('02/13/2018'), 'Devuelve False con mes superior a 12.' );

				t.notOk( MiForm.valida_fecha('32/03/2018'), 'Devuelve False con día superior a 31.' );

				t.notOk( MiForm.valida_fecha('29/02/2018'), 'Devuelve False con 29/02/2018.' );

				t.notOk( MiForm.valida_fecha('31/04/2018'), 'Devuelve False con 31/04/2018.' );
			});


			test( 'Función valida_hora', t => {

				t.ok( MiForm.valida_hora('12:00'), 'Devuelve True con 12:00.' );

				t.ok( MiForm.valida_hora('18:00'), 'Devuelve True con 18:00.' );

				t.notOk( MiForm.valida_hora('25:01'), 'Devuelve False con 25:01.' );

				t.notOk( MiForm.valida_hora('23:71'), 'Devuelve False con 23:71.' );

				t.notOk( MiForm.valida_hora('ho:mn'), 'Devuelve False con ho:mn.' );
			});


			test( 'Función valida_nif', t => {

				t.ok( MiForm.valida_nif('12345678Z'), 'Devuelve True con 12345678Z.' );

				t.ok( MiForm.valida_nif('12345678-Z'), 'Devuelve True con 12345678-Z.' );

				t.notOk( MiForm.valida_nif('12345678A'), 'Devuelve False con 12345678A.' );

				t.notOk( MiForm.valida_nif(''), 'Devuelve False con String vacio.' );
			});


			test( 'Función valida_nombre_archivo', t => {

				t.ok( MiForm.valida_nombre_archivo('nombreDeArchivo'), 'Devuelve True con nombreDeArchivo.' );

				t.ok( MiForm.valida_nombre_archivo(''), 'Devuelve True con String vacio.' );

				t.notOk( MiForm.valida_nombre_archivo('nombre_de_archivo'), 'Devuelve False con nombre_de_archivo.' );
			});


			test( 'Función valida_numerico', t => {

				t.ok( MiForm.valida_numerico(5), 'Devuelve True con 5 como entero.' );

				t.notOk( MiForm.valida_numerico(), 'Devuelve False sin parametro.' );

				t.notOk( MiForm.valida_numerico(''), 'Devuelve False con String vacio.' );
			});


			test( 'Función valida_num_tarjeta', t => {

				t.ok( MiForm.valida_num_tarjeta('4026095589722430'), 'Devuelve True con numero de tarjeta Visa.' );

				t.notOk( MiForm.valida_num_tarjeta('402609558972243'), 'Devuelve False si el número es menor de 16 dígitos.' );

				t.notOk( MiForm.valida_num_tarjeta('402609558972243D'), 'Devuelve False si el número no es todo dígitos.' );

				t.notOk( MiForm.valida_num_tarjeta(4026095589722430), 'Devuelve False si el número no es String.' );
			});


			test( 'Función valida_telefono', t => {

				t.ok( MiForm.valida_telefono(914499649), 'Devuelve True con telefono numérico.' );

				t.ok( MiForm.valida_telefono('914499649'), 'Devuelve True con telefono como String.' );

				t.ok( MiForm.valida_telefono('+34-914499649'), 'Devuelve True con telefono con prefijo internacional como String.' );

				t.ok( MiForm.valida_telefono('(+34)914499649'), 'Devuelve True con telefono con prefijo internacional con paréntesis como String.' );

				t.notOk( MiForm.valida_telefono('telefono_invalido'), 'Devuelve False con String no numérico.' );

				//t.notOk( MiForm.valida_telefono(12345678), 'Devuelve False con telefono menor de 9 cifras.' );

				t.notOk( MiForm.valida_telefono('12345678'), 'Devuelve False con telefono menor de 9 caracteres como string.' );
			});


			test( 'Función valida_url', t => {

				t.ok( MiForm.valida_url('http://url_test.com'), 'Devuelve True con http://url_test.com' );

				t.ok( MiForm.valida_url('ftp://url_test.com'), 'Devuelve True con ftp://url_test.com' );

				t.notOk( MiForm.valida_url('url_test.com'), 'Devuelve False con url_test.com' );
			});


			test( 'Función valida_usuario', t => {

				t.ok( MiForm.valida_usuario('usuario10'), 'Devuelve True con usuario10.' );

				t.ok( MiForm.valida_usuario('usuario10', 5), 'Devuelve True si el nombre es mayor que el parámetro..' );

				t.ok( MiForm.valida_usuario('гдеёжзийк'), 'Devuelve True con гдеёжзийк.' );

				t.notOk( MiForm.valida_usuario('usuario', 10), 'Devuelve False si el nombre es menor que el parámetro.' );

				t.notOk( MiForm.valida_usuario('usuario_10'), 'Devuelve False con usuario_10.' );
			});


			test( 'Función valida_texto', t => {

				t.ok( MiForm.valida_texto('Texto de test'), 'Devuelve True sin parámetro.' );

				t.ok( MiForm.valida_texto('Texto de test', 5), ' Devuelve True con parámetro menor que el string.' );
				
				t.notOk( MiForm.valida_texto('Texto', 6), ' Devuelve False con parámetro mayor que el string.' );
			});

		});

	}
);


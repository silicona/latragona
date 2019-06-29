define(
	[
		'qunit',
		'funciones',

	], function(QUnit, Fx){

		const { test, skip, todo } = QUnit;

		QUnit.module('Módulo de funciones', hooks => {

			var vista, 
				contenedor = $('<div id="vista" class="vista-general"></div>'),
				fixture = $('#qunit-fixture');

			fixture.append( contenedor );

			hooks.before( t => {

				this.evento_test = {

					target: { innerHTML: '<b>innerHTML de prueba</b>' },

					currentTarget: { className: 'clase_test' },
				};
				
				var date = new Date();
				var ano = date.getFullYear();
				var mes = Fx.prefInt(parseInt(date.getMonth(), 10) + 1, 2);
				var dia = Fx.prefInt(date.getDate(), 2);

				this.hoy = dia + '/' + mes + '/' + ano;

				this.hoy_mysql = ano + '-' + mes + '-' + dia;
				
				this.hoy_hora = date.getFullYear() + '-' +
					(parseInt(date.getMonth(), 10) + 1) + '-' +
					date.getDate() + ' ' +
					date.getHours() + ':' +
					date.getMinutes();
			});

			hooks.beforeEach( t => {

				//contenedor.empty();
				// $('#vista').empty();
				//console.log(contenedor);
				//t.ok(contenedor.children() == 0);
			});

			test('Función arr_a_select', t => {

				var array = ['val1', 'val2'];

				var opciones = '<option value="0">val1</option><option value="1">val2</option>';
				var res = '<select id="id_test">' + opciones + '</select>';

				t.strictEqual( Fx.arr_a_select('id_test', array), res, 'La función devuelve el select esperado');
			});

			test('Función bloque_texto', t => {

				var obj = {
					label: 'Test',
					texto: 'Texto de test',
				};

				var res = [
					'<p class="bloque">',
						'<span>',
							'Test',
						'</span>',
						'Texto de test',
					'</p>'
				].join('');

				t.strictEqual( Fx.bloque_texto(obj), res, 'La función devuelve el bloque esperado.' );

				var obj_no = { 
					ocultar_si_vacio: true,
					texto: ''
				};

				t.strictEqual( Fx.bloque_texto(obj_no), '', 'La función devuelve String Vacio con mostrar: false.' );
			});

			test('Función bloque_texto con link', t => {

				var obj = {
					label: 'Test',
					texto: 'Texto de test',
					link: {	url: 'url_test', titulo: 'titulo_test' }
				};

				var res = [
					'<p class="bloque">',
						'<span>Test</span>',
						'<a href="url_test" target="_blank" title="titulo_test" >',
							'Texto de test <i class="fa fa-external-link"></i>',
						'</a>',
					'</p>'
				].join('');

				t.strictEqual( Fx.bloque_texto(obj), res, 'La función devuelve el bloque esperado.' );
			});

			test('Función bs_alert', t => {

				var mensaje = 'Mensaje de Test',
					clase = 'danger';

				var res = '<div class="alert alert-success">Mensaje de Test</div>';
				t.strictEqual( Fx.bs_alert(mensaje), res, 'La función devuelve Alerta de success' );

				res = '<div class="alert alert-danger">Mensaje de Test</div>';
				t.strictEqual( Fx.bs_alert(mensaje, clase), res, 'La función devuelve Alerta con parametro.' );
			});

			test('Función cambiaf_a_mysql', t=> {

				t.strictEqual( Fx.cambiaf_a_mysql('02/03/2018'), '2018-03-02 00:00', 'La función devuelve la fecha suministrada con 00:00.' );
				
				t.strictEqual( Fx.cambiaf_a_mysql('02/03/2018', '23:00'), '2018-03-02 23:00', 'La función devuelve la fecha y hora suministrada.' );
				
				t.strictEqual( Fx.cambiaf_a_mysql(), this.hoy_hora, 'La función devuelve la fecha y hora del momento.' );
			});

			test('Función cambiaf_a_normal', t => {

				t.strictEqual( Fx.cambiaf_a_normal('2018-03-02'), '02/03/2018', 'La función devuelve la fecha suministrada.' );
				
				t.strictEqual( Fx.cambiaf_a_normal(undefined), '', 'Error?: La función devuelve String Vacio.' );
			});

			test('Función cambiaf_a_timestamp', t => {

				t.strictEqual( Fx.cambiaf_a_timestamp('02/03/2018'), 1519945200000, 'La función devuelve un TimeStamp con la fecha suministrada.' );
				
				t.strictEqual( Fx.cambiaf_a_timestamp('02/03/2018', '23:00'), 1520028000000, 'La función devuelve un TimeStamp con la fecha y hora suministrada.' );
				
				var stamp = new Date().getTime();

				//t.strictEqual( typeof Fx.cambiaf_a_timestamp(), 'number', 'La función devuelve un TimeStamp con la fecha y hora actual.' );
				t.strictEqual( Fx.cambiaf_a_timestamp(), stamp, 'La función devuelve un TimeStamp con la fecha y hora actual.' );
			});

			test('Función capitalize', t => {

				t.strictEqual( Fx.capitalize('test'), 'Test', 'La función capitaliza el string.' );

				t.strictEqual( Fx.capitalize(''), '', 'La función devuelve String Vacio con String Vacio' );

				t.strictEqual( Fx.capitalize(undefined), '', 'La función devuelve String Vacio con undefined' );
			});

			test('Función convertDate', t => {

				t.strictEqual( Fx.convertDate('2018-03-02'), '02/03/2018', 'La función cambia la fecha de mysql a normal.' );

				t.strictEqual( Fx.convertDate('2018/03/02'), '02/03/2018', 'La función cambia la fecha de formato ingles a normal.' );

				t.strictEqual( Fx.convertDate('02/03/2018'), '03/02/2018', 'Error: La función cambia el mes por el dia.' );

				t.strictEqual( Fx.convertDate('02-03-2018'), 'NaN/NaN/NaN', 'Devuelve NaN.' );
			});

			test('Función convertir_a_bool', t => {

				t.ok( Fx.convertir_a_bool('true'), 'La función convierte el string true.' );

				t.notOk( Fx.convertir_a_bool('false'), 'La función convierte el string false.' );

				t.strictEqual( Fx.convertir_a_bool('test'), 'test', 'La función devuelve lo demás sin convertir.' );
			});

			test('Función date_a_mysql', t => {

				var fecha = new Date();

				//t.ok( /\d{4}\-\d{2}\-\d{2}/.test(Fx.date_a_mysql(fecha)), 'La función convierte la fecha a mysql.')

				t.strictEqual( Fx.date_a_mysql(fecha), this.hoy_mysql, 'La función devuelve la fecha en formato mysql')
			});

			test('Función devuelve_clase', t => {

				t.strictEqual('clase_test', Fx.devuelve_clase(this.evento_test), 'La función devuelve la clase del target del evento');
				
				t.strictEqual( '', Fx.devuelve_innerHtml(''), 'La función devuelve string Sin valor si el evento no es un objeto');
			});

			test('Función devuelve_checked', t=> {

				t.strictEqual( Fx.devuelve_checked(true), ' checked="checked" ', 'La función devuelve el atributo HTML.' );

				t.strictEqual( Fx.devuelve_checked(1), ' checked="checked" ', 'La función devuelve el atributo HTML.' );

				t.strictEqual( Fx.devuelve_checked(2), '', 'La función devuelve String Vacio si no es true o 1.' );

				t.strictEqual( Fx.devuelve_checked(''), '', 'La función devuelve String Vacio si no hay valor.' );
			});

			test('Función devuelve_dia_actual', t => {

				t.ok( /\d{4}\-\d{2}\-\d{2}/.test(Fx.devuelve_dia_actual()), 'La función devuelve la fecha actal en formato en mysql.' );
				
				t.strictEqual( Fx.devuelve_dia_actual(), this.hoy_mysql, 'La función devuelve la fecha actual en mysql.' );
			});

			test('función devuelve_innerHtml', t => {

				t.strictEqual('<b>innerHTML de prueba</b>', Fx.devuelve_innerHtml(this.evento_test), 'La función devuelve el innerHTML del target del evento');

				t.strictEqual( '', Fx.devuelve_innerHtml(''), 'La función devuelve string Sin valor si el evento no es un objeto');
			});

			test('Función devuelve_mes', t=> {

				t.strictEqual( Fx.devuelve_mes(2), 'Febrero', 'La funcion devuelve el mes en castellano.' );

				t.strictEqual( Fx.devuelve_mes(2, true), 'Feb', 'La funcion devuelve el mes en castellano abreviado.' );

				t.strictEqual( Fx.devuelve_mes(2, false, true), 'February', 'La funcion devuelve el mes en ingles.' );
			});

			test('Función devuelve_meses', t => {

				t.strictEqual( Fx.devuelve_meses('2,4'), 'Febrero, Abril,', 'La función devuelve una cadena con meses.' );

				t.strictEqual( Fx.devuelve_meses('2,4', true), 'Feb, Abr,', 'La función devuelve una cadena con meses abreviados.' )
			});

			test('Función devuelve_sino', t => {

				var arr_ok = [1, '1', true, 'true'];

				for( var i in arr_ok ){

					t.strictEqual( Fx.devuelve_sino(arr_ok[i]), 'Sí', 'La función devuelve Sí con true y 1.' );
				}

				var arr_ko = [0, '0', false, 'false', undefined, null];

				for( var x in arr_ko ){

					t.strictEqual( Fx.devuelve_sino(arr_ko[x]), 'No', 'La función devuelve No con 0, false, undef y null.' );
				}

				t.strictEqual( Fx.devuelve_sino('test'), 'test', 'La función devuelve el valor si no es lo anterior' );
			});

			test('Función dif_dias', t => {

				// Posterior - Anterior
				var fecha1 = ['05/04/2018', '23:00'];
				var fecha2 = ['02/03/2018', '18:00'];

				t.strictEqual( Fx.dif_dias(fecha1[0], fecha2[0], fecha1[1], fecha2[1], 2), 35, 'La función devuelve la diferencia entre la posterior y la anterior.' );
				
				// Anterior - Posterior
				fecha1 = ['02/03/2018', '18:00'];
				fecha2 = ['05/04/2018', '23:00'];

				t.strictEqual( Fx.dif_dias(fecha1[0], fecha2[0], fecha1[1], fecha2[1], 2), 0, 'La función devuelve 0 entre la anterior y la posterior.' );
			});

			test('Función dos_dec', t => {

				t.strictEqual( Fx.dos_dec(1234.7879), 1234.79, 'La función redondea a dos decimales.' );
			});

			test('Función escape_html', t => {

				t.strictEqual( Fx.escape_html('<b>Test&Run</b>'), '&lt;b&gt;Test&amp;Run&lt;/b&gt;', 'La función devuelve el HTML escapado.' );
			});

			test('Función euros', t => {

				t.strictEqual( Fx.euros(1234), '1.234,00€', 'La función devuelve la cantidad con formato y símbolo de Euro.' );
			});

			test('Función euros_a_numero', t => {

				t.strictEqual( Fx.euros_a_numero('1234€'), '1234.00', 'La función devuelve la cantidad con decimales.')

				t.strictEqual( Fx.euros_a_numero('1234.00€'), '123400.00', 'La función convierte los decimales en parte de la cantidad.')
			});

			test('Función fecha_actual', t => {

				var fecha = Fx.fecha_actual();

				t.strictEqual( fecha, this.hoy, 'La función devuelve la fecha actual normal.' );
				
				t.ok( /\d{2}\/\d{2}\/\d{4}/.test(fecha), 'La función devuelve la fecha actual en formato normal.' );
			});

			todo('Función fecha_actual_normal', t => {

				var fecha = Fx.fecha_actual_normal()

				t.strictEqual( fecha, this.hoy, 'La función devuelve la fecha actual normal.' );
				
				t.ok( /\d{2}\/\d{2}\/\d{4}/.test(fecha), 'La función devuelve la fecha actual en formato normal.' );
			});

			QUnit.module('Submódulo Forms', hooks => {

				hooks.beforeEach( t => {

					this.obj = {
						atributos: { data_test: 'test' },
						clase: 'clase_test',
						col_bs_input: 'col-md-5',
						col_bs_label: 'col-md-8',
						col_bs_textarea: 'col-md-8',
						id: 'id_test',
						label: 'label_test',
						placeholder: 'place de test',
						valor: 'Valor de test',
					}

					this.boton_info = '<span class="badge ayuda"><i class="i_ayuda fa fa-question" data-toggle="tooltip" title="Ayuda de test"></i></span> ';
				});


				test('Función form_boton', t => {

					var res = [
						'<div class="form-group div_id_test">',
							'<div class="input-group col-md-5">',
								'<button data_test="test"  class="btn clase_test" id="id_test" >label_test</button>',
							'</div>',
						'</div>'
					].join('');

					t.strictEqual( Fx.form_boton(this.obj), res, 'La función devuelve el boton de form en HTML.' );

					var obj = {
						title: 'Titulo de test',
						href: 'url_test',
						icono: 'icono',
						disabled: 'disabled'
					};

					obj = Object.assign(obj, this.obj);

					res = [
						'<div class="form-group div_id_test">',
							'<div class="input-group col-md-5">',
								'<a  href="url_test" title="Titulo de test" data_test="test" disabled class="btn clase_test" id="id_test" ><i class="fa fa-icono fa-lg"></i> label_test</a>',
							'</div>',
						'</div>'
					].join('');

					t.strictEqual( Fx.form_boton(obj), res, 'La función devuelve el boton de form en HTML con enlace.' );

					obj = Object.assign({ input_group: 'false' }, this.obj);

					t.strictEqual( Fx.form_boton(obj), '<button data_test="test"  class="btn clase_test" id="id_test" >label_test</button>', 'La función devuelve el boton a secas.' );
				});

				test('Función form_enlace', t => {
					
					var obj = {
						col_bs_enlace: 'col-md-5',
						href: 'url_test',
						target: '_blank'
					}

					obj = Object.assign(obj, this.obj);
			
					var res = [
						'<div class="form-group div_id_test">',
					    	'<label class="col-md-8 control-label" for="id_test" title="">label_test</label>',
							'<div class="input-group col-md-5">',
						    	'<a target="_blank" class="clase_test" href="url_test">label_test</a>',
						  		
							'</div>',
					  	'</div>'
					].join('');

					t.strictEqual( Fx.form_enlace(obj), res, 'La función devuelve el enlace de form en HTML.' );

					obj = Object.assign({ayuda: 'Ayuda de test'}, obj);
			
					res = [
						'<div class="form-group div_id_test">',
					    	'<label class="col-md-8 control-label" for="id_test" title="Ayuda de test">' + this.boton_info + 'label_test</label>',
							'<div class="input-group col-md-5">',
						    	'<a target="_blank" class="clase_test" href="url_test">label_test</a>',
						  		
							'</div>',
					  	'</div>'
					].join('');

					t.strictEqual( Fx.form_enlace(obj), res, 'La función devuelve el enlace de form en HTML.' );
				});

				test('Función form_input', t => {

					var obj = {
						title: true,
						tipo: 'test',
						min_char: 5,
						disabled: 'disabled',
					}

					obj = Object.assign(obj, this.obj);
					
					var res = [
						'<div class="form-group div_id_test">',
					    	'<label class="col-md-8 control-label" for="id_test" title="">label_test</label>',
							'<div class="input-group col-md-5">',
						    	'<input title="Pulse en desbloquear para modificar" data_test="test" disabled type="test" value="Valor de test"  data-num_char="5" class="form-control clase_test" id="id_test" placeholder="place de test" >',
						  		
							'</div>',
					  	'</div>'
					].join('');

					t.strictEqual( Fx.form_input(obj), res, 'La función devuelve el input de form en HTML.' );

					obj = Object.assign({ayuda: 'Ayuda de test'}, obj);

					res = [
						'<div class="form-group div_id_test">',
					    	'<label class="col-md-8 control-label" for="id_test" title="Ayuda de test">' + this.boton_info + 'label_test</label>',
							'<div class="input-group col-md-5">',
						    	'<input title="Pulse en desbloquear para modificar" data_test="test" disabled type="test" value="Valor de test"  data-num_char="5" class="form-control clase_test" id="id_test" placeholder="place de test" >',
						  		
							'</div>',
					  	'</div>'
					].join('');

					t.strictEqual( Fx.form_input(obj), res, 'La función devuelve el input de form en HTML con ayuda.' );
				});

				test('Función form_textarea', t => {

					var res = [
						'<div class="form-group div_id_test">',
					    	'<label for="id_test" title="" class="control-label col-md-8">label_test</label>',
							'<div class="input-group col-md-8">',
						    	'<textarea title="" data_test="test"  class="form-control clase_test" id="id_test" placeholder="place de test" title="">',
						    		'Valor de test',
						    	'</textarea>',
					    	'</div>',
					  	'</div>'
					].join('');

					t.strictEqual( Fx.form_textarea(this.obj), res, 'La función devuelve el textarea de form en HTML.' );

					obj = Object.assign({ayuda: 'Ayuda de test'}, this.obj);

					var res = [
						'<div class="form-group div_id_test">',
					    	'<label for="id_test" title="Ayuda de test" class="control-label col-md-8">' + this.boton_info + 'label_test</label>',
							'<div class="input-group col-md-8">',
						    	'<textarea title="Ayuda de test" data_test="test"  class="form-control clase_test" id="id_test" placeholder="place de test" title="Ayuda de test">',
						    		'Valor de test',
						    	'</textarea>',
					    	'</div>',
					  	'</div>'
					].join('');

					t.strictEqual( Fx.form_textarea(obj), res, 'La función devuelve el textarea de form en HTML con ayuda.' );


					obj = Object.assign({disabled: 'disabled'}, obj);

					res = [
						'<div class="form-group div_id_test">',
					    	'<label for="id_test" title="Ayuda de test" class="control-label col-md-8">' + this.boton_info + 'label_test</label>',
							'<div class="input-group col-md-8">',
						    	'<textarea title="Pulse en desbloquear para modificar" data_test="test" disabled class="form-control clase_test" id="id_test" placeholder="place de test" title="Ayuda de test">',
						    		'Valor de test',
						    	'</textarea>',
					    	'</div>',
					  	'</div>'
					].join('');

					t.strictEqual( Fx.form_textarea(obj), res, 'La función devuelve el textarea de form en HTML con disabled.' );
				});

				test('Función form_input_fecha', t => {

					res = [
						'<div class="form-group div_id_test">',
					    	'<label for="id_test" title="" class="col-md-8 control-label" >label_test</label>',
							'<div class="input-group date col-md-5">',
								'<input title="" data_test="test"  id="id_test" type="text" placeholder="place de test" class="fecha default-date-picker datepicker form-control clase_test" value="Valor de test" title="" />',
								'<span class="input-group-addon">',
									'<i class="fa fa-calendar"></i>',
								'</span>',
							'</div>',
						'</div>'
					].join('');

					t.strictEqual( Fx.form_input_fecha(this.obj), res, 'La función devuelve el input fecha en HTML.' );
					
					var obj = Object.assign({ayuda: 'Ayuda de test'}, this.obj);

					res = [
						'<div class="form-group div_id_test">',
					    	'<label for="id_test" title="Ayuda de test" class="col-md-8 control-label" >' + this.boton_info + 'label_test</label>',
							'<div class="input-group date col-md-5">',
								'<input title="Ayuda de test" data_test="test"  id="id_test" type="text" placeholder="place de test" class="fecha default-date-picker datepicker form-control clase_test" value="Valor de test" title="Ayuda de test" />',
								'<span class="input-group-addon">',
									'<i class="fa fa-calendar"></i>',
								'</span>',
							'</div>',
						'</div>'
					].join('');

					t.strictEqual( Fx.form_input_fecha(obj), res, 'La función devuelve el input fecha en HTML con ayuda.' );
					
					obj = Object.assign( {disabled: 'disabled'}, obj);

					res = [
						'<div class="form-group div_id_test">',
					    	'<label for="id_test" title="Ayuda de test" class="col-md-8 control-label" >' + this.boton_info + 'label_test</label>',
							'<div class="input-group date col-md-5">',
								'<input title="Pulse en desbloquear para modificar" data_test="test" disabled id="id_test" type="text" placeholder="place de test" class="fecha default-date-picker datepicker form-control clase_test" value="Valor de test" title="Ayuda de test" />',
								'<span class="input-group-addon">',
									'<i class="fa fa-calendar"></i>',
								'</span>',
							'</div>',
						'</div>'
					].join('');

					t.strictEqual( Fx.form_input_fecha(obj), res, 'La función devuelve el input fecha en HTML con disabled.' );	
				});

				test('Función form_input_hora', t => {

					var res = [
						'<div class="form-group div_id_test">',
							'<label for="id_test" title="" class="col-md-8 control-label">label_test</label>',
							'<div class="input-group date">',
								'<input class="col_bs_input" title="" data_test="test"  type="text" id="id_test"  placeholder="place de test" name="id_test" class="hora form-control clase_test" value="Valor de test" title="" />',
								'<span class="input-group-addon">',
									'<i class="fa fa-clock-o"></i>',
								'</span>',
							'</div>',
						'</div>'
					].join('');

					t.strictEqual( Fx.form_input_hora(this.obj), res, 'La función devuelve el input hora en HTML.' );

					var obj = Object.assign( {ayuda: 'Ayuda de test'}, this.obj );
					
					res = [
						'<div class="form-group div_id_test">',
							'<label for="id_test" title="Ayuda de test" class="col-md-8 control-label">' + this.boton_info + 'label_test</label>',
							'<div class="input-group date">',
								'<input class="col_bs_input" title="Ayuda de test" data_test="test"  type="text" id="id_test"  placeholder="place de test" name="id_test" class="hora form-control clase_test" value="Valor de test" title="Ayuda de test" />',
								'<span class="input-group-addon">',
									'<i class="fa fa-clock-o"></i>',
								'</span>',
							'</div>',
						'</div>'
					].join('');

					t.strictEqual( Fx.form_input_hora(obj), res, 'La función devuelve el input hora en HTML con ayuda.' );

					obj = Object.assign( {disabled: 'disabled'}, obj );
					
					res = [
						'<div class="form-group div_id_test">',
							'<label for="id_test" title="Ayuda de test" class="col-md-8 control-label">' + this.boton_info + 'label_test</label>',
							'<div class="input-group date">',
								'<input class="col_bs_input" title="Pulse en desbloquear para modificar" data_test="test" disabled type="text" id="id_test"  placeholder="place de test" name="id_test" class="hora form-control clase_test" value="Valor de test" title="Ayuda de test" />',
								'<span class="input-group-addon">',
									'<i class="fa fa-clock-o"></i>',
								'</span>',
							'</div>',
						'</div>'
					].join('');

					t.strictEqual( Fx.form_input_hora(obj), res, 'La función devuelve el input hora en HTML con disabled.' );
				});

				test('Función form_sino', t => {

					var obj = {
						checked: 'checked',
						texto_si: 'Sí, por favor',
						texto_no: 'No, gracias',
					}

					obj = Object.assign( obj, this.obj );

					var res = [
						'<div class="form-group div_id_test">',
							'<label for="id_test" title="" class="col-md-8 control-label">label_test</label>',
							'<div class="input-group">',
								'<input data-on-text="Sí, por favor" data-off-text="No, gracias" title="" data_test="test"  id="id_test" class="clase_test col-md-8" type="checkbox" name="id_test" checked="checked" title="">',
							'</div>',
						'</div>'
					].join('');

					t.strictEqual( Fx.form_sino(obj), res, 'La función devuelve el form sino en HTML.' );

					obj = Object.assign( {ayuda: 'Ayuda de test'}, obj );

					var res = [
						'<div class="form-group div_id_test">',
							'<label for="id_test" title="Ayuda de test" class="col-md-8 control-label">' + this.boton_info + 'label_test</label>',
							'<div class="input-group">',
								'<input data-on-text="Sí, por favor" data-off-text="No, gracias" title="Ayuda de test" data_test="test"  id="id_test" class="clase_test col-md-8" type="checkbox" name="id_test" checked="checked" title="Ayuda de test">',
							'</div>',
						'</div>'
					].join('');

					t.strictEqual( Fx.form_sino(obj), res, 'La función devuelve el form sino en HTML con ayuda.' );

					obj = Object.assign( {disabled: 'disabled'}, obj );

					var res = [
						'<div class="form-group div_id_test">',
							'<label for="id_test" title="Ayuda de test" class="col-md-8 control-label">' + this.boton_info + 'label_test</label>',
							'<div class="input-group">',
								'<input data-on-text="Sí, por favor" data-off-text="No, gracias" title="Pulse en desbloquear para modificar" data_test="test"  disabled="disabled"  id="id_test" class="clase_test col-md-8" type="checkbox" name="id_test" checked="checked" title="Ayuda de test">',
							'</div>',
						'</div>'
					].join('');

					t.strictEqual( Fx.form_sino(obj), res, 'La función devuelve el form sino en HTML con disabled.' );
				});

				test('Función form_select', t => {

					var obj = {
						col_bs_select: 'col-md-5',
						json_valores_et: {
							1: 'prim',
							2: 'seg'
						}
					};

					var opciones = [
						'<option value="1" data-content="">prim</option>',
						'<option value="2" data-content="">seg</option>'
					].join('');

					obj = Object.assign( obj, this.obj );

					var res = [
						'<div class="form-group div_id_test">',
							'<label for="id_test" title="" class="control-label col-md-8">label_test</label>',
							'<div class="input-group col-md-5">',
								'<select title="" data_test="test"  id="id_test" class="selectpicker">',
							    	opciones,
							    '</select>',
							'</div>',
						'</div>'
					 ].join('');

					 t.strictEqual( Fx.form_select(obj), res, 'La función devuelve el select en HTML.');

					obj = Object.assign( {ayuda: 'Ayuda de test'}, obj );

					var res = [
						'<div class="form-group div_id_test">',
							'<label for="id_test" title="Ayuda de test" class="control-label col-md-8">' + this.boton_info + 'label_test</label>',
							'<div class="input-group col-md-5">',
								'<select title="Ayuda de test" data_test="test"  id="id_test" class="selectpicker">',
							    	opciones,
							    '</select>',
							'</div>',
						'</div>'
					 ].join('');

					 t.strictEqual( Fx.form_select(obj), res, 'La función devuelve el select en HTML con ayuda.');

					obj = Object.assign( {disabled: 'disabled'}, obj );

					var res = [
						'<div class="form-group div_id_test">',
							'<label for="id_test" title="Ayuda de test" class="control-label col-md-8">' + this.boton_info + 'label_test</label>',
							'<div class="input-group col-md-5">',
								'<select title="Pulse en desbloquear para modificar" data_test="test" disabled id="id_test" class="selectpicker">',
							    	opciones,
							    '</select>',
							'</div>',
						'</div>'
					 ].join('');

					 t.strictEqual( Fx.form_select(obj), res, 'La función devuelve el select en HTML con ayuda.');
				});

				test('Función form_image_upload', t => {

					var res = [
						'<div class="form-group div_id_test">',
		                    '<label class="control-label col-md-8">label_test</label>',
		                    '<div class="input-group col-md-5 clase_test">',
		                        '<div class="fileupload fileupload-new" data-provides="fileupload">',
		                            '<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">',
		                                '<img src="//www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=sin+imagen" alt="" />',
		                            '</div>',
		                            '<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>',
		                            '<div>',
		                               '<span class="btn btn-white btn-file">',
		                               '<span class="fileupload-new"><i class="fa fa-paper-clip"></i> Seleccionar imagen</span>',
		                               '<span class="fileupload-exists"><i class="fa fa-angle-double-left"></i> Cambiar</span>',
		                               '<input type="file" class="default">',
		                               '</span>',
		                                '<a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Quitar</a>',
		                            '</div>',
		                        '</div>',
		                        /*
		                        '<span class="label label-danger">NOTA</span>',
		                                 '<span>',
		                                 '&nbsp;<br> La miniatura de imagen sólo funciona con IE10, Chrome y Safari',
		                        '</span>',
		                        */
		                    '</div>',
		                '</div>',

					].join('');

					t.strictEqual( Fx.form_image_upload(this.obj), res, 'La funcion devuelve el form de imagen en HTML.')
				});

			});

			test('Función html_encode', t => {

				//t.strictEqual( Fx.html_encode('&lt;b&gt;Test&lt;/b&gt;'), '<b>Test</b>', 'La función devuelve el string como HTML.' );
				t.strictEqual( Fx.html_encode('<b>Test</b>'), '&lt;b&gt;Test&lt;/b&gt;', 'La función devuelve el string HTML escapado.' );
			});

			test('Función hoy', t => {

				t.strictEqual( Fx.hoy(), this.hoy, 'La función devuelve algo.' );
			});

			test('Función hoy_timestamp', t => {
				
				var today = new Date();
				var stamp = new Date( today.getFullYear(), today.getMonth() , today.getDate() ).getTime() / 1000 ;

				t.strictEqual( Fx.hoy_timestamp(), stamp, 'La función devuelve algo.' );
			});

			test('Función igualar_columnas', t => {

				var $col1 = $('<div>', { 
					id: 'col1',
					style: 'height: 200px'
				});

				var $col2 = $('<div>', { 
					id: 'col2',
					style: 'height: 400px'
				});

				Fx.igualar_columnas('#col1', '#col2');

				var res = $('#col1').css('height');

				t.equal( res, $('#col2').css('height'), 'La función ha igualado las columnas a ' + res + '.' );
			});

			test('Función is_numeric', t=> {

				var arr_ok = [5, '7', -3];

				for( var i in arr_ok ){

					t.ok( Fx.is_numeric(arr_ok[i]), 'La función devuelve True con ' + arr_ok[i] );
				};

				var arr_ko = ['hola', '2018-03-03'];

				for( var i in arr_ko ){

					t.notOk( Fx.is_numeric(arr_ko[i]), 'La función devuelve False con ' + arr_ko[i] );
				};
			});

			test('Función is_integer', t => {

				var arr_ok = [5, '23', 0, -3];

				for( var i in arr_ok ){

					t.ok( Fx.is_integer(arr_ok[i]), 'La función devuelve True con ' + arr_ok[i] );
				};

				var arr_ko = [null, undefined, '', '-3de', '12dd'];

				for( var i in arr_ko ){

					t.notOk( Fx.is_integer(arr_ko[i]), 'La función devuelve False con ' + arr_ko[i] );
				};
			});

			test('Función limpia_undefined', t => {

				t.strictEqual( Fx.limpia_undefined('camión'), 'camión', 'La función devuelve la variable' );
				
				var arr_undef = [null, undefined, 'undefined'];

				for( var i in arr_undef ){

					t.strictEqual( Fx.limpia_undefined(arr_undef[i]), '', 'La función devuelve String Sin valor con undefineds' );
				}
			});

			test('Función prefInt', t => {

				t.strictEqual( Fx.prefInt(5, 3), '005', 'La función añade 0s hasta len = longitud de número.' );

				t.strictEqual( Fx.prefInt(155, 2), 155, 'La función no añade ceros con len inferior a la longitud del número.' );
			});

			test('Función quitar_acentos', t=> {

				t.strictEqual( Fx.quitar_acentos('camión'), 'camion', 'La función quita acentos.' );
				
				t.strictEqual( Fx.quitar_acentos(undefined), '', 'La función devuelve String Vacio si es undefined.' );
			});

			test('Función quitar_comillas', t => {

				t.strictEqual( Fx.quitar_comillas('t"es"t'), 'test', 'La función elimina las comillas dobles.' );
			});

			skip('Función quitar_img_rotas', t => {

				contenedor.append( $('<img>', { src: 'url_invalida' }) );

				//Fx.quitar_img_rotas('#vista');
				//$('img', contenedor).error();

				t.strictEqual( $('img', '#vista').error(), '', 'La función ha cambiado el src de la imagen' );
				// t.strictEqual( $('img', contenedor).attr('src'), '', 'La función ha cambiado el src de la imagen' );
			});

			test('Función quitar_intros', t => {

				t.strictEqual( Fx.quitar_intros("t\r\ne\rs\nt"), 'test', 'La función elimina \\r y \\n.' );
			});

			test('Función quitar_ultimo_caracter', t => {

				t.strictEqual( Fx.quitar_ultimo_caracter('test'), 'tes', 'La función quita el último caracter.' );
				
				t.strictEqual( Fx.quitar_ultimo_caracter(''), '', 'La función devuelve String Vacio si no hay caracteres.' );

				t.strictEqual( Fx.quitar_ultimo_caracter_2('test'), 'tes', 'La función quita el último caracter.' );
				
				t.strictEqual( Fx.quitar_ultimo_caracter_2(''), '', 'La función devuelve String Vacio si no hay caracteres.' );
			});

			skip('Función mostrar_cargador', t => {

				var $target = $('<div>', {id: 'test'});
				var p = '<p>ajaja</p>';
				//$target.append(p);
				contenedor.append($target);

				Fx.mostrar_cargador('#test', '#vista');

				//console.log('jaja', $('#vista #test'));
				//console.log('jaja', contenedor.html());

				//t.strictEqual( $target.html(), '<div class="loader"><span></span><span></span><span></span></div>', 'La función crea el innerHTML del cargador')
				t.strictEqual( $('#test').html(), '<div class="loader"><span></span><span></span><span></span></div>', 'La función crea el innerHTML del cargador')
			});

			test('Función number_format', t => {

				t.strictEqual( Fx.number_format(1234, 2, ',', '.'), '1.234,00', 'La función devuelve el numero formateado.' );
			});

			test('Función obj_a_select', t => {

				var objeto = {'prim': 'val1', 'seg': 'val2'};
				var attr = 'class="clase_test"';

				var opciones = '<option value="prim">val1</option><option value="seg">val2</option>';
				var res = '<select id="id_test" class="clase_test">' + opciones + '</select>';

				t.strictEqual( Fx.obj_a_select('id_test', objeto, attr), res, 'La función devuelve el select esperado');
			});

			test('Función objeto_a_string', t => {

				var obj = { prim: 1, seg: 2 };

				t.strictEqual( Fx.objeto_a_string(obj), 'prim="1" seg="2" ', 'La función devuelve el objeto como string.' );
			});

			test('Función pantalla_escritorio', t => {

				t.ok( Fx.pantalla_escritorio(), 'Los tests se hacen en monitor de escritorio.' );
			});

			test('Función parse_date', t => {

				var fecha = '2018-2-3:00:00:00';
				var conver = Fx.parse_date(fecha);

				t.strictEqual( typeof conver, 'object');

				t.equal( conver, 'Sat Feb 03 2018 00:00:00 GMT+0100 (CET)', 'Devuelve la fecha en formato inglés.' );
			});

			test('Función parsear_json', t => {

				var str = '{"prim":1,"seg":2}';
				var res = { prim: 1, seg: 2 };
				
				t.deepEqual( Fx.parsear_json(str), res, 'La función devuelve el string como objeto.' );

				t.deepEqual( Fx.parsear_json(res), res, 'La función devuelve el objeto tal cual.' );

				t.deepEqual( Fx.parsear_json(''), {}, 'La función devuelve un objeto Vacio con String Vacio.' );
			});

			test('Función separar_comas', t => {

				t.strictEqual( Fx.separar_comas('venga,vamos'), 'venga, vamos', 'La función pone el espacio después de la coma' );

				t.strictEqual( Fx.separar_comas('ven.ga'), 'ven.ga', 'La función no hace nada sin comas' );
				
				t.strictEqual( Fx.separar_comas(['venga']), '', 'La función devuelve String Vacio si no es string' );
			});

			todo('Función serialize_checkbox', t => {});

			test('Función str_check_oblig', t => {

				t.strictEqual( '', Fx.str_check_oblig('Carabela', 5, 'nombre'), 'La función devuelve String Vacio si es correcto' );
				
				var mensaje_error = '(*) Dato incorrecto: nombre.<br>'
				t.strictEqual( mensaje_error, Fx.str_check_oblig('Juan', 5, 'nombre'), 'La función devuelve mensaje de error si el string es corto' );

				t.strictEqual( mensaje_error, Fx.str_check_oblig(undefined, 5, 'nombre'), 'La función devuelve mensaje de error con undefined' );
			});

			test('Función string_a_obj', t => {

				var res = {
					0: 'aaa',
					1: 'bbb',
					2: 'ccc',
				};

				t.deepEqual( Fx.string_a_obj('aaa,bbb,ccc'), res, 'La función separa por comas' );

				t.deepEqual( Fx.string_a_obj('aaa-bbb-ccc', '-'), res, 'La función separa por delimitador' );
			});

			test('Funcion strtotime', t => {

				t.strictEqual( Fx.strtotime('02/03/2018'), 1517612400, 'La funcion devuelve algo.' );
			});

			test('Función si_no', t => {

				var arr_ok = [1, '1', true, 'true'];

				for( var i in arr_ok ){

					t.strictEqual( Fx.si_no(arr_ok[i]), 'Sí', 'La función devuelve Sí con true y 1.' );
				}

				var arr_ko = [0, '0', false, 'false', undefined, null];

				for( var x in arr_ko ){

					t.strictEqual( Fx.si_no(arr_ko[x]), 'No', 'La función devuelve No con 0, false, undef y null.' );
				}

				t.strictEqual( Fx.si_no('test'), 'test', 'La función devuelve el valor si no es lo anterior' );
			});

			test('Función sugerencia', t => {

				var res = '<div class="alert alert-info"><a href="#" class="close" data-dismiss="alert">&times;</a><i class="fa fa-comments fa-2x"></i><br> ';
			    
			    res += 'Texto de test';

				res += '</div>';

				t.strictEqual( Fx.sugerencia('Texto de test'), res, 'La función devuelve el HTML esperado.' );
			});

			test('Función super_split', t=> {

			 	t.deepEqual( Fx.super_split('test', 's'), ['te', 't'], 'La función devuelve array con el corte de la variable.' );
			 	
			 	t.deepEqual( Fx.super_split('test', 'x'), ['test'], 'La función devuelve array con el string si la variable no existe en el string.' );

			 	t.deepEqual( Fx.super_split('test'), ['test'], 'La función devuelve array con el string si no hay variable.' );
			});

			skip('Función validar_formulario', t => {});

			test('Función zeroFill', t => {

				t.strictEqual( Fx.zeroFill(150, 2), '150', 'La función no añade ceros si la variable es menor que la longitud del numero.' );

				t.strictEqual( Fx.zeroFill(150, 5), '00150', 'La función añade 0s hasta la variable.' );
			});
		});
	}
);
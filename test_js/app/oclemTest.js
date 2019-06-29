define([

	'qunit',
	'helper',
	'jquery',
	'oclem',
	'app/config'

	], function(QUnit, Helper, $, Oclem, Config){

		const{ test, skip, todo } = QUnit;

		QUnit.module('Módulo Oclem admin', hooks => {

			hooks.before( t => {
				var hecho = t.async();
				//var hecho1 = t.async();

				$.when( Helper.acceder_admin() )
				.then(function(res){
					
					Helper.establecer_config($.parseJSON(res));

					t.strictEqual(Config.oclem_admin, 'true', 'Accedido como Admin');
					hecho();
				});

				this.id_concurso_bbdd = Helper.suministra_id_concurso_bbdd();
				this.expediente_bbdd = Helper.suministra_expediente_bbdd();

				// $.when(Helper.suministra_concurso_bbdd())
				// .then( function(res){
				// 	this.concurso_bbdd = $.parseJSON(res);
				// 	t.ok(this.concurso_bbdd != null);
				// 	console.log(this.concurso_bbdd);
				// 	hecho1();
				// });
			});

			hooks.after( t => {

				Helper.logout();
				t.strictEqual( Config.oclem_admin, '', 'Log out de Admin correcto.' );
			});

			skip('Función cargar_concurso', t => {

				var done1 = t.async();

				$.when(Oclem.cargar_concurso())
				.then( function(resp){

					var obj = $.parseJSON(resp);
					t.ok( obj.length > 1, 'Sin id_concurso, La función devuelve array de concursos.' );
					done1();	
				});
			})

			test('Función cargar_concurso uno', t => {

				var done1 = t.async();
				//var done2 = t.async();
				var esto = this;

				$.when(Oclem.cargar_concurso(0, this.expediente_bbdd))
				.then( function(resp){
					console.log(resp);
					//var obj = $.parseJSON(resp);
					//t.strictEqual( obj.expediente, esto.expediente_bbdd, 'La función devuelve un concurso por su expediente.' );
					done1();	
				});
/*
				$.when(Oclem.cargar_concurso(this.id_concurso_bbdd))
				.then( function(resp){

					var obj = $.parseJSON(resp);
					//console.log('jaj', obj);
					t.strictEqual( obj.id_concurso, esto.id_concurso_bbdd, 'La función devuelve un concurso por su id_concurso.' );
					done2();	
				});*/
			});

			test('Función cargar_cliente', t => {

				var done1 = t.async();
				var done2 = t.async();

				$.when(Oclem.cargar_cliente())
				.then( function(resp){

					var obj = $.parseJSON(resp);
					t.ok( obj.length > 1, 'Sin id_cliente, La función devuelve array de clientes.' );
					done1();	
				});

				$.when(Oclem.cargar_cliente(4))
				.then( function(resp){

					var obj = $.parseJSON(resp);
					t.strictEqual( obj.id_cliente, '4', 'La función devuelve un cliente.' );
					done2();	
				});
			});

			test('Función cargar_obj_clientes', t => {

				var done1 = t.async();
				var esto = this;

				$.when( Oclem.cargar_obj_clientes() )
				.then( function(resp){

					console.log('jaj', resp);
					var obj = $.parseJSON(resp);
					console.log('jaj', obj);

					t.strictEqual( obj, '', 'La función devuelve algo.' );
					done1();
				});
			});
		});
	});
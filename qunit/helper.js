

var Helper = {

	acceder_admin: function(){

		usuario = 'OclemAdmin';
		password = 'Oclem123A';

		return this.acceder_como(usuario, password);
	},

	acceder_cliente: function(){

		usuario = 'oclemfer';
		password = 'oclemfer';

		return this.acceder_como(usuario, password);
	},

	acceder_tecnico: function(){

		usuario = 'tecnico';
		password = 'tecnico';

		return this.acceder_como(usuario, password);
	},

	acceder_como: function(usuario, password){

		var resp = $.ajax({
			dataType: "text",
			type: 'POST',
		  	url: Config.base_ajax + 'login.php',
		  	data: {
			  	usuario: usuario,
			  	password: password,
			  	accion: 'check_login'
			}
		});

		return resp;

		//return LoginView.check_login()
	},

	establecer_config: function(obj_json){

		Config.hash     = obj_json.hash;
		Config.nombre   = obj_json.nombre;
		Config.empresa  = obj_json.empresa;

		if( typeof obj_json.oclem_admin != 'undefined' ){
			Config.oclem_admin = obj_json.oclem_admin;
		}

		if( typeof obj_json.comercial != 'undefined' ){
			Config.comercial = obj_json.comercial;
		}

		if( typeof obj_json.tecnico != 'undefined' ){
			Config.tecnico = obj_json.tecnico;
		}

		if( typeof obj_json.cliente_admin != 'undefined' ){
			Config.cliente_admin = obj_json.cliente_admin;
		}


		// En ipad con navegación privada no va a funcionar
		try {

			window.localStorage.setItem('hash', Config.hash);

		} catch(domException) {

			if (domException.name === 'QuotaExceededError' ||
		    	domException.name === 'NS_ERROR_DOM_QUOTA_REACHED') {
		    	// Fallback code comes here.
		  
				alert('Oclem Concursos necesita almacenar información en su navegador. Esto no es posible en modo navegación privada. Por favor, deshabilite esta opción en su navegador y vuelva a intentarlo.');
			}
		}

		window.localStorage.setItem('hash',          Config.hash);
		window.localStorage.setItem('nombre',        Config.nombre);
		window.localStorage.setItem('empresa',       Config.empresa);
		window.localStorage.setItem('oclem_admin',   Config.oclem_admin);
		window.localStorage.setItem('comercial',     Config.comercial);
		window.localStorage.setItem('tecnico',       Config.tecnico);
		window.localStorage.setItem('cliente_admin', Config.cliente_admin);

		//Oclem.cargar_obj_clientes();
		//Oclem.cargar_obj_usuario();
	},

	log_admin: function(){
		var json = {
			'hash': 'Mio',
			'id_perfil': '1',
			'perfil': 'Admin'
		};

		Calidad.establecer_config(json);
	},

	log_cliente: function(){

		var json = {
			'hash': 'Mio',
			'id_perfil': '3',
			'perfil': 'Cliente'
		};

		Calidad.establecer_config(json);
	},

	log_tecnico: function(){

		var json = {
			'hash': 'Mio',
			'id_perfil': '2',
			'perfil': 'Tecnico'
		};

		Calidad.establecer_config(json);
	},

	logout: function(){

		Oclem.limpiar_datos_sesion();
	},


	suministra_variable: function(){

		return 'hola';
	}


};

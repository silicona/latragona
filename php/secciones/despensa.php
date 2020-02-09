
<?php 
	
	if( $idioma[0] != '' ){ header('Location: ' . BASE_URL . $idioma[0]); }

	require_once BASE_FILE . 'php/inc/menu_movil.php'; 
?>

<div id="contenedor" class="carta cont_despensa">

	<?php require_once BASE_FILE . 'php/inc/nav_superior_global.php' ?>

	<header></header>

	<h1>Despensa</h1>

	<div class="marco" id="marco_despensa">

		<section id="login">

			<div class="div_imagen">
				
				<img class="imagen" src="<?php echo BASE_URL; ?>media/asamblea.jpg">

			</div>

			<form id="form_login" class="mi_form form_login">

				<div class="row">
				
					<?php
						
						echo form_input( array(
							'label' => 'Usuario',
							'id' 	=> 'usuario',
							'tipo'	=> 'text',
							'clase' => 'texto obligatorio',
							'addon' => 'usuario',
							'min_char' => 3,
							'col_bs_group' => 'col-12'
						) );

						echo form_input( array(
							'label' => 'Contraseña',
							'id' 	=> 'password',
							'tipo'	=> 'password',
							'clase' => 'texto obligatorio',
							'addon' => 'password',
							'min_char' => 3,
							'col_bs_group' => 'col-12'
						) );

						echo form_boton( array(
							'label'	=> 'Acceder',
							'id'	=> 'btn_acceder',
							'clase' => 'btn_exito boton',
							'icono' => 'guardar',
							'col_bs_input' => 'text-center',
							'col_bs_group' => 'col-12'
						) );

					?>

				</div>

				<div id="resp_form_login" class="res_form"></div>

			</form>
			
		</section>

	</div>

	<?php require_once BASE_FILE . 'php/inc/footer.php' ?>

</div>
<?php

		global $wpdb;

		$rabud_get_form_data = $wpdb->get_results('SELECT * FROM '.$wpdb->prefix.'rabud_forms WHERE rabud_shortcode="'.$atts['name'].'"');
		foreach ( $rabud_get_form_data as $rabud_form_data ):
		
		if (!empty($_POST['rabud_form'])) {

			// SI EL USUARIO DECIDIO REDIRECCIONAR, SE AGREGA REDIRECCION
			if ($rabud_form_data->rabud_redirect == 1) {
				echo '<script type="text/javascript">window.location="'.$rabud_form_data->rabud_url.'";</script>';
			}

			$rabud_form = $_POST['rabud_form'];
			$rabud_firstname = $_POST['rabud_firstname'];
			$rabud_lastname = $_POST['rabud_lastname'];
			$rabud_email = $_POST['rabud_email'];
			$rabud_phone = $_POST['rabud_phone'];
			$rabud_cellphone = $_POST['rabud_cellphone'];
			$rabud_skype = $_POST['rabud_skype'];
			$rabud_date = date("d-m-y");

			// INSERTAMOS LOS VALORES DEL FORMULARIO A LA BASE DE DATOS
			$wpdb->insert($wpdb->prefix."rabud_users", array(
				"rabud_form" => $rabud_form,
				"rabud_firstname" => $rabud_firstname,
				"rabud_lastname" => $rabud_lastname,
				"rabud_email" => $rabud_email,
				"rabud_phone" => $rabud_phone,
				"rabud_cellphone" => $rabud_cellphone,
				"rabud_skype" => $rabud_skype,
				"rabud_date" => $rabud_date
			));
		}
		
		echo '<div class="rabud-form'.$rabud_form_data->rabud_style.'">
				<form method="post" action="">
					<input type="hidden" name="rabud_form" id="rabud_form" value="'.$atts['name'].'" />
					<input type="hidden" name="rabud_date" value="'.$rabud_date.'" />';
					if($rabud_form_data->rabud_label_firstname == 1){ echo '<input type="text" name="rabud_firstname" id="" value="" />';}
					if($rabud_form_data->rabud_label_lastname == 1){ echo '<input type="text" name="rabud_lastname" id="" value="" />';}
					echo '<input type="email" name="rabud_email" id="" value="" />';
					if($rabud_form_data->rabud_label_phone == 1){ echo '<input type="tel" name="rabud_phone" id="" value="" />';}
					if($rabud_form_data->rabud_label_cellphone == 1){ echo '<input type="tel" name="rabud_cellphone" id="" value="" />';}
					if($rabud_form_data->rabud_label_skype == 1){ echo '<input type="text" name="rabud_skype" id="" value="" />';}
					echo '<br><input type="submit" name="" id="" value="Enviar" />
				</form>
			</div>';
		endforeach;
<?php
	
	global $wpdb;
	// Codigo para guardar en base de datos
	if (!empty($_POST['newFormSend'])) {
		$rabud_name = $_POST['rabud_name'];
		$rabud_shortcode = $_POST['rabud_shortcode'];
		$rabud_style = $_POST['rabud_style'];
		$rabud_label_firstname = $_POST['rabud_label_firstname'];
		$rabud_label_lastname = $_POST['rabud_label_lastname'];
		$rabud_label_phone = $_POST['rabud_label_phone'];
		$rabud_label_cellphone = $_POST['rabud_label_cellphone'];
		$rabud_label_skype = $_POST['rabud_label_skype'];
		$rabud_redirect = $_POST['rabud_redirect'];
		$rabud_url = $_POST['rabud_url'];
		$rabud_send_email = $_POST['rabud_send_email'];
		$rabud_subject = $_POST['rabud_subject'];
		$rabud_message = $_POST['rabud_message'];
		$rabud_creation = date("d-m-y");
		
		if (empty($rabud_name) || empty($rabud_shortcode)) {
			echo '<div id="message" class="error"><p>Error: Los campos Nombre y Shortcode son requeridos.</p></div>';
		}else{
			$rabud_get_shortcode = $wpdb->get_row('SELECT * FROM ' . $wpdb->prefix . 'rabud_forms');
			if ($rabud_shortcode == $rabud_get_shortcode->rabud_shortcode) {
				echo '<div id="message" class="error"><p>Error: Ya existe un formulario con el shortcode <b>'.$rabud_shortcode.'</b>.</p></div>';
			}else{
				$wpdb->insert($wpdb->prefix."rabud_forms", array(
					"rabud_name" => $rabud_name, 
					"rabud_shortcode" => $rabud_shortcode,
					"rabud_style" => $rabud_style,
					"rabud_label_firstname" => $rabud_label_firstname,
					"rabud_label_lastname" => $rabud_label_lastname,
					"rabud_label_phone" => $rabud_label_phone,
					"rabud_label_cellphone" => $rabud_label_cellphone,
					"rabud_label_skype" => $rabud_label_skype,
					"rabud_redirect" => $rabud_redirect,
					"rabud_url" => $rabud_url,
					"rabud_send_email" => $rabud_send_email,
					"rabud_subject" => $rabud_subject,
					"rabud_message" => $rabud_message,
					"rabud_creation" => $rabud_creation,
					"rabud_views" => '0',
					"rabud_unique_views" => '0',
					"rabud_optins" => '0'
				));
				echo '<div id="message" class="updated"><p>Tu formulario se ha creado correctamente.</p></div>';
			}
		}
		
	}
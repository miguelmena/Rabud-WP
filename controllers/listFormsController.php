<?php
	
	// ******* EXTRAYENDO CONTENIDO DE LA BASE DE DATOS *******
	function listForms(){
		global $wpdb;
		
		//$rabud_form_id = $wpdb->get_row('SELECT id FROM ' . $wpdb->prefix . 'rabud_forms');
		
		$rabud_form_result = $wpdb->get_results('SELECT * FROM '.$wpdb->prefix.'rabud_forms ORDER BY id DESC');
		foreach ( $rabud_form_result as $rabud_form ):
			if ($rabud_form->id<1) {
				echo '<tr><td colspan="7">No se encontraron resultados</td></tr>';
			}else{
				echo '<tr>
						<td>' . $rabud_form->rabud_name . '</td>
						<td>[rabud_form name="' . $rabud_form->rabud_shortcode . '"]</td>
						<td>' . $rabud_form->rabud_views . '</td>
						<td>' . $rabud_form->rabud_unique_views . '</td>
						<td>' . $rabud_form->rabud_optins . '</td>
						<td>' . $rabud_form->rabud_creation . '</td>
						<td>
							<form method="get" action="" style="float: left;">
								<input type="hidden" name="page" value="rabud_setup">
								<input type="hidden" name="editFormId" value="' . $rabud_form->id . '">
								<button type="submit" class="button button-primary" alt="#TB_inline?width=950&height=600&inlineId=editForm">
									<span class="dashicons dashicons-edit" style="margin-top: 3px;"></span>
								</button>
							</form> 
							<form method="get" action="" style="float: left;margin-left: 7px;">
								<input type="hidden" name="page" value="rabud_setup">
								<input type="hidden" name="deleteFormId" value="' . $rabud_form->id . '">
								<button type="submit" class="button button-primary" onclick="return rabudDeleteMessage()" alt="Borrar">
									<span class="dashicons dashicons-trash" style="margin-top: 3px;"></span>
								</button>
							</form>
						</td>
					</tr>';
			}
		endforeach;
		if (isset($_GET['deleteFormId']) && !empty($_GET['deleteFormId'])) {
			$deleteFormId = $_GET['deleteFormId'];
			global $wpdb;
			$wpdb->delete( $wpdb->prefix . 'rabud_forms', array( 'id' => $deleteFormId ) );
			echo '<script type="text/javascript">window.location="'.site_url().'/wp-admin/admin.php?page=rabud_setup";</script>';				
		}
	}
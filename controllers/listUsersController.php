<?php

	function listUsers(){
		global $wpdb;
		$rabud_user_result = $wpdb->get_results('SELECT * FROM '.$wpdb->prefix.'rabud_users ORDER BY id DESC');
		foreach ( $rabud_user_result as $rabud_user ):
			if ($rabud_user->id<1) {
				echo '<tr><td colspan="7">No se encontraron resultados</td></tr>';
			}else{
				echo '<tr>
						<td>'.$rabud_user->rabud_firstname.'</td>
						<td>'.$rabud_user->rabud_lastname.'</td>
						<td>'.$rabud_user->rabud_email.'</td>
						<td>'.$rabud_user->rabud_phone.'</td>
						<td>'.$rabud_user->rabud_cellphone.'</td>
						<td>'.$rabud_user->rabud_skype.'</td>
						<td>'.$rabud_user->rabud_date.'</td>
						<td>
							<a href="" class="button button-primary" title="Editar"><span class="dashicons dashicons-edit" style="margin-top: 3px;"></span></a>
							<a href="" class="button button-primary" title="Borrar"><span class="dashicons dashicons-trash" style="margin-top: 3px;"></span></a>
						</td>
					</tr>';
			}
		endforeach;
	}
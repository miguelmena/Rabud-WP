<h2>
	<span class="dashicons dashicons-feedback" style="margin-top: 5px;"></span> Lista de Formularios 
	<a href="#TB_inline?width=1000&height=550&inlineId=newForm" class="add-new-h2 thickbox">Nuevo Formulario</a>
</h2>
<br>
<table class="wp-list-table widefat fixed">
	<thead>
		<tr>
			<th class="manage-column"><b>Titulo</b></th>
			<th class="manage-column"><b>Shortcode</b></th>
			<th class="manage-column"><b>Visitas</b></th>
			<th class="manage-column"><b>Visitas Unicas</b></th>
			<th class="manage-column"><b>Optins</b></th>
			<th class="manage-column"><b>Creación</b></th>
			<th class="manage-column"><b>Acciones</b></th>
		</tr>
	</thead>
	<tbody>
		<?= listForms(); ?>
	</tbody>
	<tfoot>
		<tr>
			<th class="manage-column"><b>Titulo</b></th>
			<th class="manage-column"><b>Shortcode</b></th>
			<th class="manage-column"><b>Visitas</b></th>
			<th class="manage-column"><b>Visitas Unicas</b></th>
			<th class="manage-column"><b>Optins</b></th>
			<th class="manage-column"><b>Creación</b></th>
			<th class="manage-column"><b>Acciones</b></th>
		</tr>
	</tfoot>
</table>
<br><br>

<!-- ******* THICKBOX PARA EDITAR FORMULARIOS ******* -->
<?php add_thickbox(); ?>
<div id="editForm" style="display:none;">
	<form name="" id="" method="post" action="">
			<input type="hidden" name="newFormSend" value="true">
			<h1><span class="dashicons dashicons-format-aside"></span> Editar Formulario</h1>
			<table>
				<tr>
					<td valign="top" style="padding-top: 6px;">
						<label for="rabud_name"><b>Nombre</b></label>
					</td>
					<td>
						<input type="text" name="rabud_name" id="rabud_name" placeholder="Ingresa un Nombre" value="<?= $rabud_name ?>" />
						<p class="description">Ingresa el nombre de tu formulario, es para identificarlo.</p>
					</td>
				</tr>
				<tr>
					<td valign="top" style="padding-top: 6px;">
						<label for="rabud_shortcode"><b>Shortcode</b></label>
					</td>
					<td>
						<input type="text" name="rabud_shortcode" id="rabud_shortcode" placeholder="Ingresa un nombre a tu shortcode" value="" />
						<p class="description">El nombre debe ser en minusculas y sin espacios.</p>
					</td>
				</tr>
				<tr>
					<td valign="top" style="padding-top: 6px;">
						<label for="rabud_style"><b>Estilo</b></label>
					</td>
					<td>
						<select name="rabud_style" id="rabud_style">
							<option value="1">Estilo 1</option>
							<option value="2">Estilo 2</option>
							<option value="3">Estilo 3</option>
						</select>
						<p class="description">Selecciona el estilo de formulario que deseas usar.</p>
					</td>
				</tr>
				<tr>
					<td valign="top" style="padding-top: 6px;">
						<label><b>Campos Input</b></label>
					</td>
					<td>
						<label for="rabud_label_firstname">Nombre</label> <input type="checkbox" name="rabud_label_firstname" id="rabud_label_firstname" value="1">
						<label for="rabud_label_lastname">Apellido</label> <input type="checkbox" name="rabud_label_lastname" id="rabud_label_lastname" value="1">
						<label for="rabud_label_email">Email</label> <input type="checkbox" name="rabud_label_email" id="rabud_label_email" value="1" checked disabled readonly>
						<label for="rabud_label_phone">Telefono</label> <input type="checkbox" name="rabud_label_phone" id="rabud_label_phone" value="1">
						<label for="rabud_label_cellphone">Movil</label> <input type="checkbox" name="rabud_label_cellphone" id="rabud_label_cellphone" value="1">
						<label for="rabud_label_skype">Skype</label> <input type="checkbox" name="rabud_label_skype" id="rabud_label_skype" value="1">
						<p class="description">Puedes elejir que campos mostrar. Nota: Email es Obligatorio</p>
					</td>
				</tr>
				<tr>
					<td>
						<label for="rabud_redirect"><b>Redireccionar</b></label>
					</td>
					<td>
						<input type="checkbox" name="rabud_redirect" id="rabud_redirect" value="1">
					</td>
				</tr>
				<tr>
					<td valign="top" style="padding-top: 6px;">
						<label for="rabud_url"><b>URL a Redireccionar</b></label>
					</td>
					<td>
						<input type="url" name="rabud_url" id="rabud_url" value="" placeholder="Ingresa una URL">
						<p class="description">Ingresa la url donde redireccionarás a tus suscriptores.</p>
					</td>
				</tr>
				<tr>
					<td>
						<label for="rabud_send_email"><b>Enviar Email</b></label>
					</td>
					<td>
						<input type="checkbox" name="rabud_send_email" id="rabud_send_email" value="1">
					</td>
				</tr>
				<tr>
					<td valign="top" style="padding-top: 6px;">
						<label for="rabud_subject"><b>Asunto</b></label>
					</td>
					<td>
						<input type="text" name="rabud_subject" id="rabud_subject" value="" placeholder="Ingresa un Asunto">
						<p class="description">Ingresa el asunto de tu mensaje.</p>
					</td>
				</tr>
				<tr>
					<td valign="top" style="padding-top: 6px;">
						<label for="rabud_message"><b>Mensaje</b></label>
					</td>
					<td>
						<textarea name="rabud_message" id="rabud_message" placeholder="Ingresa un Mensaje"></textarea>
						<p class="description">Puedes ingresar el mesaje que recibiran tus suscriptores.</p>
					</td>
				</tr>
			</table>
			<br>
			<center><input type="submit" class="button button-primary button-large" value="GUARDAR CAMBIOS" style="text-align:center;"></center>
		</form>
</div>

<script>
function rabudDeleteMessage()
{
	if(confirm('¿Seguro que deseas eliminar este formulario?'))
		return true;
	else
		return false;
}
</script>
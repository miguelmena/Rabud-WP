<table>
	<tr>
		<td>Selecciona un formulario para desplegar resultados</td>
		<td>
			<form name="" method="get" action="">
				<input type="hidden" name="page" value="rabud_setup"> <select
					name="formTest" onchange="this.form.submit()">
					<option value="">Todos los Usuarios</option>
					<option value="demo1">Demo 1</option>
					<option value="demo2">Demo 2</option>
				</select>
			</form>
		</td>
	</tr>
</table>
<br>
<table class="wp-list-table widefat fixed">
	<thead>
		<tr>
			<th class="manage-column"><b>Nombre</b></th>
			<th class="manage-column"><b>Apellido</b></th>
			<th class="manage-column"><b>Email</b></th>
			<th class="manage-column"><b>Telefono</b></th>
			<th class="manage-column"><b>Movil</b></th>
			<th class="manage-column"><b>Skype</b></th>
			<th class="manage-column"><b>Fecha</b></th>
			<th class="manage-column"><b>Acciones</b></th>
		</tr>
	</thead>
	<tbody>
				<?= listUsers(); ?>
			</tbody>
	<tfoot>
		<tr>
			<th class="manage-column"><b>Nombre</b></th>
			<th class="manage-column"><b>Apellido</b></th>
			<th class="manage-column"><b>Email</b></th>
			<th class="manage-column"><b>Telefono</b></th>
			<th class="manage-column"><b>Movil</b></th>
			<th class="manage-column"><b>Skype</b></th>
			<th class="manage-column"><b>Fecha</b></th>
			<th class="manage-column"><b>Acciones</b></th>
		</tr>
	</tfoot>
</table>
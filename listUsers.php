<div class="wrap">
	<br>
	<h1><span class="dashicons dashicons-businessman"></span> RABUD - Lista de Usuarios</h1>
	<?php
		// ******* AGREGANDO CONTROLES *******
		require "controllers/listUsersController.php";

		// ******* AGREGANDO VISTAS *******
		require "views/listUsers.php";
	?>
	<script type="text/javascript">
		document.getElementById('rabud-name').onkeyup = function() {
			document.getElementById('rabud-shortcode').value = url_slug(this.value);
		}

		document.getElementById('rabud-form-bgcolor').onchange = function() {
			document.getElementById('rabud-preview-form').style.background = this.value;
		}
		document.getElementById('rabud-form-headline').onkeyup = function() {
			document.getElementById('rabud-preview-headline').innerHTML = this.value;
		}
		document.getElementById('rabud-form-subheadline').onkeyup = function() {
			document.getElementById('rabud-preview-subheadline').innerHTML = this.value;
		}
		document.getElementById('rabud-form-name-text').onkeyup = function() {
			document.getElementById('rabud-preview-name').placeholder = this.value;
		}
		document.getElementById('rabud-form-lastname-text').onkeyup = function() {
			document.getElementById('rabud-preview-lastname').placeholder = this.value;
		}
		document.getElementById('rabud-form-email-text').onkeyup = function() {
			document.getElementById('rabud-preview-email').placeholder = this.value;
		}
		document.getElementById('rabud-form-phone-text').onkeyup = function() {
			document.getElementById('rabud-preview-phone').placeholder = this.value;
		}
		document.getElementById('rabud-form-cellphone-text').onkeyup = function() {
			document.getElementById('rabud-preview-cellphone').placeholder = this.value;
		}
		document.getElementById('rabud-form-skype-text').onkeyup = function() {
			document.getElementById('rabud-preview-skype').placeholder = this.value;
		}
		document.getElementById('rabud-form-button-text').onkeyup = function() {
			document.getElementById('rabud-preview-button').value = this.value;
		}
		document.getElementById('rabud-form-privacy').onkeyup = function() {
			document.getElementById('rabud-preview-privacy').innerHTML = this.value;
		}
	</script>
</div>
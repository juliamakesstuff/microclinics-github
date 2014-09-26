<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php require_once('get-wp-load.php'); ?>
<div class="sd-shortcode-form-header"> Insert Full Bg Shortcode </div>
<div class="sd-page-content">
	<table>
		<tr>
			<th><label for="sd-option-full-bg">Background Color</label></th>
			<td><input id="sd-option-full-bg" class="sd-colorpicker" type="text" value="#f5f219" data-default-color="#f5f219" /></td>
		</tr>
		<tr>
			<th><label for="sd-option-full-text">Text Color</label></th>
			<td><input id="sd-option-full-text" class="sd-colorpicker" type="text" value="#1c1c1c" data-default-color="#1c1c1c" /></td>
		</tr>
	</table>
	<p class="sd-submit-button">
		<input id="sd-send-full" class="button button-primary button-large" value="Send to Editor" type="submit" />
	</p>
</div>
</body>
</html>
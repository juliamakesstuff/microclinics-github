<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php require_once('get-wp-load.php'); ?>
<div class="sd-shortcode-form-header">Insert Highlight Shortcode</div>
<div class="sd-page-content">
	<table>
		<tr>
			<th><label for="sd-option-highlight-content">Highlighted Text</label></th>
			<td><textarea cols=70 rows=5 id="sd-option-highlight-content"  value="" /></td>
		</tr>
		<tr>
			<th><label for="sd-option-highlight-bg">Background Color</label></th>
			<td><input class="sd-colorpicker" id="sd-option-highlight-bg" type="text" value="#f00000" data-default-color="#f00000" /></td>
		</tr>
		<tr>
			<th><label for="sd-option-highlight-text">Text Color</label></th>
			<td><input class="sd-colorpicker" id="sd-option-highlight-text" type="text" value="#ffffff" data-default-color="#ffffff" /></td>
		</tr>
	</table>
	<p class="sd-submit-button">
		<input id="sd-send-highlight" class="button button-primary button-large" value="Send to Editor" type="submit" />
	</p>
</div>
</body>
</html>

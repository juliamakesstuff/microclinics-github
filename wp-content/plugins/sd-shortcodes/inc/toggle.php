<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php require_once('get-wp-load.php'); ?>
<div class="sd-shortcode-form-header">Insert Toggle Shortcode</div>
<div class="sd-page-content">
	<table>
		<tr>
			<th><label for="sd-option-toggle-title">Toggle Title</label></th>
			<td><input type="text" id="sd-option-toggle-title"  value="" /></td>
		</tr>
		<tr>
			<th><label for="sd-option-toggle-content">Toggle Content</label></th>
			<td><textarea cols=70 rows=5 id="sd-option-toggle-content"  value="" /></td>
		</tr>
	</table>
	<p class="sd-submit-button">
		<input id="sd-send-toggle" class="button button-primary button-large" value="Send to Editor" type="submit" />
	</p>
</div>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php require_once('get-wp-load.php'); ?>
<div class="sd-shortcode-form-header">Insert Tooltip Shortcode</div>
<div class="sd-page-content">
	<table>
		<tr>
			<th><label for="sd-option-tooltip-content">Content</label></th>
			<td><textarea cols=70 rows=5 id="sd-option-tooltip-content"  value="" /></td>
		</tr>
		<tr>
			<th><label for="sd-option-tooltip-text">Tooltip Text</label></th>
			<td><textarea cols=70 rows=5 id="sd-option-tooltip-text"  value="" /></td>
		</tr>
	</table>
	<p class="sd-submit-button">
		<input id="sd-send-tooltip" class="button button-primary button-large" value="Send to Editor" type="submit" />
	</p>
</div>
</body>
</html>
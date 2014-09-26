<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php require_once('get-wp-load.php'); ?>
<div class="sd-shortcode-form-header">Insert Divider Shortcode</div>
<div class="sd-page-content">
	<table>
		<tr>
			<th><label for="sd-option-divider-type">Type</label></th>
			<td><select id="sd-option-divider-type">
					<option value="space">Space</option>
					<option value="line">Line</option>
				</select></td>
		<tr>
		<tr>
			<th><label for="sd-option-divider-margintop">Margin Top</label></th>
			<td><input id="sd-option-divider-margintop" type="text" />
				<small>(optional) (Eg. 40 - default is 30)</td>
		</tr>
		<tr>
			<th><label for="sd-option-divider-marginbottom">Margin Bottom</label></th>
			<td><input id="sd-option-divider-marginbottom" type="text" />
				<small>(optional) (Eg. 40 - default is 30)</td>
				</td>
		</tr>
	</table>
	<p class="sd-submit-button">
		<input id="sd-send-divider" class="button button-primary button-large" value="Send to Editor" type="submit" />
	</p>
</div>
</body>
</html>

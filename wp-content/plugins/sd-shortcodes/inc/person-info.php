<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php require_once('get-wp-load.php'); ?>
<div class="sd-shortcode-form-header"> Insert Person Shortcode </div>
<div class="sd-page-content">
	<table>
		<tr>
			<th><label for="sd-option-person-name">Name</label></th>
			<td><input type="text" id="sd-option-person-name"  value="" /></td>
		</tr>
		<tr>
			<th><label for="sd-option-person-subtitle">Subtitle</label></th>
			<td><input type="text" id="sd-option-person-subtitle"  value="" />
			</td>
		</tr>
		<tr>
			<th><label for="sd-option-person-">Custom Marker Icon</label></th>
			<td><input class="upload_image_button button" type="button" value="Insert Photo"/>
				<input id="sd-option-person-photo" type="text" />
		</td>
		</tr>
		<tr>
			<th><label for="sd-option-person-facebook">Facebook URL</label></th>
			<td><input type="text" id="sd-option-person-facebook"  value="" /></td>
		</tr>
		<tr>
			<th><label for="sd-option-person-twitter">Twitter URL</label></th>
			<td><input type="text" id="sd-option-person-twitter"  value="" /></td>
		</tr>
		<tr>
			<th><label for="sd-option-person-googleplus">Google+ URL</label></th>
			<td><input type="text" id="sd-option-person-googleplus"  value="" /></td>
		</tr>
		<tr>
			<th><label for="sd-option-person-linkedin">LinkedIn URL</label></th>
			<td><input type="text" id="sd-option-person-linkedin"  value="" /></td>
		</tr>
	</table>
	<p class="sd-submit-button">
		<input id="sd-send-person" class="button button-primary button-large" value="Send to Editor" type="submit" />
	</p>
</div>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php require_once('get-wp-load.php'); ?>
<div class="sd-shortcode-form-header">Insert Framed Image Shortcode</div>
<div class="sd-page-content">
	<table>
		<tr>
			<th><label for="sd-option-framed-image">Image Code</label></th>
			<td><textarea cols=70 rows=10 id="sd-option-framed-image"  value="" />
				<br />
				<small>(Eg. &lt;img src="image-url-here" /&gt;)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-framed-image-align">Align</label></th>
			<td><select id="sd-option-framed-image-align">
					<option selected value="">-</option>
					<option value="left">Left</option>
					<option value="right">Right</option>
					<option value="center">Center</option>
				</select>
				<small>(optional)</small></td>
		<tr>
	</table>
	<p class="sd-submit-button">
		<input id="sd-send-framed-image" class="button button-primary button-large" value="Send to Editor" type="submit" />
	</p>
</div>
</body>
</html>
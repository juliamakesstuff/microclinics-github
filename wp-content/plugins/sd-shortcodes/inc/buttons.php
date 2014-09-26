<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php require_once('get-wp-load.php'); ?>
<div class="sd-shortcode-form-header"> Insert Button Shortcode </div>
<div class="sd-page-content">
	<table>
		<tr>
			<th><label for="sd-option-button-content">Button Text</label></th>
			<td><input type="text" id="sd-option-button-content"  value="" /></td>
		</tr>
		<tr>
			<th><label for="sd-option-button-link">Button Link</label></th>
			<td><input type="text" id="sd-option-button-link"  value="" />
				<small> (starting with <strong>http://</strong>)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-button-bgcolor">Button Color</label></th>
			<td><input id="sd-option-button-bgcolor" class="sd-colorpicker" type="text" value="#f00000" data-default-color="#f00000" /></td>
		</tr>
		<tr>
			<th><label for="sd-option-button-textcolor">Text Color</label></th>
			<td><input id="sd-option-button-textcolor" class="sd-colorpicker" type="text" value="#ffffff" data-default-color="#ffffff" /></td>
		</tr>
		<tr>
			<th><label for="sd-option-button-size">Button Size</label></th>
			<td><select id="sd-option-button-size">
					<option selected value="">-</option>
					<option value="medium">Normal</option>
					<option value="small">Small</option>
					<option value="large">Large</option>
				</select>
				<small>(optional) (default is normal)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-button-radius">Button Radius</label></th>
			<td><input type="text" id="sd-option-button-radius"  value="" />
				<small>(optional) (Eg. 3px) (default is 20px)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-button-align">Button Align</label></th>
			<td><select id="sd-option-button-align">
					<option selected value="">-</option>
					<option value="left">Left</option>
					<option value="right">Right</option>
				</select>
				<small>(optional)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-button-rel">Button Rel</label></th>
			<td><input type="text" id="sd-option-button-rel"  value="" />
				<small>(optional) (Eg. nofollow)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-button-target">Button Target</label></th>
			<td><select id="sd-option-button-target">
					<option selected value="">-</option>
					<option value="_blank">Blank</option>
					<option value="_parent">Parent</option>
					<option value="_top">Top</option>
				</select>
				<small>(optional)</small></td>
		</tr>
	</table>
	<p class="sd-submit-button">
		<input id="sd-send-button" class="button button-primary button-large" value="Send to Editor" type="submit" />
	</p>
</div>
</body>
</html>
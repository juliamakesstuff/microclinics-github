<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php require_once('get-wp-load.php'); ?>
<div class="sd-shortcode-form-header">Insert Skill Shortcode</div>
<div class="sd-page-content">
	<table>
		<tr>
			<th><label for="sd-option-skill-title">Skill Title</label></th>
			<td><input type="text" id="sd-option-skill-title"  value="" /></td>
		</tr>
		<tr>
			<th><label for="sd-option-skill-color">Bar Color</label></th>
			<td><input id="sd-option-skill-color" class="sd-colorpicker" type="text" value="#6ADCFA" data-default-color="#6ADCFA" /></td>
		</tr>
		<tr>
			<th><label for="sd-option-skill-percentage">Skill Percentage</label></th>
			<td><input type="text" id="sd-option-skill-percentage"  value="" />
				<small>(Eg. 70)</small></td>
		</tr>
	</table>
	<p class="sd-submit-button">
		<input id="sd-send-skill" class="button button-primary button-large" value="Send to Editor" type="submit" />
	</p>
</div>
</body>
</html>
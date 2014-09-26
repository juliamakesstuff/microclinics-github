<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php require_once('get-wp-load.php'); ?>
<div class="sd-shortcode-form-header">Insert Accordion Shortcode</div>
<div class="sd-page-content">
	<input type="button" class="sd-add-accordion button" value="Add New Accordion" />
	<table>
		<tr>
			<th><label for="sd-option-accordion-state">Accordion State </label></th>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<select id="sd-option-accordion-state">
					<option selected value="">-</option>
					<option value="open">Open</option>
				</select>
				<small>(optional) (default is closed)</small></td>
		</tr>
	</table>
	<div class="sd-accordion-content-inputs">
		<table id="sd-accordion-table0" class="sd-pricing-table-border">
			<tr>
				<th><label for="sd-option-accordion-title">Accordion Title</label></th>
				<td><input type="text" class="sd-option-accordion-title" value="" /></td>
			</tr>
			<tr>
				<th><label for="sd-option-accordion-content">Accordion Content</label></th>
				<td><textarea cols=70 rows=5 class="sd-option-accordion-content"  value="" /></td>
			</tr>
		</table>
		<div class="sd-last-div"></div>
	</div>
	<p class="sd-submit-button">
		<input id="sd-send-accordion" class="button button-primary button-large" value="Send to Editor" type="submit" />
	</p>
</div>
</body>
</html>
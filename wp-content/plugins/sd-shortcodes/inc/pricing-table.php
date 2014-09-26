<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php require_once('get-wp-load.php'); ?>
<div class="sd-shortcode-form-header">Insert Pricing Table Shortcode</div>
<div class="sd-page-content">
	<input type="button" class="sd-add-pricing button" value="Add New Column" />
	<table id="sd-pricing-table0" class="sd-pricing-table-border">
		<tr>
			<th><label for="sd-option-pricing-featured">Featured?</label></th>
			<td><select class="sd-option-pricing-featured">
					<option selected value="">-</option>
					<option value="yes">Yes</option>
				</select>
				<small>(default is no)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-pricing-width">Column Width</label></th>
			<td><input type="text" class="sd-option-pricing-width" value="" />
				<small>(default is 180px)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-pricing-title">Title</label></th>
			<td><input type="text" class="sd-option-pricing-title" value="" /></td>
		</tr>
		<tr>
			<th><label for="sd-option-pricing-price">Price</label></th>
			<td><input type="text" class="sd-option-pricing-price" value="" /></td>
		</tr>
		<tr>
			<th><label for="sd-option-pricing-decimals">Decimals</label></th>
			<td><input type="text" class="sd-option-pricing-decimals" value="" /></td>
		</tr>
		<tr>
			<th><label for="sd-option-pricing-desc">Price Description</label></th>
			<td><input type="text" class="sd-option-pricing-desc" value="" />
				<small>(Eg. per month) </small></td>
		</tr>
		<tr>
			<th><label for="sd-option-pricing-border_color">Border Color</label></th>
			<td><input type="text" class="sd-option-pricing-border_color" value="" />
				<small>(Eg. #f00000)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-pricing-button_text">Button Text</label></th>
			<td><input type="text" class="sd-option-pricing-button_text" value="" /></td>
		</tr>
		<tr>
			<th><label for="sd-option-pricing-button_color">Button Color</label></th>
			<td><input type="text" class="sd-option-pricing-button_color" value="" />
				<small>(Eg. #f00000)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-pricing-button_url">Button Link</label></th>
			<td><input type="text" class="sd-option-pricing-button_url" value="" /></td>
		</tr>
		<tr>
			<th><label for="sd-option-pricing-button_target">Button Target</label></th>
			<td><select class="sd-option-pricing-button_target">
					<option selected value="">-</option>
					<option value="_blank">Blank</option>
					<option value="_parent">Parent</option>
					<option value="_top">Top</option>
				</select>
				<small>(optional)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-pricing-button_rel">Button Rel</label></th>
			<td><input type="text" class="sd-option-pricing-button_rel" value="" /></td>
		</tr>
		<tr>
			<th><label for="sd-option-pricing-content">Content</label></th>
			<td><textarea cols=70 rows=10 class="sd-option-pricing-content"  value="" />
				<small>(html list code)</small></td>
		</tr>
	</table>
	<sd

	<p class="sd-submit-button">
		<input id="sd-send-pricing" class="button button-primary button-large" value="Send to Editor" type="submit" />
	</p>
</div>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php require_once('get-wp-load.php'); ?>
<div class="sd-shortcode-form-header">Insert Carousel Shortcode</div>
<div class="sd-page-content">
	<input type="button" class="sd-add-carousel button" value="Add New Carousel Item" />
	
	<table class="sd-carousel-id">
	<tr>
			<th><label for="sd-option-carousel-id">Id</label></th>
			<td><input type="text" class="sd-option-carousel-id" value="" />
				<small>(Eg. carousel1) (must be unique)</small></td>
	</tr>
	<tr>
			<th><label for="sd-option-carousel-width">Item Width</label></th>
			<td><input type="text" class="sd-option-carousel-width" value="" />
			<small>(default is 271)</small></td>
		<tr>
	</table>
	<div class="sd-page-carousel-content">
	<table id="sd-carousel-table0" class="sd-pricing-table-border">
		<tr>
			<th><label for="sd-option-carousel-content">Item Content</label></th>
			<td><textarea cols=70 rows=4 class="sd-option-carousel-content"  value="" />
				<small>(Eg. html code/shortcodes/etc)</small></td>
		</tr>
	</table>
	<p class="sd-submit-button">
		<input id="sd-send-carousel" class="button button-primary button-large" value="Send to Editor" type="submit" />
	</p>
</div>
</div>
</body>
</html>
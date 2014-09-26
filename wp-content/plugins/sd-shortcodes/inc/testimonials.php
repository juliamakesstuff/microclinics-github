<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php require_once('get-wp-load.php'); ?>
<div class="sd-shortcode-form-header">Insert Testimonial Shortcode</div>
<div class="sd-page-content">
	<input type="button" class="sd-add-testimonial button" value="Add New Testimonial" />
	<table id="sd-testimonials-table0" class="sd-pricing-table-border">
		<tr>
			<th><label for="sd-option-testimonial-name">Name</label></th>
			<td><input type="text" class="sd-option-testimonial-name" value="" />
				<small>(Eg. John Doe)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-testimonial-image">Image URL</label></th>
			<td><input type="text" class="sd-option-testimonial-image" value="" />
				<small>(Size: 46x46px) (Eg. http://yoursite.com/your-img.jpg)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-testimonial-text">Text</label></th>
			<td><textarea cols=70 rows=4 class="sd-option-testimonial-text"  value="" /></td>
		<tr>

	</table>
	<p class="sd-submit-button">
		<input id="sd-send-testimonials" class="button button-primary button-large" value="Send to Editor" type="submit" />
	</p>
</div>
</body>
</html>
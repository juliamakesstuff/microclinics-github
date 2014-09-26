<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php require_once('get-wp-load.php'); ?>
<div class="sd-shortcode-form-header">Insert Portfolio Shortcode</div>
<div class="sd-page-content">
	<table>
		<tr>
			<th><label for="sd-option-carousel-id">ID</label></th>
			<td><input type="text" id="sd-option-carousel-id" value="" />
				<small>(Eg. carousel123) (must be unique)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-items-number">Number of Items</label></th>
			<td><input type="text" id="sd-option-items-number" value="" />
				<small>(E.g. 8)</small></td>
		<tr>
			<th><label for="sd-option-categories">Categories</label></th>
			<td>
			<label><input checked="checked" type="checkbox" value="all">All</label>
				<?php
				$types = get_terms('portfolio_filter', 'hide_empty=0');
	
	if($types) {
		foreach($types as $type) {
			echo '<label><input type="checkbox" value=" ' . $types_array[$type->term_id] = $type->name . '">'. $types_array[$type->term_id] = $type->name . '</label>';
		}
	}
	?>
	
	
				
				</td>
		</tr>
	</table>
	<p class="sd-submit-button">
		<input id="sd-send-portfolio" class="button button-primary button-large" value="Send to Editor" type="submit" />
	</p>
</div>
</body>
</html>
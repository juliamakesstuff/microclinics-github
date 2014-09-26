<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php require_once('get-wp-load.php'); ?>
<div class="sd-shortcode-form-header">Insert Latest Posts Shortcode</div>
<div class="sd-page-content">
	<table>
		<tr>
			<th><label for="sd-option-full-cats">Categories</label></th>
			<td><ul>
					<li>
						<label>
						<input checked="checked" type="checkbox" value="">	All</label>
					</li>
					<?php
					$cats = get_categories();
	
					if ( $cats ) {
						foreach( $cats as $cat ) {
							echo '<li><label><input type="checkbox" value="' . $cat->term_id . '">'. $cat->name . '</label></li>';
						}
					}
					?>
				</ul>
			</td>
		</tr>
	</table>
	<p class="sd-submit-button">
		<input id="sd-send-latest-blog" class="button button-primary button-large" value="Send to Editor" type="submit" />
	</p>
</div>
</body>
</html>
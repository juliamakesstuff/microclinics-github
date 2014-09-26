<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php require_once('get-wp-load.php'); ?>
<div class="sd-shortcode-form-header">Insert Tabs Shortcode</div>
<div class="sd-page-content">
	<input type="button" class="sd-add-tabs button" value="Add New Tab" />
	<table id="sd-tabs-table0" class="sd-pricing-table-border">
		<tr>
			<th><label for="sd-option-tab-title">Tab Title</label></th>
			<td><input type="text" class="sd-option-tab-title" value="" /></td>
		</tr>
		<tr>
			<th><label for="sd-option-tab-content">Tab Content</label></th>
			<td><textarea cols=70 rows=5 class="sd-option-tab-content"  value="" /></td>
		</tr>
	</table>
	<p class="sd-submit-button">
		<input id="sd-send-tabs" class="button button-primary button-large" value="Send to Editor" type="submit" />
	</p>
</div>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php require_once('get-wp-load.php'); ?>
<div class="sd-shortcode-form-header">Insert Columns Shortcode</div>
<div class="sd-page-content">
	<table>
		<tr>
			<th><label for="sd-option-columns">Select Column Type</label></th>
			<td><select id="sd-option-columns">
					<option  value="[/one_third]">[one_third]</option>
					<option  value="[/one_third_last]">[one_third_last]</option>
					<option  value="[/two_third]">[two_third]</option>
					<option  value="[/two_third_last]">[two_third_last]</option>
					<option  value="[/one_half]">[one_half]</option>
					<option  value="[/one_fourth]">[one_fourth]</option>
					<option  value="[/one_fourth_last]">[one_fourth_last]</option>
					<option  value="[/three_fourth]">[three_fourth]</option>
					<option  value="[/three_fourth_last]">[three_fourth_last]</option>
					<option  value="[/one_fifth]">[one_fifth]</option>
					<option  value="[/one_fifth_last]">[one_fifth_last]</option>
					<option  value="[/two_fifth]">[two_fifth]</option>
					<option  value="[/two_fifth_last]">[two_fifth_last]</option>
					<option  value="[/three_fifth]">[three_fifth]</option>
					<option  value="[/three_fifth_last]">[three_fifth_last]</option>
					<option  value="[/four_fifth]">[four_fifth]</option>
					<option  value="[/four_fifth_last]">[four_fifth_last]</option>
					<option  value="[/one_sixth]">[one_sixth]</option>
					<option  value="[/one_sixth_last]">[one_sixth_last]</option>
					<option  value="[/five_sixth]">[five_sixth]</option>
					<option  value="[/five_sixth_last]">[five_sixth_last]</option>
				</select></td>
		<tr>
			<th><label for="sd-option-columns-content">Column Content</label></th>
			<td><textarea cols=70 rows=10 id="sd-option-columns-content"  value="" /></td>
		</tr>
			</tr>
		
	</table>
	<p class="sd-submit-button">
		<input id="sd-send-columns" class="button button-primary button-large" value="Send to Editor" type="submit" />
	</p>
</div>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php require_once('get-wp-load.php'); ?>
<div class="sd-shortcode-form-header">Insert Blog Shortcode</div>
<div class="sd-page-content">
	<table>
		<tr>
			<th><label for="sd-option-standard-posts">Display Standard Posts?</label></th>
			<td><select id="sd-option-standard-posts">
					<option  value="yes">Yes</option>
					<option  value="no">No</option>
				</select>
			</td>
		<tr>
		<tr>
			<th><label for="sd-option-gallery-posts">Display Gallery Posts?</label></th>
			<td><select id="sd-option-gallery-posts">
					<option  value="yes">Yes</option>
					<option  value="no">No</option>
				</select>
			</td>
		<tr>
		<tr>
			<th><label for="sd-option-video-posts">Display Video Posts?</label></th>
			<td><select id="sd-option-video-posts">
					<option  value="yes">Yes</option>
					<option  value="no">No</option>
				</select>
			</td>
		<tr>
		<tr>
			<th><label for="sd-option-audio-posts">Display Audio Posts?</label></th>
			<td><select id="sd-option-audio-posts">
					<option  value="yes">Yes</option>
					<option  value="no">No</option>
				</select>
			</td>
	</table>
	<p class="sd-submit-button">
		<input id="sd-send-blog" class="button button-primary button-large" value="Send to Editor" type="submit" />
	</p>
</div>
</body>
</html>

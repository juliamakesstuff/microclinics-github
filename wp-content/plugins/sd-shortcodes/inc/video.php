<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php require_once('get-wp-load.php'); ?>
<div class="sd-shortcode-form-header">Insert Video Shortcode</div>
<div class="sd-page-content">
	<table>
		<tr>
			<th><label for="sd-option-video-type">Video Type</label></th>
			<td><select id="sd-option-video-type">
					<option value="youtube">Youtube</option>
					<option value="vimeo">Vimeo</option>
				</select></td>
		<tr>
			<th><label for="sd-option-video-id">Video ID</label></th>
			<td><input type="text" id="sd-option-video-id" value="" />
				<small>(E.g. youtube.com/watch?v=1iIZeIy7TqM. <strong>1iIZeIy7TqM</strong> is the ID).</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-video-align">Align </label></th>
			<td><select id="sd-option-video-align">
					<option selected value="">-</option>
					<option value="left">Left</option>
					<option value="right">Right</option>
					<option value="center">Center</option>
				</select>
				<small>(optional)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-video-autoplay">Autoplay</label></th>
			<td><select id="sd-option-video-autoplay">
					<option selected value="">-</option>
					<option value="yes">Yes</option>
				</select>
				<small>(No is default) (optional)</small></td>
		</tr>
	</table>
	<p class="sd-submit-button">
		<input id="sd-send-video" class="button button-primary button-large" value="Send to Editor" type="submit" />
	</p>
</div>
</body>
</html>
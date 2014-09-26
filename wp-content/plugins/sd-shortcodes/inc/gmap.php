<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php require_once('get-wp-load.php'); ?>
<div class="sd-shortcode-form-header">Insert Google Map Shortcode</div>
<div class="sd-page-content">
	<table>
		<tr>
			<th><label for="sd-option-gmap-id">ID</label></th>
			<td><input type="text" id="sd-option-gmap-id" value="" />
				<small>(Eg. map123) (must be unique)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-gmap-address">Address</label></th>
			<td><textarea cols=70 rows=4 id="sd-option-gmap-address"  value="" /></td>
		<tr>
			<th><label for="sd-option-gmap-zoom">Zoom</label></th>
			<td><input type="text" id="sd-option-gmap-zoom" value="" />
				<small>(default 15).</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-gmap-lat">Latitude</label></th>
			<td><input type="text" id="sd-option-gmap-lat" value="" />
				<small>(optional).</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-gmap-lon">Longitude</label></th>
			<td><input type="text" id="sd-option-gmap-lon" value="" />
				<small>(optional).</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-gmap-width">Width</label></th>
			<td><input type="text" id="sd-option-gmap-width" value="" />
				<small>Eg. 500</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-gmap-height">Height</label></th>
			<td><input type="text" id="sd-option-gmap-height" value="" />
				<small>Eg. 500</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-gmap-maptype">Map Type</label></th>
			<td><select id="sd-option-gmap-maptype">
					<option selected value="">-</option>
					<option value="ROADMAP">ROADMAP</option>
					<option value="SATELLITE">SATELLITE</option>
					<option value="HYBRID">HYBRID</option>
					<option value="TERRAIN">TERRAIN</option>
				</select></td>
		</tr>
		<tr>
			<th><label for="sd-option-gmap-marker">Show Marker?</label></th>
			<td><select id="sd-option-gmap-marker">
					<option selected value="">-</option>
					<option value="yes">Yes</option>
				</select>
				<small>(No is default) (optional)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-gmap-markerimage">Custom Marker Icon</label></th>
			<td><input class="upload_image_button button" type="button" value="Insert Custom Marker"/>
				<input id="sd-option-gmap-markerimage" type="text" />
				<small>(optional)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-gmap-traffic">Show Traffic?</label></th>
			<td><select id="sd-option-gmap-traffic">
					<option selected value="">-</option>
					<option value="yes">Yes</option>
				</select>
				<small>(No is default) (optional)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-gmap-bike">Bike Directions?</label></th>
			<td><select id="sd-option-gmap-bike">
					<option selected value="">-</option>
					<option value="yes">Yes</option>
				</select>
				<small>(No is default) (optional)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-gmap-infowindowdefault">Show InfoWindow?</label></th>
			<td><select id="sd-option-gmap-infowindowdefault">
					<option selected value="">-</option>
					<option value="no">No</option>
				</select>
				<small>(Yes is default) (optional)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-gmap-infowindow">InfoWindow Content</label></th>
			<td><textarea cols=70 rows=4 id="sd-option-gmap-infowindow"  value="" />
				<small>(optional)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-gmap-hidecontrols">Hide Controls?</label></th>
			<td><select id="sd-option-gmap-hidecontrols">
					<option selected value="">-</option>
					<option value="true">True</option>
				</select>
				<small>(False is default) (optional)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-gmap-scale">Scale?</label></th>
			<td><select id="sd-option-gmap-scale">
					<option selected value="">-</option>
					<option value="true">True</option>
				</select>
				<small>(False is default) (optional)</small></td>
		</tr>
		<tr>
			<th><label for="sd-option-gmap-scrollwheel">Disable Scrolling?</label></th>
			<td><select id="sd-option-gmap-scrollwheel">
					<option selected value="">-</option>
					<option value="false">false</option>
				</select>
				<small>(True is default) (optional)</small></td>
		</tr>
	</table>
	<p class="sd-submit-button">
		<input id="sd-send-gmap" class="button button-primary button-large" value="Send to Editor" type="submit" />
	</p>
</div>
</body>
</html>
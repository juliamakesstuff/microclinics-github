<?php

/* ----------------------------------------------------- */
/* Add Columns to Events Edit Screen                  */
/* http://wptheming.com/2010/07/column-edit-pages/		 */
/* ----------------------------------------------------- */
 
function sd_events_edit_columns( $events_columns ) {
	$events_columns = array(
		"cb"				=> "<input type=\"checkbox\" />",
		"title"				=> __('Title', 'sd-events'),
		"thumbnail"			=> __('Thumbnail', 'sd-events'),
		"events_filter"	=> __('Filter', 'sd-events'),
		"author"			=> __('Author', 'sd-events'),
		"comments"			=> __('Comments', 'sd-events'),
		"date"				=> __('Date', 'sd-events'),
	);
	
	$events_columns['comments'] = '<div class="vers"><img alt="Comments" src="' . esc_url( admin_url( 'images/comment-grey-bubble.png' ) ) . '" /></div>';

	return $events_columns;
}

add_filter( 'manage_edit-events_columns', 'sd_events_edit_columns' );

function sd_events_column_display( $events_columns, $post_id ) {

	// Code from: http://wpengineer.com/display-post-thumbnail-post-page-overview

	switch ( $events_columns ) {
	
		// Display the thumbnail in the column view
		case "thumbnail":
			$width = (int) 35;
			$height = (int) 35;
			$thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );
			
			// Display the featured image in the column view if possible
			if ( $thumbnail_id ) {
				$thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
			}
			if ( isset( $thumb ) ) {
				echo $thumb;
			} else {
				_e('None', 'sd-events');
			}
			break;	
			
		// Display the events tags in the column view
		case "events_filter":
		
			if ( $category_list = get_the_term_list( $post_id, 'events_filter', '', ', ', '' ) ) {
				echo $category_list;
			} else {
				_e('None', 'sd-events');
			}
		break;			
	}
}

add_action( 'manage_posts_custom_column', 'sd_events_column_display', 10, 2 );

function sd_events_add_taxonomy_filters() {
	global $typenow;
	
	// An array of all the taxonomyies you want to display. Use the taxonomy name or slug
	$taxonomies = array( 'events_filter' );
 
	// must set this to the post type you want the filter(s) displayed on
	if ( $typenow == 'events' ) {
 
		foreach ( $taxonomies as $tax_slug ) {

			$current_tax_slug = isset( $_GET[$tax_slug] ) ? $_GET[$tax_slug] : false;
			$tax_obj = get_taxonomy( $tax_slug );
			$tax_name = $tax_obj->labels->name;
			$terms = get_terms($tax_slug);

			if ( count( $terms ) > 0) {
				echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
				echo "<option value=''>$tax_name</option>";
					foreach ( $terms as $term ) {
						echo '<option value=' . $term->slug, $current_tax_slug == $term->slug ? ' selected="selected"' : '','>' . $term->name .' (' . $term->count .')</option>';
					}
				echo "</select>";
			}
		}
	}
}

add_action( 'restrict_manage_posts', 'sd_events_add_taxonomy_filters' );

function sd_admin_events_icon() { ?>
		<style type="text/css">
			#icon-edit.icon32-posts-events {
				background: transparent url( '<?php echo plugin_dir_url(dirname(__FILE__)) . 'images/sd-events-icon-large.png'; ?>' ) no-repeat;
			}
		</style>
<?php 
}

add_action( 'admin_head', 'sd_admin_events_icon' );

?>
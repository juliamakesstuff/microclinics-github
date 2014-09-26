<?php
/*-----------------------------------------------------------------------------------*/
/*	Latest portfolio items
/*-----------------------------------------------------------------------------------*/
if (!function_exists('sd_latest_portfolio_items')) {
	function sd_latest_portfolio_items($atts){
		extract(shortcode_atts(array(
       		'items'		=> '8',
	       	'category'	=> 'all',
			'id'		=> 'sd-portfolio-carousel'
    	), $atts));
    
	    global $post;
		
		$args = array(
			'post_type' => 'portfolio',
			'posts_per_page' => $items,
			'order'          => 'DESC',
			'orderby'        => 'date',
			'post_status'    => 'publish'
    	);
    
	    if($category != 'all'){
    	
    		// string to array
    		$str = $category;
	    	$arr = explode(', ', $str);
			//var_dump($arr);
    	
			$args['tax_query'][] = array(
				'taxonomy' 	=> 'portfolio_filter',
				'field' 	=> 'slug',
				'terms' 	=> $arr
			);
		}
    
    	$randomid = rand();

	    query_posts( $args );
    	$out = '';
	
		if( have_posts() ) :
			
			$out = '
			<script type="text/javascript">
				jQuery(window).load(function() {
					jQuery(\'.carousel'.$id.'\').flexslider({
						itemWidth: 270,
						itemMargin: 10,
						animation: "slide",
						animationLoop: false,
						slideshow: false,
						smoothHeight: true,
						controlsContainer: ".arrows'.$id.'",
						keyboard: false,
						controlNav: false,
						video:true
			});
				});
			</script>';
		
			$out .= '<div class="sd-portfolio-shortcode clearfix">';
			$out .= '<div class="sd-portfolio-shortcode-content carousel'.$id.'">';
			$out .= '<div class="sd-portfolio-arrows arrows'. $id .'"></div>';
			$out .= '<ul class="slides">';
			
			while ( have_posts() ) : the_post();
			
				$sd_filter = '';
			
				$taxonomies = get_the_terms( get_the_ID(), 'portfolio_filter' );
				
				foreach ($taxonomies as $taxonomy) {
					$sd_filter .=	$taxonomy->slug . ' ';
				}
		
				$thumb = get_the_post_thumbnail($post->ID, 'portfolio-four-columns');
				
				$out .= '<li><div class="sd-portfolio-item">';
				$out .= '<figure>' . $thumb . '';
				$out .= '<div class="sd-button-container"> <a class="sd-link-icon sd-bg-trans" href="' . get_permalink() . '" title="' . get_the_title() . '"></a>';

				$image_id = get_post_thumbnail_id();  
				$full_image_url = wp_get_attachment_image_src($image_id,'full');  
				$full_image_url = $full_image_url[0];

            	$out .= '<a class="sd-lightbox-icon sd-bg-trans" rel="lightbox" title="'. get_the_title() .'" href="' . $full_image_url . '">';
            	$out .= __('View Item', 'sd-framework');
            	$out .= '</a> </div>';
				$out .= '</figure>';
				$out .= '</div></li>';
		 
			endwhile;
			
			$out .= '</ul>';
			$out .='</div></div>';
		
			wp_reset_query();
	
		endif;

		return $out;
	}
}

add_shortcode('portfolio', 'sd_latest_portfolio_items');
?>
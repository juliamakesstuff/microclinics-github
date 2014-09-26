<?php
/* ------------------------------------------------------------------------ */
/* Theme Sidebar
/* ------------------------------------------------------------------------ */
?>
<!--right-col-->

<div id="right-col" class="span4">
	<div class="sidebar">
		<?php 
	if ( is_page() ){
		/* Page sidebar */
		generated_dynamic_sidebar(); 
	} else {
		/* Blog sidebar */
		if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('main-sidebar') );
	}
	?>
	</div>
</div>
<!--right-col-end--> 
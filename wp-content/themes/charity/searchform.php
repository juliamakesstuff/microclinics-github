<?php
/* ------------------------------------------------------------------------ */
/* Theme's Search Form
/* ------------------------------------------------------------------------ */
?>
<div id="search">
	<form method="get" action="<?php echo home_url(); ?>/">
		<input class="search-input" name="s" type="text" size="25"  maxlength="128" onblur="this.value = this.value || this.defaultValue; this.style.color = '#d1d1cd';" onfocus="this.value=''; this.style.color = '#929292';" value="<?php _e('looking for something?', 'framework') ?> <?php the_search_query(); ?>" />
		<input class="search-sumbit sd-bg-trans" type="submit" value="<?php _e('Search', 'sd-framework'); ?>" />
	</form>
</div>

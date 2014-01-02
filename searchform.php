<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<div>
		<label for="s" class="visuallyhidden"><?php _e('Search for:','harmony'); ?></label>
		<input type="search" id="s" name="s" value="" />
		<input type="submit" value="<?php _e('Search','harmony'); ?>" id="searchsubmit" />
	</div>
</form>

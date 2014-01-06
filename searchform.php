<form role="search" method="get" id="searchform" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<div>
		<label for="s" class="visuallyhidden search-form__label"><?php _e('Search for:','harmony'); ?></label>
		<input type="search" id="s" class="search-form__input" name="s" value="" />
		<input type="submit" class="search-form__btn" value="<?php _e('Search','harmony'); ?>" id="searchsubmit" />
	</div>
</form>

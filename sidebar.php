<div id="sidebar1" class="sidebar" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

	<?php dynamic_sidebar( 'sidebar1' ); ?>

<?php else : ?>

	<div class="alert alert-help">
		<p><?php _e( 'Please activate some Widgets.', 'harmony' ); ?></p>
	</div>

<?php endif; ?>

</div>
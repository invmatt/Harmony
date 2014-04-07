<?php get_header(); ?>

	<h2 class="error error-404"><?php _e('Sorry, Page not found','harmony'); ?></h2>
	<a href="<?php echo home_url(); ?>" alt="<?php bloginfo('name'); ?>">Return to homepage</a>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

<?php

	// ------------------------------
	// Harmony settings
	// ------------------------------
	$curr_theme = get_theme_data(TEMPLATEPATH . '/style.css');
	$theme_version = trim($curr_theme['Version']);






	// ------------------------------
	// Define constants
	// ------------------------------
	define('HARMONY_INCLUDES', TEMPLATEPATH . '/inc/');
	define('HARMONY_FUNCTIONS', TEMPLATEPATH . '/functions/');
	define('HARMONY_THEME_DIR', get_bloginfo('template_url'));






	// ------------------------------
	// Admin specific
	// ------------------------------
	if (is_admin()) :
		require_once (HARMONY_FUNCTIONS . 'admin-helper.php');
		require_once( HARMONY_FUNCTIONS . 'customMetaBox/custom-meta-boxes.php' );
		require_once (HARMONY_FUNCTIONS . 'include-metaboxes.php');
		require_once (HARMONY_FUNCTIONS . 'admin-theme-helper.php');
	endif;

	add_action('admin_head', 'harmony_admin_head');






	// ------------------------------
	// Enqueue styles and scripts
	// ------------------------------
	function harmony_scripts() {
		// Enqueue styles
		wp_enqueue_style( 'harmony-style', get_stylesheet_uri() );
		// Enqueue scripts
		wp_enqueue_script('jquery');
		wp_enqueue_script('harmony-mainjs', HARMONY_THEME_DIR . '/lib/js/min/main.min.js', array('jquery'),'', true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}

	add_action( 'wp_enqueue_scripts', 'harmony_scripts' );






	// ------------------------------
	// Navigation
	// ------------------------------
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'harmony' ),
		'footer' => __( 'Footer Menu', 'harmony' ),
	) );






	// ------------------------------
	// Thumbnails
	// ------------------------------
	add_image_size( 'harmony-thumb-600', 600, 150, true );
	add_image_size( 'harmony-thumb-300', 300, 100, true );

?>
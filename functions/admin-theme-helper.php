<?php
	function harmony_register_settings() {
		add_option( 'harmony_google_analytics', '1');
		register_setting( 'default', 'harmony_google_analytics' ); 
	} 
	add_action( 'admin_init', 'harmony_register_settings' );
	 
	function harmony_register_options_page() {
		add_options_page('Page title', 'Theme Options', 'manage_options', 'harmony-options', 'harmony_options_page');
	}
	add_action('admin_menu', 'harmony_register_options_page');
	 
	function harmony_options_page() {
?>

		<div class="wrap">
			<?php screen_icon(); ?>
			<h2><?php bloginfo('name'); ?> theme options</h2>
			<form method="post" action="options.php"> 
				<?php settings_fields( 'default' ); ?>
				<h3>Configure additional options for the theme</h3>

				<h4>Google Analytics Code (Example: UA-XXXXX-X)</h4>
				<input type="text" id="harmony_google_analytics" name="harmony_google_analytics" value="<?php echo get_option('harmony_google_analytics'); ?>" />
				<?php submit_button(); ?>
			</form>
		</div>

<?php
	}
?>
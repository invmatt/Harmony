<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>

		<meta charset="utf-8">

		<title><?php echo get_the_title(); ?>  | <?php bloginfo('name'); ?></title>
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/lib/assets/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/lib/assets/favicon.ico">
		<![endif]-->
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<div class="container">

			<header class="header" role="banner">

				<a href="<?php echo home_url(); ?>" rel="nofollow" title="Return to homepage" class="site-logo">
					<img class="s s-logo" alt="<?php bloginfo('name'); ?>" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" />
				</a>
				
				<?php get_search_form(); ?>

				<nav role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth' => 1, 'container_class' => '', 'container_id' => 'main-nav' ) ); ?>
				</nav>

			</header>

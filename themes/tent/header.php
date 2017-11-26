<?php
/**
 * The header for our theme.
 *
 * @package Tent
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<div class="site-header-container">

			<header id="masthead" class="site-header" role="banner">

				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<a href="<?php echo site_url(); ?>">
						<img src="<?php echo get_stylesheet_directory_uri()?>/img/inhabitent-logo-tent.svg" >
					</a>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<i  id="search-button" class="fa fa-search" aria-hidden="true"><span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span></i>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->

			</header><!-- #masthead -->

		</div>

		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>



			
<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Tent
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// Remove "Editor" links from sub-menus
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );

// Set custom logo and hyperlink on wp-admin login

function tent_login_logo() { ?>
    <style type="text/css">
      #login h1 a {
    		background-image: url(<?php echo get_stylesheet_directory_uri()?>/img/inhabitent-logo-text-dark.svg);
				height:57px;
				width:320px;
				background-size: 320px 57px;
				background-repeat: no-repeat;
      }
    </style>
<?php }

function tent_login_logo_hyperlink() {
    return home_url();
}

function tent_login_logo_title(){
	return 'Inhabitent 4 eva!';
}

add_action( 'login_head', 'tent_login_logo' );
add_filter( 'login_headerurl', 'tent_login_logo_hyperlink' );
add_filter('login_headertitle', 'tent_login_logo_title');




function inhabitent_dynamic_css() { // Custom background images for the full-height headers

	if ( is_page_template('page-templates/about.php') || is_front_page() ) {

		$image = CFS()->get( 'hero_image' );

		if ( ! $image ) {
			return;
		}

		$hero_css = ".page-template-about .entry-header, .page-template-front-page .entry-header {
			background:
				linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
				url({$image}) no-repeat center bottom;
			background-size: cover, cover;
		}";

		wp_add_inline_style( 'tent-style', $hero_css ); // stylesheet to hook onto, function to run

	} else {
		return;
	}
	
}

add_action( 'wp_enqueue_scripts', 'inhabitent_dynamic_css' );
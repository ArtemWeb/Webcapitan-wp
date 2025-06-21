<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function base_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on test, use a find and replace
		* to change 'test' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'webcapitan', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );


	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);


	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add options page to the theme.
	 *
	 * @link https://www.advancedcustomfields.com/resources/acf_add_options_sub_page/
	 */
	if ( function_exists('acf_add_options_sub_page') ) {
		acf_add_options_sub_page( [
			'title'  => esc_html__( 'Theme Options', 'webcapitan' ),
			'parent' => 'themes.php',
		] );
	}


}
add_action( 'after_setup_theme', 'base_setup' );

// Commented block below, because there may be errors with js, if need you can uncomment this block
add_filter('script_loader_tag', function ($tag, $handle, $src) {
    if (!is_admin())
        $tag = str_replace(' src=', ' defer src=', $tag);

    return $tag;
}, 99, 3);

add_filter('wpcf7_autop_or_not', '__return_false');
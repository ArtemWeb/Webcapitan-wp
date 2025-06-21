<?php
/**
 * functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

/**
 * Checking if we are on a staging server or not.
 */
if ( file_exists( sys_get_temp_dir() . '/staging-restrictions.php' ) ) {
	define( 'STAGING_RESTRICTIONS', true );
	require_once sys_get_temp_dir() . '/staging-restrictions.php';
}

/**
 * In case if ACF plugin is not installed, require acf fallback file.
 */
if ( ! class_exists( 'ACF' ) && ! is_admin() ) {
	require_once __DIR__ . '/inc/acf-fallback.php';
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function base_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'base_content_width', 640 );
}
add_action( 'after_setup_theme', 'base_content_width', 0 );

/**
 * Require Theme Config Files.
 */
require get_template_directory() . '/inc/theme-files-loader.php';

/**
 * Register theme custom post types.
 */
require get_template_directory() . '/inc/opt/cpt.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

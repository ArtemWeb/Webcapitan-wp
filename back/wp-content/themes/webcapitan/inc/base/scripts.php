<?php
/**
 * Enqueue scripts and styles.
 */

function base_scripts() {
	
	wp_enqueue_style(
		'base-style',
    get_stylesheet_directory_uri() . '/dist/style.css',
    [],
	);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script(
    'base-script',
    get_template_directory_uri() . '/dist/app.js',
    [ 'jquery' ],
    null, 
    true
	);

}
add_action( 'wp_enqueue_scripts', 'base_scripts' );
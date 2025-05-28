<?php
/**
 * WordPress Nav Menus.
 *
 */

add_action( 'after_setup_theme', function() {
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Navigation', 'webcapitan' ),
			'footer_menu_1' => esc_html__( 'Footer Menu 1', 'webcapitan' ),
			'footer_menu_2' => esc_html__( 'Footer Menu 2', 'webcapitan' ),
			'footer_menu_3' => esc_html__( 'Footer Menu 3', 'webcapitan' ),
			'footer_menu_4' => esc_html__( 'Footer Menu 4', 'webcapitan' ),
			'footer_info' => esc_html__( 'Footer Info', 'webcapitan' ),
		)
	);
} );
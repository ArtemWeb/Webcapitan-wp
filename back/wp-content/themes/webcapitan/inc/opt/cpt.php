<?php

/**
 * Theme custom post types.
 */

add_action('init', function () {
	register_post_type(
		'Projects',
		[
			'labels'      => [
				'name'          => __('Projects', 'webcapitan'),
				'singular_name' => __('Projects', 'webcapitan'),
			],
			'public'      => true,
			'publicly_queryable' => true,
			'has_archive' => true,
			'publicly_queryable' => true,
			'menu_icon'   => 'dashicons-products',
			'show_in_rest' => true,
			'rewrite'     => ['slug' => 'projects'],
			'supports'    => array('title', 'thumbnail', 'editor', 'excerpt', 'tags'),
			'taxonomies'  => array('post_tag'),
		]
	);
});

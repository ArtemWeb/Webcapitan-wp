<?php
// ACF gutenberg blocks
add_action('init', function () {
	$scan = glob(get_template_directory() . '/template-parts/acf-gutenberg/*');
	foreach ($scan as $path) {
		register_block_type($path);
	}
});

// ACF gutenberg blocks category
add_filter( 'block_categories_all' , function( $categories ) {

	// Adding a new category.
	$categories[] = array(
		'title'  => __('Custom ACF Blocks', 'webcapitan'),
		'slug' => 'custom-acf-blocks',
	);

	return $categories;
} );

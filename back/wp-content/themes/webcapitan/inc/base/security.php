<?php
// Disable Theme and Plugin Editors
if (!defined('DISALLOW_FILE_EDIT')) {
    define('DISALLOW_FILE_EDIT', true);
}


// Remove version from RSS
add_filter('the_generator', '__return_empty_string');

// Remove WordPress version from scripts and styles
function theme_remove_version($src) {
    if (strpos($src, 'ver=' . get_bloginfo('version'))) {
        $src = remove_query_arg('ver', $src);
    }

    return $src;
}
add_filter('style_loader_src', 'theme_remove_version');
add_filter('script_loader_src', 'theme_remove_version');

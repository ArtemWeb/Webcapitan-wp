<?php
/**
 * Remove unneeded code.
 */

// Remove emoji scripts and styles
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Remove oEmbed script
add_action('wp_footer', function () {
    wp_dequeue_script('wp-embed');
});

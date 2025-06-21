<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header();
?>

	<div id="content">
		<?php get_template_part( 'template-parts/not', 'found' ); ?>
	</div>

<?php
get_footer();

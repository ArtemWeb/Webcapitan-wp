<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();
?>

	<div id="content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_title( '<div class="title"><h1>', '</h1></div>' ); ?>
			<?php the_post_thumbnail( 'full' ); ?>
			<?php the_content(); ?>
			<?php edit_post_link( __( 'Edit', 'webcapitan' ) ); ?>
		<?php endwhile; ?>
		<?php wp_link_pages(); ?>
		<?php comments_template(); ?>
	</div>

<?php
get_footer();

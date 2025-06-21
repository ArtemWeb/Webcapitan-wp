<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();
?>

<section class="projects">
	<div class="container">
		<div class="projects-items  projects-items_archives">
			<?php
			$query = new WP_Query(array(
				'post_type' => array('projects'),
				'posts_per_page'  => -1,
				'post_status' 		=> 'publish',
				'orderby' => 'date',
				'order'   => 'DESC',
			));
			if ($query->have_posts()) :;
				while ($query->have_posts()) : $query->the_post();
					$the_id = get_the_ID(); ?>
					<div class="projects-item">
						<a href="<?php the_permalink(); ?>">
							<div class="projects-img">
								<?php echo get_the_post_thumbnail($post->ID, 'thumbnail_430x430'); ?>
							</div>
						</a>
						<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						<div class="projects-tags">
							<?php
							$tags = get_the_tags($post->ID);
							if ($tags):
							?>
								<ul>
									<?php foreach ($tags as $tag) : ?>
										<li><?php echo esc_html($tag->name); ?></li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</div>
</section>

<?php
get_footer();

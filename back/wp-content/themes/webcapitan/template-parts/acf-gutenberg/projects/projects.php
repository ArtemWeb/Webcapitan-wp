<?php

/**
 * Block projects.
 *
 * @param array $block The block settings and attributes.
 */

$title = get_field('projects_title');
$projects = get_field('projects_post');
$link = get_field('projects_link');

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'projects';
if (!empty($block['className'])) {
	$class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
	$class_name .= ' align' . $block['align'];
}
?>

<?php if ($title || $projects || $link) : ?>
	<section class="<?php echo esc_attr($class_name); ?>">
		<div class="container">
			<div class="swiper">
				<div class="projects-title">
					<?php if ($title): ?>
						<h2><?php echo esc_html($title) ?></h2>
					<?php endif; ?>
					<div class="swiper-navigation">
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>
				</div>

				<?php if ($projects): ?>
					<?php global $post; ?>
					<div class="projects-items mySwiper">
						<div class="swiper-wrapper">
							<?php foreach ($projects as $post) : ?>
								<?php setup_postdata($post); ?>
								<div class="projects-item swiper-slide">
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
							<?php endforeach; ?>
						</div>
					</div>
					<?php if ($link) : ?>
						<div class="projects-button">
							<?php echo the_acf_button($link, ['btn']); ?>
						</div>
					<?php endif ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php endif; ?>
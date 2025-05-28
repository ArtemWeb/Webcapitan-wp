<?php

get_header(); ?>


<div class="projects">
	<div class="container">
		<?php the_title('<h2>', '</h2>'); ?>
		<div class="projects-content">
			<div class="projects-img"><?php the_post_thumbnail(); ?></div>
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
	</div>
</div>

<?php
get_footer();

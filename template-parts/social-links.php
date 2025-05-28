<?php if ( have_rows('social', 'option') ) : ?>
	<ul class="socials">
		<?php while ( have_rows('social', 'option') ) : the_row();
			$link = get_sub_field( 'social_link' );
			$image = get_sub_field( 'social_icon' );
			?>
			<?php if ($link || $image) : ?>
				<li>
					<a href="<?php echo esc_url( $link ); ?>" target="_blank"><?php echo wp_get_attachment_image($image, 'full'); ?></a>
				</li>
			<?php endif; ?>
		<?php endwhile; ?>
	</ul>
<?php endif; ?>
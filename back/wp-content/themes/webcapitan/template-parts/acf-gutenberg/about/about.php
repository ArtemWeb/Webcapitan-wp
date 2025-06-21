<?php

/**
 * Block About
 *
 * @param array $block The block settings and attributes.
 */

$title = get_field('about_title');
$letter = get_field('about_title_letter');

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'about';
if (!empty($block['className'])) {
	$class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
	$class_name .= ' align' . $block['align'];
}
?>

<?php if ($title || have_rows('about_item')): ?>
	<section class="<?php echo esc_attr($class_name); ?>">
		<div class="container">
			<div class="about-title">
				<?php if ($title) : ?>
					<h2><?php echo esc_html($title); ?></h2>
					<?php if ($letter): ?>
						<span class="about-title_letter"><?php echo esc_html($letter); ?></span>
					<?php endif; ?>
				<?php endif; ?>
			</div>

			<?php if (have_rows("about_item")): ?>
				<div class="about-info">
					<?php while (have_rows('about_item')) : the_row();
						$about_icon = get_sub_field('about_item_icon');
						$about_number = get_sub_field('about_item_number');
						$about_title = get_sub_field('about_item_title');
						$about_text = get_sub_field('about_item_text');
					?>
						<div class="about-item">
							<?php if ($about_icon): ?>
								<div class="about-item_img">
									<?php echo wp_get_attachment_image($about_icon, 'full'); ?>
								</div>
							<?php endif; ?>
							<?php if ($about_number): ?>
								<h2><?php echo escape_string_html($about_number); ?></h2>
							<?php endif; ?>
							<?php if ($about_title): ?>
								<h4><?php echo force_balance_tags($about_title); ?></h4>
							<?php endif; ?>
							<?php if ($about_text): ?>
								<div class="about-item_text">
									<?php echo force_balance_tags(wp_kses_post($about_text)); ?>
								</div>
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>
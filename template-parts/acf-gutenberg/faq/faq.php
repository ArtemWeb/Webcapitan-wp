<?php

/**
 * Block projects.
 *
 * @param array $block The block settings and attributes.
 */

$title = get_field('faq_title');

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'faq';
if (!empty($block['className'])) {
	$class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
	$class_name .= ' align' . $block['align'];
}
?>

<?php if ($title || have_rows("faq_accordion")): ?>
	<section class="<?php echo esc_attr($class_name); ?>">
		<div class="container">
			<?php if ($title): ?>
				<h2><?php echo esc_html($title) ?></h2>
			<?php endif; ?>

			<?php if (have_rows("faq_accordion")): ?>
				<div class="faq-items">
					<?php while (have_rows("faq_accordion")): the_row();
						$faq_title = get_sub_field('faq_accordion_title');
						$faq_text = get_sub_field('faq_accordion_text');
					?>

						<div class="faq-item">
							<?php if ($faq_title): ?>
								<h4 class="opener"><?php echo esc_html($faq_title); ?></h4>
							<?php endif; ?>
							<?php if ($faq_text): ?>
								<div class="faq-text slide">
									<?php echo force_balance_tags(wp_kses_post($faq_text)); ?>
								</div>
							<?php endif; ?>
						</div>

					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>
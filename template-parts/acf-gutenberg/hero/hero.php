<?php

/**
 * Block Hero
 *
 * @param array $block The block settings and attributes.
 */

$bg = get_field('hero_bg_image');
$title = get_field('hero_title');
$subtitle = get_field('hero_subtitle');

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'hero';
if (!empty($block['className'])) {
	$class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
	$class_name .= ' align' . $block['align'];
}
?>

<?php if ($bg || $title || $subtitle) : ?>
	<div class="<?php echo esc_attr($class_name); ?>" <?php if ($bg): ?>style="background-image: url(<?php echo esc_url($bg); ?>);"<?php endif; ?>>
		<div class="container">
			<?php if ($title || $subtitle) : ?>
				<div class="hero-info">
					<?php if ($title) : ?>
						<h1><?php echo esc_html($title); ?></h1>
					<?php endif; ?>
					<?php if ($subtitle) : ?>
						<h3><?php echo esc_html($subtitle); ?></h3>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<a href="#next-section" class="hero-scroll"><?php echo esc_html_e("SCROLL DOWN"); ?></a>
		</div>
	</div>
<?php endif; ?>
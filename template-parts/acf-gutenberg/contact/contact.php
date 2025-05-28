<?php

/**
 * Block contact.
 *
 * @param array $block The block settings and attributes.
 */

$title = get_field('contact_title');
$bg = get_field('contact_bg');
$contact_form = get_field('form');

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'contact';
if (!empty($block['className'])) {
	$class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
	$class_name .= ' align' . $block['align'];
}
?>

<?php if ($title || $bg || $contact_form): ?>
	<section class="<?php echo esc_attr($class_name); ?>" <?php if ($bg): ?> style="background-image: url(<?php echo $bg ?>);" <?php endif; ?>>

		<div class="container">
			<?php if ($title): ?>
				<h2><?php echo esc_html($title) ?></h2>
			<?php endif; ?>

			<?php if ($contact_form): ?>
				<div class="contact-form form">
					<?php echo $contact_form ?>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>
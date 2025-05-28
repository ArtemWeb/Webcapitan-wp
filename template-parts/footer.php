<?php
$logo = get_field("footer_logo", "option");
$copyright = get_field("copyright", "option");
?>

<?php if ($logo || have_rows('footer_menu', 'option') || $copyright || has_nav_menu('footer_info')): ?>
	<footer class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="footer-row">
					<div class="footer-col">
						<?php if ($logo): ?>
							<a href="<?php echo esc_url(home_url('/')) ?>" class="logo">
								<?php echo wp_get_attachment_image($logo, 'full'); ?>
							</a>
						<?php endif; ?>
						<div class="footer-social">
							<?php get_template_part('template-parts/social-links') ?>
						</div>
					</div>

					<?php if (has_nav_menu('footer_menu_1')) : ?>
						<nav class="footer-col">
							<?php
							wp_nav_menu([
								'container' => false,
								'theme_location' => 'footer_menu_1',
								'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							]);
							?>
						</nav>
					<?php endif; ?>

					<?php if (has_nav_menu('footer_menu_2')) : ?>
						<nav class="footer-col">
							<?php
							wp_nav_menu([
								'container' => false,
								'theme_location' => 'footer_menu_2',
								'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							]);
							?>
						</nav>
					<?php endif; ?>

					<?php if (has_nav_menu('footer_menu_3')) : ?>
						<nav class="footer-col">
							<?php
							wp_nav_menu([
								'container' => false,
								'theme_location' => 'footer_menu_3',
								'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							]);
							?>
						</nav>
					<?php endif; ?>

					<?php if (has_nav_menu('footer_menu_4')) : ?>
						<nav class="footer-col">
							<?php
							wp_nav_menu([
								'container' => false,
								'theme_location' => 'footer_menu_4',
								'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							]);
							?>
						</nav>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php if ($copyright || has_nav_menu('footer_info')): ?>
			<div class="footer-bottom">
				<div class="container">
					<?php if ($copyright): ?>
						<div class="copyright"><?php echo esc_html_e("©"); ?> <span><?php echo gmdate('Y'); ?></span> <?php echo esc_html($copyright); ?></div>
					<?php endif; ?>
					<?php if (has_nav_menu('footer_info')) : ?>
						<?php
						wp_nav_menu([
							'container' => false,
							'theme_location' => 'footer_info',
							'menu_class' => 'footer-info',
							'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						]);
						?>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>
	</footer>
<?php endif; ?>
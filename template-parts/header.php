<?php
$logo = get_field("header_logo", "option");
?>

<?php if ($logo || has_nav_menu('primary')): ?>
	<header class="header <?php if (is_front_page()) echo "header-fixed"; ?>">
		<div class="header-row container">
			<?php if ($logo): ?>
				<a href="<?php echo esc_url(home_url('/')) ?>" class="logo">
					<?php echo wp_get_attachment_image($logo, 'full'); ?>
				</a>
			<?php endif; ?>


			<div class="header-info">
				<?php if (has_nav_menu('primary')) : ?>
					<nav class="header-nav">
						<?php
						wp_nav_menu([
							'container' => false,
							'theme_location' => 'primary',
							'menu_id' => 'navigation',
							'menu_class' => 'menu',
							'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						]);
						?>
					</nav>
				<?php endif; ?>
				<div class="header-social">
					<?php get_template_part('template-parts/social-links') ?>
				</div>
			</div>
			<button type="button" class="nav-opener" aria-label="<?php esc_html_e('Toggle navigation', 'sro'); ?>"><span></span>
			</button>
		</div>
	</header>
<?php endif; ?>
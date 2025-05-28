<?php
/**
 * Custom template tags for this theme
 */

/**
 * Clean phone function.
 *
 * @param  string $phone incoming string.
 * @return string
 */
function clean_phone( string $phone ): string {
	return preg_replace( '/[^0-9]/', '', $phone );
}


/**
 * Acf button function.
 *
 * @param array $button acf button array.
 * @param array  $classes array of button classes.
 * @param string $icon button icon html.
 * @param bool|array $custom_attributes.
 */
function the_acf_button( array $button, array $classes = [], string $icon = '', $custom_attributes = false ): void
{
	if ( ! isset( $button['title'] ) || ! isset( $button['url'] ) || empty( $button['title'] ) || empty( $button['url'] ) ) {
		return;
	}

	$attributes  = ' href="' . $button['url'] . '"';
	$attributes .= ( $button['target'] ) ? ' target="' . $button['target'] . '" rel="noreferrer"' : '';
	$attributes .= ( ! empty( $classes ) ) ? ' class="' . implode( ' ', $classes ) . '"' : '';

	if ( $custom_attributes ) {
		$attributes .= ' ' . implode( ' ', $custom_attributes );
	}
	
	$title = $button['title'];

	$button = sprintf( '<a %s>%s %s</a>',
		$attributes,
		$title,
		$icon
	);

	echo wp_kses( $button, [
		'a' => [
			'href'   => true,
			'target' => true,
			'rel'    => true,
			'class'  => true,
			'data-fancybox' => true,
			'data-modal' => true,
		],
		'i' => [
			'class' => true,
		],
		'span' => [
			'class' => true,
		],
	] );
}

/**
 * Get theme background image (in style attribute)
 *
 * @param  int    $id image id.
 * @param  string $size image size.
 * @return string
 */
function get_bg_image( int $id, string $size = 'full' ): string {
	$image = wp_get_attachment_image_src( $id, $size );

	return ' style="background-image: url(' . $image[0] . ');"';
}

/**
 * Get featured image alt attribute.
 *
 * @param  int $attachment_id attachment id, alt of which will be displayed.
 * @return string $image_alt
 */
function get_attachment_alt( int $attachment_id ): string {
	$img_alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true );

	if ( ! empty( $img_alt ) ) {
		return $img_alt;
	} else {
		return esc_html__( 'image description', 'webcapitan' );
	}
}

/**
 * Escapes HTML in a string, allowing only specific HTML elements and attributes.
 *
 * @param string $string The input string to escape.
 *
 * @return string The escaped HTML string.
 */
function escape_string_html(string $string): string
{
	return wp_kses($string, [
		'a'      => [
			'href'  => true,
			'title' => true,
		],
		'br'     => true,
		'em'     => true,
		'span'   => true,
		'strong' => true,
	]);
}


/**
 * Get theme attachment image
 *
 * @param  int    $id image id.
 * @param  string $size image size.
 * @param  array  $attr additional attributes.
 * @return string
 */
function get_attachment_image( int $id, string $size = 'full', array $attr = [] ): string {
	$image = wp_get_attachment_image( $id, $size, null, $attr );

	return preg_replace( '/(height|width)="\d*"\s/', '', $image );
}

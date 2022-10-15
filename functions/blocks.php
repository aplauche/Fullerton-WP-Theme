<?php
/**
 * Register block styles.
 *
 */
function fullerton_register_block_styles() {

	$block_styles = array(
		'core/group'           => array(
			'rounded'       => __( 'Rounded', 'fullerton' ),
			'full-height'  => __( 'Full-height', 'fullerton' ),
		),
		'core/list'            => array(
			'no-disc' => __( 'No Disc', 'fullerton' ),
		)
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'fullerton_register_block_styles' );
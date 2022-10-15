<?php


/**
 * Registers block categories, and type.
 *
 */
function fullerton_register_block_pattern_categories() {

	/* Functionality specific to the Block Pattern Explorer plugin. */
	if ( function_exists( 'register_block_pattern_category_type' ) ) {
		register_block_pattern_category_type( 'fullerton', array( 'label' => __( 'Fullerton', 'fullerton' ) ) );
	}

	$block_pattern_categories = array(
		'fullerton-general' => array(
			'label'         => __( 'General', 'fullerton' ),
			'categoryTypes' => array( 'fullerton' ),
		),
		'fullerton-page'    => array(
			'label'         => __( 'Page', 'fullerton' ),
			'categoryTypes' => array( 'fullerton' ),
		),
		'fullerton-header'  => array(
			'label'         => __( 'Header', 'fullerton' ),
			'categoryTypes' => array( 'fullerton' ),
		),
		'fullerton-footer'  => array(
			'label'         => __( 'Footer', 'fullerton' ),
			'categoryTypes' => array( 'fullerton' ),
		),
		'fullerton-query'   => array(
			'label'         => __( 'Query', 'fullerton' ),
			'categoryTypes' => array( 'fullerton' ),
		)
	);

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', 'fullerton_register_block_pattern_categories', 9 );
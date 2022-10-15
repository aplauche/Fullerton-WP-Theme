<?php // Enqueue style sheet.
add_action( 'wp_enqueue_scripts', 'fullerton_enqueue_style_sheet' );
function fullerton_enqueue_style_sheet() {
	wp_enqueue_style( 'fullerton', get_template_directory_uri() . '/style.css', array(), microtime() );

}


function fullerton_gutenberg_styles() {
  wp_enqueue_script( 'fullerton-editor-script', get_template_directory_uri() . '/src/js/editor.js', array(), microtime(), true );
	wp_enqueue_style( 'fullerton-editor-style', get_stylesheet_directory_uri() . '/style.css',array(), microtime() );
}
add_action( 'enqueue_block_editor_assets', 'fullerton_gutenberg_styles' );
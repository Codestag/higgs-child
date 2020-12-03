<?php
/**
 * Higgs Child Theme
 *
 * Place any custom functionality/code snippets here.
 *
 * @since Higgs Child 1.0
 */

/**
 * Include child theme styles.
 *
 * @return void
 */
function higgs_child_styles() {
	$theme = wp_get_theme();
	wp_enqueue_style( 'higgs-style', get_template_directory_uri() . '/style.css', array(), $theme->parent()->get( 'Version' ) );
	wp_enqueue_style( 'higgs-child-style', get_stylesheet_uri(), array( 'higgs-style' ), $theme->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'higgs_child_styles' );

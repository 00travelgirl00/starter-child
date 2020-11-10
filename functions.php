<?php
/**
 * This file is part of a child theme called Starter Child.
 * Functions in this file will be loaded before the parent theme's functions.
 * For more information, please read
 * https://developer.wordpress.org/themes/advanced-topics/child-themes/
 */

/**
 * Load the frontend parent and child theme styles
 */
function starter_child_enqueue_styles() {
	$parent_style = 'twentytwenty-style';

	wp_enqueue_style(
		$parent_style,
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->parent()->get( 'Version' )
	);

	wp_enqueue_style(
		'starter-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'starter_child_enqueue_styles' );

/**
 * Load the block editor parent and child theme styles
 */
function starter_child_block_editor_styles() {
	wp_enqueue_style(
		'twentytwenty-block-editor-styles',
		get_theme_file_uri( '/assets/css/editor-style-block.css' ),
		array(),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'starter-child-block-editor-styles',
		get_theme_file_uri( '/assets/css/editor-style-block.css' ),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'enqueue_block_editor_assets', 'starter_child_block_editor_styles', 1 );

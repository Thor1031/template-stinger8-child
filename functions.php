<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_enqueue_style(
		'parent-style',
		get_template_directory_uri() . '/style.css'
	);
	wp_enqueue_style(
		'my',
		get_stylesheet_directory_uri() . '/css/style.css',
		array( 'parent-style', 'style' )
	);
	wp_enqueue_style(
		'slick',
		'https://cdn.jsdelivr.net/npm/slick-carousel@1/slick/slick.min.css'
	);
	wp_enqueue_style(
		'slick-theme',
		'https://cdn.jsdelivr.net/npm/slick-carousel@1/slick/slick-theme.min.css'
	);

	wp_enqueue_script(
		'slick',
		'https://cdn.jsdelivr.net/npm/slick-carousel@1/slick/slick.min.js', array(),
		'false',
		true
	);
	wp_enqueue_script(
		'script', get_stylesheet_directory_uri() . '/js/script.js',
		array( 'jquery', 'base', 'scroll' ),
		'1.0.0',
		true
	);

}

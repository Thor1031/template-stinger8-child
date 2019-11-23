<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// ********style, scriptファイルの登録
// 親にadd_action()があるので必要ない
function st_enqueue_styles() {
	// parent normalize.css
	wp_register_style(
		'normalize',
		get_template_directory_uri() . '/css/normalize.css',
		array(),
		'1.5.9',
		'all'
	);

	// fontawesome
	wp_register_style(
		'font-awesome',
		'https://use.fontawesome.com/releases/v5.10.2/css/all.css',
		array( 'normalize' ),
		'5.10.2'
	);

	// parent ./style.css
	wp_register_style(
		'parent-style',
		get_template_directory_uri() . '/style.css',
		array( 'normalize', 'font-awesome' )
	);

	// child ./css/style.css
	wp_register_style(
		'my-style',
		get_stylesheet_directory_uri() . '/css/style.css',
		array( 'normalize', 'font-awesome', 'parent-style' )
	);

	wp_enqueue_style( 'my-style' );

	// slick
	// wp_enqueue_style(
	// 	'slick',
	// 	'https://cdn.jsdelivr.net/npm/slick-carousel@1/slick/slick.min.css'
	// );
	// wp_enqueue_style(
	// 	'slick-theme',
	// 	'https://cdn.jsdelivr.net/npm/slick-carousel@1/slick/slick-theme.min.css'
	// );
	// wp_enqueue_script(
	// 	'slick',
	// 	'https://cdn.jsdelivr.net/npm/slick-carousel@1/slick/slick.min.js',
	// 	array(),
	// 	'false',
	// 	true
	// );

	// js登録
	wp_enqueue_script(
		'script',
		get_stylesheet_directory_uri() . '/js/script.js',
		array( 'jquery', 'base', 'scroll' ),
		'1.0.0',
		true
	);

}

// ********** 親テーマのカスタムメニューを上書き
// 親テーマで設定されているメニューロケーションを消去
add_action( 'init', 'remove_default_menu', 11 );
function remove_default_menu() {
	unregister_nav_menu( 'primary-menu' );
	unregister_nav_menu( 'secondary-menu' );
	unregister_nav_menu( 'smartphone-menu' );
}
// メニューロケーション作成
add_action( 'init', 'my_custom_menus_child', 12 );
function my_custom_menus_child() {
	register_nav_menus(
		array(
			'primary-menu'    => __( 'ヘッダー用メニュー', 'default' ),
			'footer-l-menu'   => __( 'フッター（左）用メニュー', 'default' ),
			'footer-c-menu'   => __( 'フッター（中）用メニュー', 'default' ),
			'footer-r-menu'   => __( 'フッター（右）用メニュー', 'default' ),
			'smartphone-menu' => __( 'スマートフォン用メニュー', 'default' ),
		)
	);
}

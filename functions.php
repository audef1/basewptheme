<?php

add_theme_support( 'post-thumbnails' );

wp_enqueue_style( 'style', get_stylesheet_uri() );

function wpfooter1_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer 1',
		'id'            => 'footer_1',
		'before_widget' => '<div class="footerwidget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'wpfooter1_widgets_init' );

function wpfooter2_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer 2',
		'id'            => 'footer_2',
		'before_widget' => '<div class="footerwidget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'wpfooter2_widgets_init' );


function wpfooter3_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer 3',
		'id'            => 'footer_3',
		'before_widget' => '<div class="footerwidget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'wpfooter3_widgets_init' );




?>
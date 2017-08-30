<?php
/**
 * Register widget areas
 *
 * @package FosterPress
 * @since FosterPress 1.0.0
 */

if ( ! function_exists( 'fosterpress_sidebar_widgets' ) ) :
function fosterpress_sidebar_widgets() {
	register_sidebar(array(
		'id' => 'sidebar-widgets',
		'name' => __( 'Sidebar widgets', 'fosterpress' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'fosterpress' ),
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));

	register_sidebar(array(
		'id' => 'footer-widgets',
		'name' => __( 'Footer widgets', 'fosterpress' ),
		'description' => __( 'Drag widgets to this footer container', 'fosterpress' ),
		'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));
}

add_action( 'widgets_init', 'fosterpress_sidebar_widgets' );
endif;

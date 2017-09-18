<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package FosterPress
 * @since FosterPress 1.0.0
 */

if ( ! function_exists( 'fosterpress_scripts' ) ) :
  function fosterpress_scripts() {

    // Enqueue the main Stylesheet.
    wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . get_asset_path('style/style.css'), array(), null, false );

    // Deregister the jquery version bundled with WordPress.
    wp_deregister_script( 'jquery' );

    // CDN hosted jQuery.
    // wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', true );

    // Enqueue the main JavaScript
    wp_enqueue_script( 'main-functionality', get_template_directory_uri() . get_asset_path('js/app.js'), array(), null, true );

    // Add the comment-reply library on pages where it is necessary
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }

  }

  add_action( 'wp_enqueue_scripts', 'fosterpress_scripts' );
endif;

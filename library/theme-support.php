<?php
/**
 * Register theme support for languages, menus, post-thumbnails, post-formats etc.
 *
 * @package FosterPress
 * @since FosterPress 1.0.0
 */

if ( ! function_exists( 'fosterpress_theme_support' ) ) :
function fosterpress_theme_support() {
  // Add language support
  load_theme_textdomain( 'fosterpress', get_template_directory() . '/languages' );

  // Switch default core markup for search form, comment form, and comments to output valid HTML5
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );

  // Add menu support
  add_theme_support( 'menus' );

  // Let WordPress manage the document title
  add_theme_support( 'title-tag' );

  // Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
  add_theme_support( 'post-thumbnails' );

  // RSS thingy
  add_theme_support( 'automatic-feed-links' );

  // Add styles.css as editor style https://codex.wordpress.org/Editor_Style
  add_editor_style( 'assets/css/styles.css' );
}

add_action( 'after_setup_theme', 'fosterpress_theme_support' );
endif;

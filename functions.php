<?php
/**
 * Author: Cos Anca
 * URL: http://github.com/CosminAnca
 *
 * FosterPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FosterPress
 * @since FosterPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Cache busting */
require_once( 'library/cache-busting.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

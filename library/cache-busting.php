<?php
/**
 * Get cache-busting hashed filename from rev-manifest.json.
 *
 * @package FosterPress
 * @since FosterPress 1.0.0
 */
function get_asset_path( $filename ) {

  // Cache the decoded manifest so that we only read it in once.
  static $manifest = null;

  if ( null === $manifest ) {
    $active_theme_slug = get_template();
    $manifest_path = ABSPATH . 'wp-content/themes/' . $active_theme_slug . '/assets/rev-manifest.json';
    $manifest = file_exists( $manifest_path )
      ? json_decode( file_get_contents( $manifest_path ), FILE_USE_INCLUDE_PATH )
      : [];
  }

  // If the manifest contains the requested file, return the hashed name.
  if ( array_key_exists( $filename, $manifest ) ) {
    return '/assets/' . $manifest[ $filename ];
  }

  // Assume the file has not been hashed or it was not found within the
  // manifest.
  return '/assets/' . $filename;
}

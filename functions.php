<?php
/**
 * Theme bootstrap
 *
 * @package Yuki WriteFlow
 */

// don't call the file directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'YUKI_WRITE_FLOW_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'YUKI_WRITE_FLOW_VERSION', '1.0.0' );
}

if ( ! defined( 'YUKI_WRITE_FLOW_PATH' ) ) {
	define( 'YUKI_WRITE_FLOW_PATH', trailingslashit( get_stylesheet_directory() ) );
}

if ( ! defined( 'YUKI_WRITE_FLOW_URL' ) ) {
	define( 'YUKI_WRITE_FLOW_URL', trailingslashit( get_stylesheet_directory_uri() ) );
}

if ( ! defined( 'YUKI_WRITE_FLOW_ASSETS_URL' ) ) {
	define( 'YUKI_WRITE_FLOW_ASSETS_URL', YUKI_WRITE_FLOW_URL . 'assets/' );
}

if ( ! function_exists( 'yuki_write_flow_image_url' ) ) {
	/**
	 * Get image url
	 *
	 * @param $image
	 *
	 * @return string
	 */
	function yuki_write_flow_image_url( $image ) {
		return YUKI_WRITE_FLOW_ASSETS_URL . 'images/' . $image;
	}
}

// require customizer options
require_once YUKI_WRITE_FLOW_PATH . 'customizer.php';
// require theme starter content
require_once YUKI_WRITE_FLOW_PATH . 'starter-content.php';

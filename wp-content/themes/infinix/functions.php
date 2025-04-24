<?php
/**
 * Infinix functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Infinix
 * @since Infinix 1.0
 */


if ( ! function_exists( 'infinix_theme_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Infinix 1.0
	 *
	 * @return void
	 */
	function infinix_theme_setup() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'infinix_theme_setup' );

if ( ! function_exists( 'infinix_assets' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Infinix 1.0
	 *
	 * @return void
	 */
	function infinix_assets() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'infinix-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'infinix-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'infinix_assets' );

/**
 * Register pattern categories.
 */
function pattern_categories() {

	$block_pattern_categories = array(
		'infinix'           => array(
			'label' => __( 'Infinix', 'infinix' ),
		),
		'page' => array(
			'label' => __( 'Page', 'infinix' ),
		)
	);

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', __NAMESPACE__ . '\pattern_categories', 9 );


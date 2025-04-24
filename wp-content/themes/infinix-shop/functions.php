<?php
/**
 * Infinix Shop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Infinix_Shop
 * @since Infinix Shop 1.0
 */


if ( ! function_exists( 'infinixshop_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Infinix Shop 1.0
	 *
	 * @return void
	 */
	function infinix_shop_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'infinix_shop_support' );

if ( ! function_exists( 'infinix_shop_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Infinix Shop 1.0
	 *
	 * @return void
	 */
	function infinix_shop_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'infinix-shop-style',
			get_stylesheet_directory_uri() . '/style.css',
			array( 'infinix-style' ),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'infinix-shop-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'infinix_shop_styles' );


<?php
/**
 * WordPress.com specific functions
 *
 * @package Syntax
 */

function syntax_theme_colors() {
	global $themecolors;

	/**
	 * Set a default theme color array for WP.com.
	 *
	 * @global array $themecolors
	 */
	if ( ! isset( $themecolors ) ) :
		$themecolors = array(
			'bg' => 'ffffff',
			'border' => 'cccccc',
			'text' => '444444',
			'link' => '444444',
			'url' => '444444',
		);
	endif;
}
add_action( 'after_setup_theme', 'syntax_theme_colors' );


/*
 * De-queue Google fonts if custom fonts are being used instead
 */
function syntax_dequeue_fonts() {
	if ( class_exists( 'TypekitData' ) && class_exists( 'CustomDesign' ) && CustomDesign::is_upgrade_active() ) {
		$customfonts = TypekitData::get( 'families' );
		if ( $customfonts && $customfonts['site-title']['id'] && $customfonts['headings']['id'] && $customfonts['body-text']['id'] ) {
			wp_dequeue_style( 'syntax-merriweather' );
		}
	}
}

add_action( 'wp_enqueue_scripts', 'syntax_dequeue_fonts' );

/*
 * WordPress.com print styles & responsive videos
 */

function syntax_theme_support() {
	add_theme_support( 'wpcom-responsive-videos' );
	add_theme_support( 'print-style' );
}
add_action( 'after_setup_theme', 'syntax_theme_support' );

//WordPress.com specific styles
function syntax_wpcom_styles() {
	wp_enqueue_style( 'syntax-wpcom', get_template_directory_uri() . '/style-wpcom.css', '010814' );
}
add_action( 'wp_enqueue_scripts', 'syntax_wpcom_styles' );
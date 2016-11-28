<?php

// =============================================================================
// Enqueue Embed Fonts
// =============================================================================

if ( ! function_exists('getbowtied_default_fonts') ) :
function getbowtied_default_fonts() {
	if
	( 	getbowtied_theme_option( 'default_theme_fonts', 'default_fonts' ) == 'default_fonts' ||
	 	getbowtied_theme_option( 'default_theme_fonts', 'default_fonts' ) == 'tests'
	)
	{
		wp_enqueue_style( 'getbowtied-default-fonts', get_template_directory_uri() . '/inc/fonts/default.css', array(), NULL );
	}
}
add_action( 'wp_enqueue_scripts', 'getbowtied_default_fonts', 100 );
endif;

// =============================================================================
// Remove Kirki Fonts
// =============================================================================

if ( ! function_exists('kirki_disable_google_fonts') ) :
function kirki_disable_google_fonts( $config ) {
    if
    (
    	getbowtied_theme_option( 'default_theme_fonts', 'default_fonts' ) == 'default_fonts' ||
    	getbowtied_theme_option( 'default_theme_fonts', 'default_fonts' ) == 'tests'
    )
    {
    	$config['disable_google_fonts'] = true;
    }
    return $config;
}
add_filter( 'kirki/config', 'kirki_disable_google_fonts' );
endif;
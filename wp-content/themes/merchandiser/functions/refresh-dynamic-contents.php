<?php

// Refresh Dynamic Contents

function getbowtied_update_wishlist_count()
{
	global $yith_wcwl;

	if( function_exists( 'YITH_WCWL' ) )
	{
        wp_send_json( YITH_WCWL()->count_products() );
	}
}

add_action( 'wp_ajax_getbowtied_update_wishlist_count', 'getbowtied_update_wishlist_count' );
add_action( 'wp_ajax_nopriv_getbowtied_update_wishlist_count', 'getbowtied_update_wishlist_count' );
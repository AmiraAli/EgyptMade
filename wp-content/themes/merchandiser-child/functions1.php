<?php

/**
 * Register shop, single product ,product category
 */
//awel 7aga unique small letter benha _
//klma f sf7a 
//group ay kalam woocommerce
if (function_exists('pll_register_string')) {
    pll_register_string('all', 'ALL', 'woocommerce');//done
    pll_register_string('read_more', 'READ MORE', 'woocommerce'); //done
    pll_register_string('leave_a_reply', 'Leave a Reply', 'woocommerce'); //done //comment .php 
    pll_register_string('message', 'MESSAGE', 'woocommerce'); //done// comment .php 
    pll_register_string('logged_in_as', 'Logged in as', 'woocommerce'); //done// comment .php 
    pll_register_string('log_out', 'Log out', 'woocommerce'); //done// comment .php 
    pll_register_string('no_more_items_available', 'No more items available.', 'woocommerce'); //done// parenttheme/functions/enqueue-scripts.php done fadl a7tha azai
    pll_register_string('loading', 'Loading', 'woocommerce'); //done //fadl a7tha azai 
    pll_register_string('load_more_item', 'Load More Item', 'woocommerce'); //done //fadl a7tha azai  

    pll_register_string('add_to_cart', 'ADD TO CART', 'woocommerce');//plugins/woocommerce/includes/class-wc-product-simple.php method  add_to_cart_text() , plugins/woocommerce/includes/abstracts/abstract-wc-product.php single_add_to_cart_text()
    pll_register_string('sold_by', 'Sold By', 'woocommerce');//done//plugin/wc-vendors/classes/vendor/vendor-shop.php
    pll_register_string('egypt_made', 'egypt made', 'woocommerce');//done

    pll_register_string('quick_view', 'QUICK VIEW', 'woocommerce');//done//themes/merchandiser/functions/wc/quick-view.php getbowtied_product_quick_view_button() //mtkrra hna 
    pll_register_string('buy_on_amazon', 'BUY ON AMAZON', 'woocommerce');

    pll_register_string('share_this_product', 'SHARE THIS PRODUCT', 'woocommerce'); //done//var/www/html/EgyptMade/wp-content/themes/merchandiser/functions/wc/single-product-share.php //mtkrra hna
    pll_register_string('description', 'Description', 'woocommerce'); //done//wc-template-functions.php
    pll_register_string('reviews', 'Reviews', 'woocommerce'); //done//plugin/include/wc-template-functions.php
    pll_register_string('related_products', 'Related Products', 'woocommerce');//done//var/www/html/EgyptMade/wp-content/themes/merchandiser/woocommerce/single-product/related.php
    pll_register_string('default_sorting', 'DEFAULT SORTING', 'woocommerce'); //done//wc-template-functions.php
    pll_register_string('sort_by_popularity', 'SORT BY POPULARITY', 'woocommerce'); //done//wc-template-functions.php
    pll_register_string('sort_by_average_rating', 'SORT BY AVERAGE RATING', 'woocommerce'); //done//wc-template-functions.php
    pll_register_string('sort_by_newness', 'SORT BY NEWNESS', 'woocommerce'); //done//wc-template-functions.php
    pll_register_string('sort_by_average_price', 'SORT BY PRICE: LOW TO HIGH', 'woocommerce');//done //wc-template-functions.php
    pll_register_string('sort_by_average_price_inverse', 'SORT BY PRICE: HIGH TO LOW', 'woocommerce'); //done//wc-template-functions.php

    pll_register_string('be_the_first_to_review', 'Be The First To Review', 'woocommerce'); //done//plugins/woocommerce/templates/single-product-reviews.php  //override gwa woocomerce child theme
    pll_register_string('your_review', 'YOUR REVIEW', 'woocommerce'); //done
    pll_register_string('name', 'NAME', 'woocommerce'); //done
    pll_register_string('email', 'EMAIL', 'woocommerce'); //done
    pll_register_string('submit', 'SUBMIT', 'woocommerce'); //done





}
//
// =============================================================================
// Enqueue Scripts
// =============================================================================

if (!function_exists('getbowtied_scripts')) :

    function getbowtied_scripts() {

        if (GETBOWTIED_VISUAL_COMPOSER_IS_ACTIVE) { // If VC exists/active load scripts after VC
            $dependencies = array('jquery', 'wpb_composer_front_js');
        } else { // Do not depend on VC
            $dependencies = array('jquery');
        }

        wp_enqueue_script('getbowtied-scripts', get_template_directory_uri() . '/js/scripts-dist.js', $dependencies, getbowtied_theme_version(), TRUE);

        if (function_exists('pll_e')) {
            $nomoreItems = pll__('No more items available.');
            $loadmore = pll__('Load More Items');

            $loading = pll__('Loading');
        } else {
            $nomoreItems = _e('No more items available.', 'woocommerce');
            $loadmore = _e('Load More Items', 'woocommerce');
            $loading = _e('Loading', 'woocommerce');
        }

        // Send variables to js
        $getbowtied_scripts_vars_array = array(
            'ajax_load_more_locale' => esc_html__($loadmore, 'getbowtied'),
            'ajax_loading_locale' => esc_html__($loading, 'getbowtied'),
            'ajax_no_more_items_locale' => esc_html__($nomoreItems, 'getbowtied'),
            'blog_pagination_type' => getbowtied_theme_option('blog_pagination', 'infinite_scroll'),
            'blog_layout' => getbowtied_theme_option('blog_layout', 'blog_layout_default'),
            'shop_pagination_type' => getbowtied_theme_option('shop_pagination', 'infinite_scroll'),
            'shop_layout_style' => getbowtied_theme_option('shop_layout_style', 'regular'),
        );

        wp_localize_script('getbowtied-scripts', 'getbowtied_scripts_vars', $getbowtied_scripts_vars_array);

        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }

    add_action('wp_enqueue_scripts', 'getbowtied_scripts');
endif;


if ( WC_Vendors::$pv_options->get_option( 'sold_by' ) ) { 
    remove_action('woocommerce_after_shop_loop_item',array('WCV_Vendor_Shop', 'template_loop_sold_by'), 9);
			add_action( 'woocommerce_after_shop_loop_item', 'custom_template_loop_sold_by', 9 );
		} 

 function custom_template_loop_sold_by($product_id) {

 if (function_exists('pll_e')) {
            $soldBy = pll__('Sold By');
            $egyptMade = pll__('egypt made');
        } else {
            $soldBy = _e('Sold By', 'woocommerce');
            $egyptMade = _e('egypt made', 'woocommerce');
            
        }
 
		$vendor_id     = WCV_Vendors::get_vendor_from_product( $product_id );
		$sold_by_label = $soldBy;
		$sold_by = $egyptMade;
		
			wc_get_template( 'vendor-sold-by.php', array(
													'vendor_id' 		=> $vendor_id, 
													'sold_by_label'		=> $sold_by_label, 
													'sold_by'			=> $sold_by, 
												
											   ), 'wc-vendors/front/', wcv_plugin_dir . 'templates/front/' );

	}






if ( GETBOWTIED_WOOCOMMERCE_IS_ACTIVE ) {
 
 	

	    remove_action('woocommerce_after_shop_loop_item','getbowtied_product_quick_view_button', 5);

		add_action( 'woocommerce_after_shop_loop_item', 'custom_getbowtied_product_quick_view_button', 5 );
	// Show Quick View Button

	function custom_getbowtied_product_quick_view_button() {
if (function_exists('pll_e')) {
            $quickView = pll__('QUICK VIEW');
        
        } else {
            $quickView = _e('QUICK VIEW', 'woocommerce');
            
            
        }
		global $product;
		echo '<a href="#" id="product_id_' . $product->id . '" class="button getbowtied_product_quick_view_button" data-product_id="' . $product->id . '">' . esc_html__( $quickView, 'getbowtied') . '</a>';
	}

	
}






if ( ! function_exists( 'woocommerce_catalog_ordering' ) ) {

	/**
	 * Output the product sorting options.
	 *
	 * @subpackage	Loop
	 */
	function woocommerce_catalog_ordering() {


if (function_exists('pll_e')) {
            $defaultSorting = pll__('DEFAULT SORTING');
            $popularitySorting = pll__('SORT BY POPULARITY');
            $averageRatingSorting = pll__('SORT BY AVERAGE RATING');
            $newnessSorting = pll__('SORT BY NEWNESS');
            $priceLHSorting = pll__('SORT BY PRICE: LOW TO HIGH');
            $priceHLSorting = pll__('SORT BY PRICE: HIGH TO LOW');
        } else {
           $defaultSorting = _e('DEFAULT SORTING', 'woocommerce');
           $popularitySorting = _e('SORT BY POPULARITY', 'woocommerce');
           $averageRatingSorting = _e('SORT BY AVERAGE RATING', 'woocommerce');
           $newnessSorting = _e('SORT BY NEWNESS', 'woocommerce');
           $priceLHSorting = _e('SORT BY PRICE: LOW TO HIGH', 'woocommerce');
           $priceHLSorting = _e('SORT BY PRICE: HIGH TO LOW', 'woocommerce');
            
        }





		global $wp_query;

		if ( 1 === $wp_query->found_posts || ! woocommerce_products_will_display() ) {
			return;
		}

		$orderby                 = isset( $_GET['orderby'] ) ? wc_clean( $_GET['orderby'] ) : apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) );
		$show_default_orderby    = 'menu_order' === apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) );
		$catalog_orderby_options = apply_filters( 'woocommerce_catalog_orderby', array(
			'menu_order' => __( $defaultSorting, 'woocommerce' ),
			'popularity' => __( $popularitySorting, 'woocommerce' ),
			'rating'     => __( $averageRatingSorting, 'woocommerce' ),
			'date'       => __( $newnessSorting, 'woocommerce' ),
			'price'      => __( $priceLHSorting, 'woocommerce' ),
			'price-desc' => __( $priceHLSorting, 'woocommerce' )
		) );

		if ( ! $show_default_orderby ) {
			unset( $catalog_orderby_options['menu_order'] );
		}

		if ( 'no' === get_option( 'woocommerce_enable_review_rating' ) ) {
			unset( $catalog_orderby_options['rating'] );
		}

		wc_get_template( 'loop/orderby.php', array( 'catalog_orderby_options' => $catalog_orderby_options, 'orderby' => $orderby, 'show_default_orderby' => $show_default_orderby ) );
	}
}



if ( ! function_exists( 'woocommerce_default_product_tabs' ) ) {

	/**
	 * Add default product tabs to product pages.
	 *
	 * @param array $tabs
	 * @return array
	 */
	function woocommerce_default_product_tabs( $tabs = array() ) {
if (function_exists('pll_e')) {
            $description = pll__('Description');
            $review = pll__('Reviews');
        } else {
           $description = _e('Description', 'woocommerce');
           $review = _e('Reviews', 'woocommerce');
            
        }
		global $product, $post;

		// Description tab - shows product content
		if ( $post->post_content ) {
			$tabs['description'] = array(
				'title'    => __( $description, 'woocommerce' ),
				'priority' => 10,
				'callback' => 'woocommerce_product_description_tab'
			);
		}

		// Additional information tab - shows attributes
		if ( $product && ( $product->has_attributes() || ( $product->enable_dimensions_display() && ( $product->has_dimensions() || $product->has_weight() ) ) ) ) {
			$tabs['additional_information'] = array(
				'title'    => __( 'Additional Information', 'woocommerce' ),
				'priority' => 20,
				'callback' => 'woocommerce_product_additional_information_tab'
			);
		}

		// Reviews tab - shows comments
		if ( comments_open() ) {
			$tabs['review'] = array(
				'title'    => sprintf( __( $review.' (%d)', 'woocommerce' ), $product->get_review_count() ),
				'priority' => 30,
				'callback' => 'comments_template'
			);
		}

		return $tabs;
	}
}


add_filter('woocommerce_single_product_summary_single_sharing', 'custom_getbowtied_single_product_share');
function custom_getbowtied_single_product_share() {
if (function_exists('pll_e')) {
            $shareProduct = pll__('SHARE THIS PRODUCT');
            
        } else {
           $shareProduct = _e('SHARE THIS PRODUCT', 'woocommerce');
           
            
        }
    
    global $post, $product;
        
    $thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), false, ''); //Get the Thumbnail URL
    
    ?>

    <div class="single_product_share">

        <span class="share-product-text"><?php esc_html_e($shareProduct, 'getbowtied' ); ?></span>
    
        <div class="social_links">
            <a href="//facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="social_media social_media_facebook"><i class="fa fa-facebook"></i></a>
            <a href="//twitter.com/share?url=<?php the_permalink(); ?>" target="_blank" class="social_media social_media_twitter"><i class="fa fa-twitter"></i></a>
            <a href="//pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&amp;media=<?php echo esc_url($thumbnail_src[0]) ?>&amp;description=<?php echo urlencode(get_the_title()); ?>" target="_blank" class="social_media social_media_pinterest"><i class="fa fa-pinterest"></i></a>
        </div>
       
    </div><!-- .single_product_share -->

    <?php
    
}





















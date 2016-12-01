<?php
/*
  Template Name: Home Template
 */
get_header();
?>	

<?php
$args = array('post_type' => 'product',
	'posts_per_page' => 3,
	'order' => 'DESC'
);
$recent_posts = wp_get_recent_posts($args);

//foreach( $recent_posts as $recent ){
//echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"] .'</a> </li>';
//echo	wp_get_attachment_url( get_post_thumbnail_id($recent["ID"] ), 'single-post-thumbnail' );
// }
// 
// 
// 
// 

$catory = array(
	'taxonomy' => 'product_cat',
	'order' => 'DESC',
	'orderby' => 'count',
	'number' => 3
		);
$terms = get_terms($catory);
//	foreach( $terms as $cat ){
//		echo "<br>". $cat->term_id;
//		$packages = new WP_Query( array(
//    'post_type' => 'product',
//    'tax_query' => array(
//		     array(  
//            'taxonomy' => 'product_cat',
//            'field'    => 'id',
//            'terms'    => $cat->term_id,
//     
//		)  
//    ),
//				'posts_per_page'=> 3 , 
//    'order' => 'DESC'
//			
//) );
//  foreach( $packages->posts as $catt ){
//	  echo "<br>".$catt -> post_title;
// }
//	
//		
//	}
?>





<div id="primary" class="content-area">
    <div class="site-content">
		<div id="primary" class="content-area"> 
			<main id="main" class="site-main"> 
				<div class="notifications"></div> 
				<div class="row"> 
					<div class="large-12 columns"> 
						<article id="post-2" class="post-2 page type-page status-publish hentry">
							<div class="entry-content"> 
								<div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1453372598779 vc_row-no-padding vc_row-o-full-height vc_row-o-columns-middle vc_row-flex" style="position: relative; left: -412px; box-sizing: border-box; width: 1824px; min-height: 100vh;">
									<div class="wpb_column vc_column_container vc_col-sm-12">
										<div class="vc_column-inner vc_custom_1453372741963">
											<div class="wpb_wrapper">
												<div class="shortcode_getbowtied_slider swiper-container full_height swiper-container-horizontal" style="width: 100%; cursor: -webkit-grab;"> 
													<div class="swiper-wrapper" style="transform: translate3d(-5472px, 0px, 0px); transition-duration: 0ms;">




<?php foreach ($recent_posts as $recent) { ?>	




															<div class="swiper-slide center-align" style="color: rgb(0, 0, 0); width: 1824px; background: url(&quot;<?= wp_get_attachment_url(get_post_thumbnail_id($recent["ID"]), 'single-post-thumbnail') ?>&quot;) center center / cover no-repeat rgb(247, 247, 247);" data-swiper-slide-index="0"> 
																<div class="slider-content" data-swiper-parallax="-1000" style="transform: translate3d(-1000px, 0px, 0px); transition-duration: 0ms;">
																	<div class="slider-content-wrapper">
																		<h1 class="primary_font" style="color:#000000; font-size:64px; line-height: 64px"> <?= $recent["post_title"] ?></h1>
																		<a class="button" style="color:#ffffff; background: #000000" href="<?= get_permalink($recent["ID"]) ?>">Shop Now!</a> 
																	</div>
																</div>
															</div>


															<div class="swiper-slide center-align swiper-slide-duplicate swiper-slide-next" style="color: rgb(0, 0, 0); width: 1824px; background: url(&quot;<?= wp_get_attachment_url(get_post_thumbnail_id($recent["ID"]), 'single-post-thumbnail') ?>&quot;) center center / cover no-repeat rgb(247, 247, 247);" data-swiper-slide-index="0">
																<div class="slider-content" data-swiper-parallax="-1000" style="transform: translate3d(1000px, 0px, 0px); transition-duration: 0ms;">
																	<div class="slider-content-wrapper">
																		<h1 class="primary_font" style="color:#000000; font-size:64px; line-height: 64px"><?= $recent["post_title"] ?></h1>
																		<a class="button" style="color:#ffffff; background: #000000" href="<?= get_permalink($recent["ID"]) ?>">Shop Now!</a>
																	</div>
																</div>
															</div>




<?php }
?>	







													</div>
													<div class="quickview-pagination swiper-pagination-clickable swiper-pagination-bullets">
														<span class="swiper-pagination-bullet"></span>
														<span class="swiper-pagination-bullet"></span>
														<span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>


								<!--								2flt el slider -->


								<div class="vc_row-full-width vc_clearfix">

								</div>

								<div style="margin-top: 100px; margin-bottom: 100px">
									<div id="primary" class="content-area">
										<main id="main" class="site-main">		

<?php while (have_posts()) : the_post(); ?>

												<?php if ("on" == $page_title_option) : ?>

													<header class="entry-header">
														About The Site
													</header><!-- .entry-header -->

	<?php endif; ?>

												<?php
												if (GETBOWTIED_WOOCOMMERCE_IS_ACTIVE):
													echo '<div class="notifications">';
													wc_print_notices();
													echo '</div>';
												endif;
												?>

												<div class="row">

													<div class="large-12 columns">

	<?php get_template_part('content', 'page'); ?>

													</div><!-- .columns -->

												</div><!-- .row -->

	<?php
	// If comments are open or we have at least one comment, load up the comment template
	if (comments_open() || get_comments_number()) :
		comments_template();
	endif;
	?>

											<?php endwhile; // end of the loop. ?>			

										</main><!-- #main -->
									</div><!-- #primary -->	
								</div>





								<div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1476473143219 vc_row-o-full-height vc_row-o-columns-middle vc_row-flex" style="position: relative; left: -412px; box-sizing: border-box; width: 1824px;">
									<div class="wpb_column vc_column_container vc_col-sm-1">
										<div class="vc_column-inner ">
											<div class="wpb_wrapper">

											</div>

										</div>

									</div>
									<div class="wpb_column vc_column_container vc_col-sm-10">
										<div class="vc_column-inner ">

<?php foreach ($terms as $cat) { ?>		

												<div class="wpb_wrapper">
													<h1 class="shortcode_title secondary_font " style="font-size:64;color:#000000;text-align:center;"> <?= $cat->name ?></h1>
													<div class="vc_empty_space" style="height: 70px">
														<span class="vc_empty_space_inner"></span>
													</div>
													<div class="shortcode_gutter" data-gutter="0">
														<div class="woocommerce columns-3">
															<ul class=" products products-grid small-block-grid-2 medium-block-grid-2 large-block-grid-2 xlarge-block-grid-3 xxlarge-block-grid-3 columns-3" style="padding-left: 0px; padding-right: 0px;">

	<?php
	$packages = new WP_Query(array(
		'post_type' => 'product',
		'tax_query' => array(
			array(
				'taxonomy' => 'product_cat',
				'field' => 'id',
				'terms' => $cat->term_id,
			)
		),
		'posts_per_page' => 3,
		'order' => 'DESC'
			));
	?>	
																<?php foreach ($packages->posts as $catt) { ?>						
																	<li class="product getbowtied_ajax_load_more_item_visible" style="padding-left: 0px; padding-right: 0px; padding-bottom: 0px;">
																		<div class="product_thumbnail with_second_image">
																			<a href="<?= get_permalink($catt->ID) ?>">
																				<span class="product_thumbnail_secondary" style="background-image:url(<?= wp_get_attachment_url(get_post_thumbnail_id($catt->ID), 'single-post-thumbnail') ?>)"></span>

																				<img width="500" height="438" src="<?= wp_get_attachment_url(get_post_thumbnail_id($catt->ID), 'single-post-thumbnail') ?>" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="penrose-crazy-wood-l-bazartherapy-207875-rela22cc676"> </a>
																			<div class="shop_product_buttons_wrapper">
																				<div class="shop_product_buttons">
																					<a href="<?= get_permalink($catt->ID) ?>" id="<?= get_permalink($catt->ID) ?>" class="button getbowtied_product_quick_view_button" data-product_id="<?= $catt->ID ?>">Quick View</a>
																					<a rel="nofollow" href="/?add-to-cart=2093" data-quantity="1" data-product_id="<?= $catt->ID ?>" data-product_sku="52432213" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
																				</div>
																			</div>

																		</div>
																		<div class="shop_product_metas"> 
																			<h3><a class="shop_product_title" href="http://merchandiser.getbowtied.com/shop/kitchen-dining/laminate-side-table/"><?= $catt->post_title ?></a></h3> 
																			<div class="shop-product-badges"> </div>
																			<div class="shop_product_price">
																				<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>1,072.00</span></span> 
																			</div>
																		</div>

																	</li>

	<?php } ?>	

															</ul>
														</div>

													</div>
												</div>

<?php } ?>















											<div class="vc_row-full-width vc_clearfix">

											</div>
										</div><!-- #primary -->		
									</div>
								</div>
							</div>
						</article>
					</div>
				</div>
			</main>
		</div>
	</div>
</div>






<?php wp_reset_query();
get_footer(); ?>
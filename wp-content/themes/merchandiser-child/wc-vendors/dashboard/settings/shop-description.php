<?php
$vendor = wp_get_current_user()->user_login;
$shop_page = esc_url(add_query_arg(array('vendor_shop' => $vendor), get_post_type_archive_link('product')));
?>
<div id="pv_shop_description_container">
	<p><b><?php  if (function_exists('pll_e')) {
               pll_e('Shop Description');
           } else {
               _e( 'Shop Description', 'wcvendors' );
           }  ?></b><br/>
           <?php 
           if(function_exists('pll__')){
               $label1= pll__('This is displayed on');
               $label2= pll__('your shop page');
           }else{
               $label1= 'This is displayed on';
               $label2= 'your shop page';
           }
           ?>
		<?php printf( __( '%s  <a target="_blank" href="%s">%s</a>.','wcvendors' ), $label1, $shop_page ,$label2); ?>
	</p>

	<p>
		<?php

		if ( $global_html || $has_html ) {
			$old_post          = $GLOBALS[ 'post' ];
			$GLOBALS[ 'post' ] = 0;
			wp_editor( $description, 'pv_shop_description' );
			$GLOBALS[ 'post' ] = $old_post;
		} else {
			?><textarea class="large-text" rows="10" id="pv_shop_description_unhtml" style="width:95%"
						name="pv_shop_description"><?php echo $description; ?></textarea><?php
		}

		?>
	</p>

</div>

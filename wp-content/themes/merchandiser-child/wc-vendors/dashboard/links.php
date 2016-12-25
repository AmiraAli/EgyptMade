<?php
$vendor = wp_get_current_user()->user_login;
$shop_page = esc_url(add_query_arg(array('vendor_shop' => $vendor), get_post_type_archive_link('product')));
if(function_exists('pll_get_post')){
    $settings_page= get_permalink(pll_get_post(WC_Vendors::$pv_options->get_option( 'shop_settings_page' )));
}else{
   $settings_page= get_permalink( WC_Vendors::$pv_options->get_option( 'shop_settings_page' ) );
}

?>
<br>
<center>
    <p>
        <a target="_blank" href="<?php echo $shop_page; ?>" class="button">
            <?php
            if (function_exists('pll_e')) {
                pll_e('View Your Store');
            } else {
                echo _e('View Your Store', 'wcvendors');
//bt2ked enha mwgoda 
//bktbha 3shan tzhr 	
            }
            ?>
        </a>
        <a target="_blank" href="<?php echo $settings_page; ?>" class="button">
            <?php
            if (function_exists('pll_e')) {
                pll_e('Store Settings');
            } else {
                echo _e('Store Settings', 'wcvendors');
            }
            ?>
        </a>

        <?php if ($can_submit) { ?>
            <a target="_blank" href="<?php echo $submit_link; ?>" class="button">
                <?php
                if (function_exists('pll_e')) {
                    pll_e('Add New Product');
                } else {
                    echo _e('Add New Product', 'wcvendors');
                }
                ?>
            </a>
            <a target="_blank" href="<?php echo $edit_link; ?>" class="button">
                <?php
                if (function_exists('pll_e')) {
                    pll_e('Edit Products');
                } else {
                    echo _e('Edit Products', 'wcvendors');
                }
                ?>
            </a>
            <?php
        }
        do_action('wcvendors_after_links');
        ?>
</center>

<hr>

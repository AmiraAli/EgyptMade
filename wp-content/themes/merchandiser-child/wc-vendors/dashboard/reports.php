<h2><?php
    if (function_exists('pll_e')) {
        pll_e('Sales Report');
    } else {
        _e('Sales Report', 'wcvendors');
    }
    ?></h2>

<?php
if ($datepicker !== 'false') {
    wc_get_template('date-picker.php', array(
        'start_date' => $start_date,
        'end_date' => $end_date,
            ), 'wc-vendors/dashboard/', wcv_plugin_dir . 'templates/dashboard/');
}
?>

<table class="table table-condensed table-vendor-sales-report">
    <thead>
        <tr>
            <th class="product-header"><?php
                if (function_exists('pll_e')) {
                    pll_e('Product');
                } else {
                    _e('Product', 'wcvendors');
                }
                ;
                ?></th>
            <th class="quantity-header"><?php
                if (function_exists('pll_e')) {
                    pll_e('Quantity');
                } else {
                    _e('Quantity', 'wcvendors');
                }
                ?></th>
            <th class="commission-header"><?php
                if (function_exists('pll_e')) {
                    pll_e('Commission');
                } else {
                    _e('Commission', 'wcvendors');
                }
                ?></th>
            <th class="rate-header"><?php
                if (function_exists('pll_e')) {
                    pll_e('Rate');
                } else {
                    _e('Rate', 'wcvendors');
                }
                ?></th>
            <th></th>
    </thead>
    <tbody>

        <?php if (!empty($vendor_summary)) : ?>


            <?php if (!empty($vendor_summary['products'])) : ?>

                <?php
                foreach ($vendor_summary['products'] as $product) :
                    $_product = get_product($product['id']);
                    ?>

                    <tr>

                        <td class="product"><strong><a
                                    href="<?php echo esc_url(get_permalink($_product->id)) ?>"><?php echo $product['title'] ?></a></strong>
                                <?php
                                if (!empty($_product->variation_id)) {
                                    echo woocommerce_get_formatted_variation($_product->variation_data);
                                }
                                ?>
                        </td>
                        <td class="qty"><?php echo $product['qty']; ?></td>
                        <td class="commission"><?php echo woocommerce_price($product['cost']); ?></td>
                        <td class="rate"><?php echo sprintf('%.2f%%', $product['commission_rate']); ?></td>

                        <?php
                        
                        if (function_exists('pll_get_post')) {
                            $id = url_to_postid($product['view_orders_url']);
                            $orders_page =  get_permalink(pll_get_post($id));
                            $product_view_orders_url =  add_query_arg( 'orders_for_product', $product['id'], $orders_page  );
                        } else {
                            $product_view_orders_url = $product['view_orders_url'];
                        }
                        ?>
                        <?php if ($can_view_orders) : ?>
                            <td>
                                <a href="<?php echo $product_view_orders_url; ?>"><?php
                                    if (function_exists('pll_e')) {
                                        pll_e('Show Orders');
                                    } else {
                                        _e('Show Orders', 'wcvendors');
                                    }
                                    ?></a>
                            </td>
                        <?php endif; ?>

                    </tr>

                <?php endforeach; ?>

                <tr>
                    <td><strong><?php
                            if (function_exists('pll_e')) {
                                pll_e('Totals');
                            } else {
                                _e('Totals', 'wcvendors');
                            }
                            ?></strong></td>
                    <td><?php echo $vendor_summary['total_qty']; ?></td>
                    <td><?php echo woocommerce_price($vendor_summary['total_cost']); ?></td>
                    <td></td>

                    <?php if ($can_view_orders) : ?>
                        <td></td>
                    <?php endif; ?>

                </tr>

            <?php else : ?>

                <tr>
                    <td colspan="4"
                        style="text-align:center;"><?php
                            if (function_exists('pll_e')) {
                                pll_e('You have no sales during this period');
                            } else {
                                _e('You have no sales during this period.', 'wcvendors');
                            }
                            ?></td>
                </tr>

            <?php endif; ?>



        <?php else : ?>

            <tr>
                <td colspan="4"
                    style="text-align:center;"><?php
                    if (function_exists('pll_e')) {
                        pll_e('You haven\'t made any sales yet');
                    } else {
                        _e('You haven\'t made any sales yet.', 'wcvendors');
                    }
                    ?></td>
            </tr>

        <?php endif; ?>

    </tbody>
</table>
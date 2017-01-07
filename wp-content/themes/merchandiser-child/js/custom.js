jQuery(window).load(function () {
    if (jQuery("html").attr('lang') == 'ar') {
        // home page shift
        var elements = jQuery('.vc_row');
        elements.each(function () {
            jQuery(this).css("right", jQuery(this).css('left'));
        });
        // single product shift
        jQuery("body.single-product .first_col_split , body.single-product .second_col_split").css('float', 'right');
        var left = jQuery("body.single-product .product_content_wrapper.layout_half .product-thumbnails-vertical-wrapper").css("left");
        jQuery("body.single-product .product_content_wrapper.layout_half .product-thumbnails-vertical-wrapper").css('right', left);
        // menu shift
        var right = jQuery('.site-header .header-wrapper .tools .myaccount-dropdown ul').css('right');
        jQuery('.site-header .header-wrapper .tools .myaccount-dropdown ul').css('left', right);
        jQuery('.site-header .header-wrapper .tools .myaccount-dropdown ul').css('right', "auto");
    }
});
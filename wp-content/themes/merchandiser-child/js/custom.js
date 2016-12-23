jQuery(window).load(function () {
    var elements = jQuery('.vc_row');
    elements.each(function () {
        jQuery(this).css("right", jQuery(this).css('left'));
    });
});

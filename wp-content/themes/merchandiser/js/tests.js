jQuery(function($) {
	
	"use strict";

	// USE THIS FILE FOR QUICK TESTS ONLY

	if ($('#shop-catalog-ordering').length) {
		var custom_woocommerce_ordering = new NLForm( document.getElementById('shop-catalog-ordering'), "true"); // (selector, autosubmit)
		$(".shop-sort-wrapper").addClass("visible");
	}

	$('#masonry_grid').addClass("visible");
	$(".page-wrapper").addClass("visible");


	$('.offcanvas_navigation').mmenu({
		offCanvas: false,
		navbar: {
			title: 'Menu'
		},
	});

	$( ".shop-sidebar .widget-area" ).clone().appendTo( ".offcanvas_shop_sidebar .widget-area" );


	function getbowtied_content_offset() {
		//var menu_height = parseInt( $('.site-header').css('height') );
		//var line_height = parseInt( $('.main-navigation-flyout > ul > li > a').css('line-height') );
		//var lines = menu_height / line_height;
		//console.log("menu_height: " + menu_height);
		//console.log("line_height: " + line_height);
		//console.log("lines: " + lines);

		// $('.site-content, .header-transparent .shop-page-category-description').css('padding-top', $('.site-header').css('height'));
	}



	getbowtied_content_offset();
	
	
	$(window).load(function() {


	
	});

	
	$(window).resize(function() {

		getbowtied_content_offset();
	
	});	

	
    $(window).scroll(function() {


        
    });	 

});

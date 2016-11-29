jQuery(function($) {
	
	"use strict";

	//=============================================================================
	//  yith wishlist counter
	//=============================================================================

	if ($('.wishlist_items_number').length > 0 ) {

		/*
		**	Update wishlist counter on demand
		*/
		function getbowtied_update_wishlist_count() {
			$('.wishlist_items_number').html(localStorage.merchandiserWishlist);
			$(".wishlist_items_number").addClass('visible animated jello');
		}
		
		/*
		**	Initialize counter; fetch via ajax if not exist, then update	
		*/
		if (!localStorage.merchandiserWishlist)
		{
			$.ajax({
				url: getbowtied_ajax_url,
				type: "POST",
				data: {
					'action' : 'getbowtied_update_wishlist_count'
				},
				success:function(data) {
					localStorage.merchandiserWishlist = data;
					getbowtied_update_wishlist_count();
				}
			});
		}
		else 
		{
			getbowtied_update_wishlist_count();
		}

		/*
		**	Increment counter on add
		*/
		$('body').on( 'added_to_wishlist' , function(){
			localStorage.merchandiserWishlist = Number(localStorage.merchandiserWishlist) + 1;
			getbowtied_update_wishlist_count()
		});

		/*
		**	Decrement counter on remove
		*/
		$('body').on( 'removed_from_wishlist' , function(){
			localStorage.merchandiserWishlist = Number(localStorage.merchandiserWishlist) - 1;
			getbowtied_update_wishlist_count()
		});

	}

	//=============================================================================
	//  END yith wishlist counter
	//=============================================================================

})
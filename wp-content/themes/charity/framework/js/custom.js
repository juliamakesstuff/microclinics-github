(function ($) {
    "use strict";
    //superfish menu
    $(function () {
        $('ul.sf-menu').superfish({
            delay: 1000,
            animation:  {
                opacity: 'show',
                height: 'show'
            },
            disableHI:  false
        });
    });
    //prettyphoto		
    $("a[rel^='prettyPhoto'], a[rel^='lightbox']").prettyPhoto({
        theme: 'pp_default',
        default_width: 500,
        overlay_gallery: true
    });
    //comment form box click function
	var $submit_button;
	var $website_box;
	$submit_button = $(".form-submit #submit");
	$website_box = $(".last-input input");
	$submit_button.click(function() {
            if( $website_box.attr("value") === "Website" ) {
 
                // Set it to an empty string
                $website_box.attr("value", "");
            }
	});
	
	//portfolio shortcode hover effects
		/* Center the Hover Btns  */
		var $mediaContainer=$('.sd-button-container'),
		    $media=$('.sd-button-container a');			
			
		$(function(){
								
										
					$('.sd-portfolio-item').hover(											 
					 
						function(){	
						
							var media= $media.width(),			
							    container= ($media.width() + 10);		
											
							$(this).find('.sd-button-container').stop().animate({opacity:1},300);					
							$(this).find('.sd-link-icon').stop().animate({'left': 10}, 300);
							$(this).find('.sd-lightbox-icon').stop().animate({'left':container + 5}, 300);
								
						},
						function(){						
							$(this).find('.sd-button-container').stop().animate({opacity:0},300);
							$(this).find('.sd-link-icon').stop().animate({'left': '100%'}, 300, function() {$(this).css({'left':'0'})});
							$(this).find('.sd-lightbox-icon').stop().animate({'left': '100%'}, 300, function() {$(this).css({'left':'0'})});
						}
						
					);
			
			});	
    //woo image fader
    $(".sd-hovering-images").hover(
        function () {
            $(this).find( '.sd-image-hover' ).stop().fadeTo( "fast", 1 );
        },
        function() {
            $(this).find( '.sd-image-hover' ).stop().fadeTo( "fast", 0 );
        }
    );
	
	$('a.add_to_cart_button').click(function(e) {
		var button_link = this;
		$(button_link).parents('.product').find('.sd-loading-cart').find('i').removeClass('fa-check').addClass('fa-repeat');
		$(this).parents('.product').find('.sd-loading-cart').stop().fadeIn();
		setTimeout(function(){
			$(button_link).parents('.product').find('.product-images img').stop().animate({opacity: 0.75});
			$(button_link).parents('.product').find('.sd-loading-cart').find('i').hide().removeClass('fa-repeat').addClass('fa-check').fadeIn();

			setTimeout(function(){
				$(button_link).parents('.product').find('.sd-loading-cart').stop().fadeOut().parents('.product').find('.product-images img').stop().animate({opacity: 1});;
			}, 2000);
		}, 2000);
	});

	$('li.product').mouseenter(function() {
		if($(this).find('.sd-loading-cart').find('i').hasClass('fa-check')) {
			$(this).find('.sd-loading-cart').stop().fadeIn();
		}
	}).mouseleave(function() {
		if($(this).find('.sd-loading-cart').find('i').hasClass('fa-check')) {
			$(this).find('.sd-loading-cart').stop().fadeOut();
		}		
	});
	
	//fundraiser progress bar
    $('#sd-modal-button-form').click(function(e) {
    });

    //fundraiser progress bar
    $('.sd-intro-box-boxed').css('visibility', 'visible');

})(jQuery);

/* ------------------------------------------------------------------------ */
/* EOF
/* ------------------------------------------------------------------------ */
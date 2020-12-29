jQuery(document).ready(function(){
	
	
	//menu first item dropdown hover + click
//	jQuery('.navbar').find('.dropdown').hover(function() {
//		jQuery(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
//	}, function() {
//		jQuery(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
//	});
//	jQuery('.navbar').find('.dropdown > a').click(function(){
//		location.href = this.href;
//	});
	
	
}); 

function redimensionnement(e) {
	if("matchMedia" in window) {

		//menu fixed on scroll
		jQuery(window).scroll(function () {
			var height = jQuery('header').height();

			if (jQuery(window).scrollTop() > height) {
				jQuery('.navbar').addClass('fixed-top');
				jQuery('.visible-fixed').show("slow");
				jQuery('.scroll-top').css('opacity', '1');
			} else {
				jQuery('.navbar').removeClass('fixed-top');
				jQuery('.visible-fixed').hide("slow");
				jQuery('.scroll-top').css('opacity', '0');
			}

		});
	}
}
redimensionnement();
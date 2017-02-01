(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		
	});
	
})(jQuery, this);

$(document).scroll(function () {
	var y = $(this).scrollTop();
	if (y > 120) {
		$('.sticky-header-bg').fadeIn();
	} else {
	    $('.sticky-header-bg').fadeOut();
	}
});
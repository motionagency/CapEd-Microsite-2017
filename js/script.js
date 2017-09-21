jQuery(document).ready(function($){
	
	// Add bootstrap's 'img-fluid' class to all images
	$('img').addClass('img-fluid');

	// Remove class from images with .swoop
	$('.swoop').removeClass('img-fluid');

	// Toggle Mobile Navigation
	$("span[class^='mobile-menu']").click(function() {
		$(this).toggleClass('toggle');

		$('.caped-mobile').toggle('.caped-mobile-open');
	});



});
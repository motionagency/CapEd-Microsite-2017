jQuery(document).ready(function($){

	// Add bootstrap's 'img-fluid' class to all images
	$('img').addClass('img-fluid');

	// Remove class from images with .swoop
	$('.swoop').removeClass('img-fluid');

	//paste this code under the head tag or in a separate js file.
	// Wait for window load
	$(window).load(function() {

	// Animate loader off screen
	//	$(".se-pre-con").fadeOut("slow");
	$('body').find(".se-pre-con").delay(500).fadeOut(1000);
	});

	// Tabs - show first
	//$('.nav a:first').tab('show')

	// Toggle Mobile Navigation
	$("span[class^='mobile-menu']").click(function() {
		$(this).toggleClass('toggle');

		$('.caped-mobile').toggle('.caped-mobile-open');
	});

	$('.six').bind('inview', function (event, visible) {
  if (visible == true) {
    // element is now visible in the viewport
		var options = {
	  useEasing: true,
	  useGrouping: true,
	  separator: ',',
	  decimal: '.',
	};
		var first = new CountUp('counter_00', 0, 21, 0, 2.5, options);
		if (!first.error) {
		  first.start();
		} else {
		  console.error(first.error);
		}

		var options = {
	  useEasing: true,
	  useGrouping: true,
	  separator: ',',
	  decimal: '.',
	};
		var second = new CountUp('counter_01', 0, 490, 0, 2.5, options);
		if (!second.error) {
		 	second.start();
		} else {
		  console.error(second.error);
		}

		var options = {
	  useEasing: true,
	  useGrouping: true,
	  separator: ',',
	  decimal: '.',
	};
		var third = new CountUp('counter_02', 0, 40, 0, 2.5, options);
		if (!third.error) {
		  third.start();
		} else {
		  console.error(third.error);
		}

  } else {
    // element has gone out of viewport
		//first.reset();
		//second.reset();
		//third.reset();
  }
});


});

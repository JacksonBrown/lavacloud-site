'use strict';

 // Open offsite navigation.
 $('#nav-expander').on('click', function(e) {
    e.preventDefault();
    $('nav').toggleClass('nav-expanded');
});

// Close offsite navigation.
 $('.menu .close').on('click', function(e) {
    e.preventDefault();
    $('nav').toggleClass('nav-expanded');
});

// Close offsite navigation after user click on an link in navigation.
$('.menu  a').on('click', function(e) {
    e.preventDefault();
    $('nav').removeClass('nav-expanded');
});


$("#slideshow > div:gt(0)").hide();

setInterval(function () {
	$("#slideshow > div:first")
		.slideUp(1000)
		.next()
		.fadeIn(1000)
		.end()
		.appendTo("#slideshow");
}, 5000);


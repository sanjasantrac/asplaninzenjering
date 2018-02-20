
$(document).ready(function(){
	
	$('.owl-carousel').owlCarousel({
	    loop:true,
	    nav:true,
	    items:1,
	    navText:['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
	    autoplay:true,
	    autoplayTimeout:2500,
	    animateOut: 'fadeOut'
	});

});
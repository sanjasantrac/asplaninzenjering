$(document).ready(function(){
	var animation = $('.about .image-container img');
	var windowView = $(window);
	windowView.scroll(function(){
		var windowHeight = windowView.height();
		var windowTopPos = windowView.scrollTop();
		var windowBottomPos = (windowTopPos + windowHeight);
		// console.log(windowHeight + " " + windowTopPos + " " + windowBottomPos);

		var elementHeight = animation.outerHeight();
		var elementTopPos = animation.offset().top;
		var elementBottomPos = (elementHeight + elementTopPos);
		// console.log(elementHeight + " " + elementTopPos + " " + elementBottomPos);

		if(elementTopPos + 150 <= windowBottomPos){
			animation.addClass('in-view');
		}
		else {
			animation.removeClass('in-view');
		}
	});
});
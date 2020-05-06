
$(document).ready(function(){
	$(function() {
		$('a.scroll-to-link').bind('click',function(event){
			var $anchor = $(this);
			//alert($anchor.attr('href'));
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 500);
			event.preventDefault();
		});
	});
});
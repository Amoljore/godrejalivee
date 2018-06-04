$(function() {
	$(window).scroll(function() {
		var scroll = $(window).scrollTop();

		if (scroll >= 700) {
			$(".navigation").addClass("fixed-header");
		} else {
			$(".navigation").removeClass("fixed-header");
		}
	});
});

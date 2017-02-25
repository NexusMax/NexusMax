$(window).scroll(function() {

	var st = $(this).scrollTop() / 8;

	$(".header_bg").css({
		"transform" : "translate3d(0px, " + st  + "%, .01px)",
		"-webkit-transform" : "translate3d(0px, " + st  + "%, .01px)"
	});
	
	$(".header_bg").css('opacity', 1 - (st/100));

});

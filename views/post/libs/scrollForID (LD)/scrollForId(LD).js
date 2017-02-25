/*  Скрол с первой ссылки в конец  */
	$("a.scrollto").click(function () {
		elementClick = $(this).attr("href");
		destination = $(elementClick).offset().top;
		$("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 2100);
		return false;
	});
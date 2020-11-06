

// Loader Alanı Js Kodları

$(window).on('load', function () {


	$('.pre').fadeOut('slow', function () {
		$(this).remove();
	});

});


// Yukarı Çık Button Js Kodları

$(function() {
	$("#yukaricik").click(function() {
		$("html,body").stop().animate({ scrollTop: "0" }, 1000);
	});
});
$(window).scroll(function() {
	var uzunluk = $(document).scrollTop();
	if (uzunluk > 500) $("#yukaricik").fadeIn(500);
	else { $("#yukaricik").fadeOut(500); }
});









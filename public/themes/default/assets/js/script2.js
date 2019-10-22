jQuery(function($) {
	$('.pro-img').slick({
		arrows: false,
		swipeToSlide: true,
		asNavFor: '.pro-thumb',
	})
	$('.pro-thumb').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		nextArrow: '<i class="fa fa-angle-right smooth next"></i>',
		prevArrow: '<i class="fa fa-angle-left smooth prev"></i>',
		autoplay: true,
		swipeToSlide: true,
		autoplaySpeed: 5000,
		asNavFor: '.pro-img',
		focusOnSelect: true,
	})


	$('.pro-related').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		nextArrow: '<i class="fa fa-angle-right smooth next"></i>',
		prevArrow: '<i class="fa fa-angle-left smooth prev"></i>',
		autoplay: true,
		swipeToSlide: true,
		autoplaySpeed: 5000,
		asNavFor: '.pro-img',
		focusOnSelect: true,
		responsive: [
		{
			breakpoint: 700,
			settings: {
				centerMode: false,
				slidesToShow: 2,
			}
		},
		],
	})
})
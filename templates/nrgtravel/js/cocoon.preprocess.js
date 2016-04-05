(function($){
	$('header nav.nav > ul.nav, footer nav.ftr-nav ul.nav').removeClass('nav');
	$('header nav.nav > ul > li > a, footer nav.ftr-nav ul > li > a').addClass('scroll-to-link');
	$('header nav.nav > ul > li.active, footer nav.ftr-nav ul > li.active').removeClass('active current');
	var _home_href = $('.not-front header nav.nav > ul > li:first-child > a').attr('href');
	$('.not-front header nav.nav > ul > li:first-child > a, .not-front footer nav.ftr-nav > ul > li:first-child > a').attr('href', _home_href + '#home');
	$('.front header nav.nav > ul > li:first-child > a, .front footer nav.ftr-nav > ul > li:first-child > a').attr('href', '#home');

	$('.not-front header nav.nav > ul > li:not(:first-child), .not-front footer nav.ftr-nav > ul > li:not(:first-child)').each(function(){
		var _href2 = $(this).find('a:not(.no-scroll)').attr('href');
		$(this).find('a:not(.no-scroll)').attr('href', _home_href + _href2);		
	});
	$('#sp-component').removeClass('col-xs-12 col-sm-12 col-md-12 col-lg-12');
	$('.sppb-container').removeClass('sppb-container');
	$('.sppb-row').removeClass('sppb-row');
	$('.sppb-col-sm-12').removeClass('sppb-col-sm-12');
	$('#sp-main-body > .container').removeClass('container');
////
	$('.not-front .r-header').addClass('r-header-active');
	$('.t-banner .swiper-slide .t-banner-content > .banner-info:first-child').addClass('active');
	$('.t-review-section .testimonials-container .testimonials-slider .swiper-wrapper > .swiper-slide:first-child').addClass('default-active');
	$('.t-review-section .testimonials-container .testimonials-block .testimonials-item:first-child').addClass('active');
	$('.hotel-section .tab-wrapper .tab-nav-wrapper').insertBefore('.hotel-section .tab-wrapper .tabs-content');
	$('.hotel-section .tab-wrapper .tab-nav-wrapper .nav-tab > .nav-tab-item:first-child, .hotel-section .tabs-content > .tab-info:first-child').addClass('active');
////
	$('.post p.readmore > a').addClass('read-more').removeClass('btn btn-default').unwrap();
	$('.alert').each(function(){
		$(this).find('.close').click(function(){
			$(this).parent().remove();
		});
	});
}(jQuery));


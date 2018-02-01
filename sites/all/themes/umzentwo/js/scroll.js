jQuery(document).ready(function ($) {

	$(".scroll").click(function (event) {
		event.preventDefault();
		$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 500);
	});

	//scroll-to-top
	var offset = 300,
	offset_opacity = 1,
	scroll_top_duration = 500,
	$back_to_top = $('.backToTopIcon');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible');
	});

});

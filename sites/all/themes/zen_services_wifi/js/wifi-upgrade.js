(function ($) {


//MENU button

$(document).ready(function(){
	$("#block-block-9").click(function(){
		$("#header ul.menu").slideToggle("");
	});
	$(window).resize(function(){
		$("#header ul.menu").removeAttr("style");
	});
});

//end MENU button

//FAQ

$(document).ready(function() {
	$(".field-name-field-a").hide();
	$(".field-name-field-a").width($(".field-name-field-q").width());
	$(".field-name-field-q").click(function() {
		$(this).next(".field-name-field-a").slideToggle();
		$(this).toggleClass("open");
	});
	$("#toggle_all").click(function() {
		var text = $('#toggle_all').text();
		$("#toggle_all").text(
			text == "Show All Answers" ? "Hide All Answers" : "Show All Answers");
		if(text == "Show All Answers") { $(".field-name-field-a").slideDown(); $(".field-name-field-q").addClass("open"); } else { $(".field-name-field-a").slideUp(); $(".field-name-field-q").removeClass("open"); }
	});

});

//end FAQ

//image zoom

$(document).ready(function() {
	$(".imagezoom").fancybox({
		'type'		: 'image',
		'titleShow'     : false,
		'onClosed'	: function() {
			$("#fancy-content").empty();
		}
	});
});
	
//end image zoom

})(jQuery);

function link() {}
(function ($) {

	$('.outerBox').corner('round 5px');
	$('.innerBox').corner('round 4px');
	$('#page-wrapper').corner('round 10px');
	$('#innerFooter').corner("round 4px").parent().css('padding', '1px').corner("round 5px");
	$(".view-featured-news-events .views-row").corner('round 5px');
	$("#navigation").corner('round 5px');
	//$("#developers").corner('round 3px');
	$("#developers a").corner('round 3px');
	$("#block-system-main-menu li").corner('round 3px');
	$("#block-menu-menu-dev-toolkit-main-menu ul li").corner('round 3px');
	$("#block-menu-menu-dev-toolkit-main-menu ul li a").corner('round 3px');
	$("#block-menu-menu-dev-toolkit-main-menu a").corner('round 3px');
	$("#block-menu-menu-dev-toolkit-main-menu").corner('round 3px');
	$(".go-mobile a").corner('round 5px');
	 
	$(".view-id-front_page .views-row").corner('round 5px');
	
	if (navigator.userAgent.indexOf("MSIE") == -1) {
		$(".devtoolkit_front_ul a").corner('round 5px');
	}

	$(".region-sidebar-first .content").corner('round 5px');
	
	
	//$('#leftnav').corner('round 5px');
	$(document).ready(function() {
		//This collapses the FieldGroupings on the Mobile app/website content type display pages,
		//then opens the one that matches the last chunk of the hashtag
		if (window.location.hash) {
			$(".collapsible").toggleClass("collapsed");
			var hash = window.location.hash.split("_");
			var type = hash[6];
			var query = ".group-techinfo-"+type;
			//alert(query);
			$(query).toggleClass("collapsed");
		}
	});
})(jQuery);

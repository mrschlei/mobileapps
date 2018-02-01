(function ($) {
	
	if (navigator.userAgent.indexOf("MSIE") == -1) {
		$('.region-sidebar-second .block').corner('round 4px');
		$('.innerBox').corner('round 5px');
	}

	$('#outerFooter').corner("round 4px");
	$('#innerFooter').corner("round 4px");
	$(".views-row").corner('round 5px');

//collapses the API/Web Services Resources > Inputs/Outputs sections:
	$(document).ready(function() {
		
		if ($(".field-name-field-api-res-response-code .field-items div").html()) {
		var text = $(".field-name-field-api-res-response-code .field-items div").html();
		text = text.replace(/\n/g,"<br />");
		$(".field-name-field-api-res-response-code .field-items div").html(text);
		}


		
		
		//get the names of the inputs
		var inputnames = [];
		var htmls = [];
		$(".field-name-field-api-resources-collection .field-name-field-api-resource").each(function(index) {
			var thistext = $(this).text();
			thistext = $.trim(thistext.replace("Resource:",""));
			//console.log(thistext);
			//create a link for the toggleness
			htmls.push("<a href='javascript:void(0);' class='toggleme'>"+thistext+"</a>");
			$(this).css("display","none");			
		});

		$(".field-name-field-api-resources-collection .field-name-field-api-resource").parent().each(function(index) {
			//inject link before the wrapper div and wrap in another div we can control more directly
			$(this).before(htmls[index]);
			$(this).wrap("<div style='display:none;' class='togglemediv' />");	
		});
		
		$(".toggleme").click(function() {
			$(this).next(".togglemediv").toggle();
			if ($(this).css("background-image") == "url(http://developer.it.umich.edu/sites/all/themes/umzen_apis/images/arrow-rt.png)") {$(this).css("background-image","url(http://developer.it.umich.edu/sites/all/themes/umzen_apis/images/arrow-dn.png) ")}
			else {$(this).css("background-image","url(http://developer.it.umich.edu/sites/all/themes/umzen_apis/images/arrow-rt.png) ")}		
		});
	});
})(jQuery);

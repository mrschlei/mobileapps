<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=false"/>

<link rel="StyleSheet" type="text/css" href="challenge.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>

<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type="text/javascript" src="jquery/fancybox/jquery.fancybox-1.3.0.pack.js"></script>
<link rel="stylesheet" type="text/css" href="jquery/fancybox/jquery.fancybox-1.3.0.css" media="screen" />
<script type="text/javascript">
	$(document).ready(function() {
		$(".modal-video").fancybox({
			'type'		: 'iframe',
			'autoDimensions': false,
			'autoScale'	: false,
			'width'		: 640,
			'height'	: 360,
			'scrolling'	: 'no',
			'titleShow'     : false,
			'onClosed'	: function() {
				$("#fancy-content").empty();
			}
		});
		$(".image-zoom").fancybox({
			'type'		: 'image',
			'autoDimensions': false,
			'autoScale'	: false,
			'titleShow'     : false,
			'onClosed'	: function() {
				$("#fancy-content").empty();
			}
		});
	});

$(document).ready(function(){
	$(".mobilebutton").click(function(){
		$("#pagemenu").slideToggle("");
	});
	$(window).resize(function(){
	//	$("#pagemenu").removeAttr("style");
	});
});

function link() {}

</script>

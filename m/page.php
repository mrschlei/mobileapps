<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN"
    "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<meta http-equiv="Cache-Control" content="no-cache"/>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<title>U-M Mobile Center</title>

<?php include "page-header.php"; ?>
<script>

function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

var nid = getUrlVars()["nid"];


//People can come in from either mobileapps.its OR mobileapps.umich, so to prevent XSS errors, we
//need to match the current URL base for the JSON service.
host = location.protocol + "//" + location.hostname
jsonloc = host+"/?q=mobile_apps_services/node/";


$(document).ready(function() {

$.getJSON(jsonloc+nid+".json",function(data){
	
	var items = [];
	$(".title").text(data.title);


if (data.type == "news_event") {
	$("#news").addClass("active");
	}
	
else {$("#use").addClass("active");}

	
if (typeof data.body != 'undefined') {
	$(".text").append(data.body.und[0].value);
}
	
if (typeof data.field_email_info != 'undefined' && data.field_email_info.und) {
	var text = data.field_email_info.und[0].value;
	$(".text").append("<h2>Email</h2>"+text);
}

if (typeof data.field_connecting_info != 'undefined' && data.field_connecting_info.und) {
	$(".text").append("<h2 class='notfirst'>Connecting</h2>"+data.field_connecting_info.und[0].value);
	}
	
if (typeof data.field_resources_info != 'undefined' && +data.field_resources_info.und) {
	$(".text").append("<h2 class='notfirst'>Resources</h2>"+data.field_resources_info.und[0].value);
}	

if (typeof data.field_security_info != 'undefined' && data.field_security_info.und) {
	$(".text").append("<h2 class='notfirst'>Security</h2>"+data.field_security_info.und[0].value);
}	

//$(markup).insertAfter(".title");

	
	$(".text h2").css({'font-size':'1em','margin':'6px 6px 6px 0px'});
	$(".notfirst").css({"padding-top":"15px","margin-top":"15px","border-top":"2px solid #CCC"});
	$(".text h3").css("font-size","0.9em");

	});
	
$(".loading").css("display","none");

});



// Find all YouTube videos
var $allVideos = $("iframe[src^='www.youtube.com']"),

    // The element that is fluid width
    $fluidEl = $(".video-container").parent();
	//console.log($("iframe").parent().html());

// Figure out and save aspect ratio for each video
$allVideos.each(function() {

  $(this)
    .data('aspectRatio', this.height / this.width)

    // and remove the hard coded width/height
    .removeAttr('height')
    .removeAttr('width');

});


</script>



	<!--[if !IE]><!-->
	<style>
	
	/* 
	Max width before this PARTICULAR table gets nasty
	This query will take effect for any screen smaller than 760px
	and also iPads specifically.
	*/
	@media 
	only screen and (max-width: 760px),
	(min-device-width: 768px) and (max-device-width: 1024px)  {
	
		/* Force table to not be like tables anymore */
		table, thead, tbody, th, td, tr { 
			display: block; 
		}
		
		/* Hide table headers (but not display: none;, for accessibility) */
		thead tr { 
			position: absolute;
			top: -9999px;
			left: -9999px;
		}
		
		tr { border: 1px solid #ccc; }
		
		td { 
			/* Behave  like a "row" */
			border: none;
			border-bottom: 1px solid #eee; 
			position: relative;
			padding-left: 50%; 
		}
		
		td:before { 
			/* Now like a table header */
			position: absolute;
			/* Top/left values mimic padding */
			top: 6px;
			left: 6px;
			width: 45%; 
			padding-right: 10px; 
			white-space: nowrap;
		}
		
		/*
		Label the data
		*/
		td:nth-of-type(1):before { content: "Name"; }
		td:nth-of-type(2):before { content: "App"; }
		td:nth-of-type(3):before { content: "Category"; }
	}
	
	/* Smartphones (portrait and landscape) ----------- */
	@media only screen
	and (min-device-width : 320px)
	and (max-device-width : 480px) {
		body { 
			padding: 0; 
			margin: 0; 
			width: 320px; }
		}
	
	/* iPads (portrait and landscape) ----------- */
	@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
		body { 
			width: 495px; 
		}
	}
	
	</style>
	<!--<![endif]-->

</head>

<body>

<?php include "page-banner.php"; ?>

<div id="menucontainer">
<div class="cat" id="apps"><div><a href="sites.php" class="clean-gray">Sites &amp;<br />Apps</a></div></div>
<div class="cat" id="news"><div><a href="news.php" class="clean-gray">News &amp;<br />Events</a></div></div>
<div class="cat" id="use"><div><a href="use.php" class="clean-gray">Using Your<br />Device</a></div></div>
</div>

<div class="pagecontent">

<h2 class="title"></h2>

<div class="yellowbox text" style="background-color:#fff;"><p class="loading" align="center"><img src="loading.gif" width="90" /></p></div>



<div class="clear"></div><p></p>

<?php include "page-footer.php"; ?>

</div>

</body>
</html>
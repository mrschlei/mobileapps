<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN"
    "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<meta http-equiv="Cache-Control" content="no-cache"/>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<title>U-M Mobile Center</title>

<?php include "page-header.php"; ?>
<script>

//People can come in from either mobileapps.its OR mobileapps.umich, so to prevent XSS errors, we
//need to match the current URL base for the JSON service.
host = location.protocol + "//" + location.hostname
jsonloc = host+"/apps-json";

$(document).ready(function() {

$.getJSON(jsonloc,function(data){
	
	var items = [];
	var markup = "";

	$.each(data, function(key, val) {
		$.each(val, function(key, val) {   
			$.each(val, function(key, val) {
				//console.log(val);

var bodytext = val.field_app_overview.substring(0,150);
bodytext = $.trim(bodytext);
bodytext = bodytext+"...";		

//wirth icon:
//markup = markup+'<div class="button"><a class="icon" href="page.php?nid='+val.nid+'"><img src="ctools-icon.png" alt="'+val.title+'"/></a><a class="description" href="page.php?nid='+val.nid+'"><strong>'+val.title+'</strong><br/>'+bodytext+'</a></div>';	
				
markup = markup+'<div class="button"><a class="icon" href="app.php?nid='+val.nid+'"><img src="'+val.field_app_logo+'" alt="app icon"/></a><a class="description-no-icon" href="app.php?nid='+val.nid+'"><strong>'+val.title+'</strong><br/>'+bodytext+'</a></div>';			
				
			});
		});		
  	});


$(markup).insertAfter(".title");
$(".loading").css("display","none");
	});

});
</script>
</head>

<body>

<?php include "page-banner.php"; ?>

<div id="menucontainer">
<div class="cat active" id="apps"><div><a href="sites.php" class="clean-gray">Sites &amp;<br />Apps</a></div></div>
<div class="cat" id="news"><div><a href="news.php" class="clean-gray">News &amp;<br />Events</a></div></div>
<div class="cat" id="use"><div><a href="use.php" class="clean-gray">Using Your<br />Device</a></div></div>
</div>

<div class="pagecontent">
<!--
<h2>Mobile-friendly Websites</h2>

<div class="button">
<a class="icon" href="http://m.umich.edu/"><img src="um-gateway-icon.png" alt="block M icon"/></a>
<a class="description" href="http://m.umich.edu/"><strong>U-M Gateway</strong><br/>
Access quick links to <span class="nobr">U-M</span> services, news and events and browse <span class="nobr">U-M</span> information.</a>
</div>

<div class="button">
<a class="icon" href="https://ctools.umich.edu/portal/pda/"><img src="ctools-icon.png" alt="ctools icon - speech bubble"/></a>
<a class="description" href="https://ctools.umich.edu/portal/pda/"><strong>Ctools</strong><br/>
Access course and project websites and create your own.</a>
</div>

<div class="button">
<a class="icon" href="http://m.lib.umich.edu"><img src="mlibrary-icon.png" alt="library logo"/></a>
<a class="description" href="http://m.lib.umich.edu"><strong>U-M Library</strong><br/>
Search library catalog and databases. Access library services and information.</a>
</div>

<div class="button">
<a class="icon" href="http://mbus.pts.umich.edu/mobile/"><img src="mbus-icon.png" alt="magic bus icon"/></a>
<a class="description" href="http://mbus.pts.umich.edu/mobile/"><strong>Magic Bus</strong><br/>
Find the closest bus stop, routes, and when the next bus will arrive. Ann Arbor campus only.</a>
</div>

<div class="button">
<a class="icon" href="http://m.careercenter.umich.edu/"><img src="career-center-icon.png" alt="career center logo - block M"/></a>
<a class="description" href="http://m.careercenter.umich.edu/"><strong>Career Center</strong><br/>
Access Career Center blogs, events and information, make appointments and check reference letter status.</a>
</div>

<div class="button">
<a class="icon" href="http://mobileapps.umich.edu/node/59"><img src="travel-registry-icon.png" alt="Travel Registry"/></a>
<a class="description" href="http://mobileapps.umich.edu/node/59"><strong>Travel Registry Trip Summary</strong><br/>
Access information in the Wolverine Access Travel Registry via mobile device.</a>
</div>

<div class="clear"></div>-->

<!--was just
<h2 class="title">Apps</h2>-->


<h2 class="title">Mobile Websites &amp; Apps</h2>



<div class="clear"></div><p></p>

<?php include "page-footer.php"; ?>

</div>

</body>
</html>
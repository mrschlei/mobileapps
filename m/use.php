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
jsonloc = host+"/?q=json-device-info";

$(document).ready(function() {

$.getJSON(jsonloc,function(data){
	
	var items = [];
	var markup = "";

	$.each(data, function(key, val) {
		$.each(val, function(key, val) {   
			$.each(val, function(key, val) {

				
markup = markup+'<div class="button lone"><a class="description-no-icon" href="page.php?nid='+val.nid+'"><strong>'+val.title+'</strong></a></div>';			
				
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
<div class="cat" id="apps"><div><a href="sites.php" class="clean-gray">Sites &amp;<br />Apps</a></div></div>
<div class="cat" id="news"><div><a href="news.php" class="clean-gray">News &amp;<br />Events</a></div></div>
<div class="cat active" id="use"><div><a href="use.php" class="clean-gray">Using Your<br />Device</a></div></div>
</div>


<div class="pagecontent">

<h2 class="title">Using Your Device</h2>


<p class="loading" align="center"><img src="loading.gif" width="90" /></p>


<div class="clear"></div><p></p>

<?php include "page-footer.php"; ?>

</div>

</body>
</html>
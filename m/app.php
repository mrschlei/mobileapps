<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN"
    "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

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


function processThatData(data) {
	var items = [];
	
	$(".title").html("<img src='/sites/default/files/"+data.field_app_logo.und[0].filename+"' class='app-logo' alt='App logo' /> <div style='padding-top:6px;'>"+data.title+"</div><div style='clear:both;'></div>");
	
if (typeof data.field_app_overview != 'undefined' && data.field_app_overview.und) {
	var text = data.field_app_overview.und[0].value;
	$(".text").append(text);
}	  


//Android
if (typeof data.field_features_android != 'undefined' && data.field_features_android.und) {
	
	var markup = "<br /><p><strong>Android Features</p></strong>";
	if (typeof data.field_features_android != 'undefined' && data.field_features_android.und) {
		var andfeatures = data.field_features_android.und[0].value;
		markup = markup + andfeatures;
	}
	if (typeof data.field_reqs_android != 'undefined' && data.field_reqs_android.und) {
		var andreqs = data.field_reqs_android.und[0].value;
		markup = markup + "<p><strong>Requirements:</strong> "+andreqs+"</p>";
	}
	if (typeof data.field_downloadlink_android != 'undefined' && data.field_downloadlink_android.und) {
		var andlinks = data.field_downloadlink_android.und[0].url;	
		markup = markup + "<p><a href='"+andlinks+"'><img src='/sites/all/themes/umzen/images/google-play.png' 'Download via Google Play' border='0' /></a></p>";
	}
	$(".text").append(markup+"<hr>");
}

//iOS
if (typeof data.field_features_ios != 'undefined' && data.field_features_ios.und) {
	
	var markup = "<br /><p><strong>iOS Features</strong></p>";
	if (typeof data.field_features_ios != 'undefined' && data.field_features_ios.und) {
		var iosfeatures = data.field_features_ios.und[0].value;
		markup = markup + iosfeatures;
	}
	if (typeof data.field_reqs_ios != 'undefined' && data.field_reqs_ios.und) {
		var iosreqs = data.field_reqs_ios.und[0].value;
		markup = markup + "<p><strong>Requirements:</strong> "+iosreqs+"</p>";
	}
	if (typeof data.field_downloadlink_ios != 'undefined' && data.field_downloadlink_ios.und) {
		var ioslinks = data.field_downloadlink_ios.und[0].url;	
		markup = markup + "<p><a href='"+ioslinks+"'><img src='/sites/all/themes/umzen/images/itunes_appstore.png' 'Download via the iTunes App Store' border='0' /></a></p>";
	}
	//var markup = iosfeatures+"<p><strong>Requirements:</strong> "+iosreqs+"</p>"+"";
	$(".text").append(markup+"<hr>");
}

//iPad-only
if (typeof data.field_reqs_ipad != 'undefined' && data.field_reqs_ipad.und) {

	var markup = "<br /><p><strong>iPad Features</p></strong>";	
	if (typeof data.field_features_ipad != 'undefined' && data.field_features_ipad.und) {
		var ipadfeatures = data.field_features_ipad.und[0].value;
		markup = markup + ipadfeatures;
	}
	if (typeof data.field_reqs_ipad != 'undefined' && data.field_reqs_ipad.und) {
		var ipadreqs = data.field_reqs_ipad.und[0].value;
		markup = markup + "<p><strong>Requirements:</strong> "+ipadreqs+"</p>";
	}
	if (typeof data.field_downloadlink_ipad != 'undefined' && data.field_downloadlink_ipad.und) {
		var ipadlinks = data.field_downloadlink_ipad.und[0].url;
		markup = markup + "<p><a href='"+ipadlinks+"'><img src='/sites/all/themes/umzen/images/itunes_appstore.png' 'Download via the iTunes App Store' border='0' /></a></p>";
	}
	$(".text").append(markup+"<hr>");
}

//website
if (typeof data.field_reqs_web != 'undefined' && data.field_reqs_web.und) {

	var markup = "<br /><p><strong>Website Features</p></strong>";	
	if (typeof data.field_features_web != 'undefined' && data.field_features_web.und) {
		var webfeatures = data.field_features_web.und[0].value;
		markup = markup + webfeatures;
	}
	if (typeof data.field_reqs_web != 'undefined' && data.field_reqs_web.und) {
		var webreqs = data.field_reqs_web.und[0].value;
		markup = markup + "<p><strong>Requirements:</strong> "+webreqs+"</p>";
	}
	if (typeof data.field_downloadlink_web != 'undefined' && data.field_downloadlink_web.und) {
		var weblinks = data.field_downloadlink_web.und[0].url;
		markup = markup + "<p><a href='"+weblinks+"'><img src='/sites/all/themes/umzen/images/mobile-website.png' 'Link to Mobile Website' border='0' /></a></p>";
	}
	$(".text").append(markup+"<hr>");
}




	$(".text h2").css({'font-size':'1em','margin':'6px 6px 6px 0px'});
	$(".notfirst").css({"padding-top":"15px","margin-top":"15px","border-top":"2px solid #CCC"});
	$(".text h3").css("font-size","0.9em");
}



/////////page load work
$(document).ready(function(){



var nid = getUrlVars()["nid"];

//People can come in from either mobileapps.its OR mobileapps.umich, so to prevent XSS errors, we
//need to match the current URL base for the JSON service.
host = location.protocol + "//" + location.hostname
jsonloc = host+"/?q=mobile_apps_services/node/";

  //url: jsonloc+nid+".json",



$.ajax({
  url: jsonloc+nid+".json",
  dataType: "json",
  success: function(data, textStatus, jqXHR) {
	//console.log("first ajax loop success");

	processThatData(data);
	  
	  },
  error: function(xmlHttpRequest, textStatus, errorThrown) {
	  
		//console.log("first ajax loop failure");

		//start nest
		$.ajax({
 		 url: jsonloc+nid+".json",
  		dataType: "json",
  		success: function(data, textStatus, jqXHR) {
	  		console.log("second ajax loop success");
			//if at first you don't succeed....
			processThatData(data);

	 	},
 		error: function(xmlHttpRequest, textStatus, errorThrown) {
	  		console.log("Data load fail = please contact 4help@umich.edu");
 	 	},

});	

//end nest	  
	  
 	 },
	 complete: function (xhr, status) {$(".loading").css("display","none");}
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

<h2 class="title"></h2>

<div class="yellowbox text" style="background-color:#fff;"><p class="loading" align="center"><img src="loading.gif" width="90" /></p></div>



<div class="clear"></div><p></p>

<?php include "page-footer.php"; ?>

</div>

</body>
</html>
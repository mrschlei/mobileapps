<?php

if($_SERVER["HTTPS"] == "on")
{
    header("Location: http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
?>

<meta name="viewport" content="width=device-width, user-scalable=no"/>
<meta http-equiv="cache-control" content="max-age=200"/>

<link rel="apple-touch-icon" href="apple-touch-icon.png"/>

<link rel="StyleSheet" type="text/css" href="styles.css" media="screen, handheld"/>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.corner.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.corner5').corner('round 5px');
	$('.corner3').corner('round 5px');
	$('.guide').corner('round 10px');
//	$('.icon').corner('round 10px');
//	$('.yellowbox').corner('round 10px');
	$('.headerbox').corner('round top 10px');
	$('#pagecontent ul').corner('round 10px');
});
</script>

<script type="application/x-javascript">
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar() {
	window.scrollTo(0,1);
}
</script>

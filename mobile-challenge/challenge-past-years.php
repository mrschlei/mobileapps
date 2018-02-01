<?

$pastyears = array(
	"challenge-2016.php" => "2016",
	"challenge-2015.php" => "2015",
	"challenge-spring-2014.php" => "2014",
	"challenge-spring-2013.php" => "2013",
	"challenge-fall-2012.php" => "2012",
	"challenge-fall-2011.php" => "Fall 2011",
	"challenge-spring-2011.php" => "Spring 2011",
	"challenge-fall-2010.php" => "Fall 2010",
	"challenge-spring-2010.php" => "Spring 2010"
	);

?>

<div id="pastyearsmenu">

<div id="pastyears">

<ul>

<? foreach($pastyears as $key => $value) { ?>
<li><a <? if(basename($_SERVER['SCRIPT_FILENAME'])==$key) { ?> class="current"<? } ?> href="<? echo $key; ?>"><? echo $value; ?></a></li>
<? } ?>

</div><!--//pastyears-->

<div id="mobilepastyears">

<form>
<select name="challenge-selector" id="challenge-selector" onchange="location.href=this.value">
<option value="">Select a Year</option>
<? foreach($pastyears as $key => $value) { ?>
<option value="<? echo $key; ?>"<? if(basename($_SERVER['SCRIPT_FILENAME'])==$key) { ?> selected="selected"<? } ?>><? echo $value; ?></option>
<? } ?>
</select>
</form>

</div><!--//mobilepastyears-->

</div><!--//pastyearsmenu-->
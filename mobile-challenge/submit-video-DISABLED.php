<?

if(isset($_POST) && $_POST["Form_Identity"]=="" && preg_match("/^http:\/\/(www\.)?mobileapps\.umich\.edu\/mobile-challenge\/(index.php)?$/", $_SERVER["HTTP_REFERER"]) && $_POST["youtube_url"]!="") {
//if(isset($_POST) && $_POST["comments"]!="") {

//echo "<pre>"; print_r($_POST); echo "</pre>";

foreach($_POST as $key => $value) { $$key = $value; }

$subject = "ITS Mobile Challenge Submission";

//$to = "doughb@umich.edu";
$to = "um-mobile-challenge@umich.edu";

$message = "This message was sent through the 2016 Mobile Challenge submission form:

Name: $user_name

Email Address: $user_email

Team Members: $team_members

App Name: $app_name

YouTube URL: $youtube_url

Comments:

$comments


________________________________________
";

$message .= date("m/d/Y H:i:s")."
".$_SERVER["HTTP_REFERER"]."
";

if(preg_match("/^\w+([\._-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $email))
	{
	$from = $user_email;
	}
else	{
	$from = "um-mobile-challenge@umich.edu";
	}

$header = "From:".$from."
Reply-to:".$from;

//echo "<pre>"; echo $header; echo "</pre>";
//echo "<pre>"; echo $message; echo "</pre>";

mail ($to, $subject, $message, $header);

header("location:thank-you.php");

}

else
{

echo "There was an error. Your message was not sent.";

}

?>
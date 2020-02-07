<?php
$web_email = "contact@artfevercbe.com";
$name = $_REQUEST['name'] ;
$number = $_REQUEST['number'] ;
$email = $_REQUEST['mail'] ;
$query = $_REQUEST['query'] ;

function isInjected($str) {
	$injections = array('(\n+)',
	'(\r+)',
	'(\t+)',
	'(%0A+)',
	'(%0D+)',
	'(%08+)',
	'(%09+)'
	);
	$inject = join('|', $injections);
	$inject = "/$inject/i";
	if(preg_match($inject,$str)) {
		return true;
	}
	else {
		return false;
	}
}

mail( "$web_email", "Message from Website","Name:$name | Mobile Number:$number | Requested Service:$query", "From:$email" );
echo "Message Sent!!! Thank you for contacting us." 
?>
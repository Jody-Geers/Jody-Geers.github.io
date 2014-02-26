<?php

/*
*	For what its worth, This will do.
*/

$to = "y2k_geers@hotmail.com";
$subject = "GEERS Request";

$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = "<html><body>";
	$message .= "<h1>name / company</h1>";
	$message .= strip_tags($_POST['name']) . "<br/>";
	$message .= "<h1>email</h1>";
	$message .= strip_tags($_POST['email']) . "<br/>";
	$message .= "<h1>more information</h1>";
	$message .= strip_tags($_POST['info']) . "<br/>";
$message .= "</body></html>";

// do the deed
mail($to, $subject, $message, $headers);

// update UI
header('Location:../../index.html');

?>
<?php
if($_POST["message"]) {
	$myEmail="d.s.pettry@gmail.com";
	$subject="From My Website";
	$sender=$_POST["sender"];
	$senderEmail=$_POST["senderEmail"];
	$message=$_POST["message"];
	$mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

	mail($recipient, $subject, $mailbody, "From <$senderEmail>");
}
?>

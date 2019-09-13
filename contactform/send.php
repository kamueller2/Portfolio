Thanks for your message!


<?php
	
	$userName 		= $_POST['name'];
  $userEmail	 	= $_POST['email'];
  $userSubject  = $_POST['subject'];
	$userMessage 		= $_POST['message'];
	$to 			= "kiki@kikimueller.com";
	$subject 		= "Email from my website";
	$body 			= "Information Submitted:";
	$body .= "\r\n Name: " . $userName;
  $body .= "\r\n Email: " . $userEmail;
  $body .= "\r\n Subject: " . $userSubject;
	$body .= "\r\n Message: " . $userMessage;
	mail($to, $subject, $body);
?>
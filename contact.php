<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$mesagge=$_POST['mesagge'];

$email_from='jonacuko@gmail.com';
$email_subject="New Form Submission";
$email_body= "User name: $name.\n".
               "User email: $visitor_email.\n".
			   "User message: $message.\n";
	
$to="jonacuko13@gmail";
$headers="From: $email_from \r\n";
$headers .="Reply-to: $visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");
<?
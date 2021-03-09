<?php



    $name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	
	
	$email_from = 'SSblogs2@gmail.com';

    $email_subject = "contact Query";
	
	$email_body = "User Name: $name.\n".
	                "User Email: $visitor_email.\n".
					  "User Message: $message.\n".
					  
	$to = "saoirsecovaci@icloud.com";

    $headers = "from: $email_from \r\n";
	
	$headers .= "reply-To: $visitor_email \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	
	header("location: contact.html");
					  
?>
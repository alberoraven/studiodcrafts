<?php

	$name = @trim(stripslashes($_POST['name'])); 
	$email = @trim(stripslashes($_POST['email']));  
	$phone = @trim(stripslashes($_POST['phone']));  
	$message = @trim(stripslashes($_POST['message'])); 
	$headers = 'From: StudioDcrafts';
	//$email_from = $email;
	$email_from = 'studiodcrafts.com';
	$email_to = 'customercare@studiodcrafts.com'; //replace with your email

	$body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Phone: ' . $phone . "\n\n" . 'Message: ' . $message;

	$success = @mail($email_to, 'Customer Feedback..!!' , 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Phone: ' . $phone . "\n\n" . 'Message: ' . $message, $headers);
	
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<script>alert("Thank you for contact us. As early as possible  we will contact you.");</script>
	<meta HTTP-EQUIV="REFRESH" content="0; url=http://www.studiodcrafts.com"> 
</head>
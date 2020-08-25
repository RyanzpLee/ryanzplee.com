<?php

// Destination and email subject
$email_to = "hi@ryanzplee.com";
$email_subject = "Contact form on RyanzpLee Website";

// Form information from HTML
$name = $_POST['name']; // required
$email_from = $_POST['email']; // required
$message = $_POST['message']; // required

// create email headers
$headers = 'From: '.$name."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers) or die("Error!"); 


echo "Thank you for your message!" . " -" . "<a href="index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
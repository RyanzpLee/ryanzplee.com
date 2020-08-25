<?php

// Destination and email subject
$email_to = "hi@ryanzplee.com";
$email_subject = "Contact form on RyanzpLee Website";

// Form information from HTML
$name = $_POST['name']; // required
$email_from = $_POST['email']; // required
$message = $_POST['message']; // required

$email_message = "Form details below.\n\n";

$email_message .= "Name: ".clean_string($name)."\n";
$email_message .= "Email: ".clean_string($email_from)."\n";
$email_message .= "Message: ".clean_string($message)."\n";
$recipient = "hi@ryanzplee.com";    

// create email headers
$headers = 'From: '.$recipient."\r\n".
'Reply-To: '.$recipient."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
header("Location:http://www.ryanzplee.com/");  

echo "Thank you for your message!" . " -" . "<a href="index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
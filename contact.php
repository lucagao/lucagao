<?php

$name = $_POST['name'];
$lastname = $-POST[ 'lastname'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_from = 'gao20@hotmail.it';

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
"User lastname: $lastname.\n".
"User Email: $visitor_email.\n".
"User Message: $message.\n";


$to = "Lucagao11@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply To: $visitor_email \r\n";

mail($to,email_subject,$email_body,$headers);

header("Location: Portfolio.html");

?>
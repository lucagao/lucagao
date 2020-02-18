<?php

if (!isset($_POST['submit'])) {
  echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['mail'];
$message = $_POST['message'];

if(empty($name)||empty($visitor_email))
{
  echo"Name and email are mandatory!";
  exit;
}

$email_from ="gao20@hotmail.it";
$email_subject ="New form submission";
$email_body ="You have receveid a new message from the user $name. \n".
              "email address: $visitor_email\n".
              "Here is the message: $message\n".

$to = "gao20@hotmail.it";
$headers = "From: $email_from \r\n";

mail($to, $mail_subject, $email_body, $headers);

?>

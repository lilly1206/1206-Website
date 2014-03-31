<?php
$to = "hello@twelveohsixcreative.com";
$email = $_REQUEST['email'] ;
$name = $_REQUEST['name'] ;
$phone = $_REQUEST['phone'] ;
$subject = "Message from: $name";
$message = $_REQUEST['message'] ;
$headers = "From: $email";
$body = "From: $name \n\n Email: $email \n\n Phone number: $phone \n\n Message: $message";
$sent = mail($to, $subject, $body, $headers);
?>
